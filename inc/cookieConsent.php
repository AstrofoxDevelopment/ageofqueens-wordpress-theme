<?php

// TODO CHECK IF IN USE? IF NOT, IMPLEMENT!

function isYesCookieConsentGiven( $cookieName = "cookieyes-consent" ): bool {
	if ( isset( $_COOKIE[ $cookieName ] ) ) {
		$values          = explode( ',', $_COOKIE[ $cookieName ] );
		$consentArr      = explode( ':', $values[1] );
		$consentKeyValue = [ $consentArr[0] => $consentArr[1] ];
		if ( $consentKeyValue['consent'] == 'yes' ) {
			return true;
		} else {
			return false;
		}
	} else {
		return false;
	}
}
