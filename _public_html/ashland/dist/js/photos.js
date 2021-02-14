"use strict";

/*
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: photos.js

*/

// BEGIN PHOTO PAGES ********************************************************************

// TODO: handle radio active/inactive styling
// FIXME: navigation button event handle bug!!!

const [slides, btnPlay, btnPause, btnFirst, btnNext, btnPrev, btnLast, btnRadio, interval_time] =[
  document.querySelectorAll('.slide'),
  document.querySelector('.buttons__play'),
  document.querySelector('.buttons__pause'),
  document.querySelector('.buttons__first'),
  document.querySelector('.buttons__next'),
  document.querySelector('.buttons__prev'),
  document.querySelector('.buttons__last'),
  document.querySelectorAll('.btn__radio'),
  5000,
];
// let slide_interval;
// let auto_advance = true;
let [slide_interval, auto_advance] =[ undefined, true];

// const _debug = () => {
//   "use strict";
//   let greeting = 'Hello World!';
//   console.log(greeting);
// };

const _debug = (greeting = 'Hello World!') => console.log(greeting);

// BUTTON PRESS LOGIC ***********************************************
const next_img = () => {
  const current = document.querySelector('.current');
  current.classList.remove('current');
  if(current.nextElementSibling && !current.nextElementSibling.classList.contains('buttons')) {
    current.nextElementSibling.classList.add('current');
  } else {
    slides[0].classList.add('current');
  }
  setTimeout(() => current.classList.remove('current'));
};

const prev_img = () => {
  const current = document.querySelector('.current');
  current.classList.remove('current');
  if(current.previousElementSibling) {
    current.previousElementSibling.classList.add('current');
  } else {
    slides[slides.length - 1].classList.add('current');
  }
  setTimeout(() => current.classList.remove('current'));
};

const first_img = () => {
  const current = document.querySelector('.current');  
  current.classList.remove('current');
  slides[0].classList.add('current');
  setTimeout(() => current.classList.remove('current'));
};

const last_img = () => {
  const current = document.querySelector('.current');
  current.classList.remove('current');
  slides[slides.length - 1].classList.add('current');
  setTimeout(() => current.classList.remove('current'));
};

const handle_radio = (target_id) => {
  const current = document.querySelector('.current');  
  current.classList.remove('current');
  let i = target_id.slice(-1) - 1;
  slides[i].classList.add('current');
  setTimeout(() => current.classList.remove('current'));
};

// EVENT LISTENERS **************************************************
btnNext.addEventListener('click', e => {
  next_img();
  if(auto_advance) {
    clearInterval(slide_interval);
    slide_interval = setInterval(next_img, interval_time);
  }
});

btnPrev.addEventListener('click', e => {
  prev_img();
  if(auto_advance) {
    clearInterval(slide_interval);
    slide_interval = setInterval(next_img, interval_time);
  }
});

btnPlay.addEventListener('click', e => {
  console.log('Clicked: btnPlay');
  console.log(`auto_advance: ${auto_advance}`);
  auto_advance = !auto_advance;
  console.log(`auto_advance: ${auto_advance}`);
  // next_img();
});

btnPause.addEventListener('click', e => {
  console.log('Clicked: btnPause');
  console.log(`auto_advance: ${auto_advance}`);
  auto_advance = false;
  console.log(`auto_advance: ${auto_advance}`);
});

btnRadio.forEach(btn => {
  btn.addEventListener('click', e => {
    console.log(`Clicked: ${e.target.id}`);
    switch(e.target.id) {
      case 'rad-1':
        handle_radio(e.target.id);
        break;
      case 'rad-2':
        handle_radio(e.target.id);
        break;
      case 'rad-3':
        handle_radio(e.target.id);
        break;
      default:
        console.log(`Target ID: ${e.target.id}`);
        break;
    }
  });
});

// HANDLE AUTO ADVANCING ********************************************
if(auto_advance) {
  slide_interval = setInterval(next_img, interval_time);
}

// END PHOTO PAGES **********************************************************************

const run = () => _debug();

window.onload = () => run();
