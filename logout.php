<?php
 //destroy the session
session_destroy();
 //to redirect back to "login.php" after logging out
header("location: login.php");
exit();
?>
