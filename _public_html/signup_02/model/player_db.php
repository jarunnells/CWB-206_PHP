<?php
  include_once 'player_cls.php';
  // DATA -> $_POST
  $pla_fname = $_POST['pla_fname'] ?? '';
  $pla_lname = $_POST['pla_lname'] ?? '';
  $pla_add = $_POST['pla_add'] ?? '';
  $pla_city = $_POST['pla_city'] ?? '';
  $pla_state = $_POST['pla_state'] ?? '';
  $pla_zip = $_POST['pla_zip'] ?? '';
  $pla_phone = $_POST['pla_phone'] ?? '';
  $pla_par_fname = $_POST['pla_par_fname'] ?? '';
  $pla_par_lname = $_POST['pla_par_lname'] ?? '';
  $pla_bdate = $_POST['pla_bdate'] ?? '';
  $date_added = date('Y-m-d') ?? '';

  define('REGEX', [
    'name'=>"/^[a-zA-Z-' ]+$/",
    'street'=>"/^(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})$/",
    'city'=>"/^[A-z]{2,}$/",
    'state'=>"/^[A-Z]{2}$/",
    'zip'=>"/^\d{5}(-\d{4})?$/",
    'phone'=>"/^1?[-\. ]?(\(\d{3}\)?[-\. ]?|\d{3}?[-\. ]?)?\d{3}?[-\. ]?\d{4}$/",
    'date'=>"/^\d{4}(-\d{1,2}){2}/"
  ]);

//  $pla_fname = filter_var($_POST['pla_fname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['name']]]) ?? '';
//  $pla_lname = filter_var($_POST['pla_lname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['name']]]) ?? '';
//  $pla_add = filter_var($_POST['pla_add'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['street']]]) ?? '';
//  $pla_city = filter_var($_POST['pla_city'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['city']]]) ?? '';
//  $pla_state = filter_var($_POST['pla_state'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['state']]]) ?? '';
//  $pla_zip = filter_var($_POST['pla_zip'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['zip']]]) ?? '';
//  $pla_phone = filter_var($_POST['pla_phone'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['phone']]]) ?? '';
//  $pla_par_fname = filter_var($_POST['pla_par_fname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['name']]]) ?? '';
//  $pla_par_lname = filter_var($_POST['pla_par_lname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['name']]]) ?? '';
//  $pla_bdate = filter_var($_POST['pla_bdate'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['date']]]) ?? '';
//  $date_added = filter_var(date('Y-m-d'), FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['date']]]) ?? '';

  $pla_fname_re = filter_var($_POST['pla_fname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['name']]]);
  $pla_lname_re = filter_var($_POST['pla_lname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['name']]]);
  $pla_add_re = filter_var($_POST['pla_add'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['street']]]);
  $pla_city_re = filter_var($_POST['pla_city'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['city']]]);
  $pla_state_re = filter_var($_POST['pla_state'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['state']]]);
  $pla_zip_re = filter_var($_POST['pla_zip'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['zip']]]);
  $pla_phone_re = filter_var($_POST['pla_phone'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['phone']]]);
  $pla_par_fname_re = filter_var($_POST['pla_par_fname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['name']]]);
  $pla_par_lname_re = filter_var($_POST['pla_par_lname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['name']]]);
  $pla_bdate_re = filter_var($_POST['pla_bdate'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['date']]]);
  $date_added = filter_var(date('Y-m-d'), FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['date']]]);

  // TODO: improve warning message(s)
  // FIXME: modernize?
  if (empty($pla_fname)) { $error = 'First Name Required!'; }
  elseif (!$pla_fname_re) { $error = 'Invalid First Name. Letters Only!'; }
  elseif (empty($pla_lname)) { $error = 'Last Name Required!'; }
  elseif (!$pla_lname_re) { $error = 'Invalid Last Name. Letters Only!'; }
  elseif (empty($pla_add)) { $error = 'Street Address Required!'; }
  elseif (!$pla_add_re) { $error = 'Invalid Street Address. Try Again!'; }
  elseif (empty($pla_city)) { $error = 'City Required!'; }
  elseif (!$pla_city_re) { $error = 'Invalid City. Letters Only!'; }
  elseif (empty($pla_state)) { $error = 'State Required!'; }
  elseif (!$pla_state_re) { $error = 'Two-Letter State Only!'; }
  elseif (empty($pla_zip)) { $error = 'Zip Required!'; }
  elseif (!$pla_zip_re) { $error = 'Five Digit or zip+4 Only!'; }
  elseif (empty($phone)) { $error = 'Phone Number Required!'; }
  elseif (!$pla_phone_re) { $error = 'Invalid Phone Number. Try Again!'; }
  elseif (empty($pla_par_fname)) { $error = 'Parent First Name Required!'; }
  elseif (!$pla_par_fname_re) { $error = 'Invalid Parent First Name. Letters Only!'; }
  elseif (empty($pla_par_lname)) { $error = 'Parent Last Name Required!'; }
  elseif (!$pla_par_lname_re) { $error = 'Invalid Parent Last Name. Letters Only!'; }
  elseif (empty($pla_bdate)) { $error = 'Player Birthdate Required!'; }
  elseif (!$pla_bdate_re) { $error = 'Invalid Player Birthdate. YYY-MM-DD'; }
  else { $error = ''; }

  if ($error != '') {
    include('./index.php');
    exit();
  }

  // INSTANTIATE PLAYER OBJECT -> SET VALUES
  $player = new PlayerTest($pla_fname, $pla_lname);
  $player->set_address($pla_add, $pla_city, $pla_state, $pla_zip);
  $player->set_phone($pla_phone);

  /**
   * @return bool|int
   */
  function add_temp_player($print_it=false)
  {
    global $db;

    $today = date('Y-m-d');
//    $query = 'INSERT INTO new_player_tmp(
//                pla_lname, pla_fname, pla_phone, pla_par_lname, pla_par_fname,
//                pla_add, pla_city, pla_state, pla_zip, pla_bdate, date_added)
//              VALUES(
//                  :pla_lname, :pla_fname, :pla_phone, :pla_par_lname, :pla_par_fname,
//                  :pla_add, :pla_city, :pla_state, :pla_zip, :pla_bdate, :date_added)';
//    $statement = $db->prepare($query);
//    $statement->bindValue(':pla_lname', $_POST['pla_lname']);
//    $statement->bindValue(':pla_fname', $_POST['pla_fname']);
//    $statement->bindValue(':pla_phone', $_POST['pla_phone']);
//    $statement->bindValue(':pla_par_lname', $_POST['pla_par_lname']);
//    $statement->bindValue(':pla_par_fname', $_POST['pla_par_fname']);
//    $statement->bindValue(':pla_add', $_POST['pla_add']);
//    $statement->bindValue(':pla_city', $_POST['pla_city']);
//    $statement->bindValue(':pla_state', $_POST['pla_state']);
//    $statement->bindValue(':pla_zip', $_POST['pla_zip']);
//    $statement->bindValue(':pla_bdate', $_POST['pla_bdate']);
//    $statement->bindValue(':date_added', $today);
//    $statement->execute();
//    $statement->closeCursor();


    $query = "INSERT INTO new_player_tmp
    (pla_lname, pla_fname, pla_phone, pla_par_lname, pla_par_fname,
     pla_add, pla_city, pla_state, pla_zip, pla_bdate, date_added)
VALUES
     ('$_POST[pla_lname]', '$_POST[pla_fname]', '$_POST[pla_phone]', '$_POST[pla_par_lname]', '$_POST[pla_par_fname]',
     '$_POST[pla_add]', '$_POST[pla_city]', '$_POST[pla_state]', '$_POST[pla_zip]', '$_POST[pla_bdate]', '$today')";
    if($print_it) {echo("<section class='main__section--query-confirm'><pre>$today</pre><pre>$query</pre></section>");}
//    exit();
    return $db->exec($query);
  }
