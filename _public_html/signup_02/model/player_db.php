<?php
  include_once ('player_cls.php');

  // TODO: finish implementation -> Parent(s) :: Move to data validation ??
  // INSTANTIATE PLAYER OBJECT -> SET VALUES
  $player = new PlayerTest($_POST['pla_fname'], $_POST['pla_lname'], $_POST['pla_bdate']);
  $player->set_address($_POST['pla_add'], $_POST['pla_city'], $_POST['pla_state'], $_POST['pla_zip']);
  $player->set_phone($_POST['pla_phone']);

  /**
   * @param bool $print_it
   * @return PlayerTest|Player
   */
  // function add_temp_player($print_it=false): bool|int
  // function add_temp_player($print_it=false): PlayerTest|Player
  function add_temp_player($print_it=false): PlayerTest
  {
    global $db, $player;

    $today = date('Y-m-d');
    $query = 'INSERT INTO new_player_tmp(
                pla_lname, pla_fname, pla_phone, pla_par_lname, pla_par_fname,
                pla_add, pla_city, pla_state, pla_zip, pla_bdate, date_added)
              VALUES(
                  :pla_lname, :pla_fname, :pla_phone, :pla_par_lname, :pla_par_fname,
                  :pla_add, :pla_city, :pla_state, :pla_zip, :pla_bdate, :date_added)';
    $statement = $db->prepare($query);
    $statement->bindValue(':pla_lname', $player->get_player_name()['last']);
    $statement->bindValue(':pla_fname', $player->get_player_name()['first']);
    $statement->bindValue(':pla_phone', $player->get_phone());
    $statement->bindValue(':pla_par_lname', $_POST['pla_par_lname']);
    $statement->bindValue(':pla_par_fname', $_POST['pla_par_fname']);
    $statement->bindValue(':pla_add', $player->get_address()['street']);
    $statement->bindValue(':pla_city', $player->get_address()['city']);
    $statement->bindValue(':pla_state', $player->get_address()['state']);
    $statement->bindValue(':pla_zip', $player->get_address()['zip']);
    $statement->bindValue(':pla_bdate', $player->get_birth_date());
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
    return $player;
  }
