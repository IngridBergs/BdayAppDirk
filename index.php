<?php
print('<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Verjaardag app inlogscherm</title>
    </head>
    <body>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Personal information : </legend>
                    <label>username:&nbsp;</label> <input type="text" name="username"><br>
                    <label>email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </label> <input type="text" name="email"><br>
                    <label>password:&nbsp;</label> <input type="password" name="password"><br>
                    <label>repeat pw:</label> <input type="password" name="repeatPassword"><br>
                    <input type="submit" value="submit">
            </fieldset>
        </form>
    </body>
</html>');


echo "<br>";
echo "<br>";
echo 'username  ' . $_POST["username"];
echo "<br>";
echo 'email  ' . $_POST["email"];
echo "<br>";
echo 'password  ' . $_POST["password"];
echo "<br>";
echo 'repeat password ' . $_POST["repeatPassword"];
echo "<br>";



$myfile = fopen("music.txt", "w") or die("Unable to open file!");
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$repeatPassword = $_POST["repeatPassword"];


//hoe gaan we paswoord encrypten en wegschrijven in Mysql DB?
//referentie 1:
//https://stackoverflow.com/questions/14798275/best-way-to-store-passwords-in-mysql-database
//referentie 2:
//http://php.net/manual/en/function.crypt.php


/*$crypted_pw = crypt($password);
echo $crypted_pw;*/

//$pass_from_login is the user entered password
//$crypted_pass is the encryption

/*if(crypt($pass_from_login,$crypted_pass)) == $crypted_pw)
{
   echo("hello user!")
}*/

//error message crypt(): No salt parameter was specified. You must use a randomly generated salt
// and a strong hash function to produce a secure hash



/*---------------------------------------------------------------------------------------------------------------*/



//Koppeling met database verjaardagDB
//admin is IngridB@localhost
//6 fields


//Use the following PHP code to connect to MySQL and select a database.
// Replace username with your username, password with your password, and dbname with the database name:

echo "<br>";

//create connection
$mySqlConnection = new mysqli("localhost", "IngridB", "bananahouse586!", "verjaardagDB");

//check connection

if (!$mySqlConnection) {
      die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo 'query("SELECT * FROM user_details")';
echo "<br>";
echo "<br>";
$result1 = $mySqlConnection->query("SELECT * FROM user_details");
print_r($result1);

$result2 = $mySqlConnection->query("DELETE * FROM `user_details` WHERE id=0;");
print_r($result2);






/*foreach ($result as $val){
    echo $val. "\n";
}*/

//error message
// ik gebruikte eerst echo. Object of class mysqli_result could not be converted to string in /opt/lampp/htdocs/verjaardag_app/index.php on line 83

echo "<br>";
echo "<br>";
$txt = $username . "<br>" . $email . "<br>" . $password . "<br>" . $repeatPassword;
echo $txt;
fwrite($myfile, $txt);
fclose($myfile);
?>
