<?php
require ("recaptcha/src/autoload.php");

$secret = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";

function getReturnURL() {
	$url = 'http';
	if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
		$url = $url . "s";
	}
	$url = $url . "://" . $_SERVER["SERVER_NAME"];
	if ($_SERVER["SERVER_PORT"] != "80") {
		$url = $url . ":" . $_SERVER["SERVER_PORT"];
	}
	$url = $url . "/password_recovery.php";

	return $url;
}

$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"]);

if ($resp->isSuccess()) {
	echo "is success!";
} else {
	$return_url = getReturnURL() . "?authmethod=" . $_POST["authmethod"] . "&authdata=" . $_POST["authdata"];
	header("Location: " . $return_url);
}
?>
