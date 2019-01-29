<?php
include_once("Assets/Includes/conn.php");


echo $_POST["ID"];
echo $_POST["title"];
echo $_POST["artiest"];

echo "<br>";
echo "<br>";

print_r($_POST);





//UPDATE DB VB

 /*$sql_query5 = "UPDATE user_details SET name = 'BROL' WHERE id = 1";
 $result2 = mysqli_query($mySqlConnection, $sql_query5 );

 if(mysqli_query($mySqlConnection, $sql_query5)){
   echo "Record was updated successfully.";
 } else {
   echo "ERROR: Could not able to execute $sql_query5. ". mysqli_error($mySqlConnection);
 }
*/

mysqli_close($mySqlConnection);

?>
