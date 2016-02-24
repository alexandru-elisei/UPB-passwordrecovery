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
	 * Is userid authentication enabled?
	 */
	const USERID_ENABLED = true;

	/**
	 * Is email authentication enabled?
	 */
	const EMAIL_ENABLED = true;

	/**
	 * Is telnum authentication enabled?
	 */
	const TELNUM_ENABLED = false;

	/**
	 * Redirect site url.
	 */
	const SITE_URL = '/pass/password_recovery.php';
	// Change this to:
	// const SITE_URL = 'https://cs.curs.pub.ro/reset/';
}
