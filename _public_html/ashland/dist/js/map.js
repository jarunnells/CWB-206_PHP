"use strict";

const [ current, divs_map, btns_map ] = [
  document.querySelector('.maps__map.current'),
  document.querySelectorAll('.maps__map'),
  document.querySelectorAll('.btn-maps-nav__link'),
 ];

const show_map = e => {
  divs_map.forEach(div => (div.classList.remove('current')));

  switch (Number(e.target.id.substr(-1))) {
    case 1:
      console.log(`btn-1 -> btn-${e.target.id.substr(-1)}`);
      divs_map[0].classList.add('current');
      break;
    case 2:
      console.log(`btn-2 -> btn-${e.target.id.substr(-1)}`);
      divs_map[1].classList.add('current');
      break;
    case 3:
      console.log(`btn-3 -> btn-${e.target.id.substr(-1)}`);
      divs_map[2].classList.add('current');
      break;
    case 4:
      console.log(`btn-4 -> btn-${e.target.id.substr(-1)}`);
      divs_map[3].classList.add('current');
      break;
    default:
      console.log('switch/case oops!! -> map.php 96:117');
      break;
  }

};

btns_map.forEach(btn => btn.addEventListener('click', show_map));
