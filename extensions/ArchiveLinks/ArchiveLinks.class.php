<?php
/**
 * Main Extension Class for Archive Links
 */

class ArchiveLinks {
	public static function queueExternalLinks ( &$article ) {
		global $wgParser;
		$external_links = $wgParser->getOutput();
		$external_links = $external_links->mExternalLinks;
		
		$db_master = wfGetDB( DB_MASTER );
		$db_slave = wfGetDB( DB_SLAVE );
		$db_result = array();
		
		$db_master->begin();
		
		foreach ( $external_links as $link => $unused_value ) {
			//$db_result['resource'] = $db_slave->select( 'el_archive_resource', '*', '`el_archive_resource`.`resource_url` = "' . $db_slave->strencode( $link ) . '"');
			$db_result['blacklist'] = $db_slave->select( 'el_archive_blacklist', '*', '`el_archive_blacklist`.`bl_url` = "' . $db_slave->strencode( $link ) . '"');
			$db_result['queue'] = $db_slave->select( 'el_archive_queue', '*', '`el_archive_queue`.`url` = "' . $db_slave->strencode( $link ) . '"' );
			
			if ( $db_result['blacklist']->numRows() === 0 ) {
				if ( $db_result['queue']->numRows() === 0 ) {
					// this probably a first time job
					// but we should check the logs and resource table
					// to make sure
					$db_master->insert( 'el_archive_queue', array (
						'page_id' => $article->getID(),
						'url' => $link,
						'delay_time' => '0',
						'insertion_time' => time(),
						'in_progress' => '0',
					));
				} else {
					//this job is already in the queue, why?
					// * most likely reason is it has already been inserted by another page
					// * or we are checking it later because the site was down at last archival
					//  in either case we don't really need to do anything right now, so skip...
				}
			}
		}

		$db_master->commit();
		
		return true;
	}
	
	public static function rewriteLinks (  &$url, &$text, &$link, &$attributes ) {
		if ( array_key_exists('rel', $attributes) && $attributes['rel'] === 'nofollow' ) {
			global $wgArchiveLinksConfig;
			if ( $wgArchiveLinksConfig['use_multiple_archives'] ) {
				//need to add support for more than one archival service at once
				//  (a page where you can select one from a list of choices)
			} else {
				switch ( $wgArchiveLinksConfig['archive_service'] ) {
					case 'local':
					//We need to have something to figure out where the filestore is...
					$link_to_archive = urlencode( substr_replace( $url, '', 0, 7 ) );
					break;
					case 'wikiwix':
					$link_to_archive = 'http://archive.wikiwix.com/cache/?url=' . $url;
					break;
					case 'webcitation':
					$link_to_archive = 'http://webcitation.org/query?url=' . $url;
					break;
					case 'internet_archive':
					default:
					$link_to_archive = 'http://wayback.archive.org/web/*/' . $url;
					break;
				}
			}
			
		    $link = HTML::element('a', array ( 'rel' => 'nofollow', 'class' => $attributes['class'], 'href' => $url ), $text )
				. HTML::openElement('sup')
				. HTML::openElement('small')
				. '&#160;'
				. HTML::element('a', array ( 'rel' => 'nofollow', 'href' => $link_to_archive ), '[' . wfMsg( 'archivelinks-cache-title') . ']')
				. HTML::closeElement('small')
				. HTML::closeElement('sup');
		
			return false;
		} else {
			return true;
		}
    }
}