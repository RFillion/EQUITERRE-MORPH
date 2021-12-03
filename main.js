import { createPopper } from '@popperjs/core';
import modal from 'bootstrap';

import Swiper, {Autoplay} from 'swiper';
import 'swiper/css/bundle';
Swiper.use([Autoplay]);

import gsap from "gsap";
import './main.scss'

//NavBar BTN
let NavBtn = document.querySelector('.menu__toggle a');
let Hamburger = document.querySelector('.hamburger');

NavBtn.addEventListener('click', () => {
    Hamburger.style.display = 'block';
    Hamburger.classList.toggle('open');
    gsapOpen();
    if (!Hamburger.classList.contains('open')) {
        Hamburger.style.display = 'none';
        gsapClose();
    }
});

function gsapOpen() {
  let mainLine = document.querySelector('.menu__toggle--lines.main');
  let topLine = document.querySelector('.menu__toggle--lines.top');
  let bottomLine = document.querySelector('.menu__toggle--lines.bottom');

  gsap.timeline()
  .to(topLine, {y: 8, ease: Power1.In, duration: '150ms'})
  .to(topLine, {rotate: '45deg', ease: Power1.In, duration: '150ms'})
    
  gsap.timeline()
  .to(bottomLine, {y: -8, ease: Power1.In, duration: '150ms'})
  .to(bottomLine, {rotate: '-45deg', ease: Power1.In, duration: '150ms'})

  gsap.to(mainLine,{opacity: 0, duration: '150ms'});
}

function gsapClose() {
  let mainLine = document.querySelector('.menu__toggle--lines.main');
  let topLine = document.querySelector('.menu__toggle--lines.top');
  let bottomLine = document.querySelector('.menu__toggle--lines.bottom');

  gsap.timeline()
  .to(topLine, {rotate: 0, ease: Power1.In, duration: '150ms'})
  .to(topLine, {y: 0, ease: Power1.In, duration: '150ms'})

  gsap.timeline()
  .to(bottomLine, {rotate: 0, ease: Power1.In, duration: '150ms'})
  .to(bottomLine, {y: 0, ease: Power1.In, duration: '150ms'})

  gsap.to(mainLine,{opacity: 1, duration: '150ms'});
}


//NavBar Scroll
let Nav = document.querySelector('.Nav');
let imgNav = document.querySelector('.logo img');

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

//GSAP 404

gsap.fromTo('.terre',
													 {rotate:0},
													 {rotate:360, repeat: -1, duration: 15, ease: 'linear.out'}, 2.5);

gsap.timeline().to('.interrogation',{x: '2%', rotate: -25})
                    .to('.interrogation', {y: '-2%', rotate: 35})
                    .to('.interrogation', {x: '-2%', rotate: -15})
                    .to('.interrogation', {y: '2%', rotate: 10})
                    .to('.interrogation',{x: '2%', rotate: -20, ease: "power1.inOut", yoyo: true, repeat:-1});

//GSAP Donation

gsap.timeline({repeat:-1})
                .to('.leaf', {x:'-80%', y:'+=40', rotate:20, duration: 1.5, ease: "power4.inout"})
                .to('.leaf', {x:'80%', y:'+=50', rotate:10, duration: 1.5, ease: "power2.in"})
                .to('.leaf', {x:'-80%', y:'+=60', rotate:20, duration: 1.5, ease: "power4.inout"})
                .to('.leaf', {x:'80%', y:'+=70', rotate:10, duration: 1.5, ease: "power2.in"})
                .to('.leaf', {x:'-80%', y:'+=80', rotate:20, duration: 1.5, ease: "power4.inout"})
                .to('.leaf', {x:'80%', y:'+=90', rotate:10, duration: 1.5, ease: "power2.in"})
                .to('.leaf', {x:'-80%', y:'+=100', rotate:20, duration: 1.5, ease: "power4.inout"})
                .to('.leaf', {x:'80%', y:'+=110', rotate:10, duration: 1.5, ease: "power2.in"})

//Swiper section services

let swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
      delay: 3500,
      disableOnInteraction: true,
    },
    loop: true,
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 50
      }
    }
  });

  let heroSwiper = new Swiper('.heroSwiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
      delay: 3500,
      disableOnInteraction: true,
    },
    loop: true,
    pagination: {
      el: ".pagination",
      clickable: true,
    }
  });

  let partenaireSwiper = new Swiper('.partenaireSwiper', {
    autoplay: {
      delay: 3500,
      disableOnInteraction: true,
    },
    loop: true,
    breakpoints: {
      640: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 2
      },
      1024: {
        slidesPerView: 3
      }
    }
  });


/* modal */
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})