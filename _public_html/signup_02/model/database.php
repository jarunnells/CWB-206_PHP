<?php
  $dsn = 'mysql:host=localhost;dbname=ashland';
  $usr = 'user';
  $psw = 'Passw0rd';
//  $psw = 'password';

  try {
    $db = new PDO($dsn, $usr, $psw);
  } catch (PDOException $err) {
    $err_msg = $err->getMessage();
    include('../errors/database_error.php');
    exit();
  }
