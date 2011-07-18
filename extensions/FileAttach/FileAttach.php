<?php
/**
 * FileAttach extension - Allows files to be uploaded to the current article
 *
 * @package MediaWiki
 * @subpackage Extensions
 * @author Milan Holzapfel
 * @licence GNU General Public Licence 2.0 or later
 * 
 */
if ( !defined( 'MEDIAWIKI' ) ) die( 'Not an entry point.' );
define( 'FILEATTCH_VERSION', '1.0.2, 2010-04-24' );

$wgAttachmentHeading = 'Attachments';

$dir = dirname( __FILE__ );
$wgExtensionMessagesFiles['FileAttach'] = "$dir/FileAttach.i18n.php";
$wgExtensionFunctions[] = 'wfSetupFileAttach';
$wgExtensionCredits['other'][] = array(
	'path'        => __FILE__,
	'name'        => 'FileAttach',
	'author'      => '[http://www.mediawiki.org/wiki/User:Milan Milan Holzapfel]',
	'descriptionmsg' => 'fileattach-desc',
	'url'         => 'http://www.mediawiki.org/wiki/Extension:FileAttach',
	'version'     => FILEATTCH_VERSION
);

class FileAttach {

	var $uploadForm = false;
	var $attachto = false;
	var $wgOut = false;

	function __construct() {
		global $wgHooks;
		$wgHooks['BeforePageDisplay'][] = $this;
		$wgHooks['UploadForm:initial'][] = array( $this, 'onUploadFormInitial' );
		$wgHooks['UploadForm:BeforeProcessing'][] = array( $this, 'onUploadFormBeforeProcessing' );
		$wgHooks['SkinTemplateTabs'][] = $this;
		$wgHooks['SkinTemplateNavigation'][] = $this;
	}

	/*
	 * Modify the upload form and attachment heading
	 */
	function onBeforePageDisplay( &$out, &$skin ) {
		global $wgParser, $wgAttachmentHeading;

		# Bail if page inappropriate for attachments
		if( !is_object( $wgParser ) || !is_object( $wgParser->mOutput )|| !isset( $wgParser->mOutput->mSections ) ) return true;

		# If the last section in the article is level 2 and "Attachments" then convert to file icons
		$sections = $wgParser->mOutput->mSections;
		if( is_array( $sections ) && count( $sections ) > 0 ) {
			$last = $sections[count( $sections ) - 1];
			if( $last['level'] == 2 && $last['anchor'] == $wgAttachmentHeading ) {
				preg_match( "|.+<h2>.+?$wgAttachmentHeading.+?</h2>\s*<ul>(.+?)</ul>|s", $out->mBodytext, $files );
				preg_match_all( "|<li>\s*<a.+?>(.+?)</a>\s*</li>|", $files[1], $files );
				$html = "\n\n<!-- files attachments rendered by Extension:FileAttach -->\n<div class=\"file-attachments\" style=\"width:85%\">\n";
				foreach( $files[1] as $file ) {
					$title = Title::newFromText( $file, NS_FILE );
					$name = $title->getText();
					$alt = "title=\"$name\"";
					if( strlen( $name ) > 15 ) $name = preg_replace( "|^(............).+(\.\w+$)|", "$1...$2", $name );
					$icon = $this->getIcon( $file );
					$url = wfFindFile( $title )->getURL();
					$img = "<a $alt href=\"$url\"><img style=\"padding-bottom:30px\" src=\"$icon\" width=\"80px\" height=\"80px\" /></a>";
					$text = "<a $alt href=\"$url\" style=\"color:black;font-size:10px;position:relative;left:-67px;top:30px;\">$name</a>";
					$html .= "\t<span class=\"file-attachment\">$img$text</span>\n";
				}
				$html .= "</div>\n";
				$out->mBodytext = preg_replace(
					"|^(.+)<h2>.+?$wgAttachmentHeading.+?</h2>\s*<ul>(.+?)</ul>|s",
					"$1<h2>" . wfMsg( 'fileattach-attachments' ) . "</h2>$html",
					$out->mBodytext
				);
			}
		}

		# Modify the upload form
		if( $this->uploadForm ) {
			global $wgRequest;
			if( $attachto = $wgRequest->getText( 'attachto' ) ) {
				$out->mPagetitle = wfMsg( 'fileattach-uploadheading', $attachto );
				$out->mBodytext = str_replace( "</form>", "<input type=\"hidden\" name=\"attachto\" value=\"$attachto\" /></form>", $out->mBodytext );
			}
		}

		return true;
	}

	/*
	 * Note if this is the upload form or warning form so that we can modify it before page display
	 */
	function onUploadFormInitial( $form ) {
		$this->uploadForm = true;
		return true;
	}

	/*
	 * Check if the upload should attach to an article
	 */
	function onUploadFormBeforeProcessing( $form ) {
		global $wgRequest, $wgHooks;
		if( $attachto = $wgRequest->getText( 'attachto', '' ) ) {
			$this->uploadForm = true;
			$title = Title::newFromText( $attachto );
			$this->attachto = new Article( $title );
			$wgHooks['SpecialUploadComplete'][] = $this;
		}
		return true;
	}

	/*
	 * Change the redirection after upload to the page the file attached to,
	 * and attach the file to the article
	 */
	function onSpecialUploadComplete( $upload ) {
		global $wgOut, $wgRequest, $wgAttachmentHeading;
		$this->wgOut = $wgOut;
		$wgOut = new FileAttachDummyOutput;
		$filename = $wgRequest->getText( 'wpDestFile' );
		$text = preg_replace( "|(\s+==\s*$wgAttachmentHeading\s*==)\s+|s", "$1\n*[[:File:$filename]]\n", $this->attachto->getContent(), 1, $count );
		if( $count == 0 ) $text .= "\n\n== $wgAttachmentHeading ==\n*[[:File:$filename]]\n";
		$this->attachto->doEdit( $text, wfMsg( 'fileattach-editcomment', $filename ), EDIT_UPDATE );
		return true;
	}

	/*
	 * Return an icon path from passed filename
	 */
	function getIcon( $filename ) {
		global $wgStylePath, $wgStyleDirectory;
		$ext = strtolower( preg_match( "|\.(\w+)$|", $filename, $ext ) ? "-$ext[1]" : "" );
		$path = "common/images/icons/fileicon";
		$icon = file_exists( "$wgStyleDirectory/$path$ext.png" ) ? "$wgStylePath/$path$ext.png" : "$wgStylePath/$path.png";
		return $icon;
	}

	function onSkinTemplateTabs( $skin, &$actions ) {
		global $wgTitle;
		$attachto = $wgTitle->getPrefixedText();
		$url = Title::newFromText( 'Upload', NS_SPECIAL )->getLocalURL( array( 'attachto' => $attachto ) );
		$actions['attach'] = array( 'text' => wfMsg( 'fileattach-attachfile' ), 'class' => false, 'href' => $url );
		return true;
	}

	function onSkinTemplateNavigation( $skin, &$actions ) {
		global $wgTitle;
		$attachto = $wgTitle->getPrefixedText();
		$url = Title::newFromText( 'Upload', NS_SPECIAL )->getLocalURL( array( 'attachto' => $attachto ) );
		$actions['views']['attach'] = array( 'text' => wfMsg( 'fileattach-attachfile' ), 'class' => false, 'href' => $url );
		return true;
	}

}

/**
 * Dummy class to hack upload form to redirect back to the page the file is attached to
 * - the redirect property of $wgOut is protected so a hack is required
 * - I did this by temporarily replacing the $wgOut object with an instance of a dummy class
 * - this instance puts the original instance back and changes the redirect
 * - the upload hook and redirect are on line 434,435 of SpecialUpload.php
 */
class FileAttachDummyOutput {
	function redirect( $url ) {
		global $wgFileAttach, $wgOut;
		$wgOut = $wgFileAttach->wgOut;
		$wgOut->redirect( $wgFileAttach->attachto->getTitle()->getFullURL() );
	}
}

function wfSetupFileAttach() {
	global $wgFileAttach;
	$wgFileAttach = new FileAttach();
}
