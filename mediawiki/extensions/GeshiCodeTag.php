<?php
########################
# GeshiCodeTag.php
# Licensed under GPLv3
# by Paul Nolasco
########################

// change directory accordingly
include_once('geshi/geshi.php'); 
$languagesPath = "extensions/geshi/geshi";

// 1 - ENABLED, 0 - DISABLED
/// Disable simple mode. Cause problems in HTML templates - Moodle - Eloy 20080805 - MDLSITE-454
$codeTag["simple"] = 0; // ex. <php> echo </php> 
$codeTag["advanced"]["mode"] = 1; // ex. <code php n> echo </php>
 
 // extra options
 /* 
 strict mode - http://qbnz.com/highlighter/geshi-doc.html#using-strict-mode
 ex. <img src="<?php echo rand(1, 100) ?>" /> 
 */
 $codeTag["advanced"]["strict"] = 0; 

 #############################################

 $wgExtensionFunctions[] = "ExtensionCodeTag";
 $wgExtensionCredits['parserhook'][] = array( 
 'name' => 'GeSHiCodeTag', 
 'author' => 'Paul Nolasco', 
 'version' => '1.65',
 'description' => 'A tag to create a syntax-highlighted code using GeSHi',
 'url' => 'http://www.mediawiki.org/wiki/Extension:GeSHiCodeTag'
 );
 $languages = array();

 function ExtensionCodeTag()
 {
 global $wgParser, $codeTag, $languages, $languagesPath;

 ReadLanguages();

 if($codeTag["advanced"]["mode"])
 $wgParser->setHook('code', 'AdvancedCodeTag');

 if($codeTag["simple"])
 foreach($languages as $lang)
 {
 $wgParser->setHook($lang,
 create_function( '$source',
 '$geshi = new GeSHi($source,\'' . $lang . '\', \'' . $languagesPath . '\');
 return $geshi->parse_code();'
 ));
 } 
 }

 function ReadLanguages()
 { 
 global $languages, $languagesPath;
 
 $dirHandle = opendir($languagesPath) 
 or die("ERROR: Invalid directory path - [$languagesPath], Modify the value of \$languagesPath'");

 /// Moodle hack - avoid deprecated ereg uses. Change to preg. PHP 5.3.x
 /// Moodle hack - commented:$pattern = "^(.*)\.php$";
 /// Moodle hack - commented:
 /// Moodle hack - commented:while ($file = readdir($dirHandle)) 
 /// Moodle hack - commented:{ 
 /// Moodle hack - commented:if( eregi($pattern, $file) ) 
 /// Moodle hack - commented:$languages[] = eregi_replace($pattern, "\\1", $file); 
 /// Moodle hack - commented:}
 $pattern = "/^(.*)\.php$/i";

 while ($file = readdir($dirHandle)) {
     if ( preg_match($pattern, $file) ) {
         $languages[] = preg_replace($pattern, "\${1}", $file);
     }
 }
 /// Moodle hack - end
 closedir($dirHandle);
 }

 function AdvancedCodeTag ($source, $settings){ 
 
 global $languages, $languagesPath, $codeTag;
 $language = array_shift($settings); // [arg1] 
 
 // [arg1]
 if($language == '') { /// Without language specified. it just returns <tt>...</tt> original
                       /// instead of formatting as text - Moodle - Eloy 20080806 - MDLSITE-454
     return '<code>' . $source . '</code>'; 
     ///$language='text';
 }
 
 if($language == "list") // list all languages supported
 return "<br>List of supported languages for <b>Geshi " . GESHI_VERSION . "</b>:<br>"
 . implode("<br>", $languages);
 
 if($language != "" && !in_array($language, $languages)) // list languages if invalid argument
 return "<br>Invalid language argument, \"<b>" . $language . "</b>\", select one from the list:<br>" 
 . implode("<br>", $languages);
 
 // set geshi
 $geshi = new GeSHi(trim($source), $language, $languagesPath); 
 $geshi->enable_strict_mode($codeTag["advanced"]["strict"]); 
 
 
 // [arg2 or more]
 if(in_array('n',$settings)) // display line numbers
 $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);

/// Disable keyword linking - Moodle - Eloy 20080805 - MDLSITE-454
$geshi->enable_keyword_links(false);

 /*
 Add more GeSHi features from [ http://qbnz.com/highlighter/geshi-doc.html ]
 template:
 if( in_array( '<PARAMETER NAME>', $settings ) )
 {
 $geshi-><GESHI FUNCTION CALL>
 }
 */
 // removes newlines replaces with <br />
 return str_replace("\n",'<br />', $geshi->parse_code()); 
 }
