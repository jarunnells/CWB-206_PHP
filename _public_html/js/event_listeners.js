"use strict";

/*
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: event_listeners.js

*/
// VARS
let [hamburger, lbl_hamburger, nav_menu, container] = [
  document.querySelector(".hamburger"),
  document.querySelector(".hamburger-label"),
  document.querySelector("#nav_menu"),
  document.querySelector(".container"),
];

let handleEvent = () => {
  hamburger.classList.toggle("is-active");
  lbl_hamburger.classList.toggle("is-active");
  nav_menu.classList.toggle("is-active");
  container.classList.toggle("is-active");
};

// EVENT -> Hamburger.OnClick
hamburger.onclick = e => handleEvent();
