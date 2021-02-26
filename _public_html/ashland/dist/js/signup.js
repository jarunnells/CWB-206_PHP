"use strict";

/*
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: signup.js

*/

$(() => {
  $('#player_bday').datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: 'yy-mm-dd',
    showAnim: "clip",
    showButtonPanel: true,
    showWeek: true,
    minDate: '-21y',
    maxDate: 0,
    closeText: 'CLOSE',
    classes: {
      'ui-datepicker-close': 'btn btn-success',
    },
    showOn: "button",
    buttonImage: "./assets/img/today-white-18dp.svg",
    buttonImageOnly: true,
    buttonText: "Select date",
  });
  $('.ui-datepicker').css({"font-family": "JetBrains Mono, Courier New, monospace"});
  $('.btn-clr').click(e => {
    e.preventDefault();
    $(':text').val('');
    $(':input[type="date"]').val('');
  });
});
