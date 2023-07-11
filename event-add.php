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
<form class="customForm" action="includes\add-event.inc.php" method="post">
  <h2>Nová akce</h2>
  <label for="title">Název (není povinné)</label>
  <input type="text" name="title" id="title">
  <label for="date">Datum</label>
  <input type="date" name="date" id="date" required>
  <label for="city">Město</label>
  <input type="text" name="city" id="city" required>
  <label for="place">Místo</label>
  <input type="text" name="place" id="place" required>
  <label for="otherArtists">Další kapely (není povinné)</label>
  <input type="text" name="otherArtists" id="otherArtists">
  <label for="url">Link na akci (není povinné)</label>
  <input type="url" name="url" id="url">
  <button type="submit" name="submit">Přidat</button>
  <a href="admin.php">Zpět &#127968;</a>
</form>
</html>