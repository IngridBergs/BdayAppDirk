<?php
$mail = $_POST['email'];
session_unset();
if (isset($_POST['changes-submit'])) {
    require 'dbh.inc.php';
    
    if (empty($mail)) {
        header('Location: ../index.php?error=nomailgiven');
        exit();
    } else {
        $sql = 'SELECT * FROM users WHERE emailUsers=?';
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../index.php?error=sqlerror');
            exit();} 
            else {
                mysqli_stmt_bind_param($stmt, "s", $mail );
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)){
                    session_start();
                    $_SESSION['userNormalMail'] = $row['emailUsers']; 
                    $_SESSION['userNormalName'] = $row['uidUsers']; 
                    $_SESSION['userNormalMessage'] = $row['userMessage']; 
                    $_SESSION['userNormalurl1'] = $row['url1']; 
                    $_SESSION['userNormalurl2'] = $row['url2']; 
                    $_SESSION['userNormalurl3'] = $row['url3']; 
                    $_SESSION['userNormaltitle'] = $row['url3']; 
                    header('Location: ../index.php?fetched=prevdata');
                    exit();
                }
        }
    }
} else {
    header('Location: ../index.php');
    exit();
}
?>