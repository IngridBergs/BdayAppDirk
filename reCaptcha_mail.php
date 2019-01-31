<?php
	$sender_name = stripslashes($_POST["sender_name"]);
	$sender_email = stripslashes($_POST["sender_email"]);
	$sender_message = stripslashes($_POST["sender_message"]);

echo $_POST["sender_name"];
echo "<br>";
echo $_POST["sender_email"];
echo "<br>";
echo $_POST["sender_message"];
echo "<br>";
echo "<br>";
echo "<br>";

if(!isset($_POST['g-recaptcha-response']) ){
    die ("Error: Not valid recaptcha on form");
}

	$response = $_POST["g-recaptcha-response"];
    echo $_POST["g-recaptcha-response"];


	//$url = 'https://www.google.com/recaptcha/api/BirthdayDirk';
    $url = 'https://www.google.com/recaptcha/api/siteverify';

    //$url = 'localhost';

	$data = array(
		'secret' => 'YOUR_SECRET',
		'response' => $_POST["g-recaptcha-response"]
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
    //file_get_contents — Reads entire file into a string

	$captcha_success=json_decode($verify);
	if ($captcha_success->success==false) {
		echo "<p>You are a bot! Go away!</p>";
	} else if ($captcha_success->success==true) {
		echo "<p>You are not not a bot!</p>";
	}
?>
