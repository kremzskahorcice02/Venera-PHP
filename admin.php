<?php
    include 'includes\autoloader.inc.php';
    session_start();
    LoginUtil::user_restricted();
    $msg = null;
    if (isset($_SERVER['QUERY_STRING'])) {
        $query = $_GET['error'];
        if ($_GET['error'] == "cannotdelete") {
            $msg = "Nepodařilo se vymazat";
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
  <div class="events-admin">
    <h2>Koncerty</h2>
    <?php
      if ($msg != null) {
        echo '<p class="alert">' . $msq . '</p>' . $_SESSION['sessionId'] . ' ' . $_SESSION['login_time_stamp'];
      }
      echo $_SESSION['sessionId'] . ' ' . $_SESSION['login_time_stamp'];
    ?>
    <div class="events-admin-btn">
        <a href="event-add.php">Přidat akci</a>
        <a href="admin-list.php">Seznam adminů</a>
        <a href="admin-add.php">Přidat admina</a>
        <a href="includes\proccess-logout.inc.php">Odhlásit se</a>
    </div>
    <?php 
        $events = new EventView();
        $events->showAllEventsAdminMode();
    ?>
  </div>
</body>
</html>