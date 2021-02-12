'use strict';

/**
 * Reset number fields to blank
 */
const reset_fields = () => {
  const num_fields = document.querySelectorAll('input[type="number"]');
  num_fields.forEach(field => {
    field.value = "";
  });
};
/**
 * Clear button 'CLICK' event listener -> reset number fields
 * @type {Element}
 */
const btn_clr = document.querySelector('.btn-clr');
btn_clr.addEventListener('click', e => {
  e.preventDefault();
  reset_fields();
});
