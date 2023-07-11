<?php

include 'autoloader.inc.php';

if (isset($_POST['submit'])) {
    $title = $_POST['id'];
    $date = $_POST['date'];
    $city = $_POST['city'];
    $place = $_POST['place'];
    $url = $_POST['url'];
    $otherArtists = $_POST['otherArtists'];
    
    $contr = new EventContr();
    $contr->addEvent($title,$date,$city,$place,$url,$otherArtists);
    header("location:..\admin.php");
}