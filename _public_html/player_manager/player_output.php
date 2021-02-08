<?php
  require_once ('Player.php');
  require_once ('MinorPlayer.php');

  $player_01 = new Player('Ziggy', 'Wiggy', '05/26/2016');
  $player_01->set_team('Wizards');
  $player_01->set_address('1234 North Main Street', 'AnyTown', 'CA', '90210');
  $player_01->set_phone('415.555.1234');

  // $player_02 = new MinorPlayer('Marley', 'McFarley', '12/05/2014', 'Ziggy', 'Wiggy');
  $player_02 = new MinorPlayer('Ziggy', 'Wiggy', '05/26/2016', 'Marley', 'McFarley');
  $player_02->set_team('Knights');
  $player_02->set_address('4321 South Main Street', 'AnyTown', 'CO', '80642');
  $player_02->set_phone('720.555.4321');

  $br = "<br />";
  $hr = "<br /><hr /><br />";
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    pre { font-size: 1.25rem; }
  </style>
  <title>Player Class</title>
</head>
<body>
<pre><?php
  echo 'Class -> Player.php';
  echo $hr;
  echo 'Player->Player(asString=true): '.$player_01->get_player_name(true).$br;
  echo 'Player->Player[\'first\']: '.$player_01->get_player_name()['first'].$br;
  echo 'Player->Player[\'last\']: '.$player_01->get_player_name()['last'].$br;
  echo 'Player->Birthday: '.$player_01->get_birth_date().$br;
  echo 'Player->Team: '.$player_01->get_team().$br;
  echo 'Player->Phone: '.$player_01->get_phone().$br;
  echo 'Player->Address(asString=true): '.$player_01->get_address(true).$br;
  echo 'Player->Address[\'street\']: '.$player_01->get_address()['street'].$br;
  echo 'Player->Address[\'city\']: '.$player_01->get_address()['city'].$br;
  echo 'Player->Address[\'state\']: '.$player_01->get_address()['state'].$br;
  echo 'Player->Address[\'zip\']: '.$player_01->get_address()['zip'].$br;
  echo $br.$br;
  echo 'Class -> MinorPlayer.php';
  echo $hr;
  echo 'MinorPlayer->Parent(asString=true): '.$player_02->get_parent_name(true).$br;
  echo 'MinorPlayer->Parent[\'first\']: '.$player_02->get_parent_name()['first'].$br;
  echo 'MinorPlayer->Parent[\'last\']: '.$player_02->get_parent_name()['last'].$br;
  echo 'MinorPlayer->Player->Player(asString=true): '.$player_02->get_player_name(true).$br;
  echo 'MinorPlayer->Player->Player[\'first\']: '.$player_02->get_player_name()['first'].$br;
  echo 'MinorPlayer->Player->Player[\'last\']: '.$player_02->get_player_name()['last'].$br;
  echo 'MinorPlayer->Birthday: '.$player_02->get_birth_date().$br;
  echo 'MinorPlayer->Team: '.$player_02->get_team().$br;
  echo 'MinorPlayer->Phone: '.$player_02->get_phone().$br;
  echo 'MinorPlayer->Address(asString=true): '.$player_02->get_address(true).$br;
  echo 'MinorPlayer->Address[\'street\']: '.$player_02->get_address()['street'].$br;
  echo 'MinorPlayer->Address[\'city\']: '.$player_02->get_address()['city'].$br;
  echo 'MinorPlayer->Address[\'state\']: '.$player_02->get_address()['state'].$br;
  echo 'MinorPlayer->Address[\'zip\']: '.$player_02->get_address()['zip'].$br;
  echo $br;
  echo $hr;
  echo 'Player Count -> '.Player::$counter;
  echo $br;
  echo $hr;
?></pre>

</body>
</html>
