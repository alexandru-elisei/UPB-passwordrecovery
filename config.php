<?php
class Password_Recovery_Config
{
	/**
	 * Secret from Google recaptcha API key pair.
	 */
	const CAPTCHA_SECRET = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';

	/**
	 * Site key from Google recaptcha API key pair.
	 */
	const SITE_KEY = '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI';

	/**
	 * Possible authentication methods, in the form 'method id' => 'select text'.
	 */
	const AUTH_METHODS_TEXT = array(
		'userid'	=> 'UserID',
		'email'		=> 'Email',
		'telnum'	=> 'Nr. tel. mobil',
	);

	/**
	 * Currently enabled authentication methods.
	 */
	const AUTH_METHODS_ENABLED = array(
		'userid'	=> true,
		'email'		=> true,
		'telnum'	=> false,
	);

	/**
	 * Redirect site url.
	 */
	const SITE_URL = '/pass/password_recovery.php';
	// Change this to:
	// const SITE_URL = 'https://cs.curs.pub.ro/reset/';
}
