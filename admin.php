<?php

include_once("Assets/Includes/conn.php");
 if  ($_SESSION['valid'] = true){
     echo "<h1>Welkom Dirk</h1>";
 };



//overview Youtube movies


//$sql_queryMovies = "SELECT * FROM user_details WHERE email = 'ingrid.bergs@gmail.com'";
$sql_queryMovies = "SELECT * FROM user_details";
$result1 = mysqli_query($mySqlConnection, $sql_queryMovies );

//overview messages

echo "<br><br>";



$sql_queryA = "SELECT id , name , email , message FROM user_details";
$result2 = mysqli_query($mySqlConnection, $sql_queryA );


mysqli_close($mySqlConnection);
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Adminpage</title>
    </head>
    <body>
                <label>OVERVIEW YOUTUBE MESSAGES</label>
                <br><br><br>
                <!--<label>Naam:</label><textarea><?php //echo($row["name"]); ?></textarea><br>
                <label>Email:</label><textarea><?php //echo($row["email"]); ?></textarea><br>-->
                <?php while ($row = mysqli_fetch_assoc($result1)): ?>

                <br>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Naam</th>
                        <th>Email</th>
                        <th>Naam song</th>
                        <th>Uitvoerder</th>
                        <th>URL</th>
                        <th>movie</th>
                    </tr>

                    <tr>
                        <td><input type="text" name="id" class="message" value="<?php echo($row['id']); ?>"</td>
                        <td><input type="text"  name="name" class="message" value="<?php echo($row['name']); ?>"</td>
                        <td><input type="text"  name="email" class="message" value="<?php echo($row['email']); ?>"</td>
                        <td><input type="text"  name="title" class="message"value="<?php echo($row['title_song']); ?>"</td>
                        <td><input type="text"  name="artiest" class="message" value="<?php echo($row['artiest']); ?>"</td>
                        <!-- zet hier nog Youtube convertor tussen -->
                        <td width="300px"><a href="<?php echo($row['url']); ?>">URL</a></td>
                        <?php
                            preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $row["url"], $matches);
                            $id = $matches[1];
//src="<?php echo($row["url"]);
                        ?>
                        <td width="300px">
                            <iframe id="ytplayer" type="text/html" width="105" height="78" frameborder="0" allowfullscreen
                            src="https://www.youtube.com/embed/<?php echo $id; ?>?rel=0&showinfo=0&color=white&iv_load_policy=3">
                            </iframe>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </table>
                <a href="export_excel_1.php">Export Songs To Excel</a>


                <br><br><br>
                <label>OVERVIEW MESSAGES</label>
                <br><br><br>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Naam van de genodigde</th>
                        <th>Email</th>
                        <th>Bericht</th>
                    </tr>
                <?php while ($row = mysqli_fetch_assoc($result2)): ?>
                    <tr>
                        <td><input type="text"  name="id" class="message" value="<?php echo($row['id']); ?>"</textarea></td>
                        <td><input type="text" name="name" class="message" value="<?php echo($row['name']); ?>"</textarea></td>
                        <td><input type="text" name="email" class="message" value="<?php echo($row['email']); ?>"</textarea></td>
                        <td><input type="text" name="message" class="message" value="<?php echo($row['message']); ?>"</textarea></td>
                    </tr>
                <?php endwhile; ?>
                </table>
                <!--<button type="button" id="btn" value="EXPORT">EXPORT TO EXCEL</button>-->
                <a href="export_excel_2.php">Export Messages To Excel</a>
                <!--<button type="button" id="btn" value="EXPORT">PRINT</button>-->
    </body>
</html>
