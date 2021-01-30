<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: index.php
-->
<?php
  include './helpers/photos.php';
  include './helpers/files.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- STYLESHEET(S) -->
  <link rel="stylesheet" href="./css/styles.min.css">
  <!-- UNPROCESSED/UNMERGED STYLESHEET(S) -->
  <link rel="stylesheet" href="../src/css/landing.css">
  <!-- SCRIPT(S) -->
  <script src="./js/app.js" defer></script>
  <title>Ashland Landing Page</title>
</head>
<body>
  <div class="body dark">
    <header class="flex">
      <!-- <div class="logo">
        <img src="assets/img/smLogo.gif" alt="LOGO"></img>
      </div> -->
      <img src="assets/img/provided/logos/smLogo.gif" alt="LOGO"></img>
      <nav>
        <ul class="flex">
          <li><a href="home.php">Home</a></li>
          <li><a href="teams.php">Teams</a></li>
          <li><a href="action.php">Action</a></li>
          <li><a href="map.php">Map</a></li>
          <li><a href="#">Soon...</a></li>
          <li><a href="#">Soon...</a></li>
        </ul>
      </nav>
    </header>
    <main class="content flex">
      <h2>Ashland&nbsp;Valley Soccer&nbsp;League</h2>
      <div class="btn">
        <a href="home.php" target="_self"><button class="btn btn-enter">ENTER SITE</button></a>
      </div>
      <section id="holder">
        <form action="" method="get" id="form_process">
          <table>
            <caption class="info-form-caption">Keep In Touch</caption>
            <tr>
              <td><label for="fname">First Name:</label></td>
              <td><input type="text" name="fname" id="fname" maxlength="40" required autofocus><span class="required">*</span></td>
            </tr>
            <tr>
              <td><label for="lname">Last Name:</label></td>
              <td><input type="text" name="lname" id="lname" maxlength="40" required><span class="required">*</span></td>
            </tr>
            <tr>
              <td><label for="email">Email:</label></td>
              <td><input type="email" name="email" id="email" placeholder="email@example.com" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$" maxlength="10" required><span class="required">*</span></td>
            </tr>
            <tr>
              <td><label for="phone">Phone:</label></td>
              <td><input type="tel" name="phone" id="phone" placeholder="303-555-1234" title="303-555-1234 or (303) 555-1234" pattern="(?:\(\d{3}\)\s|\d{3})[-]?\d{3}[-]?\d{4}" maxlength="14"><span class="required"></span></td>
            </tr>
            <tr>
              <th id="required" colspan="2">* Required</th>
            </tr>
            <tr>
              <td colspan="2" class="btns-form">
                <button type="submit" class="btn btn-submit styled">SUBMIT</button>
                <button type="reset" class="btn btn-clear styled">CLEAR</button>
              </td>
            </tr>
          </table>
        </form>
      </section>
    </main>
  </div>
</body>
</html>