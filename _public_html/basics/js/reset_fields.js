'use strict';

const reset_fields = () => {
  const txt_fields = document.querySelectorAll('input[type="text"]');
  txt_fields.forEach(field => {
    field.value = "";
  });
};
const btn_clr = document.querySelector('.btn-clr');
btn_clr.addEventListener('click', e => {
  e.preventDefault();
  reset_fields();
});