<?php
include_once "Assets/Includes/conn.php";
mysqli_close($mySqlConnection);
require 'header.php';
?>
    <body>
		<div class="container">
		<div class="left"></div>
		<div class="right">
			<div class="formbox">
				<form action="music_add.php" method="post">
				<h4>Welkom bezoeker</h4>
                <label>Username:</label> <input type="text" name="name" ><br><br>
                <label>Email:</label> <input type="email" name="email" required><br><br>
				<input type="submit" value="Bewaar">

				</form>
			</div>
		</div>
	</div>
    </body>
</html>
