<?php
  $dsn = '';
  $usr = '';
  $psw = '';

  try {
    $db = '';
  } catch (PDOException $err) {
    $err_msg = $err->getMessage();
    include('database_error.php');
    exit();
  }
