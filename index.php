<?php
require_once __DIR__ . '/partials/function.php';
if (isset($_GET['length'])) {
  session_start();
  $_SESSION['password'] = generatePassword();
  header('Location: redirect.php');
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strong Password Generator</title>
</head>

<body>
  <form action="index.php" method="GET">
    Inserisci la lunghezza della password: <input type="number" name="length">
    <button type="submit">Genera Password</button>
    <button type="reset">Reset</button>

  </form>
</body>

</html>