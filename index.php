<?php
include_once("Assets/Includes/conn.php");
mysqli_close($mySqlConnection);
?>


<!-- HTML __________________________________________________________________ -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Formulier voor registratie</title>
    </head>
    <body>
        <form action="music_add.php" method="post">
            <fieldset>
                <legend>WELKOM BEZOEKER</legend>
                <label>Username:</label> <input type="text" name="name" ><br><br>
                <label>Email:</label> <input type="email" name="email" required><br><br>

                //nog reCAPTCHA voorzien, vraag key aan via google!!!!!
                //<!--httpwww.google.com/recaptcha/admin#list-->
                //<!--httpswww.antagonist.nl/blog/2017/03/recaptcha/-->
            </fieldset>
            <input type="submit" value="Bewaar">
        </form>
    </body>
</html>
