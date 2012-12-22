<?php

if (!defined( 'MEDIAWIKI')) {
        die('This file is a MediaWiki extension, it is not a valid entry point');
}

class realusernames {

    /**
     * Let's cache the already found username => realusername pairs.
     */
    protected static $realusernames = array();

    /**
     * Replace some text by intercepting the parser:
     *   - userpage-userdoesnotexist: When editing user page. Make it also check for real username.
     *   - ...
     */
    public static function hookParser(&$parser, &$text, &$strip_state) {
        global $wgUser;
        global $wgrealusernames_linktext;
        global $wgrealusernames_linkref;
        global $wgrealusernames_append_username;

        // Nothing to do if text and ref replacement are not enabled.
        if ($wgrealusernames_linktext !== true && $wgrealusernames_linkref !== true) {
            return true;
        }

        // userpage-userdoesnotexist
        if (preg_match('!mw-userpage-userdoesnotexist error!', $text) !== 0) {
            wfDebugLog('realusernames', __METHOD__ . ": Text intercepted " . $text);
            // Get the title, to check if this is a user page being edited/create.
            $title = $parser->getTitle();
            if (in_array($title->getNamespace(), array(NS_USER, NS_USER_TALK))) {
                // This is a real username, in user or talk page, verify it exists in DB.
                $dbr = wfGetDB( DB_SLAVE );
                $s = $dbr->selectRow( 'user', array( 'user_id' ), array( 'user_real_name' => $title->getText() ), __METHOD__ );
                // User exists, don't output the error
                if ( $s !== false ) {
                    $text = '';
                    wfDebugLog('realusernames', __METHOD__ . ": User exists by real username. Cleaning error message");
                } else {
                    wfDebugLog('realusernames', __METHOD__ . ": User does not exist by real username. Keeping error message");
                }
            }
        }

        // Note that signatures cannot be handled here because they are processed on save
        // (pstPass2) and not by the parser itself, so they arrive here already converted. It
        // would be possible to add an ArticlePrepareTextForEdit but instead we have applied
        // a safer and quicker 1-line hack to getUserSig().

        // Others go here...

        return true;
    }

    /**
     * Replace the texts and refs in the personal urls (top-right)
     */
    public static function hookPersonalUrls(array &$personal_urls, Title $title) {
        global $wgUser;
        global $wgrealusernames_linktext;
        global $wgrealusernames_linkref;
        global $wgrealusernames_append_username;

        // Nothing to do if text and ref replacement are not enabled.
        if ($wgrealusernames_linktext !== true && $wgrealusernames_linkref !== true) {
            return true;
        }

        $username = $wgUser->getName();
        wfDebugLog('realusernames', __METHOD__ . ": personal urls received for " . $username);

        // Get the real username for the username
        $realusername = self::get_realusername_from_username($username);
        // Default to username if not realusername is found.
        if ($realusername === '') {
            $realusername = $username;
        } else {
            wfDebugLog('realusernames', __METHOD__ . ": personal urls change ". $username . " to " . $realusername);
        }

        // Let's apply real usernames to the texts.
        if ($wgrealusernames_linktext === true) {
            // To the "userpage" text
            if (isset($personal_urls['userpage'])) {
                if ($personal_urls['userpage']['text'] === $username) {
                    $text = $realusername;
                    // With $wgrealusernames_append_username enabled, users with "block" permissions
                    // see the username together with the real username.
                    if ($wgrealusernames_append_username === true && $wgUser->isAllowed('block')) {
                        $text = $text . ' (' . $username . ')';
                    }
                    $personal_urls['userpage']['text'] = $text;
                }
            }
            // Nothing to change in the "mytalk" text
        }

        // Let's apply real usernames to the hrefs.
        if ($wgrealusernames_linkref === true) {
            // To the "userpage" href
            if (isset($personal_urls['userpage'])) {
                $title = Title::newFromText($realusername, NS_USER);
                if (!is_object($title)) {
                    throw new MWException(__METHOD__ . " given invalid real username $realusername");
                }
                $personal_urls['userpage']['href'] = $title->getLocalURL();
                $personal_urls['userpage']['class'] = $title->getArticleID() != 0 ? false : 'new';
            }
            // To the "mytalk" href
            if (isset($personal_urls['mytalk'])) {
                $title = Title::newFromText($realusername, NS_USER_TALK);
                if (!is_object($title)) {
                    throw new MWException(__METHOD__ . " given invalid real username $realusername");
                }
                $personal_urls['mytalk']['href'] = $title->getLocalURL();
                $personal_urls['mytalk']['class'] = $title->getArticleID() != 0 ? false : 'new';
            }
        }

        return true;
    }

    /**
     * Replace the texts and refs to any NS_USER and NS_USER_TALK page to the realname alternative.
     */
    public static function hookLinkBegin($skin, $target, &$text, &$customAttribs, &$query, &$options, &$ret) {
        global $wgUser;
        global $wgrealusernames_linktext;
        global $wgrealusernames_linkref;
        global $wgrealusernames_append_username;

        // Nothing to do if text and ref replacement are not enabled.
        if ($wgrealusernames_linktext !== true && $wgrealusernames_linkref !== true) {
            return true;
        }

        // Nothing to do if links are not to user and talk namespaces.
        if (!in_array($target->getNamespace(), array(NS_USER, NS_USER_TALK))) {
            return true;
        }

        $username = $target->getText();
        wfDebugLog('realusernames', __METHOD__ . ": link received ".$username);

        // Get the real username for the username
        $realusername = self::get_realusername_from_username($username);
        // Default to username if not realusername is found.
        if ($realusername === '') {
            $realusername = $username;
        } else {
            wfDebugLog('realusernames', __METHOD__ . ": link change ". $username . " to " . $realusername);
        }

        // Let's apply real usernames to the texts.
        if ($wgrealusernames_linktext === true) {
            if ($text === $username) { // Only replace if the text was originally the username.
                $text = $realusername;
                // With $wgrealusernames_append_username enabled, users with "block" permissions
                // see the username together with the real username.
                if ($wgrealusernames_append_username === true && $wgUser->isAllowed('block')) {
                    // Only if real username and username are different.
                    if ($username !== $realusername) {
                        $text = $text . ' (' . $username . ')';
                    }
                }
            }
        }
        // Let's apply real usernames to the hrefs.
        if ($wgrealusernames_linkref === true) {
            $target->mTextform = $realusername;
            $target->mDbkeyform = str_replace(' ', '_', $target->mTextform);
            $target->mUrlform = wfUrlencode($target->mDbkeyform);
            $options = array_diff($options, array('broken')); // Don't accept any predefined "broken" link. Recalculate.
        }
        return true;
    }

    /**
     * Return and cache username => realusername pairs.
     *
     * @return the corresponding real username or empty string.
     */
    protected static function get_realusername_from_username($username) {

        // If the user is not in the cache, let's look for it
        if (!isset(self::$realusernames[$username])) {
            wfDebugLog('realusernames', __METHOD__ . ": not cached user: " . $username);

            // Verify the user is valid
            $user = User::newFromName($username, true);
            if (!is_object($user)) {
                wfDebugLog('realusernames', __METHOD__ . ": problem, invalid user: " . $username);
                self::$realusernames[$username] = '';
            } else {
                self::$realusernames[$username] = $user->getRealName();
            }
        } else {
            wfDebugLog('realusernames', __METHOD__ . ": cached user: " . $username);
        }

        if (self::$realusernames[$username] === '') {
            wfDebugLog('realusernames', __METHOD__ . ": no realname found for " . $username);
        } else {
            wfDebugLog('realusernames', __METHOD__ . ": found realname " . self::$realusernames[$username] . " for " . $username);
        }

        // Arrived here, we have a realusername to apply.
        return self::$realusernames[$username];
    }
}
