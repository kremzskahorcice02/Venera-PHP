<?php
    $query = null;
    $msg = null;
    if (isset($_SERVER['QUERY_STRING'])) {
        $query = $_GET['error'];
        if ($query == "wrongpwd") {
            $msg = "Špatné heslo";
        } else if ($query == "adminnotfound") {
            $msg = "Špatné jméno či heslo";
        } else if($query = "noconn") {
            $msg = "Chyba při pokusu o připojení k DB";
        }
    }
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
<form method="post" action="includes\proccess-login.inc.php" class="login">
    <label class="subtitle" for="name">Jméno</label>
    <input type="text" name="name">
    <label class="subtitle" for="password">Heslo</label>
    <input type="password" name="password">
    <button class="submit-btn" type="submit" name="submit">Přihlásit se</button>
    <?php 
        if ($query != null) {
            echo '<p class="alert">' . $msg . '</p>';
        }
    ?>
</form>
</body>
</html>