<?php

if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $user = $_POST['loginuid'];
    $password = $_POST['pwd'];

    if (empty($user) || empty($password)) {
        header('Location: ../index.php?error=emptyfields');
        exit();
    } else {
        $sql = 'SELECT * FROM superuser WHERE adminname=?';
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../index.php?error=sqlerror');
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $user );
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = ($password = $row['adminpassword']);
                if ($pwdCheck == false) {
                    header('Location: ../index.php?error=wrongpwd');
                    exit();
                }
                else if ($pwdCheck == true){
                    session_start();
                    $_SESSION['userSuper'] = $row['adminname'];

                    header('Location: ../index.php?login=succes');
                    exit();
                }
            } else {
                header('Location: ../index.php?error=nouser');
            }
        }
    }

} else {
    header('Location: ../index.php');
    exit();
}
