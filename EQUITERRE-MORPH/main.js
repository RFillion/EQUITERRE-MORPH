import './main.scss'

//NavBar BTN
let NavBtn = document.querySelector('.menu__toggle a');
let Hamburger = document.querySelector('.hamburger');

NavBtn.addEventListener('click', () => {
    Hamburger.style.display = 'block';
    Hamburger.classList.toggle('open');
    if (!Hamburger.classList.contains('open')) {
        Hamburger.style.display = 'none';
    }
});

//NavBar Scroll
let Nav = document.querySelector('.Nav');

window.onscroll = () => {
    "use strict";
    if(document.body.scrollTop >= 100 | document.documentElement.scrollTop >= 100) {
        Nav.classList.add('colored');
        Nav.classList.remove('transparent');
    } else {
        Nav.classList.add('transparent');
        Nav.classList.remove('colored');
    }
};


