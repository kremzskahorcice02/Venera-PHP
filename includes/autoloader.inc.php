<?php

function autoLoader($classname) {
    $path = "classes/";
    $ext = ".class.php";
    $fullPath = $fullPath = $path . strtolower($classname) . $ext;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}

spl_autoload_register('autoLoader');