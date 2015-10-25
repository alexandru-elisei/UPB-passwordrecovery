<?php
require ("recaptcha/src/autoload.php");

$secret = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"]);

if ($resp->isSuccess()) {
	echo "success";
} else {
	echo "failure";
}
?>
