<?php

include 'autoloader.inc.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pwd = $_POST['password'];
    
    $contr = new AdminContr($name,$pwd);
    $contr->verifyLogin();
    session_start();
    $_SESSION['loggedIn'] = true;
    $_SESSION["login_time_stamp"] = time();
    header("location:..\admin.php");
} else {
    header("location: ..\login.php");
}