<?php
require("recaptcha/src/autoload.php");
require("config.php");

$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$response = filter_var(trim($_POST["g-recaptcha-response"]), FILTER_SANITIZE_STRING);
$validation = $recaptcha->verify($response);

if ($validation->isSuccess()) {
	echo "success";
} else {
	echo "failure";
}
?>
