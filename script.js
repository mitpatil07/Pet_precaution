const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');
const registerBtn = document.querySelector('.register-btn');
const popupForm = document.getElementById('popup-form');
const closeBtn = document.querySelector('.close');

navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});

registerBtn.addEventListener('click', () => {
    popupForm.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    popupForm.style.display = 'none';
});

window.addEventListener('click', (event) => {
    if (event.target == popupForm) {
        popupForm.style.display = 'none';
    }
});