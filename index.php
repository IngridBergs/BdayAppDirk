<?php require "header.php";?>
<main>
<?php
if (isset($_SESSION['userSuper'])) {
    require "adminpage.php";
} 
else if (isset($_SESSION['userNormalMail'])){
    require "userformfilled.php";
}
else {
    $_SESSION['userGuest'];
    require "popup.php";
    require "userform.php";
}
?>

</main>
<?php require "footer.php";?>