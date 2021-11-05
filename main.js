import Swiper from 'swiper';
import 'swiper/css/bundle';
import gsap from "gsap";
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

gsap.timeline({repeat:-1}).to('.leaf', {x:'-80%', y:'+=20', rotate:20, duration: 1.5, ease: "power1.inout"})
                .to('.leaf', {x:'80%', y:'+=30', rotate:10, duration: 1.5, ease: "power1.inout"})
                .to('.leaf', {x:'-80%', y:'+=40', rotate:20, duration: 1.5, ease: "power1.inout"})
                .to('.leaf', {x:'80%', y:'+=50', rotate:10, duration: 1.5, ease: "power1.inout"})
                .to('.leaf', {x:'-80%', y:'+=60', rotate:20, duration: 1.5, ease: "power1.inout"})
                .to('.leaf', {x:'80%', y:'+=70', rotate:10, duration: 1.5, ease: "power1.inout"})
                .to('.leaf', {x:'-80%', y:'+=80', rotate:20, duration: 1.5, ease: "power1.inout"})
                .to('.leaf', {x:'80%', y:'+=90', rotate:10, duration: 1.5, ease: "power1.inout"})

                

gsap.timeline({repeat:-1}).to('.leaf2', {x:'80%', y:'+=20', rotate:20, duration: 1.5, ease: "power1.inout"})
                .to('.leaf2', {x:'-80%', y:'+=30', rotate:10, duration: 1.5, ease: "power1.inout"})
                .to('.leaf2', {x:'80%', y:'+=40', rotate:20, duration: 1.5, ease: "power1.inout"})
                .to('.leaf2', {x:'-80%', y:'+=50', rotate:10, duration: 1.5, ease: "power1.inout"})
                .to('.leaf2', {x:'80%', y:'+=60', rotate:20, duration: 1.5, ease: "power1.inout"})
                .to('.leaf2', {x:'-80%', y:'+=70', rotate:10, duration: 1.5, ease: "power1.inout"})
                .to('.leaf2', {x:'80%', y:'+=80', rotate:20, duration: 1.5, ease: "power1.inout"})
                .to('.leaf2', {x:'-80%', y:'+=90', rotate:10, duration: 1.5, ease: "power1.inout"})



//Swiper section services

let swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
      delay: 2500,
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
      delay: 2500,
      disableOnInteraction: true,
    },
    loop: true,
    pagination: {
      el: ".pagination",
      clickable: true,
    }
  });


/* modal */
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})