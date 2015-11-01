<?php
require("recaptcha/src/autoload.php");
require("config.php");

if (empty($_POST["g-recaptcha-response"])) {
	echo "failed";
	die;
}

$recaptcha = new \ReCaptcha\ReCaptcha($captchasecret);
$response = filter_var(trim($_POST["g-recaptcha-response"]), FILTER_SANITIZE_STRING);
$validation = $recaptcha->verify($response);

if ($validation->isSuccess()) {
	echo "success";
} else {
	echo "failed";
}
?>
