<?php
  /**************************************************************************
   *   DEVELOPER:  J.A. Runnells
   *      COURSE: CIS-206-R11
   *      BRANCH: main
   *        FILE: vars.php -> Buy Tickets :: variables
   ***************************************************************************/

  define('LOGO', '../../ashland/dist/assets/img/provided/logos/soccerball.gif');
  define('NAV_LINK', [
    'index'=>'../basics.php',
    'charges'=>'./index.php'
  ]);
  define('BACK', [
    'index'=>'<< BACK >>',
    'charges'=>'<< FORM >>'
  ]);
  define('TITLE', [
    'index'=>'!BUY TICKETS!',
    'charges'=>'Order Summary'
  ]);
  define(
    'QTY', [
      'MIN'=>[
        'adult'=>1,
        'youth'=>0
      ],
      'MAX'=>5,
//      'TOTAL'=>5
    ]
  );
  define(
    'TICKET_COST', [
      'adult'=>15.0,
      'youth'=>7.5
    ]
  );
