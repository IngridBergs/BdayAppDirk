<?php
if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $message = $_POST['message'];
    $url1 = $_POST['url1'];
    $url2 = $_POST['url2'];
    $url3 = $_POST['url3'];

    if (empty($username) || empty($email) || empty($message) || empty($url1) || empty($url2) || empty($url3)) {
        header('Location: ../index.php?error=emptyfields&uid=' . $username . '&mail=' . $email . '&message=' . $message . '&url1' . $url1 . '&url2' . $url2 . '&url3' . $url3);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/^[a-zA-Z0-9]*$/', $username)) {
        header('Location: ../index.php?error=invalidmailuid');
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../index.php?error=invalidmail&uid=' . $username . '&message=' . $message . '&url1' . $url1 . '&url2' . $url2 . '&url3' . $url3);
        exit();

    } else if (!preg_match('/^[a-zA-Z0-9]*$/', $username)) {
        header('Location: ../index.php?error=invalidmail&message=' . $message . '&url1' . $url1 . '&url2' . $url2 . '&url3' . $url3);
        exit();
    } else {

        $sql = 'SELECT uidUsers FROM users WHERE uidUsers=?';
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../index.php?error=sqlerror');
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 'sssss', $username, $message, $url1, $url2, $url3);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header('Location: ../index.php?error=usertaken&mail=' . $email);
                exit();
            } else {
                $sql = 'INSERT INTO users (uidUsers, emailUsers, userMessage, url1, url2, url3) VALUES (?,?,?,?,?,?)';
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header('Location: ../index.php?error=sqlerror');
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, 'sssss', $username, $message, $url1, $url2, $url3);
                    mysqli_stmt_execute($stmt);
                    header('Location: ../index.php?signup=succes');
                    exit();
                }
            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} else {
    header('Location: ../index.php');
    exit();
}
