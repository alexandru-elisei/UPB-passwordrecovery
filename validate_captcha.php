<?php
require("recaptcha/src/autoload.php");
require_once(__DIR__ . "/config.php");

if (empty($_POST["g-recaptcha-response"])) {
	echo "failed";
	die;
}

$recaptcha = new \ReCaptcha\ReCaptcha(Password_Recovery_Config::CAPTCHA_SECRET);
$response = filter_var(trim($_POST["g-recaptcha-response"]), FILTER_SANITIZE_STRING);
$validation = $recaptcha->verify($response);

if ($validation->isSuccess()) {
	echo "success";
} else {
	echo "failed";
}
?>
