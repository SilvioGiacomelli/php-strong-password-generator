<?php
if (isset($_GET['length']) && is_numeric($_GET['lenght'])) {

  $lenght = $_GET['length'];

  //Definisco i caratteri delle passowrd
  $characetrs = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';

  $password = '';

  //In questo for genero la password con i caratteri definiti sopra nella variabile $characters

  for ($i = 0; $i < $lenght; $i++) {
    $password .= $characters[rand(0, strlen($characters) - 1)];
  }

  echo "La tua password è: " . $password;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strong Password Generator</title>
</head>

<body>
</body>

</html>