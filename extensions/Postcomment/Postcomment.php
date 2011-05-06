<?php
if ( ! defined( 'MEDIAWIKI' ) )
    die();

/**#@+
 * Allows users to post comments directly to discussion pages.'
 *
 * @file
 * @ingroup Extensions
 *
 * @link http://www.mediawiki.org/wiki/Extension:PostComment
 *
 * @author Travis Derouin <travis@wikihow.com>
 * @author Siebrand Mazeland
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'PostComment',
	'author' => 'Travis Derouin, Siebrand Mazeland',
	'descriptionmsg' => 'postcomment_desc',
	'url' => 'http://www.mediawiki.org/wiki/Extension:PostComment',
);

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['PostComment'] = $dir . 'Postcomment.i18n.php';

$wgSpecialPages['Postcomment'] = 'SpecialPostcomment';

class SpecialPostcomment extends UnlistedSpecialPage {
	public function __construct() {
		parent::__construct( 'Postcomment' );
	}

	function execute( $par ) {
		global $wgUser, $wgOut, $wgLang, $wgMemc, $wgDBname;
		global $wgRequest, $wgSitename, $wgLanguageCode;
		global $wgFilterCallback, $wgWhitelistEdit;

		//echo "topic: " . $wgRequest->getVal("topic_name") . "<br />";
		//echo "title: " . $wgRequest->getVal("title") . "<br />";
		//echo "comment: " . $wgRequest->getVal("comment_text") . "<br />";
		//echo "new_topic id " . $wgRequest->getVal("new_topic") . "<br />";

		if ( wfReadOnly() ) {
			$wgOut->readOnlyPage();
			return;
		}

		$t = Title::newFromDBKey( $wgRequest->getVal( 'target' ) );

		if ( $t == null ) {
			$wgOut->showErrorPage( 'postcomment', 'postcomment_invalidrequest' );
			return;
		}

		$errors = $t->getUserPermissionsErrors( 'edit', $wgUser );
		if ( count( $errors ) ) {
			$wgOut->showPermissionsErrorPage( $errors, 'edit' );
			return;
		}

		if ( $wgUser->pingLimiter() ) {
			$wgOut->rateLimited();
			return;
		}

		$article = new Article( $t );
		$update = $article->exists();

		$comment = $wgRequest->getVal( 'comment_text' );
		$topic = $wgRequest->getVal( 'topic_name' );

		if ( trim( $comment ) == '' ) {
			$wgOut->showErrorPage( 'postcomment', 'postcomment_nopostingtoadd' );
			return;
		}

		$user = $wgUser->getName();
		$real_name = $wgUser->getRealName();
		if ( $real_name == '' ) {
			$real_name = $user;
		}
		$dateStr = $wgLang->timeanddate( wfTimestampNow() );

		//echo "$dateStr<br />";

		$formattedComment = "
	<div id=\"discussion_entry\"><table width=\"100%\">
		<tr><td width=\"50%\" valign=\"top\" class=\"discussion_entry_user\">
	[[User:$user|$real_name]] " . wfMsg( 'postcomment_said' ) . ":
</td><td align=\"right\" width=\"50%\" class=\"discussion_entry_date\">" . wfMsg( 'postcomment_on' ) . " $dateStr<br />
	</td></tr><tr>
<td colspan=2 class=\"discussion_entry_comment\">
	$comment</td></tr>
	<tr><td colspan=\"2\" class=\"discussion_entry_date\" padding=5>[[User_talk:$user#post|" . wfMsg('postcomment_replyto', $real_name) . "]]</td></tr>
	</table></div>

";
		//echo "$formattedComment";

		$text = '';

		if ( $update ) {
			$r = Revision::newFromTitle( $t );
			$text = $r->getText();
		}

		$text .= "\n\n$formattedComment\n\n";

		//echo "updating with text:<br /> $text";
		//exit;

		$tmp = "";
		if ( $wgFilterCallback && $wgFilterCallback( $t, $text, $tmp) ) {
			# Error messages or other handling should be performed by the filter function
			return;
		}

		$article->doEdit( $text, '' );
	}
}

function wfPostcommentForm() {
	global $wgUser, $wgTitle, $wgRequest;

	$action = $wgRequest->getVal( 'action', 'view' );

	// just for talk pages
	if ( !$wgTitle->isTalkPage() || $action != 'view' ) {
		return;
	}

	if ( !$wgTitle->userCan( 'edit', true ) ) {
		echo  wfMsg( 'postcomment_discussionprotected' );
		return;
	}

	$sk = $wgUser->getSkin();

	$user_str = '';
	if ($wgUser->getID() == 0) {
		$user_str = wfMsg( 'postcomment_notloggedin' );
	} else {
		$link = $sk->makeLinkObj( $wgUser->getUserPage(), $wgUser->getName() );
		$user_str = wfMsg( 'postcomment_youareloggedinas', $link );
	}

	$pc = SpecialPage::getTitleFor( 'Postcomment' );
	if ( $wgTitle->getNamespace() == NS_USER_TALK ) {
		$msg = wfMsg( 'postcomment_leavemessagefor', $wgTitle->getText() );
	} else {
		$msg = wfMsg( 'postcomment_addcommentdiscussionpage' );
	}

	echo "<br /><br />
<form name=\"commentForm\" method=\"POST\" action=\"{$pc->getFullURL()}\">
<input name=\"target\" type=\"hidden\" value=\"" . htmlspecialchars( $wgTitle->getPrefixedDBkey() ) . "\"/>
<table>
	<tr>
		<td colspan=\"2\" valign=\"top\">
			<a name=\"post\"></a>
			<b>$msg:</b><br /><br />
		</td>
		<td></td>
	</tr>
	<tr>
		<td valign=\"top\"></td>
		<td>
			<textarea tabindex=3 rows=\"15\"cols=\"50\" name=\"comment_text\"></textarea>
		</td>
	</tr>
	<tr>
		 <td>&#160;</td><td>
		<input tabindex='4' type='submit' name=\"wpLoginattempt\" value=\"".wfMsg('postcomment_post')."\" class=\"btn\"
			onmouseover=\"this.className='btn btnhov'\" onmouseout=\"this.className='btn'\"/>
		</td>
	</tr>
	<tr>
		<td>
			<small>$user_str</small>
		</td>
		<td></td>
	</tr>
</table>
</form>";
}
