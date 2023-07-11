<?php
    include 'includes\autoloader.inc.php';
    session_start();
    LoginUtil::user_restricted();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venera</title>
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" href="styles/admin.css"/>
</head>
<body>
    <div class="admins-list">
        <h2>Seznam adminů</h2>
        <?php
        $admins = new AdminView();
        $admins->showAllAdmins();
        ?>
        <a href="admin.php">Zpět &#127968;</a>
    </div>
</body>
</html>