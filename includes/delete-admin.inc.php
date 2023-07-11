<?php
    include 'autoloader.inc.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        
        $contr = new AdminContr(null, null);
        $contr->deleteAdmin($id);
        header("location:..\admin.php");
    }
?>