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
	
	var $mAuthMoodleTablePrefix="bb_";
	var $mUseSeparateAuthMoodleDB=false;
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
					new Database($this->mAuthMoodleDBServer,
								$this->mAuthMoodleUser,
								$this->mAuthMoodlePassword, 
								$this->mAuthMoodleDBName	); 
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
        //Start Moodle Mod - User cannot be "guest", try both with and without salt
		if( $res && strtolower($username) != 'guest' &&
              ( $res->password == MD5( $password . $this->mAuthMoodleSalt) || $res->password == MD5( $password ))) {
		//Commented line:if( $res && ( $res->password == MD5( $password ))) {
        //End Mod
			return true;
		} else {
			return false;
		}
	}
		    
	
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

}
?>
