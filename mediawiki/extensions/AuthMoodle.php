<?php
# AuthMoodle.php
# Copyright (c) 2006 Martin Dougiamas <martin@moodle.com>
#
# Derived from AuthPress.php
# Copyright (C) 2005 Rob Lanphier <robla@robla.net>
# Version 0.2.0 - July 26, 2005
# Authenticate MediaWiki users against a bbPress (and possibly WordPress)
# database
#
# Usage instructions, release notes, and other stuff:
# http://codex.wordpress.org/User:RobLa/AuthPress_for_MediaWiki
#
# Derived from AuthPlugin.php
# Copyright (C) 2004 Brion Vibber <brion@pobox.com>
# http://www.mediawiki.org/
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License along
# with this program; if not, write to the Free Software Foundation, Inc.,
# 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
# http://www.gnu.org/copyleft/gpl.html

require_once('AuthPlugin.php');


class AuthMoodle extends AuthPlugin {

	var $mAuthMoodleTablePrefix = '';
	var $mUseSeparateAuthMoodleDB = true;
	var $mAuthMoodleDBType;
	var $mAuthMoodleDBServer;
	var $mAuthMoodleDBName;
	var $mAuthMoodleUser;
	var $mAuthMoodlePassword;
	var $mAuthMoodleSalt;
    var $mAuthMoodleMnethostid = 10;
	var $mAuthMoodleDBconn = -1;
	
	function AuthMoodle () {
		global $wgDBserver, $wgDBname, $wgDBuser, $wgDBpassword;

		$this->mAuthMoodleDBServer=$wgDBserver;
		$this->mAuthMoodleDBName=$wgDBname;
		$this->mAuthMoodleUser=$wgDBuser;
		$this->mAuthMoodlePassword=$wgDBpassword;
	}

	function setAuthMoodleDBType( $type ) {
		$this->mAuthMoodleDBType = $type;
	}

	function setAuthMoodleTablePrefix ( $prefix ) {
		$this->mAuthMoodleTablePrefix=$prefix;
	}

	function getAuthMoodleUserTableName () {
		return $this->mAuthMoodleTablePrefix."user";
	}

	function setAuthMoodleDBServer ($server) {
		$this->mUseSeparateAuthMoodleDB=true;
		$this->mAuthMoodleDBServer=$server;
	}

	function setAuthMoodleDBName ($dbname) {
		$this->mUseSeparateAuthMoodleDB=true;
		$this->mAuthMoodleDBName=$dbname;
	}

	function setAuthMoodleUser ($user) {
		$this->mUseSeparateAuthMoodleDB=true;
		$this->mAuthMoodleUser=$user;
	}

	function setAuthMoodlePassword ($password) {
		$this->mUseSeparateAuthMoodleDB=true;
		$this->mAuthMoodlePassword=$password;
	}

    function setAuthMoodleSalt ($salt) {
		$this->mUseSeparateAuthMoodleDB=true;
        $this->mAuthMoodleSalt=$salt;
    }

    function setAuthMoodleMnethostid ($mnethostid) {
		$this->mUseSeparateAuthMoodleDB=true;
        $this->mAuthMoodleMnethostid=$mnethostid;
    }

	function &getAuthMoodleDB () {
		if( $this->mUseSeparateAuthMoodleDB ) {
			if(! is_object($this->mAuthMoodleDBconn) ) {
				$this->mAuthMoodleDBconn =
					DatabaseBase::factory( $this->mAuthMoodleDBType,
						array(
							'host'        => $this->mAuthMoodleDBServer,
							'user'        => $this->mAuthMoodleUser,
							'password'    => $this->mAuthMoodlePassword,
							'dbname'      => $this->mAuthMoodleDBName,
							'tablePrefix' => $this->mAuthMoodleTablePrefix,
						)
					);
				if ( is_null( $this->mAuthMoodleDBconn ) ) {
					echo( "Error - can not connect to the authentication database!" );
					die();
				}
			}
            $this->mAuthMoodleDBconn->query( 'SET NAMES utf8' );
			return $this->mAuthMoodleDBconn;
		}
		else {
			return wfGetDB( DB_SLAVE );		
		}
	}

	/* Interface documentation copied in from AuthPlugin */
	/**
	 * Check whether there exists a user account with the given name.
	 * The name will be normalized to MediaWiki's requirements, so
	 * you might need to munge it (for instance, for lowercase initial
	 * letters).
	 *
	 * @param string $username
	 * @return bool
	 * @access public
	 */
	function userExists( $username ) {
		$dbr =& $this->getAuthMoodleDB();

        //Start Moodle Mod - Hack to revert silly mediawiki conversion of underscores to whitespaces on usernames
        $username = str_replace(' ', '_', $username);
        //End Mod
		
		$res = $dbr->selectRow($this->getAuthMoodleUserTableName(),
				       "username",
				       "username=".$dbr->addQuotes($username) . " and mnethostid=". $this->mAuthMoodleMnethostid ." and confirmed=1",
				       //"concat(firstname,' ',lastname) = ".$dbr->addQuotes($username),
				       "AuthMoodle::authenticate" );

		if($res) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * Check if a username+password pair is a valid login.
	 * The name will be normalized to MediaWiki's requirements, so
	 * you might need to munge it (for instance, for lowercase initial
	 * letters).
	 *
	 * @param string $username
	 * @param string $password
	 * @return bool
	 * @access public
	 */
	function authenticate( $username, $password ) {
		$dbr =& $this->getAuthMoodleDB();

        //Start Moodle Mod - Hack to revert silly mediawiki conversion of underscores to whitespaces on usernames
        $username = str_replace(' ', '_', $username);
        //End Mod

		$res = $dbr->selectRow($this->getAuthMoodleUserTableName(),
				       array("password", "firstname", "lastname"),
                       //Start Moodle Mod - User must be confirmed in moodle.org
				       //Commented line:"username=".$dbr->addQuotes($username),
				       "username=".$dbr->addQuotes($username)." and mnethostid=". $this->mAuthMoodleMnethostid ." and confirmed=1",
                       //End Mod
				       "AuthMoodle::authenticate" );
		// Start Moodle Mod - User cannot be "guest", trying all the historically allowed passords in moodle.org.
		if ($res && strtolower($username) != 'guest' &&
				$this->verify_pass_with_moodleorg_hash($password, $res->password)) {
		//Commented line:if( $res && ( $res->password == MD5( $password ))) {
		// End Mod.
			return true;
		} else {
			return false;
		}
	}

	// Start Moodle Mod - Add function in charge of validating passwords - (both old md5() and new crypt() ones).
	/**
	 * Verify introduced password and moodle.org hash match.
	 *
	 * Using different methods, verify that the introduced password
	 * matches the existing hash in moodle.org database, attempting the
	 * following methods (from current to older):
	 *  - crypt() based hashing.
	 *  - md5() with site salt.
	 *  - md5() without salt.
	 *
	 * @param string $password The password introduced by the user.
	 * @param string $hash The hash @ moodle.org database to verify against.
	 * @return boolen If the password matches the hash (true) or no (false).
	 */
	private function verify_pass_with_moodleorg_hash($password, $hash) {
		// First, try the new crypt() passwords.
		// Code borrowed from password_verify() in moodle 2.5 codebase
		// with some changes in logic to allow it to continue to fallback methods.
		if (function_exists('crypt')) {
			$ret = crypt($password, $hash);
			if (is_string($ret) and strlen($ret) == strlen($hash) and strlen($ret) > 13) {
				$status = 0;
				for ($i = 0; $i < strlen($ret); $i++) {
					$status |= (ord($ret[$i]) ^ ord($hash[$i]));
				}
				if ($status === 0) {
					return true;
				}
			}
		}
		// Then, fallback to the older md5() with salt passwords.
		if ($hash === md5($password . $this->mAuthMoodleSalt)) {
			return true;
		}
		// Finally, fallback to the oldest md5() without salt.
		if ($hash === md5($password)) {
			return true;
		}
		// Arrived here, no match, so wrong pass.
		return false;
	}
	// End Mod
		    
	
	/**
	 * Modify options in the login template.
	 *
	 * @param UserLoginTemplate $template
	 * @access public
	 */
	function modifyUITemplate( &$template, &$type ) {
		$template->set( 'usedomain', false );
		$template->set( 'useemail', false );
		$template->set( 'create', false );
	}

	/**
	 * Set the domain this plugin is supposed to use when authenticating.
	 *
	 * @param string $domain
	 * @access public
	 */
	function setDomain( $domain ) {
		$this->domain = $domain;
	}

	/**
	 * Check to see if the specific domain is a valid domain.
	 *
	 * @param string $domain
	 * @return bool
	 * @access public
	 */
	function validDomain( $domain ) {
		# Override this!
		return true;
	}

	/**
	 * When a user logs in, optionally fill in preferences and such.
	 * For instance, you might pull the email address or real name from the
	 * external user database.
	 *
	 * The User object is passed by reference so it can be modified; don't
	 * forget the & on your function declaration.
	 *
	 * @param User $user
	 * @access public
	 */
	function updateUser( &$user ) {

		$dbr =& $this->getAuthMoodleDB();

        //Start Moodle Mod - Hack to revert silly mediawiki conversion of underscores to whitespaces on usernames
        $username = str_replace(' ', '_', $user->mName);
        //End Mod

		$res = $dbr->selectRow($this->getAuthMoodleUserTableName(),
				       array("firstname", "lastname", "email"),
				       "username=". $dbr->addQuotes($username) . " and mnethostid=". $this->mAuthMoodleMnethostid ." and confirmed=1",
				       "AuthMoodle::authenticate" );
		
		if($res) {
            $mwdbr =& wfGetDB( DB_SLAVE );
			$user->setEmail( $res->email );
            /// Realname hack - If real name exists in DB, add 2, 3, 4... until no duplicate was found (limited to 10 to avoid infinite loops for any reason)
            if ( !$user->getRealName() || $user->getRealName() == $user->getName() ) { //Only the 1st time (when no realname or realname = username)  // Also see MDLSITE-1293
                $realname = $res->firstname.' '.$res->lastname;
                $completerealname = $realname;
                $counter = 1;
                while ($mwdbr->selectField( 'user', 'user_name', array( 'user_real_name' => $completerealname) ) and $counter < 10 ) {
                    $counter ++;
                    $completerealname = $realname.' '.$counter;
                }
			    $user->setRealName( $completerealname );
            }
            $user->saveSettings(); // This must go out, once https://bugzilla.wikimedia.org/show_bug.cgi?id=13963 is fixed in mediawiki 
            /// Realname hack - end
		}

		return true;
	}


	/**
	 * Return true if the wiki should create a new local account automatically
	 * when asked to login a user who doesn't exist locally but does in the
	 * external auth database.
	 *
	 * If you don't automatically create accounts, you must still create
	 * accounts in some way. It's not possible to authenticate without
	 * a local account.
	 *
	 * This is just a question, and shouldn't perform any actions.
	 *
	 * @return bool
	 * @access public
	 */
	function autoCreate() {
		return true;
	}

    /**
     * Can users change their passwords?
     *
     * @return bool
     */
    function allowPasswordChange() {
        return false;
    }
	
	/**
	 * Set the given password in the authentication database.
	 * Return true if successful.
	 *
	 * @param string $password
	 * @return bool
	 * @access public
	 */
	function setPassword( $user, $password ) {
		# we probably don't want users using MW to change password
		return false;
	}

	/**
	 * Update user information in the external authentication database.
	 * Return true if successful.
	 *
	 * @param User $user
	 * @return bool
	 * @access public
	 */
	function updateExternalDB( $user ) {
		# we probably don't want users using MW to change other stuff
		return false;
	}

	/**
	 * Check to see if external accounts can be created.
	 * Return true if external accounts can be created.
	 * @return bool
	 * @access public
	 */
	function canCreateAccounts() {
		return false;
	}

	/**
	 * Add a user to the external authentication database.
	 * Return true if successful.
	 *
	 * @param User $user
	 * @param string $password
	 * @return bool
	 * @access public
	 */
	function addUser( $user, $password, $email='', $realname='' ) {
		# disabling
		return false;
	}


	/**
	 * Return true to prevent logins that don't authenticate here from being
	 * checked against the local database's password fields.
	 *
	 * This is just a question, and shouldn't perform any actions.
	 *
	 * @return bool
	 * @access public
	 */
	function strict() {
		return true;
	}
	
	/**
	 * When creating a user account, optionally fill in preferences and such.
	 * For instance, you might pull the email address or real name from the
	 * external user database.
	 *
	 * The User object is passed by reference so it can be modified; don't
	 * forget the & on your function declaration.
	 *
	 * @param User $user
	 * @access public
	 */
	function initUser( &$user, $autocreate=false ) {
		/* User's email is already authenticated, because:
		 * A.  They have valid bbMoodle account
		 * B.  bbMoodle emailed them the password
		 * C.  They are logged in (presumably using that password
		 * If something changes about the bbMoodle email verification,
		 * then this function might need changing, too
		 */
		$user->mEmailAuthenticated = wfTimestampNow();

		/* Everything else is in updateUser */
		$this->updateUser( $user );
	}

	/**
	 * If you want to munge the case of an account name before the final
	 * check, now is your chance.
	 */
	function getCanonicalName ( $username ) {
		// connecting to MediaWiki database for this check 		
		$dbr =& wfGetDB( DB_SLAVE );
		
		// This no longer works with BINARY tables, the new default in mediawiki
		//$res = $dbr->selectRow('user',array("user_name"),"lower(user_name)=lower(".$dbr->addQuotes($username).")","AuthMoodle::getCanonicalName" );

                $res = $dbr->selectRow('user',
                                       array("user_name"),
                                       "LOWER(CONVERT(user_name USING LATIN1)) COLLATE latin1_swedish_ci=lower(".
                                         $dbr->addQuotes($username).")",
                                       "AuthMoodle::getCanonicalName" );

		if($res) {
			return $res->user_name;
		} else {
			return $username;
		}
	}

	/**
	 * Does this auth plugin allow the real name change at the preferences page?
	 *
	 * @see parent::allowPropChange()
	 * @return bool
	 */
	public function allowRealNameChange() {
		return false;
	}

	/**
	 * Does this auth plugin allow the email change at the preferences page?
	 *
	 * @see parent::allowPropChange()
	 * @return bool
	 */
	public function allowEmailChange() {
		return false;
	}

	/**
	 * Does this auth plugin allow the signature change at the preferences page?
	 *
	 * @see parent::allowPropChange()
	 * @return bool
	 */
	public function allowNickChange() {
		return false;
	}
}
