<?php
/**
 * Local file in the wiki's own database, only stored in Swift
 *
 * @file
 * @ingroup FileRepo
 */

/**
 * Class to represent a local file in the wiki's own database, only stored in Swift
 *
 * Provides methods to retrieve paths (physical, logical, URL),
 * to generate image thumbnails or for uploading.
 *
 * Note that only the repo object knows what its file class is called. You should
 * never name a file class explictly outside of the repo class. Instead use the
 * repo's factory functions to generate file objects, for example:
 *
 * RepoGroup::singleton()->getLocalRepo()->newFile($title);
 *
 * The convenience functions wfLocalFile() and wfFindFile() should be sufficient
 * in most cases.
 *
 * @ingroup FileRepo
 */
class SwiftFile extends LocalFile {
	/**#@+
	 * @private
	 */
	var
		$conn;             # our connection to the Swift proxy.
		#$fileExists,       # does the file file exist on disk? (loadFromXxx)
		#$historyLine,      # Number of line to return by nextHistoryLine() (constructor)
		#$historyRes,       # result of the query for the file's history (nextHistoryLine)
		#$width,            # \
		#$height,           #  |
		#$bits,             #   --- returned by getimagesize (loadFromXxx)
		#$attr,             # /
		#$media_type,       # MEDIATYPE_xxx (bitmap, drawing, audio...)
		#$mime,             # MIME type, determined by MimeMagic::guessMimeType
		#$major_mime,       # Major mime type
		#$minor_mime,       # Minor mime type
		#$size,             # Size in bytes (loadFromXxx)
		#$metadata,         # Handler-specific metadata
		#$timestamp,        # Upload timestamp
		#$sha1,             # SHA-1 base 36 content hash
		#$user, $user_text, # User, who uploaded the file
		#$description,      # Description of current revision of the file
		#$dataLoaded,       # Whether or not all this has been loaded from the database (loadFromXxx)
		#$upgraded,         # Whether the row was upgraded on load
		#$locked,           # True if the image row is locked
		#$missing,          # True if file is not present in file system. Not to be cached in memcached
		#$deleted;          # Bitfield akin to rev_deleted
	/**#@-*/

	/**
	 * Create a LocalFile from a title
	 * Do not call this except from inside a repo class.
	 *
	 * Note: $unused param is only here to avoid an E_STRICT
	 */
	static function newFromTitle( $title, $repo, $unused = null ) {
		if ( empty($title) ) { return null; }
		return new self( $title, $repo );
	}

	/**
	 * Create a LocalFile from a title
	 * Do not call this except from inside a repo class.
	 */
	static function newFromRow( $row, $repo ) {
		$title = Title::makeTitle( NS_FILE, $row->img_name );
		$file = new self( $title, $repo );
		$file->loadFromRow( $row );

		return $file;
	}

	/**
	 * Constructor.
	 * Do not call this except from inside a repo class.
	 */
	function __construct( $title, $repo ) {
		if ( !is_object( $title ) ) {
			throw new MWException( __CLASS__ . " constructor given bogus title." );
		}

		parent::__construct( $title, $repo );

		$this->temp_path = false; // Points to our local copy.
	}

	/** splitMime inherited */
	/** getName inherited */
	/** getTitle inherited */
	/** getURL inherited */
	/** getViewURL inherited */
	/** isVisible inherited */

	function getPath() {
		return $this->getLocalCopy($this->repo->container, $this->getRel());
	}

	/** Get the path of the archive directory, or a particular file if $suffix is specified */
	function getArchivePath( $suffix = false ) {
		return $this->getLocalCopy($this->repo->getZoneContainer('public'), $this->getArchiveRel( $suffix ));
	}

	/** Get the path of the thumbnail directory, or a particular file if $suffix is specified */
	function getThumbPath( $suffix = false ) {
		$path = $this->getRel();
		if ( $suffix !== false ) {
			$path .= '/' . $suffix;
		}
		return $this->getLocalCopy($this->repo->getZoneContainer('thumb'), $path);
	}

	/**
	 * Get a local path corresponding to a virtual URL
	 */
	function getContainerRel( $url ) {
		if ( substr( $url, 0, 9 ) != 'mwrepo://' ) {
			throw new MWException( __METHOD__.": unknown protocol" );
		}

		$bits = explode( '/', substr( $url, 9 ), 3 );
		if ( count( $bits ) != 3 ) {
			throw new MWException( __METHOD__.": invalid mwrepo URL: $url" );
		}
		list( $repo, $zone, $rel ) = $bits;
		if ( $repo !== $this->name ) {
			throw new MWException( __METHOD__.": fetching from a foreign repo is not supported" );
		}
		$container = $this->getZoneContainer( $zone );
		if ( $container === false) {
			throw new MWException( __METHOD__.": invalid zone: $zone" );
		}
		return array($container, rawurldecode( $rel ));
	}

	/**
	 * Called from elsewhere to turn a virtual URL into a path.
	 */
	function resolveVirtualUrl( $url ) {
		$path = getContainerRel( $url );
		list($c, $r) = $path;
		return $this->getLocalCopy($c, $r);
	}


	/** Given a container and relative path, return an absolute path pointing at a copy of the file */
	function getLocalCopy($container, $rel) {
		// if we already have a local copy, return it.
		if ($this->temp_path) { return $this->temp_path; }

		// get a temporary place to put the original.
		$this->temp_path = tempnam( wfTempDir(), 'swift_in_' );

		/* Fetch the image out of Swift */
		$conn = $this->repo->connect();
		$cont = $this->repo->get_container($conn,$container);

		try {
			$obj = $cont->get_object($rel);
		} catch (NoSuchObjectException $e) {
			throw new MWException( "Unable to open original file at $container/$rel");
		}

		wfDebug(  __METHOD__ . " writing to " . $this->temp_path . "\n");
		try {
			$obj->save_to_filename( $this->temp_path);
		} catch (IOException $e) {
			throw new MWException( __METHOD__ . ": error opening '$e'" );
		} catch (InvalidResponseException $e) {
			throw new MWException( __METHOD__ . "unexpected response '$e'" );
		}

		return $this->temp_path;
	}

	function __destruct() {
		if ($this->temp_path) {
			// Clean up temporary data.
			unlink($this->temp_path);
			$this->temp_path = null;
		}
	}

	/** getTransformScript inherited */
	/** getUnscaledThumb inherited */
	/** thumbName inherited */
	/** createThumb inherited */
	/** getThumbnail inherited */

	/**
	 * Transform a media file
	 *
	 * @param $params Array: an associative array of handler-specific parameters.
	 *                Typical keys are width, height and page.
	 * @param $flags Integer: a bitfield, may contain self::RENDER_NOW to force rendering
	 * @return MediaTransformOutput | false
	 */
	function transform( $params, $flags = 0 ) {
		global $wgUseSquid, $wgIgnoreImageErrors, $wgThumbnailEpoch, $wgServer;
		global $wgTmpDirectory;

		wfProfileIn( __METHOD__ );
		do {
			if ( !$this->canRender() ) {
				// not a bitmap or renderable image, don't try.
				$thumb = $this->iconThumb();
				break;
			}

			// Get the descriptionUrl to embed it as comment into the thumbnail. Bug 19791.
			$descriptionUrl =  $this->getDescriptionUrl();
			if ( $descriptionUrl ) {
				$params['descriptionUrl'] = $wgServer . $descriptionUrl;
			}

			// make the thumb name and URL out of the normalized parameters.
			// we only use the thumbTemp for a temporary file.
			$normalisedParams = $params;
			$this->handler->normaliseParams( $this, $normalisedParams );
			$thumbName = $this->thumbName( $normalisedParams );
			$thumbUrl = $this->getThumbUrl( $thumbName );

			// get a temporary place to put the original.
			$thumbTemp = tempnam( $wgTmpDirectory, 'transform_out_' );

			$thumb = $this->handler->doTransform( $this, $thumbTemp, $thumbUrl, $params );

			// Store the thumbnail into Swift, but in the thumb version of the container.
			wfDebug(  __METHOD__ . "Creating thumb " . $this->getRel() . "/" . $thumbName . "\n");
			$conn = $this->repo->connect();
			$container = $this->repo->get_container($conn,$this->repo->container . "%2Fthumb");
			$this->repo->write_swift_object( $thumbTemp, $container, $this->getRel() . "/" . $thumbName);
			// php-cloudfiles throws exceptions, so failure never gets here.
			
			// Clean up temporary data.
			unlink($thumbTemp);

		} while (false);

		wfProfileOut( __METHOD__ );
		return is_object( $thumb ) ? $thumb : false;
	}


	/**
	 * Fix thumbnail files from 1.4 or before, with extreme prejudice
	 * Upgrading directly from 1.4 to 1.8/SwiftMedia is not supported.
	 */
	function migrateThumbFile( $thumbName ) {
		throw new MWException( __METHOD__.": not implemented" );
	}
	/**
	 * Get the public root directory of the repository.
	 */
	function getRootDirectory() {
		throw new MWException( __METHOD__.": not implemented" );
	}


	/** getHandler inherited */
	/** iconThumb inherited */
	/** getLastError inherited */

	/**
	 * Get all thumbnail names previously generated for this file
	 */
	function getThumbnails() {
		$this->load();

		$prefix = $this->getRel();
		$conn = $this->repo->connect();
		$container = $this->repo->get_container($conn,$this->repo->container . "%2Fthumb");
		$files = $container->list_objects(0, NULL, $prefix);
		return $files;
	}

	/**
	 * Delete cached transformed files
	 */
	function purgeThumbnails() {
		global $wgUseSquid, $wgExcludeFromThumbnailPurge;

		// Delete thumbnails
		$files = $this->getThumbnails();
		$urls = array();

		$conn = $this->repo->connect();
		$container = $this->repo->get_container($conn,$this->repo->container . "%2Fthumb");
		foreach ( $files as $file ) {
			// I have no idea how to implement this given that we don't have paths in Swift
			// Only remove files not in the $wgExcludeFromThumbnailPurge configuration variable
			// $ext = pathinfo( "$dir/$file", PATHINFO_EXTENSION );
			//if ( in_array( $ext, $wgExcludeFromThumbnailPurge ) ) {
			//	continue;
			//}
			
			$urls[] = $this->getThumbUrl($file);
			$this->repo->swift_delete($container, $file);
		}

		// Purge the squid
		if ( $wgUseSquid ) {
			SquidUpdate::purge( $urls );
		}
	}

} // SwiftFile class

# ------------------------------------------------------------------------------

/**
 * Repository that stores files in Swift and registers them
 * in the wiki's own database.
 *
 * @file
 * @ingroup FileRepo
 */

class SwiftRepo extends LocalRepo {
	// The public interface to SwiftFile is through SwiftRepo's findFile and
	// newFile. They call into the repo's NewFile and FindFile, which call
	// one of these factories to create the File object.
	var $fileFactory = array( 'SwiftFile', 'newFromTitle' );
	var $fileFactoryKey = array( 'SwiftFile', 'newFromKey' );
	var $fileFromRowFactory = array( 'SwiftFile', 'newFromRow' );
	var $oldFileFactory = array( 'OldSwiftFile', 'newFromTitle' );
	var $oldFileFactoryKey = array( 'OldSwiftFile', 'newFromKey' );
	var $oldFileFromRowFactory = array( 'OldSwiftFile', 'newFromRow' );

	function __construct( $info ) {
		// We don't call parent::_construct because it requires $this->directory,
		// which doesn't exist in Swift.
		FileRepo::__construct( $info );

		// Required settings
		$this->url = $info['url'];

		// Optional settings
		$this->hashLevels = isset( $info['hashLevels'] ) ? $info['hashLevels'] : 2;
		$this->deletedHashLevels = isset( $info['deletedHashLevels'] ) ?
			$info['deletedHashLevels'] : $this->hashLevels;

		// This relationship is also hard-coded in rewrite.py, another part of this
		// extension. If you want to change this here, you might have to change it
		// there, too.
		$this->thumbUrl = "{$this->url}/thumb";

		// we don't have directories
		$this->deletedDir = false;

		// Required settings
		$this->swiftuser= $info['user'];
		$this->swiftkey= $info['key'];
		$this->authurl= $info['authurl'];
		$this->container= $info['container'];
	}

	/**
	 * Get a connection to the swift proxy.
	 *
	 * @return CF_Connection
	 */
	function connect() {
		$auth = new CF_Authentication($this->swiftuser, $this->swiftkey, NULL, $this->authurl);
		try {
			$auth->authenticate();
		} catch (AuthenticationException $e) {
			throw new MWException( "We can't authenticate ourselves." );
		} catch (InvalidResponseException $e) {
			throw new MWException( __METHOD__ . "unexpected response '$e'" );
		}
		return new CF_Connection($auth);
	}

	/**
	 * Given a connection and container name, return the container.
	 * We KNOW the container should exist, so puke if it doesn't.
	 *
	 * @return CF_Container
	 */
	function get_container($conn, $cont) {
		try {
			return $conn->get_container($cont);
		} catch (NoSuchContainerException $e) {
			throw new MWException( "A container we thought existed, doesn't." );
		} catch (InvalidResponseException $e) {
			throw new MWException( __METHOD__ . "unexpected response '$e'" );
		}
	}

	/**
	 * Given a filename, container, and object name, write the file into the object.
	 * None of these error conditions are recoverable by the user, so we just dump
	 * an Internal Error on them.
	 *
	 * @return CF_Container
	 */
	function write_swift_object( $srcPath, $dstc, $dstRel) {
		try {
			$obj = $dstc->create_object($dstRel);
			$obj->load_from_filename( $srcPath, True);
		} catch (SyntaxException $e) {
		       throw new MWException( "missing required parameters" );
		} catch (BadContentTypeException $e) {
		       throw new MWException( "No Content-Type was/could be set" );
		} catch (InvalidResponseException $e) {
			throw new MWException( __METHOD__ . "unexpected response '$e'" );
		} catch (IOException $e) {
			throw new MWException( "error opening file '$e'" );
		}
	}

	/**
	 * Given a container and object name, delete the object.
	 * None of these error conditions are recoverable by the user, so we just dump
	 * an Internal Error on them.
	 *
	 */
	function swift_delete( $container, $rel ) {
		try {
			$container->delete_object($rel);
		} catch (SyntaxException $e) {
		       throw new MWException( "Swift object name not well-formed: '$e'" );
		} catch (NoSuchObjectException $e) {
		       throw new MWException( "Swift object we are trying to delete does not exist: '$e'" );
		} catch (InvalidResponseException $e) {
		       throw new MWException( "unexpected response '$e'" );
		}
	}

	/**
	 * Store a batch of files
	 *
	 * @param $triplets Array: (src,zone,dest) triplets as per store()
	 * @param $flags Integer: bitwise combination of the following flags:
	 *     self::DELETE_SOURCE     Delete the source file after upload
	 *     self::OVERWRITE         Overwrite an existing destination file instead of failing
	 *     self::OVERWRITE_SAME    Overwrite the file if the destination exists and has the
	 *                             same contents as the source
	 * @return $status
	 */
	function storeBatch( $triplets, $flags = 0 ) {
		wfDebug( __METHOD__  . ': Storing ' . count( $triplets ) . 
			" triplets; flags: {$flags}\n" );
		
		// Validate each triplet 
		$status = $this->newGood();
		foreach ( $triplets as $i => $triplet ) {
			list( $srcPath, $dstZone, $dstRel ) = $triplet;

			if ( !$this->validateFilename( $dstRel ) ) {
				throw new MWException( "Validation error in $dstRel" );
			}

			// Check overwriting
			if (0) { #FIXME
			if ( !( $flags & self::OVERWRITE ) && file_exists( $dstPath ) ) {
				if ( $flags & self::OVERWRITE_SAME ) {
					$hashSource = sha1_file( $srcPath );
					$hashDest = sha1_file( $dstPath );
					if ( $hashSource != $hashDest ) {
						$status->fatal( 'fileexistserror', $dstPath );
					}
				} else {
					$status->fatal( 'fileexistserror', $dstPath );
				}
			}
			}
		}

		// Abort now on failure
		if ( !$status->ok ) {
			return $status;
		}

		// Execute the store operation for each triplet
		$conn = $this->connect();

		foreach ( $triplets as $i => $triplet ) {
			list( $srcPath, $dstZone, $dstRel ) = $triplet;

			// Point to the container.
			$dstContainer = $this->getZoneContainer( $dstZone );
			$dstc = $this->get_container($conn, $dstContainer);

			$good = true;

			// Where are we copying this from?
			if (self::isVirtualUrl( $srcPath )) {
				$src = $this->getContainerRel( $srcPath );
				list ($srcContainer, $srcRel) = $src;
				$srcc = $this->get_container($conn, $srcContainer);

				$this->swiftcopy($srcc, $srcRel, $dstc, $dstRel);
				if ( $flags & self::DELETE_SOURCE ) {
					$this->swift_delete( $srcc, $srcRel );
				}
			} else {
				$this->write_swift_object( $srcPath, $dstc, $dstRel);
				// php-cloudfiles throws exceptions, so failure never gets here.
				if ( $flags & self::DELETE_SOURCE ) {
					unlink ( $srcPath );
				}		
			}

			if ( !( $flags & self::SKIP_VALIDATION ) ) {
				// FIXME: Swift will return the MD5 of the data written.
				if (0) { // ( $hashDest === false || $hashSource !== $hashDest ) 
					wfDebug( __METHOD__ . ': File copy validation failed: ' . 
						"$srcPath ($hashSource) to $dstPath ($hashDest)\n" );
					
					$status->error( 'filecopyerror', $srcPath, $dstPath );
					$good = false;
				}
			}
			if ( $good ) {
				$status->successCount++;
			} else {
				$status->failCount++;
			}
			$status->success[$i] = $good;
		}
		return $status;
	}

	/**
	 * Append the contents of the source path to the given file, OR queue
	 * the appending operation in anticipation of a later appendFinish() call.
	 * @param $srcPath String: location of the source file
	 * @param $toAppendPath String: path to append to.
	 * @param $flags Integer: bitfield, may be FileRepo::DELETE_SOURCE to indicate
	 *        that the source file should be deleted if possible
	 * @return mixed Status or false
	 */

	function append( $srcPath, $toAppendPath, $flags = 0 ){
		throw new MWException( __METHOD__.": Not yet implemented." );
		// I think we need to count the number of files whose names
		// start with $toAppendPath, then add that count (with leading zeroes) to
		// the end of $toAppendPath and write the chunk there.

		// Count the number of files whose names start with $toAppendPath
		$conn = $this->connect();
		$container = $this->repo->get_container($conn,$this->repo->container . "%2Ftemp");
		$nextone = count($container->list_objects(0, NULL, $srcPath));

		// Do the append to the next name
		$status = $this->store( $srcPath, 'temp', sprintf("%s.%05d", $toAppendPath, $nextone) );
	
		if ( $flags & self::DELETE_SOURCE ) {
			unlink( $srcPath );
		}

		return $status;
	}
	/**
	 * Finish the append operation.
	 * @param $toAppendPath String: path to append to.
	 */
	function appendFinish( $toAppendPath ){
		$conn = $this->connect();
		$container = $this->repo->get_container( $conn,$this->repo->container . "%2Ftemp" );
		$parts = $container->list_objects( 0, NULL, $srcPath );
		// list_objects() returns a sorted list.

		// The first object as the same name as the destination, so
		// we read it into memory and then write it out as the first chunk.
		$obj = $container->get_object( array_shift($parts) );
		$first = $obj->read();

		$biggie = $container->create_object( $toAppendPath );
		$biggie->write( $first );

		foreach ( $parts as $part ) {
			$obj = $container->get_object( $part );
			$biggie->write( $obj->read() );
		}
		return newGood();
	}

	/**
	 * Move a group of files to the deletion archive.
	 * If no valid deletion archive is configured, this may either delete the
	 * file or throw an exception, depending on the preference of the repository.
	 *
	 * @param $sourceDestPairs Array of source/destination pairs. Each element
	 *        is a two-element array containing the source file path relative to the
	 *        public root in the first element, and the archive file path relative
	 *        to the deleted zone root in the second element.
	 * @return FileRepoStatus
	 */
	function deleteBatch( $sourceDestPairs ) {
		wfDebug(  __METHOD__ . " deleting " . var_export($sourceDestPairs, true) . "\n");

		/**
		 * Move the files
		 */
		$triplets = array();
		foreach ( $sourceDestPairs as $pair ) {
			list( $srcRel, $archiveRel ) = $pair;

			$triplets[] = array( "mwrepo://{$this->name}/public/$srcRel", 'deleted', $archiveRel );
			
		}
		$status = $this->storeBatch( $triplets, FileRepo::OVERWRITE_SAME | FileRepo::DELETE_SOURCE );
		return $status;
	}


	function newFromArchiveName( $title, $archiveName ) {
		return OldSwiftFile::newFromArchiveName( $title, $this, $archiveName );
	}

	/**
	 * Checks existence of specified array of files.
	 *
	 * @param $files Array: URLs of files to check
	 * @param $flags Integer: bitwise combination of the following flags:
	 *     self::FILES_ONLY     Mark file as existing only if it is a file (not directory)
	 * @return Either array of files and existence flags, or false
	 */
	function fileExistsBatch( $files, $flags = 0 ) {
		if ($flags != self::FILES_ONLY) {
			// we ONLY support when $flags & self::FILES_ONLY is set!
			throw new MWException( "Swift Media Store doesn't have directories");
		}
		$result = array();
		$conn = $this->connect();

		foreach ( $files as $key => $file ) {
			if ( !self::isVirtualUrl( $file ) ) {
				throw new MWException( __METHOD__ . " requires a virtual URL, not '$file'");
			}
			$rvu = $this->getContainerRel( $file );
			list ($cont, $rel) = $rvu;
			$container = $this->get_container($conn,$cont);
			try {
				$obj = $container->get_object($rel);
				$result[$key] = true;
			} catch (NoSuchObjectException $e) {
				$result[$key] = false;
			}
		}

		return $result;
	}


	// FIXME: do we really need to reject empty titles?
	function newFile( $title, $time = false ) {
		if ( empty($title) ) { return null; }
		return parent::newFile( $title, $time );
	}

	/**
	 * Copy a file from one place to another place in the same container
	 * @param $srcContainer CF_Container
	 * @param $srcRel String: relative path to the source file.
	 * @param $dstContainer CF_Container
	 * @param $dstRel String: relative path to the destination.
	 */
	function swiftcopy($srcContainer, $srcRel, $dstContainer, $dstRel ) {
		// The destination must exist already.
		$obj = $dstContainer->create_object($dstRel);
		$obj->content_type = "text/plain";

		try {
			$obj->write(".");
		} catch (SyntaxException $e ) {
			throw new MWException( "Write failed: $e" );
		} catch (BadContentTypeException $e ) {
			throw new MWException( "Missing Content-Type: $e" );
		} catch (MisMatchedChecksumException $e ) {
			throw new MWException( __METHOD__ . "should not happen: '$e'" );
		} catch (InvalidResponseException $e ) {
			throw new MWException( __METHOD__ . "unexpected response '$e'" );
		}

		try {
			$obj = $dstContainer->get_object($dstRel);
		} catch (NoSuchObjectException $e) {
			throw new MWException( "The object we just created does not exist: " . $dstContainer->name . "/$dstRel: $e" );
		}

		wfDebug( __METHOD__ . " copying to " . $dstContainer->name . "/" . $dstRel . " from " . $srcContainer->name . "/" . $srcRel . "\n");

		try {
			$obj->copy($srcContainer->name . "/" . $srcRel);
		} catch (SyntaxException $e ) {
			throw new MWException( "Source file does not exist: " . $srcContainer->name . "/$srcRel: $e" );
		} catch (MisMatchedChecksumException $e ) {
			throw new MWException( "Checksums do not match: $e" );
		} catch (InvalidResponseException $e ) {
			throw new MWException( __METHOD__ . "unexpected response '$e'" );
		}
	}

	/**
	 * Publish a batch of files
	 * @param $triplets Array: (source,dest,archive) triplets as per publish()
	 * @param $flags Integer: bitfield, may be FileRepo::DELETE_SOURCE to indicate
	 *        that the source files should be deleted if possible
	 */
	function publishBatch( $triplets, $flags = 0 ) {
		$conn = $this->connect();
		$container = $this->get_container($conn,$this->container);

		# paranoia
		$status = $this->newGood( array() );
		foreach ( $triplets as $i => $triplet ) {
			list( $srcPath, $dstRel, $archiveRel ) = $triplet;

			if ( !$this->validateFilename( $dstRel ) ) {
				throw new MWException( "Validation error in $dstRel" );
			}
			if ( !$this->validateFilename( $archiveRel ) ) {
				throw new MWException( "Validation error in $archiveRel" );
			}
			if ( !is_file( $srcPath ) ) {
				// Make a list of files that don't exist for return to the caller
				$status->fatal( 'filenotfound', $srcPath );
			}
		}

		if ( !$status->ok ) {
			return $status;
		}

		foreach ( $triplets as $i => $triplet ) {
			list( $srcPath, $dstRel, $archiveRel ) = $triplet;

			// Archive destination file if it exists
			try {
				$pic = $container->get_object($dstRel);
			} catch (NoSuchObjectException $e) {
				$pic = NULL;
			}
			if( $pic ) {
				$this->swiftcopy($container, $dstRel, $container, $archiveRel );
				wfDebug(__METHOD__.": moved file $dstRel to $archiveRel\n");
				$status->value[$i] = 'archived';
			} else {
				$status->value[$i] = 'new';
			}

			$good = true;
			$this->write_swift_object( $srcPath, $container, $dstRel);
			// php-cloudfiles throws exceptions, so failure never gets here.
			if ( $flags & self::DELETE_SOURCE ) {
				unlink ( $srcPath );
			}		

			if ( $good ) {
				$status->successCount++;
				wfDebug(__METHOD__.": wrote tempfile $srcPath to $dstRel\n");
			} else {
				$status->failCount++;
			}
		}
		return $status;
	}

	/**
	 * Deletes a batch of files. Each file can be a (zone, rel) pairs, a
	 * virtual url or a real path. It will try to delete each file, but 
	 * ignores any errors that may occur
	 * 
	 * @param $pairs array List of files to delete
	 */
	function cleanupBatch( $files ) {
		$conn = $this->connect();
		foreach ( $files as $file ) {
			if ( is_array( $file ) ) {
				// This is a pair, extract it
				list( $cont, $rel ) = $file;
			} else {
				if ( self::isVirtualUrl( $file ) ) {
					// This is a virtual url, resolve it 
					$path = $this->getContainerRel( $file );
					list( $cont, $rel) = $path;
				} else {
					// FIXME: This is a full file name
					throw new MWException( __METHOD__.": $file needs an unlink()" );
				}
			}
			
			wfDebug( __METHOD__.": $cont/$rel\n" );
			$container = $this->get_container($conn,$cont);
			$this->swift_delete( $container, $rel );
		}
	}

	/**
	 * Delete files in the deleted directory if they are not referenced in the
	 * filearchive table. This needs to be done in the repo because it needs to
	 * interleave database locks with file operations, which is potentially a
	 * remote operation.
	 * @return FileRepoStatus
	 */
	function cleanupDeletedBatch( $storageKeys ) {
		$conn = $this->connect();
		$cont = $this->getZoneContainer( 'deleted' );
		$container = $this->get_container($conn,$cont);

		$dbw = $this->getMasterDB();
		$status = $this->newGood();
		$storageKeys = array_unique($storageKeys);
		foreach ( $storageKeys as $key ) {
			$hashPath = $this->getDeletedHashPath( $key );
			$rel = "$hashPath$key";
			$dbw->begin();
			$inuse = $dbw->selectField( 'filearchive', '1',
				array( 'fa_storage_group' => 'deleted', 'fa_storage_key' => $key ),
				__METHOD__, array( 'FOR UPDATE' ) );
			if( !$inuse ) {
				$sha1 = self::getHashFromKey( $key );
				$ext = substr( $key, strcspn( $key, '.' ) + 1 );
				$ext = File::normalizeExtension($ext);
				$inuse = $dbw->selectField( 'oldimage', '1',
					array( 'oi_sha1' => $sha1,
						'oi_archive_name ' . $dbw->buildLike( $dbw->anyString(), ".$ext" ),
						$dbw->bitAnd('oi_deleted', File::DELETED_FILE) => File::DELETED_FILE ),
					__METHOD__, array( 'FOR UPDATE' ) );
			}
			if ( !$inuse ) {
				wfDebug( __METHOD__ . ": deleting $key\n" );
				$this->swift_delete( $container, $rel );
			} else {
				wfDebug( __METHOD__ . ": $key still in use\n" );
				$status->successCount++;
			}
			$dbw->commit();
		}
		return $status;
	}

	/**
	 * Makes no sense in our context -- don't let anybody call it.
	 */
	function getZonePath( $zone ) {
		throw new MWException( __METHOD__.": not implemented" );
	}

	/**
	 * Get the Swift container corresponding to one of the three basic zones
	 */
	function getZoneContainer( $zone ) {
		switch ( $zone ) {
			case 'public':
				return $this->container;
			case 'temp':
				return $this->container . "%2Ftemp";
			case 'deleted':
				return $this->container . "%2Fdeleted";
			case 'thumb':
				return $this->container . "%2Fthumb";
			default:
				return false;
		}
	}
	/**
	 * Remove a temporary file or mark it for garbage collection
	 * @param $virtualUrl String: the virtual URL returned by storeTemp
	 * @return Boolean: true on success, false on failure
	 */
	function freeTemp( $virtualUrl ) {
		$temp = "mwrepo://{$this->name}/temp";
		if ( substr( $virtualUrl, 0, strlen( $temp ) ) != $temp ) {
			wfDebug( __METHOD__.": Invalid virtual URL\n" );
			return false;
		}
		$path = $this->getContainerRel( $virtualUrl );
		list ($c, $r) = $path;
		$conn = $this->connect();
		$container = $this->get_container($conn,$c);
		$this->swift_delete($container, $r);
	}

	/**
	 * Get an UploadStash associated with this repo.
	 *
	 * @return UploadStash
	 */
	function getUploadStash() {
		return new SwiftStash( $this );
	}
}

class SwiftStash extends UploadStash {
}

class SwiftStashFile extends UploadStashFile {
}

/**
 * Old file in the in the oldimage table
 *
 * @file
 * @ingroup FileRepo
 */

/**
 * Class to represent a file in the oldimage table
 *
 * @ingroup FileRepo
 */
class OldSwiftFile extends SwiftFile {
	var $requestedTime, $archive_name;

	const CACHE_VERSION = 1;
	const MAX_CACHE_ROWS = 20;

	static function newFromTitle( $title, $repo, $time = null ) {
		# The null default value is only here to avoid an E_STRICT
		if( $time === null )
			throw new MWException( __METHOD__.' got null for $time parameter' );
		return new self( $title, $repo, $time, null );
	}

	static function newFromArchiveName( $title, $repo, $archiveName ) {
		return new self( $title, $repo, null, $archiveName );
	}

	static function newFromRow( $row, $repo ) {
		$title = Title::makeTitle( NS_FILE, $row->oi_name );
		$file = new self( $title, $repo, null, $row->oi_archive_name );
		$file->loadFromRow( $row, 'oi_' );
		return $file;
	}

	/**
	 * @static
	 * @param  $sha1
	 * @param $repo LocalRepo
	 * @param bool $timestamp
	 * @return bool|OldLocalFile
	 */
	static function newFromKey( $sha1, $repo, $timestamp = false ) {
		$conds = array( 'oi_sha1' => $sha1 );
		if( $timestamp ) {
			$conds['oi_timestamp'] = $timestamp;
		}
		$dbr = $repo->getSlaveDB();
		$row = $dbr->selectRow( 'oldimage', self::selectFields(), $conds, __METHOD__ );
		if( $row ) {
			return self::newFromRow( $row, $repo );
		} else {
			return false;
		}
	}
	
	/**
	 * Fields in the oldimage table
	 */
	static function selectFields() {
		return array(
			'oi_name',
			'oi_archive_name',
			'oi_size',
			'oi_width',
			'oi_height',
			'oi_metadata',
			'oi_bits',
			'oi_media_type',
			'oi_major_mime',
			'oi_minor_mime',
			'oi_description',
			'oi_user',
			'oi_user_text',
			'oi_timestamp',
			'oi_deleted',
			'oi_sha1',
		);
	}

	/**
	 * @param $title Title
	 * @param $repo FileRepo
	 * @param $time String: timestamp or null to load by archive name
	 * @param $archiveName String: archive name or null to load by timestamp
	 */
	function __construct( $title, $repo, $time, $archiveName ) {
		parent::__construct( $title, $repo );
		$this->requestedTime = $time;
		$this->archive_name = $archiveName;
		if ( is_null( $time ) && is_null( $archiveName ) ) {
			throw new MWException( __METHOD__.': must specify at least one of $time or $archiveName' );
		}
	}

	function getCacheKey() {
		return false;
	}

	function getArchiveName() {
		if ( !isset( $this->archive_name ) ) {
			$this->load();
		}
		return $this->archive_name;
	}

	function isOld() {
		return true;
	}

	function isVisible() {
		return $this->exists() && !$this->isDeleted(File::DELETED_FILE);
	}

	function loadFromDB() {
		wfProfileIn( __METHOD__ );
		$this->dataLoaded = true;
		$dbr = $this->repo->getSlaveDB();
		$conds = array( 'oi_name' => $this->getName() );
		if ( is_null( $this->requestedTime ) ) {
			$conds['oi_archive_name'] = $this->archive_name;
		} else {
			$conds[] = 'oi_timestamp = ' . $dbr->addQuotes( $dbr->timestamp( $this->requestedTime ) );
		}
		$row = $dbr->selectRow( 'oldimage', $this->getCacheFields( 'oi_' ),
			$conds, __METHOD__, array( 'ORDER BY' => 'oi_timestamp DESC' ) );
		if ( $row ) {
			$this->loadFromRow( $row, 'oi_' );
		} else {
			$this->fileExists = false;
		}
		wfProfileOut( __METHOD__ );
	}

	function getCacheFields( $prefix = 'img_' ) {
		$fields = parent::getCacheFields( $prefix );
		$fields[] = $prefix . 'archive_name';
		$fields[] = $prefix . 'deleted';
		return $fields;
	}

	function getRel() {
		return 'archive/' . $this->getHashPath() . $this->getArchiveName();
	}

	function getUrlRel() {
		return 'archive/' . $this->getHashPath() . rawurlencode( $this->getArchiveName() );
	}

	function upgradeRow() {
		wfProfileIn( __METHOD__ );
		$this->loadFromFile();

		# Don't destroy file info of missing files
		if ( !$this->fileExists ) {
			wfDebug( __METHOD__.": file does not exist, aborting\n" );
			wfProfileOut( __METHOD__ );
			return;
		}

		$dbw = $this->repo->getMasterDB();
		list( $major, $minor ) = self::splitMime( $this->mime );

		wfDebug(__METHOD__.': upgrading '.$this->archive_name." to the current schema\n");
		$dbw->update( 'oldimage',
			array(
				'oi_width' => $this->width,
				'oi_height' => $this->height,
				'oi_bits' => $this->bits,
				'oi_media_type' => $this->media_type,
				'oi_major_mime' => $major,
				'oi_minor_mime' => $minor,
				'oi_metadata' => $this->metadata,
				'oi_sha1' => $this->sha1,
			), array(
				'oi_name' => $this->getName(),
				'oi_archive_name' => $this->archive_name ),
			__METHOD__
		);
		wfProfileOut( __METHOD__ );
	}

	/**
	 * @param $field Integer: one of DELETED_* bitfield constants
	 *               for file or revision rows
	 * @return bool
	 */
	function isDeleted( $field ) {
		$this->load();
		return ($this->deleted & $field) == $field;
	}

	/**
	 * Returns bitfield value
	 * @return int
	 */
	function getVisibility() {
		$this->load();
		return (int)$this->deleted;
	}

	/**
	 * Determine if the current user is allowed to view a particular
	 * field of this image file, if it's marked as deleted.
	 *
	 * @param $field Integer
	 * @return bool
	 */
	function userCan( $field ) {
		$this->load();
		return Revision::userCanBitfield( $this->deleted, $field );
	}
}
