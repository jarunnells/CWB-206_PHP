<?php
  $dsn = 'mysql:host=localhost;dbname=ashland';
  $usr = 'user';
  $psw = 'Passw0rd';

  try {
    $db = new PDO($dsn, $usr, $psw);
  } catch (PDOException $err) {
    $err_msg = $err->getMessage();
    include('database_error.php');
    exit();
  }
