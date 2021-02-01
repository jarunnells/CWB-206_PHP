"use strict";

/*
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: app.js

*/

const _debug = () => {
  "use strict";
  let greeting = 'Hello World!';
  console.log(greeting);
};

const run = () => {
  _debug();
};

window.onload = () => { run(); };