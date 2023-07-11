<?php
    include 'includes\autoloader.inc.php';
    session_start();
    LoginUtil::user_restricted();
    $msg = null;
    $query = null;
    if (isset($_SERVER['QUERY_STRING'])) {
        $query = $_GET['error'];
        if ($query == "shortfields") {
            $msg = "Jméno i heslo musí mít minimálně 8 znaků";
        } elseif ($query == "pwdnotsame") {
            $msg = "Hesla se neshodují";
        } elseif ($query == "wrongname") {
            $msg = "Jméno může obsahovat pouze: (a-z,A-Z,0-9)";
        } elseif ($query == "wrongpwd") {
            $msg = "Heslo může obsahovat pouze: (a-z,A-Z,0-9)";
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
    <form class="customForm" action="\includes\proccess-admin-add.inc.php" method="post">
        <h2>Nový admin</h2>
        <label for="name">Uživatelské jméno</label>
        <input type="text" name="name">
        <label for="password">Heslo</label>
        <input type="password" name="password">
        <label for="password_correct">Potvrdit heslo</label>
        <input type="password" name="password_correct">
        <button class="submit-btn" type="submit" name="submit">Přidat</button>
        <?php
            if($msg != null) {
                echo '<p class="alert">' . $msg . '</p>';
            }
        ?>
        <a href="admin.php">Zpět &#127968;</a>
    </form>
</body>
</html>