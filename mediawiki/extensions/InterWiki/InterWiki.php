<?php
# Extension:InterWiki
# - See http://www.mediawiki.org/wiki/Extension:InterWiki for installation and usage details
# - Licenced under LGPL (http://www.gnu.org/copyleft/lesser.html)
# - Author: http://www.organicdesign.co.nz/nad
# - Started: 2007-05-12, see article history

if ( !defined( 'MEDIAWIKI' ) ) die( 'Not an entry point.' );
 
define( 'INTERWIKI_VERSION','1.0.1, 2008-11-18' );

$wgInterWikiFile        = 'InterWiki.txt';
$wgInterWikiFile        = dirname( __FILE__ ) . "/$wgInterWikiFile";
$wgInterWikiAddOnly     = true; # Set to false if you want your interwiki to exhibit *only* items from the file
$wgExtensionFunctions[] = 'wfInterWikiSetup';

$wgExtensionCredits['other'][] = array(
        'name'        => 'InterWiki',
        'author'      => '[http://www.organicdesign.co.nz/nad User:Nad]',
        'description' => 'Manage the InterWiki list from a file',
        'url'         => 'http://www.mediawiki.org/wiki/Extension:InterWiki',
        'version'     => INTERWIKI_VERSION
);

function wfInterWikiSetup() {
        global $wgServer, $wgInterWikiFile, $wgInterWikiAddOnly;

        # Read the current InterWiki list from the DB into an array of (prefix,url,local,trans)
        $db =& wfGetDB( DB_MASTER );
        $tbl = $db->tableName( 'interwiki' );
        $iw = array();
        $result = $db->query( "SELECT iw_prefix,iw_url,iw_local,iw_trans FROM $tbl" );
        if ( $result instanceof ResultWrapper ) $result = $result->result;
        while ( $row = $db->fetchRow( $result ) ) $iw[strtolower( $row[0] )] = array( $row[1], $row[2], $row[3] );
        $db->freeResult( $result );

       
        # Read InterWiki file into an array of (prefix,url,local,trans)
        # - local is set automatically if $wgServer matches the URL
        $iwf = array() ;
        foreach ( file( $wgInterWikiFile ) as $line ) {
                if ( preg_match( "/^\\s*(.+?)\\s*\\|\\s*(http.+?)\\s*(\\|\\s*(.+?)\\s*)?$/", $line, $matches ) ) {
                        list( , $wikis, $url ) = $matches;
                        $flags = isset( $matches[4] ) ? $matches[4] : '';
                        $wikis = preg_split( "/\\s*,\\s*/", strtolower( $wikis ) );
                        $flags = preg_split( "/\\s*,\\s*/", strtolower( $flags ) );
                        $local = ( in_array( 'local', $flags ) || ( stripos( $url, $wgServer ) !== false ) ) ? 1 : 0;
                        $trans = in_array( 'trans', $flags ) ? 1 : 0;
                        foreach ( $wikis as $w ) $iwf[$w] = array( $url, $local, $trans );
                }
        }

        # Determine the required database inserts, updates and deletes
        $del = array();
        $ins = array();
        $upd = array();
        foreach ( $iwf as $w => $i ) {
                if ( isset($iw[$w] ) ) {
                        if ( $iw[$w][0] != $i[0] || $iw[$w][1] != $i[1] || $iw[$w][2] != $i[2] ) $upd[$w] = $i;
                } else $ins[$w] = $i;
        }
        if ( !$wgInterWikiAddOnly ) foreach ( $iw as $w => $i ) if ( !isset( $iwf[$w] ) ) $del[] = $w;

        # Update the database
        foreach ( $ins as $w => $i ) $db->query( "INSERT INTO $tbl (iw_prefix,iw_url,iw_local,iw_trans) VALUES('$w','$i[0]',$i[1],$i[2])" );
        foreach ( $upd as $w => $i ) $db->query( "UPDATE $tbl SET iw_url='$i[0]',iw_local=$i[1],iw_trans=$i[2] WHERE iw_prefix='$w'" );
        foreach ( $del as $w )       $db->query( "DELETE FROM $tbl WHERE iw_prefix = '$w'" );
}
