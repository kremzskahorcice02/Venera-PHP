<?php

include 'autoloader.inc.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pwd = $_POST['password'];
    
    $contr = new AdminContr($name,$pwd);
    if ($contr->verifyLogin()) {
        session_start();
        $_SESSION['sessionId'] = $name;
        $_SESSION["login_time_stamp"] = time();
        header("location:..\admin.php");
    }
} else {
    header("location: ..\login.php");
}