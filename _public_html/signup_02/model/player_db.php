<?php
  include_once ('player_cls.php');

  // TODO: finish implementation -> part 3
  // INSTANTIATE PLAYER OBJECT -> SET VALUES
  $player = new PlayerTest($_POST['pla_fname'], $_POST['pla_lname']);
  $player->set_address($_POST['pla_add'], $_POST['pla_city'], $_POST['pla_state'], $_POST['pla_zip']);
  $player->set_phone($_POST['pla_phone']);

  /**
   * @param bool $print_it
   * @return bool|int
   */
  function add_temp_player($print_it=false)
  {
    global $db;

    $today = date('Y-m-d');
    $query = 'INSERT INTO new_player_tmp(
                pla_lname, pla_fname, pla_phone, pla_par_lname, pla_par_fname,
                pla_add, pla_city, pla_state, pla_zip, pla_bdate, date_added)
              VALUES(
                  :pla_lname, :pla_fname, :pla_phone, :pla_par_lname, :pla_par_fname,
                  :pla_add, :pla_city, :pla_state, :pla_zip, :pla_bdate, :date_added)';
    $statement = $db->prepare($query);
    $statement->bindValue(':pla_lname', $_POST['pla_lname']);
    $statement->bindValue(':pla_fname', $_POST['pla_fname']);
    $statement->bindValue(':pla_phone', $_POST['pla_phone']);
    $statement->bindValue(':pla_par_lname', $_POST['pla_par_lname']);
    $statement->bindValue(':pla_par_fname', $_POST['pla_par_fname']);
    $statement->bindValue(':pla_add', $_POST['pla_add']);
    $statement->bindValue(':pla_city', $_POST['pla_city']);
    $statement->bindValue(':pla_state', $_POST['pla_state']);
    $statement->bindValue(':pla_zip', $_POST['pla_zip']);
    $statement->bindValue(':pla_bdate', $_POST['pla_bdate']);
    $statement->bindValue(':date_added', $today);
    $statement->execute();
    $statement->closeCursor();

    $query_out = "INSERT INTO new_player_tmp
    (pla_lname, pla_fname, pla_phone, pla_par_lname, pla_par_fname,
     pla_add, pla_city, pla_state, pla_zip, pla_bdate, date_added)
VALUES
     ('$_POST[pla_lname]', '$_POST[pla_fname]', '$_POST[pla_phone]', '$_POST[pla_par_lname]', '$_POST[pla_par_fname]',
     '$_POST[pla_add]', '$_POST[pla_city]', '$_POST[pla_state]', '$_POST[pla_zip]', '$_POST[pla_bdate]', '$today')";
    if($print_it) {echo("<section class='main__section--query-confirm'><pre>$today</pre><pre>$query_out</pre></section>");}
//    exit();
//    return $db->exec($query);
  }
