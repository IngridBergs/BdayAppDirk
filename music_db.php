<?php
include_once("Assets/Includes/conn.php");




//overview data

$naam       = $_POST["name"];
$email      = $_POST["email"];


$artiest1   = $_POST["artiest1"];
$titel1     = $_POST["titel1"];
$url1       = $_POST["url1"];

$artiest2   = $_POST["artiest2"];
$titel2     = $_POST["titel2"];
$url2       = $_POST["url2"];

$artiest3   = $_POST["artiest3"];
$titel3     = $_POST["titel3"];
$url3       = $_POST["url3"];

$message    = $_POST["message"];


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
     // echo "New record created successfully";
} else {
      echo "Error: " . $sql_query1 . "<br>" . mysqli_error($mySqlConnection);
}


if (mysqli_query($mySqlConnection, $sql_query2)) {
      //echo "New record created successfully";
} else {
      echo "Error: " . $sql_query2 . "<br>" . mysqli_error($mySqlConnection);
}


if (mysqli_query($mySqlConnection, $sql_query3)) {
      //echo "New record created successfully";
} else {
      echo "Error: " . $sql_query3 . "<br>" . mysqli_error($mySqlConnection);
}


echo "<br>";
echo "<br>";

mysqli_close($mySqlConnection);

?>
