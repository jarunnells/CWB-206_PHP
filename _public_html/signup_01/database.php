<?php
  $dsn = 'mysql:host=localhost;dbname=ashland';
  $usr = 'user';
  $psw = 'Passw0rd';
//  $psw = 'password';

  try {
    $db = new PDO($dsn, $usr, $psw);
//  DEBUGGING ***************************************************************
//    $db = new PDO('mysql:host=localhost;dbname=ashlands', $usr, $psw);
//    $db = new PDO($dsn, 'Users', $psw);
//    $db = new PDO($dsn, $usr, 'pa55w0rd');
//  *************************************************************************
  } catch (PDOException $err) {
    $err_msg = $err->getMessage();
    include('database_error.php');
    exit();
  }
