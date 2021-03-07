<?php
  $dsn = 'mysql:host=localhost;dbname=ashland';
  $usr = 'user';
  $psw = 'Passw0rd';
//  $psw = 'password';

  try {
    switch (random_int(1,3)) {
      case 1:
        $db = new PDO('mysql:host=localhost;dbname=ashlands1234', $usr, $psw);
        break;
      case 2:
        $db = new PDO($dsn, 'Users1234', $psw);
        break;
      case 3:
        $db = new PDO($dsn, $usr, 'Passwords1234');
        break;
      default:
        break;
    }
//  } catch (PDOException $err) {
//    $err_msg = $err->getMessage();
//    include('../database_error.php');
//    exit();
//  } catch (Exception $err) {
//    $err_msg = $err->getMessage();
//    include('../database_error.php');
//    exit();
  } catch (PDOException | Exception $err) {
  $err_msg = $err->getMessage();
  include('../database_error.php');
  exit();
}
