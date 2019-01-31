<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Recaptcha</title>
	   	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </head>
    <body>
		<form action="reCaptcha_mail.php" method="post" enctype="multipart/form-data">
			<input name="sender_name" placeholder="Your Name..."/><br>
			<input name="sender_email" placeholder="Your email..."/><br><br>
			<textarea name="sender_message" placeholder="Your Message..."></textarea><br>
		    <div class="captcha_wrapper">
				<div class="g-recaptcha" data-sitekey="6LfyJI4UAAAAABPGJsFZI0nvzwozFSJvZAzzk8Yi">
				</div>
			</div>
			<br><br>
			<!--<button type="submit" id="send_message">Send Message!</button>-->
		</form>
   </body>
</html>
