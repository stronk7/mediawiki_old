<?php

/**
 * Simple editor for paragraphs.
 */
class ParagraphEditor {
	/**
	 * This function hooks into InlineEditorMark and marks the paragraphs.
	 * @param $inlineEditorText InlineEditorText
	 */
	public static function mark( &$inlineEditorText ) {
		// get the original wikitext
		$text = $inlineEditorText->getWikiOriginal();

		$matches = array();
		preg_match_all( '/(==+.+==+\s*\n)?((.|\n)*?)(\n\n|(\n==+.+==+\s*\n)|$)/', $text, $matches, PREG_OFFSET_CAPTURE );

		foreach ( $matches[2] as $match ) {
			$start = $match[1];
			$end   = $start + strlen( $match[0] );

			// do not include the trailing newline
			if ( substr( $match[0], -1 ) == "\n" ) $end--;

			$marking = new InlineEditorMarking( $start, $end, 'paragraphEditorElement', false );
			$marking->setPriority( 1 );
			$inlineEditorText->addMarking( $marking );
		}

		return true;
	}

	/**
	 * Hooks into InlineEditorDefineEditors. Adds the option to to the list and adds CSS and JS files
	 * @param $editor InlineEditor
	 * @param $output OutputPage
	 */
	public static function defineEditors( &$editor, &$output ) {
		global $wgExtensionAssetsPath, $wgInlineEditorParagraphEditorVisible;
		
		if( $wgInlineEditorParagraphEditorVisible ) {
			$editor->addEditMode(
				'paragraphEditor',
				 wfMsgExt( 'paragraph-editor-editmode-caption', 'parseinline' ),
				 wfMsgExt( 'paragraph-editor-editmode-description', 'parseinline' )
			);
	
			$output->addExtensionStyle( "$wgExtensionAssetsPath/InlineEditor/ParagraphEditor/ParagraphEditor.css?0" );
			$output->addScriptFile( "$wgExtensionAssetsPath/InlineEditor/ParagraphEditor/jquery.inlineEditor.editors.paragraphEditor.js?0" );
		}
		
		return true;
	}
}
