<?php
  require_once('view/header.php');
  require_once('model/database.php');
  require_once('model/player_db.php');

  if(isset($_POST['action'])) {
    $action = $_POST['action'];
  } elseif (isset($_GET['action'])) {
    $action = $_GET('action');
  } else {
    $action = 'list_players';
    header("Location :../../signup.html");
  }

  if($action === 'new_player') {
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

    require_once ('model/regex_const.php');

    $pla_fname_re = filter_var($_POST['pla_fname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>_REGEX['name']]]);
    $pla_lname_re = filter_var($_POST['pla_lname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>_REGEX['name']]]);
    $pla_add_re = filter_var($_POST['pla_add'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>_REGEX['street']]]);
    $pla_city_re = filter_var($_POST['pla_city'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>_REGEX['city']]]);
    $pla_state_re = filter_var($_POST['pla_state'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>_REGEX['state']]]);
    $pla_zip_re = filter_var($_POST['pla_zip'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>_REGEX['zip']]]);
    $pla_phone_re = filter_var($_POST['pla_phone'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>_REGEX['phone']]]);
    $pla_par_fname_re = filter_var($_POST['pla_par_fname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>_REGEX['name']]]);
    $pla_par_lname_re = filter_var($_POST['pla_par_lname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>_REGEX['name']]]);
    $pla_bdate_re = filter_var($_POST['pla_bdate'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>_REGEX['date']]]);
    $date_added = filter_var(date('Y-m-d'), FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>_REGEX['date']]]);

    include_once ('errors/form_errors.php');

    // FIXME: broken path -> fix upon merge
    /* @var $error */
//    if ($error != '') {
////    include ('./index.php');
//      include ('../ashland/dist/signup.php');
//      exit();
//    } else {
//      $record_added = add_temp_player($print_it=true);
//    }
    if (empty($error)) { $record_added = add_temp_player($print_it=true); }
  }
?>
    <main class="container">
      <?php if (!empty($error)): ?>
        <div class="error-signup"><?php echo "$error"; ?></div>
      <?php endif; ?>
      <?php if (!empty($record_added)): ?>
        <div class="record-added-signup">
          <p>New Record:</p>
          <p><?php echo $record_added->get_player_name()['first'].' '.$record_added->get_player_name()['last']; ?></p>
        </div>
      <?php endif; ?>
      <?php include_once 'view/desc_tmp_tbl.php'; ?>
      <div><a href="../ashland/dist/signup.php"><button type="button" class="btn form-reset">⬅️ RESET FORM</button></a></div>
    </main>
<?php require_once('view/footer.php'); ?>
