<?php
 if  ($_SESSION['valid'] = true){
     echo "<h1>Welkom Dirk</h1>";
 };



//create connection
$mySqlConnection = new mysqli("localhost", "IngridB", "bananahouse586!", "verjaardagDB");

//check connection

if (!$mySqlConnection) {
      die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br><br>";



//overview Youtube movies


$sql_queryMovies = "SELECT * FROM user_details WHERE email = 'ingrid.bergs@gmail.com'";
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
                        <td width="300px"><textarea  class="message"><?php echo($row["id"]); ?></textarea></td>
                        <td width="300px"><textarea  class="message"><?php echo($row["name"]); ?></textarea></td>
                        <td width="300px"><textarea  class="message"><?php echo($row["email"]); ?></textarea></td>
                        <td width="300px"><textarea  class="message"><?php echo($row["title_song"]); ?></textarea></td>
                        <td width="300px"><textarea  class="message"><?php echo($row["artiest"]); ?></textarea></td>
                        <td width="300px"><a href="<?php echo($row['url']); ?>">URL</a></td>
                        <td width="300px"><iframe width="105" height="78" frameborder="0" allowfullscreen src="<?php echo($row["url"]); ?>">
                        </iframe></td>
                    </tr>
                <?php endwhile; ?>
                </table>
                <a href="export.php">Export To Excel</a>


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
                        <td width="300px"><textarea  class="message"><?php echo($row["id"]); ?></textarea></td>
                        <td width="300px"><textarea  class="message"><?php echo($row["name"]); ?></textarea></td>
                        <td width="300px"><textarea  class="message"><?php echo($row["email"]); ?></textarea></td>
                        <td width="300px"><textarea  class="message"><?php echo($row["message"]); ?></textarea></td>
                    </tr>
                <?php endwhile; ?>
                </table>
                <!--<button type="button" id="btn" value="EXPORT">EXPORT TO EXCEL</button>-->
                <a href="export.php">Export To Excel</a>
                <!--<button type="button" id="btn" value="EXPORT">PRINT</button>-->
    </body>
</html>
