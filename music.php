<?php

/*
echo 'naam  ' . $_POST["name"];
echo "<br>";
echo 'email  ' . $_POST["email"];
echo "<br>";
echo "<br>";
echo "<br>";

echo 'artiest  ' . $_POST["artiest1"];
echo "<br>";
echo 'titel  ' . $_POST["titel1"];
echo "<br>";
echo 'url  ' . $_POST["url1"];
echo "<br>";
echo "<br>";

echo 'artiest  ' . $_POST["artiest2"];
echo "<br>";
echo 'titel  ' . $_POST["titel2"];
echo "<br>";
echo 'url  ' . $_POST["url2"];
echo "<br>";
echo "<br>";

echo 'artiest  ' . $_POST["artiest3"];
echo "<br>";
echo 'titel  ' . $_POST["titel3"];
echo "<br>";
echo 'url  ' . $_POST["url3"];
echo "<br>";
echo "<br>";*/

//create connection
$mySqlConnection = new mysqli("localhost", "IngridB", "bananahouse586!", "verjaardagDB");

//check connection

if (!$mySqlConnection) {
      die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo "<br>";
echo "<br>";

//overview data

$naam       = $_POST["name"];
$email      = $_POST["email"];
$message    = $_POST["message"];
echo $message;

$artiest1   = $_POST["artiest1"];
$titel1     = $_POST["titel1"];
$url1       = $_POST["url1"];

$artiest2   = $_POST["artiest2"];
$titel2     = $_POST["titel2"];
$url2       = $_POST["url2"];

$artiest3   = $_POST["artiest3"];
$titel3     = $_POST["titel3"];
$url3       = $_POST["url3"];



//send data to DB

//example referentie
//https://www.w3schools.com/sql/sql_insert.asp

$sql_string1 = "'" . $naam . "','" . $email . "','" . $message . "','"  . $artiest1 . "' , '" . $titel1 . "' , '" . $url1 ."'";
echo $sql_string1;
echo "<br>";
$sql_query1 = "INSERT INTO user_details (name, email, message, artiest, title_song, url) VALUES ($sql_string1)";

//$sql_string2 = "'" . $naam . "','" . $email . "' , '" . $artiest2 . "' , '" . $titel2 . "' , '" . $url2 ."'";
$sql_string2 = "'" . $naam . "','" . $email . "','" . $message . "','"  . $artiest2 . "' , '" . $titel2 . "' , '" . $url2 ."'";
echo $sql_string2;
echo "<br>";
$sql_query2 = "INSERT INTO user_details (name, email, message, artiest, title_song, url) VALUES ($sql_string2)";

$sql_string3 = "'" . $naam . "','" . $email . "','" . $message . "','"  . $artiest3 . "' , '" . $titel3 . "' , '" . $url3 ."'";
echo $sql_string3;
echo "<br>";
$sql_query3 = "INSERT INTO user_details (name, email, message, artiest, title_song, url) VALUES ($sql_string3)";

//check of record goed is insert

echo "<br>";
echo "<br>";

if (mysqli_query($mySqlConnection, $sql_query1)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql_query1 . "<br>" . mysqli_error($mySqlConnection);
}


if (mysqli_query($mySqlConnection, $sql_query2)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql_query2 . "<br>" . mysqli_error($mySqlConnection);
}


if (mysqli_query($mySqlConnection, $sql_query3)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql_query3 . "<br>" . mysqli_error($mySqlConnection);
}


echo "<br>";
echo "<br>";



//mysql_query(query,connection)


$sql_query4 = "SELECT * FROM user_details WHERE email = 'ingrid.bergs@gmail.com'";
$result = mysqli_query($mySqlConnection, $sql_query4 );


/*-----------------------------------------------------------------*/
/*-----------------------------------------------------------------*/
/*-----------------------------------------------------------------*/

//updaten van data
//als email al bestaat !
// in sql is dit als volgt


while ($row = mysqli_fetch_assoc($result)):
     echo($row["id"] . "<br>");
     echo($row["name"] . "<br>");
     echo($row["email"] . "<br>");
     echo($row["message"] . "<br>");
     echo("<br>");
     echo("<br>");

 endwhile;


 $sql_query5 = "UPDATE user_details SET name = 'BROL' WHERE id = 1";


 $result2 = mysqli_query($mySqlConnection, $sql_query5 );




 if(mysqli_query($mySqlConnection, $sql_query5)){
   echo "Record was updated successfully.";
 } else {
   echo "ERROR: Could not able to execute $sql_query5. ". mysqli_error($mySqlConnection);
 }


 echo("<br>");
 echo("<br>");


mysqli_close($mySqlConnection);

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Geef hier uw favoriete top 3 dans/meezingliedjes op</title>
    </head>
    <body>
        <form action="music.php" method="post">
            <fieldset>
                <legend>Geef hier uw favoriete top 3 dans/meezingliedjes op: </legend>
                <label>naam:&nbsp;&nbsp;&nbsp;</label> <input type="text" name="name"><br><br>
                <label>email:&nbsp;&nbsp;&nbsp;</label> <input type="email" name="email" required><br><br>

                //nog reCAPTCHA voorzien, vraag key aan via google!!!!!
                //<!--httpwww.google.com/recaptcha/admin#list-->
                //<!--httpswww.antagonist.nl/blog/2017/03/recaptcha/-->
                <br><br>
                <table>
                <tr>
                    <th>Naam van het liedje</th>
                    <th>Uitvoerder</th>
                    <th>URL</th>
                </tr>
                <tr>
                    <td><input type="text" name="titel1" required></td>
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
                <label>Vul hier je berichtje in voor de jarige: </label>
                <textarea id="message"></textarea>
                <br><br>

                <input type="submit" value="Terug">
                <input type="submit" value="Bewaar">
            </fieldset>
        </form>
    </body>
</html>
