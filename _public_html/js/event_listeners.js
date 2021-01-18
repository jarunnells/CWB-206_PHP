"use strict";

// VARS
let hamburger = document.querySelector(".hamburger"),
    lbl_hamburger = document.querySelector(".hamburger-label");
// EVENT -> OnClick
hamburger.addEventListener("click", () => {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
    lbl_hamburger.classList.toggle("is-active");
    // Do something else, like open/close menu
});