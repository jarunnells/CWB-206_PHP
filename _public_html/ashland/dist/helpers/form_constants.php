<?php
  $today = strtotime('Today');
  $cal_min = strtotime('-21 years', $today);
  $cal_max = strtotime('+1 year', $today);
  define('FORM_CAPTION', 'Player Signup');
  define('PLACEHOLDERS', [
    'bday'=>'YYYY-MM-DD',
    'phone'=>'303-555-1234',
    'state'=>'CO',
    'zip'=>'12345[-6789]'
  ]);
  define('TITLES', [
    'bday'=>'Four Digit Year, Two Digit Month, Two Digit Day',
    'phone'=>'303-555-1234 or (303) 555-1234',
    'state'=>'Two Letter Abbreviation...',
    'zip'=>'Zip[+4]...'
  ]);
  define('STATES', [
    'AL', 'AK', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'FL',
    'GA', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA',
    'ME', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE',
    'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'OH', 'OK',
    'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT',
    'VA', 'WA', 'WV', 'WI', 'WY', 'AS', 'DC', 'FM', 'GU',
    'MH', 'MP', 'PW', 'PR', 'VI', 'AA', 'AE', 'AP'
  ]);
  define('REGEX', [
    'name'=>"/^[a-zA-Z-' ]+$/",
    'street'=>"/^(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})$/",
    'city'=>"/^[A-z]{2,}$/",
    'state'=>"/^[A-Z]{2}$/",
    'zip'=>"/^\d{5}(-\d{4})?$/",
    'phone'=>"/^1?[-\. ]?(\(\d{3}\)?[-\. ]?|\d{3}?[-\. ]?)?\d{3}?[-\. ]?\d{4}$/",
    'date'=>"/^\d{4}(-\d{1,2}){2}/"
  ]);
