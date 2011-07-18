<?php

/**
 * Initialization file for the ArrayExtension extension.
 *
 * Documentation:	 		http://www.mediawiki.org/wiki/Extension:ArrayExtension
 * Support					http://www.mediawiki.org/wiki/Extension_talk:ArrayExtension
 * Source code:             http://svn.wikimedia.org/viewvc/mediawiki/trunk/extensions/ArrayExtension
 *
 * @file ArrayExtension.php
 * @ingroup ArrayExtension
 *
 * @licence MIT License
 *
 * @author Li Ding (lidingpku@gmail.com)
 * @author Jie Bao
 * @author Daniel Werner (since version 1.3)
 */

/**
 * This documenation group collects source code files belonging to ArrayExtension.
 *
 * @defgroup ArrayExtension ArrayExtension
 */

/* TODO:
    - add experimental table (2 dimension array)  data structure
       * table  = header, row+  (1,1....)
       * sort_table_by_header (header)
       * sort_table_by_col (col)
       * print_table (format)   e.g. csv, ul, ol,
       * add_table_row (array)
       * get_table_row (row) to an array
       * add_table_col(array)
       * get_table_col (col) to an array
       * get_table_header () to an array
       * get_total_row
       * get_total_col
*/

if ( ! defined( 'MEDIAWIKI' ) ) {
    die( 'This file is a MediaWiki extension, it is not a valid entry point' );
}

$wgHooks['ParserFirstCallInit'][] = 'efArrayExtensionParserFirstCallInit';

$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'ArrayExtension',
	'url' => 'http://www.mediawiki.org/wiki/Extension:ArrayExtension',
	'author' => array ( 'Li Ding', 'Jie Bao', 'Daniel Werner' ),
	'descriptionmsg' => 'arrayext-desc',
	'version' => ArrayExtension::VERSION
);

$dir = dirname( __FILE__ );

$wgExtensionMessagesFiles['ArrayExtension'] = $dir . '/ArrayExtension.i18n.php';
$wgExtensionMessagesFiles['ArrayExtensionMagic'] = $dir . '/ArrayExtension.i18n.magic.php';

/**
 *  named arrays - an array has a list of values, and could be set to a SET
 */
class ArrayExtension {

	const VERSION = '1.3.4 alpha';

    var $mArrayExtension = array();

	function ArrayExtension() {
		global $wgHooks;
		$wgHooks['ParserClearState'][] = &$this;
	}

	function onParserClearState( &$parser ) {
		$this->mArrayExtension = array();	// remove all arrays to avoid conflicts with job queue or Special:Import or SMW semantic updates
		return true;
	}

	////////////////////////////////////////////////////////// /
	// PART 1. constructor
	////////////////////////////////////////////////////////// /

	/**
	* Define an array by a list of 'values' deliminated by 'delimiter',
	* the delimiter should be perl regular expression pattern
	* usage:
	*      {{#arraydefine:arrayid|values|delimiter|options}}
	*
	* http://us2.php.net/manual/en/book.pcre.php
	* see also: http://us2.php.net/manual/en/function.preg-split.php
	*/
    function arraydefine( &$parser, $arrayid, $value = '', $delimiter = '/\s*,\s*/', $options = '', $delimiter2 = ', ', $search = '@@@@', $subject = '@@@@', $frame = null ) {
        if ( !isset( $arrayid ) ) {
        	return '';
        }

        // normalize
        $value = trim( $value );
        $delimiter = trim( $delimiter );

        if ( !$this->is_non_empty( $value ) ) {
            $this->mArrayExtension[$arrayid] = array();
        } elseif ( !$this->is_non_empty( $delimiter ) ) {
            $this->mArrayExtension[$arrayid] = array( $value );
        } else {
            if ( !$this->isValidRegEx( $delimiter ) ) {
            	$delimiter = '/\s*' . preg_quote( $delimiter, '/' ) . '\s*/'; // Anpassung von Daniel Werner (preg_quote)
            }

            $this->mArrayExtension[$arrayid] = preg_split( $delimiter, $value );

            // validate if the array has been successfully created
            $ret = $this->validate_array_by_arrayid( $arrayid );
            if ( $ret !== true ) {
               return '';
            }

            // now parse the options, and do posterior process on the created array
            $ary_option = $this->parse_options( $options );

            if ( !array_key_exists( 'empty', $ary_option ) ) {
				foreach ( $this->mArrayExtension[$arrayid] as $key => $value ) {
            		if ( trim( $value ) == '' ) {
            			unset( $this->mArrayExtension[$arrayid][$key] );
            		}
            	}
            }

            // make it unique if option is set
            if ( array_key_exists( 'unique', $ary_option ) ) {
				$this->arrayunique( $parser, $arrayid );
            }

            // sort array if the option is set
            $this->arraysort( $parser, $arrayid, $this->get_array_value( $ary_option, 'sort' ) );

			// print the array upon request
			if ( strcmp( 'list', $this->get_array_value( $ary_option, 'print' ) ) === 0 ) {
				return $this->arrayprint( $parser, $arrayid );
			}
			elseif ( strcmp( 'full', $this->get_array_value( $ary_option, 'print' ) ) === 0 ) {
				return $this->arrayprint( $parser, $arrayid,  $delimiter2, $search, $subject, $frame );
			}
		}

		return '';
    }


	////////////////////////////////////////////////////////// /
	// PART 2. print
	////////////////////////////////////////////////////////// /


	/**
	* print an array.
	* foreach element of the array, print 'subject' where  all occurrences of 'search' is replaced with the element,
	* and each element print-out is deliminated by 'delimiter'
	* The subject can embed parser functions; wiki links; and templates.
	* usage:
	*      {{#arrayprint:arrayid|delimiter|search|subject}}
	* examples:
	*    {{#arrayprint:b}}    -- simple
	*    {{#arrayprint:b|<br/>}}    -- add change line
	*    {{#arrayprint:b|<br/>|@@@|[[@@@]]}}    -- embed wiki links
	*    {{#arrayprint:b|<br/>|@@@|{{#set:prop=@@@}} }}   -- embed parser function
	*    {{#arrayprint:b|<br/>|@@@|{{f.tag{{f.print.vbar}}prop{{f.print.vbar}}@@@}} }}   -- embed template function
	*    {{#arrayprint:b|<br/>|@@@|[[name::@@@]]}}   -- make SMW links
	*/
    function arrayprint( &$parser, $arrayid , $delimiter = ', ', $search = '@@@@', $subject = '@@@@', $frame = null ) {
        $ret = $this->validate_array_by_arrayid( $arrayid );
        if ( $ret !== true ) {
           return $ret;
        }

        $values = $this->mArrayExtension[$arrayid];
        $rendered_values = array();
        foreach ( $values as $v ) {
                $temp_result_value  = str_replace( $search, $v, $subject );
                if ( isset( $frame ) ) {
                        $temp_result_value = $parser->preprocessToDom( $temp_result_value, $frame->isTemplate() ? Parser::PTD_FOR_INCLUSION : 0 );
                        $temp_result_value = trim( $frame->expand( $temp_result_value ) );
                }
                $rendered_values[] = $temp_result_value ;
        }
        return array( implode( $delimiter, $rendered_values ) , 'noparse' => false, 'isHTML' => false );
    }

    function arrayprintObj(  &$parser, $frame, $args ) {
        // Set variables
        $arrayid = isset( $args[0] ) ? trim( $frame->expand( $args[0] ) ) : '';
        $delimiter = isset( $args[1] ) ? trim( $frame->expand( $args[1] ) ) : ', ';
        $search = isset( $args[2] ) ? trim( $frame->expand( $args[2], PPFrame::NO_ARGS | PPFrame::NO_TEMPLATES ) ) : '@@@@';
        $subject = isset( $args[3] ) ? trim( $frame->expand( $args[3], PPFrame::NO_ARGS | PPFrame::NO_TEMPLATES ) ) : '@@@@';

        return $this->arrayprint( $parser, $arrayid, $delimiter, $search, $subject, $frame );
    }


	/**
	* print the value of an array (identified by arrayid)  by the index, invalid index results in the default value  being printed. note the index is 0-based.
	* usage:
	*   {{#arrayindex:arrayid|index}}
	*/
    function arrayindex( &$parser, $arrayid , $index , $options = '' ) {
        // now parse the options, and do posterior process on the created array
        $ary_option = $this->parse_options( $options );

        $ret = $this->validate_array_by_arrayid( $arrayid );
        if ( $ret !== true ) {
            return $this->get_array_value( $ary_option, "default" );
        }

        $ret = $this->validate_array_index( $index, $this->mArrayExtension[$arrayid] );
        if ( $ret !== true ) {
            return $this->get_array_value( $ary_option, "default" );
        }

        return $this->mArrayExtension[$arrayid][$index];
    }

	/**
	* return size of array.
	* Print the size (number of elements) in the specified array
	* usage:
	*   {{#arraysize:arrayid}}
	*
	*   See: http://www.php.net/manual/en/function.count.php
	*/
    function arraysize( &$parser, $arrayid ) {
        $ret = $this->validate_array_by_arrayid( $arrayid );
        if ( $ret !== true ) {
           return '';
        }

        return count ( $this->mArrayExtension[$arrayid] );
    }





	/**
	* locate the index of the first occurence of an element starting from the 'index'
	*    - print "-1" (not found) or index (found) to show the index of the first occurence of 'value' in the array identified by arrayid
	*    - if 'yes' and 'no' are set, print value of them when found or not-found
	*    - index is 0-based , it must be non-negative and less than lenth
	* usage:
	*   {{#arraysearch:arrayid|value|index|yes|no}}
	*
	*   See: http://www.php.net/manual/en/function.array-search.php
	*   note it is extended to support regular expression match and index
	*/
    function arraysearch( &$parser, $arrayid, $needle = '/^\s*$/', $index = 0, $yes = null, $no = '-1' ) {
        $ret = $this->validate_array_by_arrayid( $arrayid );
        if ( $ret !== true )
            return $no;

        $ret = $this->validate_array_index( $index, $this->mArrayExtension[$arrayid] );
        if ( !$ret )
            return $no;

        if ( !$this->isValidRegEx( $needle ) )
			$needle = '/^\s*' . preg_quote( $needle, '/' ) . '\s*$/';

		// search for a match inside the array:
        for ( $i = $index; $i < count( $this->mArrayExtension[$arrayid] ); $i++ ) {
			$value = $this->mArrayExtension[$arrayid][$i];

			if ( preg_match( $needle, $value ) ) {
				if ( isset( $yes ) )
					return $yes;
				else
					return $i;
			}
        }

		// no match:
        return $no;
    }

	/**
	* search an array and create a new array with all the results. Transforming the new entries before storing them is possible too.
	* usage:
	*   {{#arraysearcharray:arrayid_new|arrayid|needle|index|limit|transform}}
	*
	* "needle" can be a regular expression or a string search value. If "needle" is a regular expression, "transform" kan contain
	* "$n" where "n" stands for a number to access a variable from the regex result.
	*/
	function arraysearcharray( &$parser, $arrayid_new, $arrayid, $needle = '/^(\s*)$/', $index = 0, $limit = -1, $transform = '' ) {
        $ret = $this->validate_array_by_arrayid( $arrayid );
        if ( !$ret )
			return '';

		if ( !isset( $arrayid_new ) )
			return '';

		if ( !is_numeric( $index ) )
			$index = 0;

		if ( !is_numeric( $limit ) )
			$limit = -1;

		// calculate start index for negative start indexes:
		if ( $index < 0 ) {
			$index = count( $this->mArrayExtension[$arrayid] ) + $index;
			if ( $index < 0 ) $index = 0;
		}

		$newArr = array();
		$newArrSize = 0;

        if ( !$this->isValidRegEx( $needle ) )
			$needle = '/^\s*(' . preg_quote( $needle, '/' ) . ')\s*$/';

		// search the array for all matches and put them in the new array
        for ( $i = $index; $i < count( $this->mArrayExtension[$arrayid] ); $i++ )
		{
			$value = $this->mArrayExtension[$arrayid][$i];

			if ( preg_match( $needle, $value ) ) {
				if ( $transform != '' ) {
					$value = preg_replace( $needle, $transform, $value );
				}
				$newArr[] = $value;
				$newArrSize++;
				// stop if limit is reached
				if ( $newArrSize == $limit )
					break;
			}
        }

		$this->mArrayExtension[$arrayid_new] = $newArr;
		return '';
	}



	////////////////////////////////////////////////////////// /
	// PART 3. alter an array
	////////////////////////////////////////////////////////// /

	/**
	* reset some or all defined arrayes
	* usage:
	*    {{#arrayreset:}}
	*    {{#arrayreset:arrayid1,arrayid2,...arrayidn}}
	*/
	function arrayreset( &$parser, $arrayids ) {
        if ( !$this->is_non_empty( $arrayids ) ) {
            // reset all
            $this->mArrayExtension = array();
        } else {
            $arykeys = explode( ',', $arrayids );
            foreach ( $arykeys as $arrayid ) {
				$this->removeArray( $arrayids );
            }
        }
        return '';
    }


	/**
	* convert an array to set
	* convert the array identified by arrayid into a set (all elements are unique)
	* usage:
	*   {{#arrayunique:arrayid}}
	*
	*   see: http://www.php.net/manual/en/function.array-unique.php
	*/
    function arrayunique( &$parser, $arrayid ) {
        $ret = $this->validate_array_by_arrayid( $arrayid );
        if ( $ret !== true ) {
           return '';
        }

		$this->mArrayExtension[$arrayid] = array_unique ( $this->mArrayExtension[$arrayid] );
		$values = array();
		foreach ( $this->mArrayExtension[$arrayid] as $v ) {
			// if (!isset($v))
					if ( strlen( $v ) > 0 )
							$values[] = $v;
		}
		$this->mArrayExtension[$arrayid] = $values;
    }


	/**
	* sort specified array in the following order:
	*    - none:    No sort (default)
	*    - desc:    In descending order, large to small
	*    - asce:    In ascending order, small to large
	*    - random:  Shuffle the arrry in random order
	*    - reverse: Return an array with elements in reverse order
	* usage:
	*   {{#arraysort:arrayid|order}}
	*
	*   see: http://www.php.net/manual/en/function.sort.php
	*        http://www.php.net/manual/en/function.rsort.php
	*        http://www.php.net/manual/en/function.shuffle.php
	*        http://us3.php.net/manual/en/function.array-reverse.php
	*/
    function arraysort( &$parser, $arrayid , $sort = 'none' ) {
        $ret = $this->validate_array_by_arrayid( $arrayid );
        if ( $ret !== true ) {
           return '';
        }


        switch ( $sort ) {
                case 'asc':
                case 'asce':
                case 'ascending': sort( $this->mArrayExtension[$arrayid] ); break;


                case 'desc':
                case 'descending': rsort( $this->mArrayExtension[$arrayid] ); break;

                case 'random': shuffle( $this->mArrayExtension[$arrayid] ); break;


                case 'reverse': $this->mArrayExtension[$arrayid] = array_reverse( $this->mArrayExtension[$arrayid] ); break;
            } ;
    }


	////////////////////////////////////////////////////////// /
	// PART 4. create an array
	////////////////////////////////////////////////////////// /

	/**
	* merge two arrays, keep duplicated values
	* usage:
	*   {{#arraymerge:arrayid_new|arrayid1|arrayid2}}
	*
	*  merge values two arrayes identified by arrayid1 and arrayid2 into a new array identified by arrayid_new.
	*  this merge differs from array_merge of php because it merges values.
	*/
    function arraymerge( &$parser, $arrayid_new, $arrayid1, $arrayid2 = '' ) {
        if ( !isset( $arrayid_new ) )
           return '';

        $ret = $this->validate_array_by_arrayid( $arrayid1 );
        if ( $ret !== true ) {
           return '';
        }

        $temp_array = array();
        foreach ( $this->mArrayExtension[$arrayid1] as $entry ) {
           array_push ( $temp_array, $entry );
        }

        if ( isset( $arrayid2 ) && strlen( $arrayid2 ) > 0 ) {
                $ret = $this->validate_array_by_arrayid( $arrayid2 );
                if ( $ret === true ) {
                        foreach ( $this->mArrayExtension[$arrayid2] as $entry ) {
                           array_push ( $temp_array, $entry );
                        }
                }
        }

        $this->mArrayExtension[$arrayid_new] = $temp_array;
        return '';
    }

	/**
	* extract a slice from an array
	* usage:
	*     {{#arrayslice:arrayid_new|arrayid|offset|length}}
	*
	*    extract a slice from an  array
	*    see: http://www.php.net/manual/en/function.array-slice.php
	*/
    function arrayslice( &$parser, $arrayid_new , $arrayid , $offset, $length = '' ) {
        if ( !isset( $arrayid_new ) )
           return '';

        $ret = $this->validate_array_by_arrayid( $arrayid );
        if ( $ret !== true ) {
           return '';
        }

        // $ret = $this->validate_array_offset($offset, $this->mArrayExtension[$arrayid]);
        // if ($ret !== true){
         //  return '';
        // }

        $temp_array = array();
        if ( is_numeric( $offset ) ) {
                if ( $this->is_non_empty( $length ) &&  is_numeric( $length ) ) {
                        $temp = array_slice( $this->mArrayExtension[$arrayid], $offset, $length );
                } else {
                        $temp = array_slice( $this->mArrayExtension[$arrayid], $offset );
                }

                if ( !empty( $temp ) && is_array( $temp ) )
                        $temp_array = array_values( $temp );
        }
        $this->mArrayExtension[$arrayid_new] = $temp_array;
        return '';
    }

	/**
	* set operation, {red, white} = {red, white} union {red}
	* usage:
	*    {{#arrayunion:arrayid_new|arrayid1|arrayid2}}

	*    similar to arraymerge, this union works on values.
	*/
    function arrayunion( &$parser, $arrayid_new , $arrayid1 , $arrayid2 ) {
        if ( !isset( $arrayid_new ) )
           return '';


        $ret = $this->validate_array_by_arrayid( $arrayid1 );
        if ( $ret !== true ) {
           return '';
        }

        $ret = $this->validate_array_by_arrayid( $arrayid2 );
        if ( $ret !== true ) {
           return '';
        }

        $this->arraymerge( $parser, $arrayid_new, $arrayid1, $arrayid2 );
        $this->mArrayExtension[$arrayid_new] = array_unique ( $this->mArrayExtension[$arrayid_new] );

        return '';
    }

	///////////////////////////////////////////////// /
	// SET OPERATIONS: a set does not have duplicated element

	/**
	* set operation,    {red} = {red, white} intersect {red,black}
	* usage:
	*    {{#arrayintersect:arrayid_new|arrayid1|arrayid2}}
	*   See: http://www.php.net/manual/en/function.array-intersect.php
	*/
    function arrayintersect( &$parser, $arrayid_new , $arrayid1 , $arrayid2 ) {
        if ( !isset( $arrayid_new ) )
           return '';

        $ret = $this->validate_array_by_arrayid( $arrayid1 );
        if ( $ret !== true ) {
           return '';
        }

        $ret = $this->validate_array_by_arrayid( $arrayid2 );
        if ( $ret !== true ) {
           return '';
        }

		// keys will be preserved...
        $newArray = array_intersect( array_unique( $this->mArrayExtension[$arrayid1] ), array_unique( $this->mArrayExtension[$arrayid2] ) );

		// ...so we have to reorganize the key order
		$this->mArrayExtension[$arrayid_new] = $this->reorganizeArrayKeys( $newArray );

        return '';
    }

	/**
	*
	* usage:
	*    {{#arraydiff:arrayid_new|arrayid1|arrayid2}}

	*    set operation,    {white} = {red, white}  -  {red}
	*    see: http://www.php.net/manual/en/function.array-diff.php
	*/
    function arraydiff( &$parser, $arrayid_new , $arrayid1 , $arrayid2 ) {
        if ( !isset( $arrayid_new ) )
           return '';

        $ret = $this->validate_array_by_arrayid( $arrayid1 );
        if ( $ret !== true ) {
           return '';
        }

        $ret = $this->validate_array_by_arrayid( $arrayid2 );
        if ( $ret !== true ) {
           return '';
        }

		// keys will be preserved...
        $newArray = array_diff( array_unique( $this->mArrayExtension[$arrayid1] ), array_unique( $this->mArrayExtension[$arrayid2] ) );

		// ...so we have to reorganize the key order
		$this->mArrayExtension[$arrayid_new] = $this->reorganizeArrayKeys( $newArray );

        return '';
    }



	///////////////////////////////////////////////// /
	// private functions
	///////////////////////////////////////////////// /

	function is_non_empty( $var ) {
		return isset( $var ) && strlen( $var ) > 0;
	}

    // private functions for validating the index of an array
    function validate_array_index( $index, $array ) {
        if ( !isset( $index ) )
                return false;

        if ( !is_numeric( $index ) )
                return false;

        if ( !isset( $array ) || !is_array( $array ) )
                return false;

        if ( !array_key_exists( $index, $array ) ) /*($index<0 || $index>=count($array))*/
                return false;

        return true;
    }

    // private functions for validating the index of an array
    function validate_array_offset( $offset, $array ) {
        if ( !isset( $offset ) )
                return false;


        if ( !is_numeric( $offset ) )
                return false;


        if ( !isset( $array ) || !is_array( $array ) )
                return false;

        if ( $offset >= count( $array ) )
                return false;

        return true;
    }

    // private function for validating array by name
    function validate_array_by_arrayid( $array_name ) {
        if ( !isset( $array_name ) )
           return '';

        if ( !isset( $this->mArrayExtension ) )
           return "undefined array: $array_name";

        if ( !array_key_exists( $array_name, $this->mArrayExtension ) || !is_array( $this->mArrayExtension[$array_name] ) )
           return "undefined array: $array_name";

        return true;
    }

    function get_array_value( $array, $field ) {
            if ( is_array( $array ) && FALSE !== array_key_exists( $field, $array ) )
                return $array[$field];
            else
                return '';
    }

    function parse_options( $options ) {
        if ( isset( $options ) ) {
            // now parse the options, and do posterior process on the created array
            $ary_option = preg_split ( '/\s*[,]\s*/', strtolower( $options ) );
        }

        $ret = array();
        if ( isset( $ary_option ) && is_array( $ary_option ) && sizeof( $ary_option ) > 0 ) {
                foreach ( $ary_option as $option ) {
                        $ary_pair = explode( '=', $option, 2 );
                        if ( sizeof( $ary_pair ) == 1 ) {
                                $ret[$ary_pair[0]] = true;
                        } else {
                                $ret[$ary_pair[0]] = $ary_pair[1];
                        }
                }
        }
        return $ret;
    }

	/* ============================ */
	/* ============================ */
	/* ===                      === */
	/* ===   HELPER FUNCTIONS   === */
	/* ===                      === */
	/* ============================ */
	/* ============================ */

    function getArrayValue( $arrayId = '', $key = '' ) {
		$arrayId = trim( $arrayId );
		if ( $this->arrayExists( $arrayId ) && array_key_exists( $key, $this->mArrayExtension[ $arrayId ] ) )
			return $this->mArrayExtension[ $arrayId ][ $key ];
		else
			return '';
    }

	// return an array identified by $arrayId. If it doesn't exist this will return null.
    function getArray( $arrayId = '' ) {
		if ( $this->arrayExists( $arrayId ) )
			return $this->mArrayExtension[ $arrayId ];
		else
			return null;
    }

	function arrayExists( $arrayId = '' ) {
		if ( array_key_exists( trim( $arrayId ), $this->mArrayExtension ) )



			return true;
		else
			return false;
	}

	// add a new array or overwrite existing one. Values delivered as real array.
	function createArray( $arrayId = '', $arr = array() ) {
		$arr = $this->reorganizeArrayKeys( $arr );
		$this->mArrayExtension[ trim( $arrayId ) ] = $arr;
	}


	// remove an existing array. If array doesn't exist this will return false, otherwise true.
	function removeArray( $arrayId = '' ) {
		$arrayId = trim( $arrayId );
		if ( $this->arrayExists( $arrayId ) ) {
			unset( $this->mArrayExtension[ $arrayId ] );
			return true;
		} else {
			return false;
		}


	}

	// Rebuild the array and reorganize all keys. This means all gaps between array items will be closed.
	function reorganizeArrayKeys( $arr = array() ) {
		$newArray = array();
		foreach ( $arr as $val ) {
			$newArray[] = trim( $val );
		}
		return $newArray;
	}

	// Decide for the given $pattern if its a valid regular expression or not
	function isValidRegEx( $pattern ) {
		return preg_match( '/^([\\/\\|%]).*\\1[imsSuUx]*$/', $pattern );
	}
}

function efArrayExtensionParserFirstCallInit( $parser ) {
    global $wgArrayExtension;

    $wgArrayExtension = new ArrayExtension;
    $parser->setFunctionHook( 'arraydefine', array( &$wgArrayExtension, 'arraydefine' ) );

    if ( defined( get_class( $parser ) . '::SFH_OBJECT_ARGS' ) ) {
        $parser->setFunctionHook( 'arrayprint',  array( &$wgArrayExtension, 'arrayprintObj' ), SFH_OBJECT_ARGS );
    } else {
        $parser->setFunctionHook( 'arrayprint', array( &$wgArrayExtension, 'arrayprint' ) );
    }

    $parser->setFunctionHook( 'arraysize',        array( &$wgArrayExtension, 'arraysize' ) );
    $parser->setFunctionHook( 'arrayindex',       array( &$wgArrayExtension, 'arrayindex' ) );
    $parser->setFunctionHook( 'arraysearch',      array( &$wgArrayExtension, 'arraysearch' ) );

    $parser->setFunctionHook( 'arraysort',        array( &$wgArrayExtension, 'arraysort' ) );
    $parser->setFunctionHook( 'arrayunique',      array( &$wgArrayExtension, 'arrayunique' ) );
    $parser->setFunctionHook( 'arrayreset',       array( &$wgArrayExtension, 'arrayreset' ) );

    $parser->setFunctionHook( 'arraymerge',       array( &$wgArrayExtension, 'arraymerge' ) );
    $parser->setFunctionHook( 'arrayslice',       array( &$wgArrayExtension, 'arrayslice' ) );

    $parser->setFunctionHook( 'arrayunion',       array( &$wgArrayExtension, 'arrayunion' ) );
    $parser->setFunctionHook( 'arrayintersect',   array( &$wgArrayExtension, 'arrayintersect' ) );
    $parser->setFunctionHook( 'arraydiff',        array( &$wgArrayExtension, 'arraydiff' ) );
    $parser->setFunctionHook( 'arraysearcharray', array( &$wgArrayExtension, 'arraysearcharray' ) );

	return true;
}
