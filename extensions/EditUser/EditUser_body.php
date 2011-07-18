<?php
/* Shamelessly copied and modified from /includes/specials/SpecialPreferences.php v1.16.1 */
class EditUser extends SpecialPage {
	function __construct() {
		parent::__construct('EditUser', 'edituser');
	}
	function execute( $par ) {
		global $wgOut, $wgUser, $wgRequest;
	
		if( !$wgUser->isAllowed( 'edituser' ) ) {
			$wgOut->permissionRequired( 'edituser' );
			return false;
		}

		

		$this->setHeaders();
		$this->target = ( isset( $par ) ) ? $par : $wgRequest->getText( 'username', '' );
		if( $this->target === '' ) {
			$wgOut->addHtml( $this->makeSearchForm() );
			return;
		}
		$targetuser = User::NewFromName( $this->target );
		if( $targetuser->getID() == 0 ) {
			$wgOut->addWikiMsg( 'edituser-nouser', htmlspecialchars( $this->target ) );
			return;
		}
		$this->targetuser = $targetuser;
		#Allow editing self via this interface
		if( $targetuser->isAllowed( 'edituser-exempt' ) && $targetuser->getName() != $wgUser->getName() ) {
			$wgOut->addWikiMsg( 'edituser-exempt', $targetuser->getName() );
			return;
		}

		$this->setHeaders();
		$this->outputHeader();
		$wgOut->disallowUserJs();  # Prevent hijacked user scripts from sniffing passwords etc.

		if ( wfReadOnly() ) {
			$wgOut->readOnlyPage();
			return;
		}
		
		if ( $wgRequest->getCheck( 'reset' ) ) {
			$this->showResetForm();
			return;
		}

		$wgOut->addModules( 'mediawiki.special.preferences' );

		//$this->loadGlobals( $this->target );
		$wgOut->addHtml( $this->makeSearchForm() . '<br />' );
		#End EditUser additions

		if ( $wgRequest->getCheck( 'success' ) ) {
			$wgOut->wrapWikiMsg(
				"<div class=\"successbox\"><strong>\n$1\n</strong></div><div id=\"mw-pref-clear\"></div>",
				'savedprefs'
			);
		}
		
		if ( $wgRequest->getCheck( 'eauth' ) ) {
			$wgOut->wrapWikiMsg( "<div class='error' style='clear: both;'>\n$1\n</div>",
									'eauthentsent', $this->target );
		}

		$htmlForm = self::getFormObject( $targetuser );
		$htmlForm->setSubmitCallback( array( $this, 'tryUISubmit' ) );
		$htmlForm->setTitle( $this->getTitle() );
		$htmlForm->addHiddenField( 'username', $this->target );
		$htmlForm->mEditUserUsername = $this->target;
		
		$htmlForm->show();
	}

	function showResetForm() {
		global $wgOut;

		$wgOut->addWikiMsg( 'prefs-reset-intro' );

		$htmlForm = new HTMLForm( array(), 'prefs-restore' );

		$htmlForm->setSubmitText( wfMsg( 'restoreprefs' ) );
		$htmlForm->setTitle( $this->getTitle() );
		$htmlForm->addHiddenField( 'username', $this->target );
		$htmlForm->addHiddenField( 'reset' , '1' );
		$htmlForm->setSubmitCallback( array( $this, 'submitReset' ) );
		$htmlForm->suppressReset();

		$htmlForm->show();
	}

	function submitReset( $formData ) {
		global $wgOut;
		$this->targetuser->resetOptions();
		$this->targetuser->saveSettings();

		$url = $this->getTitle()->getFullURL( array( 'success' => 1, 'username'=>$this->target ) );

		$wgOut->redirect( $url );

		return true;
	}
	
	function tryUISubmit( $formData ) {
		global $wgUser;
		
		$targetuser = User::NewFromName( $this->target );
		if( $targetuser->getID() == 0 ) {
			return  wfMsg( 'edituser-nouser' ) ;
		}
		
		$realUser = $wgUser;
		$wgUser = $targetuser;
		$res = Preferences::tryFormSubmit( $formData, 'ui' );
		$wgUser = $realUser;
		
		if ( $res ) {
			$urlOptions = array( 'success' => 1);

			if ( $res === 'eauth' ) {
				$urlOptions['eauth'] = 1;
			}

			//$queryString = implode( '&', $urlOptions );
			$urlOptions['username'] = $this->target;

			$url = $this->getTitle()->getFullURL( $urlOptions );

			global $wgOut;
			$wgOut->redirect( $url );
		}

		return true;
	}

	
	function makeSearchForm() {
		$fields = array();
		$fields['edituser-username'] = Html::input( 'username', $this->target );

		$thisTitle = Title::makeTitle( NS_SPECIAL, $this->getName() );
		$form = Html::rawElement( 'form', array( 'method' => 'post', 'action' => $thisTitle->getLocalUrl() ),
			Xml::buildForm( $fields, 'edituser-dosearch' ) .
			Html::hidden( 'issearch', '1' )
		);
		return $form;
	}
	
	static function getFormObject( $user ) {
		$formDescriptor = Preferences::getPreferences( $user );
		if ( isset( $formDescriptor['password'] ) ) {
			unset( $formDescriptor['password'] );
		}
		$htmlForm = new EditUserPreferencesForm( $formDescriptor, 'prefs' );

		$htmlForm->setSubmitText( wfMsg( 'saveprefs' ) );
		$htmlForm->setSubmitID( 'prefsubmit' );

		return $htmlForm;
	}
}

class EditUserPreferencesForm extends PreferencesForm {
	var $mEditUserUsername;
	
	function getButtons() {
		$html = HTMLForm::getButtons();

		global $wgUser;

		$sk = $wgUser->getSkin();
		$url = SpecialPage::getTitleFor( 'EditUser' )->getFullURL( array( 'reset' => 1, 'username' => $this->mEditUserUsername ) );

		$html .= "\n" . Xml::element('a', array( 'href'=> $url ), wfMsgHtml( 'restoreprefs' ) );

		$html = Xml::tags( 'div', array( 'class' => 'mw-prefs-buttons' ), $html );

		return $html;
	}
}
