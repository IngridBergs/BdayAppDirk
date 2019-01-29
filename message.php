<!DOCTYPE html>
<html>
<head>
	<title>bericht</title>
	<link rel="stylesheet" type="text/css" href="message.css">
</head>
<body>
<?php
	include_once 'include/header.php';
?>
	<div class="container">
		<div class="left"></div>
		<div class="right">
			<div class="formbox">
				<form>
					<a href="index.php">Home</a>
					<p>Bericht voor de jarige:</p>
					<input type="text" id="bericht" name="message" placeholder="typ uw bericht hier...">
					<input type="submit" name="btn" value="Bevestigen">
				</form>
			</div>
		</div>
	</div>

</body>
</html>