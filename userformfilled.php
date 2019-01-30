<?php 
require 'includes/dbh.inc.php';
?>
<div id='userForm'>
    </form>
    <h1>Gelieve ons de volgende info mee te geven.</h1>
    <form action="./includes/signup.inc.php" method="post">
        <input type="text" name="uid" value=<?php echo $_SESSION["userNormalName"]?> disabled>
        <input type="text" name="mail" value=<?php echo $_SESSION["userNormalMail"]?> disabled>
        <input type="text" name="url1" value=<?php echo $_SESSION["userNormalurl1"]?>>
        <input type="text" name="url2" value=<?php echo $_SESSION["userNormalurl2"]?>>
        <input type="text" name="url3" value=<?php echo $_SESSION["userNormalurl3"]?>>
        <textarea rows="4" cols="50" name="message" placeholder=<?php echo $_SESSION["userNormalMessage"]?>></textarea><br>
        <button name="signup-submit" onclick="validateYouTubeUrl()">Bewaar</button>
    </form>

</div>
<div id='userChange'>
    <form action="./includes/createchange.inc.php" method="post">
    <input onfocus="$(this).val('')" type="text" name="email" value="E-mail"><br>
    <button name="changes-submit" onclick="validateYouTubeUrl()">Aanpassing maken?</button>
</form>
    </div>