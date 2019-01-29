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
        //echo "<html><head></head><body><a href='music_update.php'>UPDATE</a></body></html>";
        //echo "<br>";
        //echo "<br>";
    }
    else{

        header('Location: music_add_db.php');
    }
mysqli_close($mySqlConnection);
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Geef hier uw favoriete top 3 dans/meezingliedjes op</title>
    </head>
    <body>
        <form action="music_update_db.php" method="post">
            <fieldset>
                <legend>Hello <?php echo $name; ?> ---  Update je favouriete songs: </legend>

                <?php  while ($row = mysqli_fetch_assoc($result_email)): ?>

                <table>
                    <tr>
                        <th>ID</th>
                        <th>Titel van het liedje</th>
                        <th>Naam van de artiest</th>
                        <th>URL</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="ID" value="<?php echo($row['id']); ?>"></td>
                        <td><input type="text" name="title" value="<?php echo($row['title_song']); ?>"></td>
                        <td><input type="text" name="artiest" value="<?php echo($row['url']); ?>">URL</a></td>
                        <?php
                            preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $row["url"], $matches);
                            $id = $matches[1];

                        ?>
                        <td width="300px">
                            <iframe id="ytplayer" type="text/html" width="105" height="78" frameborder="0" allowfullscreen
                            src="https://www.youtube.com/embed/<?php echo $id; ?>?rel=0&showinfo=0&color=white&iv_load_policy=3">
                            </iframe>
                        </td>
                    </tr>
                </table>
                <textarea width="1000px" height="500px" id="message" name="message" ><?php echo($row['message']); ?></textarea>
                <?php endwhile; ?>
                <br>
                <br>


                <a href="index.php">Terug</a>
                <input type="submit" value="Bewaar">
            </fieldset>
        </form>
    </body>
</html>
