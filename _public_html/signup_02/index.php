<?php
  require_once('./model/database.php');
  require_once('./model/player_db.php');

  if(isset($_POST['action'])) {
    $action = $_POST['action'];
  } elseif (isset($_GET['action'])) {
    $action = $_GET('action');
  } else {
    $action = 'list_players';
    header("Location :../../signup.html");
  }

  if($action === 'new_player') { $record_added = add_temp_player($print_it=true); }
  /** @var PDO $db */
  $q = 'DESCRIBE new_player_tmp;';
  $tbl_desc = $db->query($q);
  $result = $tbl_desc->fetchAll(PDO::FETCH_ASSOC);
  //var_dump($result);
?>

<!doctype html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- STYLESHEET(S) -->
    <link rel="stylesheet" href="./css/db_test.css">

    <title>Sign up</title>
  </head>

  <body style="background: #111;">
    <main class="container">
      <section class="output_table_desc">
        <p>Connection <span class="success">SUCCESSFUL</span>!</p>
        <div class="describe">
          <div class="query">
            <code><span class="keyword">DESCRIBE</span> ashland.new_player_tmp;</code>
          </div>
          <div class="desc_tbl">
            <table>
              <thead>
              <tr>
                <th>Field</th>
                <th>Type</th>
                <th>Null</th>
                <th>Key</th>
                <th>Default</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($result as $col) : ?>
                <tr>
                  <td><?php echo $col['Field'] ?></td>
                  <td><?php echo $col['Type'] ?></td>
                  <td><?php echo $col['Null'] ?></td>
                  <td><?php echo $col['Key'] ?></td>
                  <td><?php echo $col['Default'] ?? 'NULL' ?></td>
                </tr>
              <?php endforeach; ?>
              </tbody>
              <tfoot></tfoot>
            </table>
          </div>
        </div>
        <div id="footer">
          <p class="copyright">&copy; <?php echo date("Y"); ?> Aims Community College</p>
        </div>
      </section>
    </main>
  </body>
</html>
