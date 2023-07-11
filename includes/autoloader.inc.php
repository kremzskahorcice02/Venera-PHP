<?php

spl_autoload_register('autoLoader');

function autoLoader($classname) {
    $path = "classes/";
    $ext = ".class.php";
    $fullPath = $path . $classname . $ext;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}