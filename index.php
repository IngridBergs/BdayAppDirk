<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="main.css">
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
					<p>Naam</p>
					<input type="text" name="naam" placeholder="Voornaam" required>
					<p>E-mail</p>
					<input type="text" name="mail" placeholder="E-mail adres" required>
					<input type="submit" name="btn" value="Bevestigen">
					
				</form>
			</div>
		</div>
	</div>

</body>
</html>