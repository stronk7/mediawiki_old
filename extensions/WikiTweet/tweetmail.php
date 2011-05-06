<?php
function sendWithPear($mailer, $dest, $headers, $body)
	{
		$mailResult = $mailer->send($dest, $headers, $body);
		if( PEAR::isError( $mailResult ) ) {
			return $mailResult->getMessage();
		} else {
			return true;
		}
	}
function send( $to, $from, $subject, $body, $replyto=null ) {
		$wgOutputEncoding = 'UTF-8';
		$wgEnotifImpersonal = false;
		$wgErrorString = '';
		$wgEnotifMaxRecips=500;
		include('WikiTweet.config.php');
		if (is_array( $wgWikiTweet )) {
			require_once( 'Mail.php' );
			$msgid = str_replace(" ", "_", microtime());
			if (function_exists('posix_getpid'))
				$msgid .= '.' . posix_getpid();
			if (is_array($to)) {
				$dest = array();
				foreach ($to as $u)
					$dest[] = $u;
			} else
				$dest = $to;
			$headers['From'] = $from;
			if ($wgEnotifImpersonal)
				$headers['To'] = 'undisclosed-recipients:;';
			else
				$headers['To'] = $to;
			if ( $replyto ) {
				$headers['Reply-To'] = $replyto->toString();
			}
			$headers['Subject'] = $subject;
			$headers['Date'] = date( 'r' );
			$headers['MIME-Version'] = '1.0';
			$headers['Content-type'] = 'text/plain; charset='.$wgOutputEncoding;
			$headers['Content-transfer-encoding'] = '8bit';
			$headers['Message-ID'] = "<$msgid@" . $wgWikiTweet['SMTP']['IDHost'] . '>'; // FIXME
			$headers['X-Mailer'] = 'MediaWiki mailer';
			// Create the mail object using the Mail::factory method
			$mail_object =& Mail::factory('smtp', $wgWikiTweet['SMTP']);
			if( PEAR::isError( $mail_object ) ) {
				wfDebug( "PEAR::Mail factory failed: " . $mail_object->getMessage() . "\n" );
				return new WikiError( $mail_object->getMessage() );
			}
			$chunks = array_chunk( (array)$dest, $wgEnotifMaxRecips );
			foreach ($chunks as $chunk) {
				$e = sendWithPear($mail_object, $chunk, $headers, $body);
				if( $e != true)
					return $e;
			}
		} 
	}
?>