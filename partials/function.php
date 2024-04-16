<?php
if (isset($_GET['length']) && is_numeric($_GET['length'])) {

  $length = $_GET['length'];

  //Definisco i caratteri delle passowrd
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';

  $password = '';

  //In questo for genero la password con i caratteri definiti sopra nella variabile $characters

  for ($i = 0; $i < $length; $i++) {
    $password .= $characters[rand(0, strlen($characters) - 1)];
  }
}
