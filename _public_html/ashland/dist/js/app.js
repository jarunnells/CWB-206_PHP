"use strict";

/*
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: app.js

*/

const [ current, imgs ] = [
  document.querySelector('.current'),
  document.querySelectorAll('.container__imgs img'),
];
const thumb_opacity = 0.5;

imgs[0].style.opacity = thumb_opacity;

imgs.forEach(img => img.addEventListener('click', thumb_clicked));

function thumb_clicked(e) {
  // Reset image(s) opacity
  imgs.forEach(img => img.style.opacity=1);
  // Toggle image
  current.src = e.target.src;
  // Apply fade animation
  current.classList.add('fade-img');
  // Remove fade class
  setTimeout(() => current.classList.remove('fade-img'), 250);
  // Toggle opacity
  e.target.style.opacity = thumb_opacity;
};

// DEBUGGING JUNK ***************************
const _debug = () => {
  "use strict";
  let greeting = 'Hello World!';
  console.log(greeting);
};

const run = () => {
  _debug();
};

window.onload = () => { run(); };