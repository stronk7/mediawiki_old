<?php
/* Categorize Mediawiki Extension
 *
 * @author Andreas Rindler (mediawiki at jenandi dot com) for initial Extension:CategorySuggest and Thomas Fauré for Categorize improvments
 * @credits 
 * @licence GNU General Public Licence 2.0 or later
 * @description 
 *
*/

if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die();
}

/*************************************************************************************/
## Entry point for the hook and main worker function for editing the page:
function fnCategorizeShowHook( $m_isUpload = false, &$m_pageObj ) {
	global $wgOut, $wgParser, $wgTitle, $wgRequest, $wgScriptPath;
	global $wgTitle, $wgScriptPath, $wgCategorizeCloud, $wgCategorizejs, $wgCategorizecss;
	global $wgCategorizeLabels;

	# Get ALL categories from wiki:
//		$m_allCats = fnAjaxSuggestGetAllCategories();
	# Load system messages:
	fnCategorizeMessageHook();
	# Get the right member variables, depending on if we're on an upload form or not:
	if( !$m_isUpload ) {
		# Check if page is subpage once to save method calls later:
		$m_isSubpage = $wgTitle->isSubpage();

		# Check if page has been submitted already to Preview or Show Changes
		$strCatsFromPreview = trim($wgRequest->getVal('txtSelectedCategories2'));
		if(strlen($strCatsFromPreview)==0){
			# Extract all categorylinks from PAGE:
			$m_pageCats = fnCategorizeGetPageCategories( $m_pageObj );
		} else {
		 	# Get cats from preview
			$m_pageCats = explode(";",$strCatsFromPreview);
		}
		# Never ever use editFormTextTop here as it resides outside the <form> so we will never get contents
		$m_place = 'editFormTextAfterWarn';
		# Print the localised title for the select box:
		$m_textBefore = '<b>'. wfMsg( 'categorize-title' ) . '</b>:';
	} else	{
		# No need to get categories:
		$m_pageCats = array();
		
		# Place output at the right place:
		$m_place = 'uploadFormTextAfterSummary';
	}
		
	#ADD EXISTING CATEGORIES TO INPUT BOX 
	$arrExistingCats = array();
	$arrExistingCats = $m_pageCats;
	#ADD JAVASCRIPT - use document.write so it is not presented if javascript is disabled.
	$m_pageObj->$m_place .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"$wgScriptPath/extensions/Categorize/Categorize.css\" />
\n"; # provisoire
	$m_pageObj->$m_place .= "<script type=\"text/javascript\" src=\"$wgScriptPath/extensions/Categorize/jquery.js\"></script>\n";
	$m_pageObj->$m_place .= "<script type=\"text/javascript\">var xSelectedLabels = new Array();</script>\n";
	foreach($arrExistingCats as $arrExistingCat)
	{
		$m_pageObj->$m_place .= "<script type=\"text/javascript\">xSelectedLabels['$arrExistingCat']=1;</script>\n";
	}
	$m_pageObj->$m_place .= "<script type=\"text/javascript\" src=\"" . $wgCategorizejs . "\"></script>\n";
	$m_pageObj->$m_place .= "<script type=\"text/javascript\">/*<![CDATA[*/\n";		
	$m_pageObj->$m_place .= "document.write(\"<div id='categoryselectmaster2'><div style='border-bottom:1px solid #AAAAAA;'><b>" .wfMsg( 'categorize-title' ). "</b></div>\");\n";
	$m_pageObj->$m_place .= "document.write(\"<p>" . wfMsg( 'categorize-subtitle' ). "</p>\");\n";
	$m_pageObj->$m_place .= "document.write(\"\");\n";
	$m_pageObj->$m_place .= "document.write(\"<input onkeyup='sendRequest(this,event);' autocomplete='off' type='text' name='txtSelectedCategories2' id='txtSelectedCategories2' maxlength='200' length='150' style='width:100%;' value='".str_replace("_"," ",implode(";", $arrExistingCats))."'/>\");\n";
	$m_pageObj->$m_place .= "document.write(\"<br/><div id='searchResults'></div>\");\n";
	$m_pageObj->$m_place .= "document.write(\"<input type='hidden' value='" . $wgCategorySuggestCloud . "' id='txtCSDisplayType'/>\");\n";	
	$m_pageObj->$m_place .= "document.write(\"<p>" . wfMsg( 'categorize-advice' ). "</p>\");\n";
	$m_pageObj->$m_place .= "document.write(\"<p><table id='xtable'>\");\n";
	$l__categorize_index = 0;
	foreach($wgCategorizeLabels as $l__label_key=>$l__label_array)
	{
		$m_pageObj->$m_place .= "document.write(\"<tr>\");\n";
		if (substr($l__label_key,0,9)=='separator')
		{
			$m_pageObj->$m_place .= "document.write(\"<td colspan=2> <hr/>\");\n";
		}
		else
		{
			$l__categorize_index += 1;
			$l__key_value_to_print = utf8_encode(str_replace("_"," ",$l__label_key));
			$l__xselected = (in_array($l__key_value_to_print,$arrExistingCats)) ? 'xselected' : '';
			$m_pageObj->$m_place .= "document.write(\"<th style='text-align:left;'><span class='xlabel xcategorize$l__categorize_index $l__xselected'>$l__key_value_to_print</span> :</th><td> \");\n";
			foreach($l__label_array as $l__label_value)
			{
				$l__label_value_to_print = utf8_encode(str_replace("_"," ",$l__label_value));
				$l__xselected = (in_array($l__label_value_to_print,$arrExistingCats)) ? 'xselected' : '';
				$m_pageObj->$m_place .= "document.write(\"<span class='xlabel xcategorize$l__categorize_index $l__xselected'>$l__label_value_to_print</span>\");\n";
			}
			$m_pageObj->$m_place .= "document.write(\"</td></tr>\");\n";
		}
	}
	$m_pageObj->$m_place .= "document.write(\"</table></p>\");\n";
	$m_pageObj->$m_place .= "document.write(\"<p>" . wfMsg( 'categorize-footer' ). "</p>\");\n";
	$m_pageObj->$m_place .= "document.write(\"</div>\");\n";
	$m_pageObj->$m_place .= "/*]]>*/</script>\n";
	
	
	return true;
}

/*************************************************************************************/
## Entry point for the hook and main worker function for saving the page:
function fnCategorizeSaveHook( $m_isUpload, $m_pageObj ) {
	global $wgContLang;
	global $wgOut;
	
	# Get localised namespace string:
	$m_catString = $wgContLang->getNsText( NS_CATEGORY );
	# Get some distance from the rest of the content:
	$m_text = "\n";
	
	# Assign all selected category entries:
	$strSelectedCats = $_POST['txtSelectedCategories2'];

	#CHECK IF USER HAS SELECTED ANY CATEGORIES
	if(strlen($strSelectedCats)>1){
		$arrSelectedCats = array();
		$arrSelectedCats = explode(";",$_POST['txtSelectedCategories2']);
		# !!!!!!!!!!!!!!!!  TODO dédoublonner les catégories ICI !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	 	foreach( $arrSelectedCats as $m_cat ) {
	 	 	if(strlen($m_cat)>0){
				$m_text .= "\n[[$m_catString:" . mysql_escape_string(trim($m_cat)) . "]]";
			}
		}
		# If it is an upload we have to call a different method:
		if ( $m_isUpload ) {
			$m_pageObj->mUploadDescription .= $m_text;
		} else{
			$m_pageObj->textbox1 .= $m_text;
		}		
	}
	$wgOut->addHTML($m_text);
	
	# Return to the let MediaWiki do the rest of the work:
	return true;
}

/*************************************************************************************/
## Entry point for the CSS:
function fnCategorizeOutputHook( &$m_pageObj, $m_parserOutput ) {
	global $wgScriptPath;

	# Register CSS file for input box:
	$m_pageObj->addLink(
		array(
			'rel'	=> 'stylesheet',
			'type'	=> 'text/css',
			'href'	=> $wgScriptPath . '/extensions/Categorize/Categorize.css'
		)
	);

	return true;
}


/*************************************************************************************/
## Entry point for localised messages:
function fnCategorizeMessageHook() {
	global $wgLang;
	global $wgMessageCache;
	
	# Initialize array of all messages:
	$messages=array();
	# Load default messages (english):
	include( 'Categorize.i18n.php' );
	# Load localised messages:
	$wgMessageCache->addMessagesByLang($messages);
	
	return true;
}

/*************************************************************************************/
## Returns an array with the categories the articles is in.
## Also removes them from the text the user views in the editbox.
function fnCategorizeGetPageCategories( $m_pageObj ) {
global $wgOut;

	# Get page contents:
	$m_pageText = $m_pageObj->textbox1;

	$arrAllCats = Array();
	$regulartext ='';
	$nowikitext = '';
	$cleanedtext ='';
	$finaltext = '';
	# Check linewise for category links:
	# Get the first part of the text up until the first <nowiki> tag.
	$arrBlocks1 = explode( "<nowiki>", $m_pageText );
	$regulartext = $arrBlocks1[0];

	# Get and strip categories from the first part
	$cleanedtext = fnCategorizeStripCats($regulartext,$arrAllCats);
	$finaltext .= $cleanedtext;
	
	# Go through the rest of the blocks to find more categories
	for($i=1; $i<count($arrBlocks1); $i++){
		$arrBlocks2 = explode( "</nowiki>", $arrBlocks1[$i] );
		//ignore cats here because it is part of the <nowiki> block
		$nowikitext = $arrBlocks2[0];
		//add to final text
		$finaltext .= '<nowiki>' . $nowikitext . '</nowiki> ';
		
		//strip cats here because it's the text after the <nowiki> block
		$regulartext = $arrBlocks2[1];
		$cleanedtext = fnCategorizeStripCats($regulartext,$arrAllCats);
		$finaltext .= ltrim($cleanedtext);
	}

	//Place cleaned text back into the text box:
	$m_pageObj->textbox1 = rtrim( $finaltext );
	
	return $arrAllCats;
	
}

function fnCategorizeStripCats($texttostrip, &$catsintext){
	global $wgContLang, $wgOut;

	# Get localised namespace string:
	$m_catString = strtolower( $wgContLang->getNsText( NS_CATEGORY ) );
	# The regular expression to find the category links:
	$m_pattern = "\[\[({$m_catString}|category):(.*)\]\]";
	$m_replace = "$2";
	# The container to store all found category links:
	$m_catLinks = array ();
	# The container to store the processed text:
	$m_cleanText = '';


	# Check linewise for category links:
	foreach( explode( "\n", $texttostrip ) as $m_textLine ) {
		# Filter line through pattern and store the result:
        $m_cleanText .= rtrim( preg_replace( "/{$m_pattern}/i", "", $m_textLine ) ) . "\n";        

		# Check if we have found a category, else proceed with next line:
        if( preg_match_all( "/{$m_pattern}/i", $m_textLine,$catsintext2,PREG_SET_ORDER) ){
			 foreach( $catsintext2 as $local_cat => $m_prefix ) {
				//Set first letter to upper case to match MediaWiki standard
				$strFirstLetter = substr($m_prefix[2], 0,1);
				strtoupper($strFirstLetter);
				$newString = strtoupper($strFirstLetter) . substr($m_prefix[2], 1);
				array_push($catsintext,$newString);
					 			
	 		}
			# Get the category link from the original text and store it in our list:
			preg_replace( "/.*{$m_pattern}/i", $m_replace, $m_textLine,-1,$intNumber );
		}
		
	}

	return $m_cleanText;	
	
}
?>
