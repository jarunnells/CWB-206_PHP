<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: photos.php
-->
<?php
  $page;
  // PATH CONSTANTS ***********************************************
  define('BASE', './assets/img/provided/');
  define('LOGOS', BASE.'logos/');
  define('MAPS', BASE.'maps/');
  define('SOLO', BASE.'solo/');
  define('TEAM', BASE.'team/');
  define('ACTION', BASE.'action/');
  /// LOGOS *******************************************************
  define('IMG_SMLOGO', LOGOS.'smLogo.gif');
  define('IMG_SOCCERBALL', LOGOS.'soccerball.gif');
  define('IMG_TSS', LOGOS.'tss.gif');
  /// MAPS *******************************************************
  define('IMG_COMPLEXMAP', MAPS.'complexmap.jpg');
  define('IMG_MAP1', MAPS.'map1.gif');
  define('IMG_MAP2', MAPS.'map2.gif');
  define('IMG_MAP3', MAPS.'map3.gif');
  define('IMG_MAP4', MAPS.'map4.gif');
  define('IMG_MAP5', MAPS.'map5.gif');
  /// SOLO *******************************************************
  define('IMG_AMITH', SOLO.'amith.jpg');
  define('IMG_JOHN', SOLO.'john.jpg');
  define('IMG_KRST', SOLO.'krst.jpg');
  /// TEAM *******************************************************
  define('IMG_BLUEDEVILS', TEAM.'bluedevils.jpg');
  define('IMG_ATEAM', TEAM.'ateam.jpg');
  define('IMG_DSC', TEAM.'dsc.jpg');
  /// ACTION *****************************************************
  define('IMG_DIT', ACTION.'dit.jpg');
  define('IMG_KATH', ACTION.'kath.jpg');
  define('IMG_REC', ACTION.'rec.jpg');

  $images_team = array(IMG_BLUEDEVILS, IMG_ATEAM, IMG_DSC);
  $images_action = array(IMG_DIT, IMG_KATH, IMG_REC);
  $images_map = array(IMG_COMPLEXMAP, IMG_MAP1, IMG_MAP2, IMG_MAP3, IMG_MAP4, IMG_MAP5);

  function set_page($pg) {
    GLOBAL $page;
    $page = $pg;
  }

  function set_page_team() {
    GLOBAL $page;
    $page = 'team';
  }

  function set_page_action() {
    GLOBAL $page;
    $page = 'acton';
  }

  function output_html() {
    GLOBAL $page, $images_action, $images_team, $images_map;
    $img_array = array();
    // $img_array_len = count($img_array);

    if ($page == 'teams') {
      $img_array = $images_team;
      // $img_array_len = count($img_array);
    } elseif ($page == 'action') {
      $img_array = $images_action;
      // $img_array_len = count($img_array);
    } else {
      $img_array = $images_map;
      // $img_array_len = count($img_array);
    }

    /// echo '    <section class="slider">';
    /// foreach ( $img_array as $_ ) {
    ///   echo '
    ///   <div class="slide current">
    ///     <div class="card">
    ///       <h1>Photo One</h1>
    ///       <p>Lorem ipsum dolor sit amet.</p>
    ///     </div>
    ///   </div>
    ///   ';
    /// }

    echo '    <section class="slider">';
    for ($i=0; $i<count($img_array); $i++) {
      if ($i === 0) {
        echo '
        <div class="slide current">
        ';
      } else {
        echo '
        <div class="slide">
        ';
      }
      echo '
          <div class="card">
            <h1>Photo One</h1>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>';
    }
    echo '
        <div class="buttons">
          <button class="btn buttons__prev"><i class="material-icons">chevron_left</i></button>
          <button class="btn buttons__next"><i class="material-icons">chevron_right</i></button>
        </div>
      </section>
      <section class="buttons">
        <div class="buttons-skip flex flex--row flex--center">
          <button class="btn buttons__play"><i class="material-icons">play_circle_outline</i></button>
          <button class="btn buttons__pause"><i class="material-icons">pause_circle_outline</i></button>
    ';
    for ($i=0; $i<count($img_array); $i++) {
      if ($i === 0) {
        echo '
          <i class="btn__radio material-icons" id="rad-1">radio_button_checked</i>
        ';
      } else {
        echo '
          <i class="btn__radio material-icons" id="rad-2">radio_button_unchecked</i>
        ';
      }
    }
    echo '
      </div>
    </section>
    ';

    /// echo '
    /// <section class="slider">
    ///   <div class="slide current">
    ///     <div class="card">
    ///       <h1>Photo One</h1>
    ///       <p>Lorem ipsum dolor sit amet.</p>
    ///     </div>
    ///   </div>
    ///   <div class="slide">
    ///     <div class="card">
    ///       <h1>Photo Two</h1>
    ///       <p>Lorem ipsum dolor sit amet.</p>
    ///     </div>
    ///   </div>
    ///   <div class="slide">
    ///     <div class="card">
    ///       <h1>Photo Three</h1>
    ///       <p>Lorem ipsum dolor sit amet.</p>
    ///     </div>
    ///   </div>
    ///   <div class="buttons">
    ///     <button class="btn buttons__prev"><i class="material-icons">chevron_left</i></button>
    ///     <button class="btn buttons__next"><i class="material-icons">chevron_right</i></button>
    ///   </div>
    /// </section>
    /// <section class="buttons">
    ///   <div class="buttons-skip flex flex--row flex--center">
    ///     <button class="btn buttons__play"><i class="material-icons">play_circle_outline</i></button>
    ///     <button class="btn buttons__pause"><i class="material-icons">pause_circle_outline</i></button>      
    ///     <i class="btn__radio material-icons" id="rad-1">radio_button_checked</i>
    ///     <i class="btn__radio material-icons" id="rad-2">radio_button_unchecked</i>
    ///     <i class="btn__radio material-icons" id="rad-3">radio_button_unchecked</i>
    ///   </div>
    /// </section>
    /// ';
  }
?>
