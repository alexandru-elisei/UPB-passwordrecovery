<?php
require ("recaptcha/src/autoload.php");

$secret = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";
$recaptcha = new \ReCaptcha\ReCaptcha($secret);

$response = filter_var(trim($_POST["g-recaptcha-response"]), FILTER_SANITIZE_STRING);
$validation = $recaptcha->verify($response);

if ($validation->isSuccess()) {
	echo "success";
} else {
	echo "failure";
}
?>
