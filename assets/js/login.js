const croix = document.querySelector('#croix');
const toast = document.querySelector('.toast');

croix.addEventListener('click', () => {
   toast.classList.remove('show');
});