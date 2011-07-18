<?php

/**
 * SlimboxThumbs extension, see http://www.mediawiki.org/wiki/Extension:SlimboxThumbs
 * 
 * This extension includes a copy of Slimbox. You can however get your own copy at
 * http://www.digitalia.be/software/slimbox2
 * and use it by replacing the included one, or pointing to it with $slimboxThumbsFilesDir
 *
 * @license Creative Commons Attribution-ShareAlike license 3.0: http://creativecommons.org/licenses/by-sa/3.0/
 *
 * @file SlimboxThumbs.php
 *
 * @author David Raison
 * @author Jeroen De Dauw
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

define( 'SlimboxThumbs_VERSION', '0.2' );

// Register the extension credits.
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'SlimboxThumbs',
	'url' => 'http://www.mediawiki.org/wiki/Extension:SlimboxThumbs',
	'author' => array(
		'[http://david.raison.lu Kwisatz]',
		'[http://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw].' .
		' Inspired by [http://www.mediawiki.org/wiki/User:Alxndr Alexander]',
	),
	'descriptionmsg' => 'slimboxthumbs-desc',
	'version' => SlimboxThumbs_VERSION
);

$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['SlimboxThumbs'] = $dir . 'SlimboxThumbs.i18n.php';

// Include the settings file.
require_once 'SlimboxThumbs_Settings.php';

/**
 * Other potential hooks would be http://www.mediawiki.org/wiki/Manual:Hooks/ImageOpenShowImageInlineBefore
 * or http://www.mediawiki.org/wiki/Manual:Hooks/ImageBeforeProduceHTML
 * or http://www.mediawiki.org/wiki/Manual:Hooks/BeforeGalleryFindFile
 * or http://www.mediawiki.org/wiki/Manual:Hooks/BeforeParserrenderImageGallery
 * but they would be called for each image, making the wiki even slower
 */
if ( $slimboxThumbsFilesDir ) {
    $wgHooks['BeforeParserrenderImageGallery'][] = 'efSBTTestForGallery'; // this seems to fail on some pages :(
    $hasGallery = true; // temporary fix
    $wgHooks['BeforePageDisplay'][] = 'efSBTAddScripts';
    $wgHooks['BeforePageDisplay'][] = 'efSBTAddSlimboxCode';
}

function efSBTTestForGallery( $parser, $gallery ) {
        global $hasGallery;
        $hasGallery = $gallery instanceof ImageGallery;
        return true;
}

/**
 * Add javascript files and stylesheets.
 * Also add inline js that regulates the image width.
 */
function efSBTAddScripts( $out ) {
        global $hasGallery, $wgVersion, $wgExtensionAssetsPath;
	$eDir = $wgExtensionAssetsPath .'/SlimboxThumbs/slimbox';
        
        // We don't want to load jQuery if there's no gallery here.
        //if ( !$hasGallery ) return false;

	// 1.17 will require another setup 
	// (http://www.mediawiki.org/wiki/JQuery & http://www.mediawiki.org/wiki/ResourceLoader/Default_modules)
	if ( substr($wgVersion,0,-2) < 1.16 ) {
		$jQ = '$';
		$out->addScript( '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>' . "\n" );
	} else  {
		$jQ = '$j';
		$out->includeJQuery(); // includes jquery.min.js
	}
        $out->addScript( '<script type="text/javascript" src="'. $eDir .'/js/slimbox2.js"></script>' . "\n" );
        $out->addExtensionStyle( $eDir . '/css/slimbox2.css', 'screen' );

        // use thumb.php to resize pictures if browser window is smaller than the picture itself
        $out->addInlineScript( $jQ.'(document).ready(function(){
                if('.$jQ.'("table.gallery").val() != undefined){
                        var boxWidth = ('.$jQ.'(window).width() - 20);
                        var rxp = new RegExp(/([0-9]{2,})$/);
                        '.$jQ.'("a[rel=\'lightbox[gallery]\']").each(function(el){
                                if(boxWidth < Number(this.search.match(rxp)[0])){
                                        this.href = this.pathname+this.search.replace(rxp,boxWidth);
                                }
                        });
                }
        })' );
        
        return true;
}

function efSBTDebugVar( $varName, $var ) {
    return "\n\n<!--\n$varName: " . str_replace( '--', '__', print_r( $var, true ) ) . "\n-->\n\n";
}

/** 
 * This is a callback function that gets called by efBeforePageDisplay().
 */
function efRewriteThumbImage( $matches ) {
	global $wgOut, $slimboxThumbsDebug;
    
	if ( $slimboxThumbsDebug ) { global $wgContLang; }
    
	$titleObj = Title::newFromText( rawurldecode( 'File:'.$matches[2] ) );
	$image = wfFindFile( $titleObj, false, false, true ); # # wfFindFile($titleObj,false,false,true) to bypass cache
	$output =  $matches[1]	// <a (not much else)
                . 'href="' . $image->getURL() . '" class="image" rel="lightbox" title="'
                . htmlspecialchars( $wgOut->parse( "'''[[:" . $titleObj->getFullText() . "|" . $titleObj->getText() . "]]:''' " ) )
                . '">'. $matches[3] . '</a>' //$matches[4]
                . ( $slimboxThumbsDebug ? efSBTDebugVar( '$matches', $matches )
                        . efSBTDebugVar( '$titleObj', $titleObj )
                        . efSBTDebugVar( '$image', $image )
                        . efSBTDebugVar( '$wgContLang->namespaceNames', $wgContLang->namespaceNames ):'' );
                        
        return $output;
}

// Rewrite the gallery code.
function efRewriteGalleryImage( $matches ) {
        global $wgOut, $slimboxThumbsDebug, $slimboxDefaultWidth, $wgScriptPath;

        $titleObj = Title::newFromText( rawurldecode( $matches[2] ) );
        $image = wfFindFile( $titleObj, false, false, true );
        $realwidth = (Integer) $image->getWidth();
        $width = ( $realwidth > $slimboxDefaultWidth ) ? $slimboxDefaultWidth : $realwidth -1;
        $output = $matches[1]
                 .' href="'.$image->createThumb($width).'" class="image" rel="lightbox[gallery]" title="'
                . htmlspecialchars( $wgOut->parse( "'''[[:" . $titleObj->getFullText() . "|" . $titleObj->getText() . "]]:''' " )
                . $matches[4] )
                . '" ' . $matches[3] . $matches[4] . "</div>"
                . ( $slimboxThumbsDebug ? efSBTDebugVar( '$matches', $matches )
                        . efSBTDebugVar( '$titleObj', $titleObj )
                        . efSBTDebugVar( '$image', $image ):'' );
                        
        return $output;
}


function efSBTAddSlimboxCode( $out, $skin ) {
        global $wgContLang, $hasGallery;

        // We don't want to run regular expressions if there's no gallery here.
        if ( !$hasGallery ) {
        	return false;
        }

        # # ideally we'd do this with XPath, but we'd need valid XML for that, so we'll do it with some ugly regexes
        # # (could use a regex to pull out all div.thumb, maybe they're valid XML? ...probably not)
        # # An other alternative would be to use javascript and the DOM
	# # The jquery lightbox plugin does exactly that.

        // regex for thumbnails
	$pattern = '/(<a[^>]+?)'     	   // $1: start of opening <a> tag through start of href attribute in <a> tag
                . '\s*href="[^"]*(?:' . $wgContLang->namespaceNames[6] . '):' // dont care about start of original link href...
                . '([^"\/]+)'           			// $2: ...but end is wiki name for the image
                . '"\s*class="image"\s*'			// (1.16 title= gone)
                . '[^>]*>\s*' 					
                . '(<img[^>]+?[^>]*>)' 				// $3: the img tag itself (1.16 thumbimage class gone)
        	//.'(.*<\/*a>)' 					// $4 should get until >, but gets more...
		.'/xs';

	//by User:Cm
	/*$pattern = '/(<a[^>]+?)' 				// $1 start of opening <a> tag through start of href attribute in <a> tag
        	.'\s*href="([^"]*)' 				// $2 link
        	.'"\s*class="image"\s*title="([^"]+)' 		// $3 title
        	.'"\s*([^>]*>)'					// $4 end of <a>
        	.'\s*(<img[^>]+?class="thumbimage"[^>]*>)' 	// $5 img tag
        	.'(.*<\/*a>)/xs'; 				// $6 anything else
	*/

	$thumbnailsDone = preg_replace_callback( $pattern, 'efRewriteThumbImage', $out->getHTML() );

        /**
	 *  Redone regex for galleries 
	 * I don't get this, why am I regexxing code I'm creating in the first callback? WTF?
	 */
	$pattern = '/(<div\s*class="gallerybox".+?<div\s*class="thumb".+?)'	# $1
		.'.+?href="\/wiki\/([^"]+)"\s*class="image"'			# $2 (link)
		.'([^>]*>.+?<div\s*class="gallerytext">)'			# $3 rest
                .'\s*(?:<p>\s*)?(.+?)'		
                .'(?:\s*(<\/p>|<br\s*\/?>))?\s*<\/div>'
                .'/xs';

	$allDone = preg_replace_callback( $pattern, 'efRewriteGalleryImage', $thumbnailsDone );

	$out->clearHTML();
	$out->addHTML( $thumbnailsDone );
	//$out->addHTML( $allDone );
	return true;
}
