"use strict";

/*
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: event_listeners.js

*/

// VARS
let hamburger = document.querySelector(".hamburger"),
    lbl_hamburger = document.querySelector(".hamburger-label"),
    nav_menu = document.querySelector("#nav_menu");
// EVENT -> OnClick
hamburger.addEventListener("click", () => {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
    lbl_hamburger.classList.toggle("is-active");
    nav_menu.classList.toggle("is-active");
    // Do something else, like open/close menu
});