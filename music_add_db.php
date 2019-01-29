<?php
include_once("Assets/Includes/conn.php");



$naam       = $_POST["name"];
$email      = $_POST["email"];


echo "Hallo en voer je songs in aub !";
echo "<br>";
echo "<br>";
echo "<br>";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Geef hier uw favoriete top 3 dans/meezingliedjes op</title>
    </head>
    <body>
        <form action="music_db.php" method="post">
            <fieldset>
                <legend>Geef je favouriete liedjes op: </legend>
                <table>
                    <tr>
                        <th>Titel van het liedje</th>
                        <th>Naam van de artiest</th>
                        <th>URL</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="titel1"></td>
                        <td><input type="text" name="artiest1"></td>
                        <td><input type="text" name="url1"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="titel2"></td>
                        <td><input type="text" name="artiest2"></td>
                        <td><input type="text" name="url2"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="titel3"></td>
                        <td><input type="text" name="artiest3"></td>
                        <td><input type="text" name="url3"></td>
                    </tr>
                </table>
                <textarea width="1000px" height="500px" id="message" name="message" ></textarea>

                <br>
                <br>


                <a href="index.php">Terug</a>
                <input type="submit" value="Bewaar">
            </fieldset>
        </form>
    </body>
</html>
