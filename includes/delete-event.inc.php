<?php

include 'autoloader.inc.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    
    $contr = new EventContr();
    $contr->deleteEvent($id);
    header("location:..\admin.php");
}