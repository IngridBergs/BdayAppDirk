<?php

//Check for page title value

error_reporting(E_ALL ^ E_NOTICE);
if (!isset($title)) {
    $title = 'Welkom Gast!';
    if (isset($title) && $_SESSION['userNormalName']) {
        $title = 'Welkom terug gebruiker';
    }
    if (isset($title) && $_SESSION['userSuper']) {
        $title = 'Welkom Dirk!';
    }
}
