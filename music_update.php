<?php
include_once("Assets/Includes/conn.php");

$name = $_POST['name'];
$email = $_POST['email'];

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo "<br>";



    $sql_email = "SELECT * FROM user_details WHERE email = '" . $email . "'";
    $result_email = mysqli_query($mySqlConnection, $sql_email );

    if(mysqli_num_rows($result_email) > 0){
        echo "Dit email-adres is al in gebruik, je kan je songs wel updaten";
        echo "<br>";
        echo "<br>";

        while ($row = mysqli_fetch_assoc($result_email)):
            echo($row['id']);
            echo "<br>";
            echo($row['name']);
            echo "<br>";
            echo($row['email']);
            echo "<br>";
            echo($row['message']);
            echo "<br>";
            echo($row['title_song']);
            echo "<br>";
            echo($row['artiest']);
            echo "<br>";
            echo($row['url']);
            echo "<br>";
            echo "<br>";
        endwhile;

        //echo $row['title_song'][0];


    }else{
         /*$sql_email_save = "INSERT INTO user_details (id, name, email, message, artiest, title_song, url)
                VALUES ()";
         $result_email_save = mysqli_query($mySqlConnection, $sql_email_save );*/

         echo "vul formulier in";
         echo "<br>";
         echo "<br>";
     };





/*-----------------------------------------------------------------*/
/*-----------------------------------------------------------------*/
/*-----------------------------------------------------------------*/


//UPDATE DB VB

 /*$sql_query5 = "UPDATE user_details SET name = 'BROL' WHERE id = 1";
 $result2 = mysqli_query($mySqlConnection, $sql_query5 );

 if(mysqli_query($mySqlConnection, $sql_query5)){
   echo "Record was updated successfully.";
 } else {
   echo "ERROR: Could not able to execute $sql_query5. ". mysqli_error($mySqlConnection);
 }
*/


//mysqli_close($mySqlConnection);




// HTML
/*-------------------------------------------------------------------------*/
/*-------------------------------------------------------------------------*/
/*-------------------------------------------------------------------------*/

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
                <legend>Hello <?php echo $name; ?> ---  Update aub je favouriete songs in: </legend>

                <table>
                    <tr>
                        <th>Titel van het liedje</th>
                        <th>Naam van de artiest</th>
                        <th>URL</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="titel1" value="" required></td>
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

                <br><br>
                <label>Vul hier je berichtje in voor de jarige: </label><br><br>
                <textarea width="1000px" height="500px" id="message" name="message"></textarea>
                <br><br>


                <input type="submit" value="Bewaar">
            </fieldset>
        </form>
    </body>
</html>
