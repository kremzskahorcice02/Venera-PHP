<?php
include 'autoloader.inc.php';
    session_start();
    $_SESSION['loggedIn'] = false;
    LoginUtil::user_restricted();
    exit();
?>