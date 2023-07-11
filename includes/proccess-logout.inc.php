<?php
include 'autoloader.inc.php';
    session_start();
    LoginUtil::user_restricted();
    session_unset();
    session_destroy();
    header("Location: ..\login.php");
?>