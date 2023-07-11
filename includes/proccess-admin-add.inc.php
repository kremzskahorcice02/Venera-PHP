<?php

include 'autoloader.inc.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pwd = $_POST['password'];
    $pwdVerify = $_POST['password_correct'];

    $contr = new AdminContr($name,$pwd);
    $contr->verifyAndAddAdmin($pwdVerify);
}