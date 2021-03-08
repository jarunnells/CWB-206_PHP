<?php
  // TODO: improve warning message(s)
  // FIXME: modernize?
  /* @var $pla_fname_re */
  /* @var $pla_lname_re */
  /* @var $pla_add_re */
  /* @var $pla_city_re */
  /* @var $pla_state_re */
  /* @var $pla_zip_re */
  /* @var $pla_phone_re */
  /* @var $pla_par_fname_re */
  /* @var $pla_par_lname_re */
  /* @var $pla_bdate_re */
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
