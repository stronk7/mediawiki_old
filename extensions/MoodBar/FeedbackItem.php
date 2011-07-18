<?php

/**
 * This class represents a single piece of MoodBar feedback.
 */
class MBFeedbackItem {
	/** Container for the data **/
	protected $data;
	/** Valid data keys **/
	protected $validMembers = array(
			// Feedback essentials
			'id', // ID in the database
			'comment', // The feedback itself
			'page', // The page where it was submitted
			'type',
			
			// Housekeeping
			'timestamp',
			'user', // User object who submitted the feedback
			'anonymize',
			
			// Statistics
			'useragent',
			'system',
			'locale',
			'editmode',
			'bucket',
			'user-editcount',
		);
	
	/** Valid values for the 'type' parameter. **/
	protected static $validTypes = array( 'happy', 'sad', 'confused' );
		
	/**
	 * Default constructor.
	 * Don't use this, use either MBFeedbackItem::newFromRow or MBFeedbackItem::create
	 */
	protected function __construct() {
		$this->data = array_fill_keys( $this->validMembers, null );
		
		// Non-nullable boolean fields
		$this->setProperty('anonymize', false);
		$this->setProperty('editmode', false);
	}
	
	/**
	 * Factory function to create a new MBFeedbackItem
	 * @param $info Associative array of values
	 * Valid keys: type, user, comment, page, flags, timestamp,
	 *             useragent, system, locale, bucket, anonymize
	 * @return MBFeedbackItem object.
	 */
	public static function create( $info ) {
		$newObject = new self();
		$newObject->initialiseNew( $info );
		return $newObject;
	}
	
	/**
	 * Initialiser for new MBFeedbackItems
	 * @param $info Associative array of values
	 * @see MBFeedbackItem::create
	 */
	protected function initialiseNew( $info ) {
		global $wgUser;
		
		$template = array(
			'user' => $wgUser,
			'timestamp' => wfTimestampNow(),
		);
		
		$this->setProperties( $template );
		$this->setProperties( $info );
	}
	
	/**
	 * Factory function to load an MBFeedbackItem from a DB row.
	 * @param $row A row, from DatabaseBase::fetchObject
	 * @return MBFeedback object.
	 */
	public static function load( $row ) {
		$newObject = new self();
		$newObject->initialiseFromRow( $row );
		return $newObject;
	}
	
	/**
	 * Initialiser for MBFeedbackItems loaded from the database
	 * @param $row A row object from DatabaseBase::fetchObject
	 * @see MBFeedbackItem::load
	 */
	protected function initialiseFromRow( $row ) {
		$properties = array(
			'id' => $row->mbf_id,
			'type' => $row->mbf_type,
			'comment' => $row->mbf_comment,
			'timestamp' => $row->mbf_timestamp,
			'anonymize' => $row->mbf_anonymous,
			'useragent' => $row->mbf_user_agent,
			'system' => $row->mbf_system_type,
			'locale' => $row->mbf_locale,
			'bucket' => $row->mbf_bucket,
			'editmode' => $row->mbf_editing,
			'user-editcount' => $row->mbf_user_editcount,
		);
		
		$properties['page'] = Title::makeTitleSafe( $row->mbf_namespace, $row->mbf_title );
		
		if ( $row->mbf_user_id > 0 ) {
			$properties['user'] = User::newFromId( $row->mbf_user_id );
		} else {
			$properties['user'] = User::newFromName( $row->mbf_user_ip );
		}
		
		$this->setProperties( $properties );
	}
	
	/**
	 * Set a group of properties. Throws an exception on invalid property.
	 * @param $values An associative array of properties to set.
	 */
	public function setProperties( $values ) {
		foreach( $values as $key => $value ) {
			if ( ! $this->isValidKey($key) ) {
				throw new MWException( "Attempt to set invalid property $key" );
			}
			
			if ( ! $this->validatePropertyValue($key, $value) ) {
				throw new MWException( "Attempt to set invalid value for $key" );
			}
			
			if ( $key == 'user' ) {
				if ( $user->isAnon() ) {
					$this->setProperty( 'user-editcount', 0 );
				} else {
					$this->setProperty( 'user-editcount', $user->edits() );
				}
			}
			
			$this->data[$key] = $value;
		}
	}
	
	/**
	 * Set a group of values.
	 * @param $key The property to set.
	 * @param $value The value to give it.
	 */
	public function setProperty( $key, $value ) {
		$this->setProperties( array( $key => $value ) );
	}
	
	/**
	 * Get a property.
	 * @param $key The property to get
	 * @return The property value.
	 */
	public function getProperty( $key ) {
		if ( ! $this->isValidKey($key) ) {
			throw new MWException( "Attempt to get invalid property $key" );
		}
		
		return $this->data[$key];
	}
	
	/**
	 * Check a property key for validity.
	 * If a property key is valid, it will be prefilled to NULL.
	 * @param $key The property key to check.
	 */
	public function isValidKey( $key ) {
		return in_array( $key, $this->validMembers );
	}
	
	/**
	 * Check if a property value is valid for that property
	 * @param $key The key of the property to check.
	 * @param $value The value to check
	 * @return Boolean
	 */
	public function validatePropertyValue( $key, $value ) {
		if ( $key == 'user' ) {
			return $value instanceof User;
		} elseif ( $key == 'page' ) {
			return $value instanceof Title;
		} elseif ( $key == 'type' ) {
			return in_array( $value, self::$validTypes );
		}
		
		return true;
	}
	
	/**
	 * Writes this MBFeedbackItem to the database.
	 * Throws an exception if this it is already in the database.
	 * @return The MBFeedbackItem's new ID.
	 */
	public function save() {
	
		if ( $this->getProperty('id') != null ) {
			throw new MWException( "This ".__CLASS__." is already in the database." );
		}
		
		$dbw = wfGetDB( DB_MASTER );
		
		$row = array(
			'mbf_id' => $dbw->nextSequenceValue( 'moodbar_feedback_mbf_id' ),
			'mbf_type' => $this->getProperty('type'),
			'mbf_comment' => $this->getProperty('comment'),
			'mbf_timestamp' => $dbw->timestamp($this->getProperty('timestamp')),
			'mbf_anonymous' => $this->getProperty('anonymize'),
			'mbf_user_agent' => $this->getProperty('useragent'),
			'mbf_system_type' => $this->getProperty('system'),
			'mbf_locale' => $this->getProperty('locale'),
			'mbf_bucket' => $this->getProperty('bucket'),
			'mbf_editing' => $this->getProperty('editmode'),
			'mbf_user_editcount' => $this->getProperty('user-editcount'),
		);
		
		$user = $this->getProperty('user');
		if ( $user->isAnon() ) {
			$row['mbf_user_id'] = 0;
			$row['mbf_user_ip'] = $user->getName();
		} else {
			$row['mbf_user_id'] = $user->getId();
		}
		
		$page = $this->getProperty('page');
		if ( $page ) {
			$row['mbf_namespace'] = $page->getNamespace();
			$row['mbf_title'] = $page->getDBkey();
		}
		
		$dbw->insert( 'moodbar_feedback', $row, __METHOD__ );
		
		$this->setProperty( 'id', $dbw->insertId() );
		
		return $this->getProperty('id');
	}
	
	/**
	 * Gets the valid types of a feedback item.
	 */
	public static function getValidTypes() {
		return self::$validTypes;
	}
	
}
