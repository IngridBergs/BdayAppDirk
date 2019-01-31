<?php session_start(); ?>
<?php
include_once './includes/webtitles.inc.php';
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='./assets/css/main.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="icon" 
      type="image/png" 
      href="./assets/img/favicon.ico">
</head>
<header>
<div id='loginButton'><span>Login</span></div>
<div id='loginBar'>
    <?php require 'loginbar.php'; ?>
</div>
</header>