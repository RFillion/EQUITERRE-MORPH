import { S as a } from "./vendor.8cf43a14.js";
const c = function () {
  const n = document.createElement("link").relList;
  if (n && n.supports && n.supports("modulepreload")) return;
  for (const e of document.querySelectorAll('link[rel="modulepreload"]')) s(e);
  new MutationObserver((e) => {
    for (const t of e)
      if (t.type === "childList")
        for (const i of t.addedNodes)
          i.tagName === "LINK" && i.rel === "modulepreload" && s(i);
  }).observe(document, { childList: !0, subtree: !0 });
  function l(e) {
    const t = {};
    return (
      e.integrity && (t.integrity = e.integrity),
      e.referrerpolicy && (t.referrerPolicy = e.referrerpolicy),
      e.crossorigin === "use-credentials"
        ? (t.credentials = "include")
        : e.crossorigin === "anonymous"
        ? (t.credentials = "omit")
        : (t.credentials = "same-origin"),
      t
    );
  }
  function s(e) {
    if (e.ep) return;
    e.ep = !0;
    const t = l(e);
    fetch(e.href, t);
  }
};
c();
let d = document.querySelector(".menu__toggle a"),
  o = document.querySelector(".hamburger");
d.addEventListener("click", () => {
  (o.style.display = "block"),
    o.classList.toggle("open"),
    o.classList.contains("open") || (o.style.display = "none");
});
let r = document.querySelector(".Nav");
document.querySelector(".logo img");
window.onscroll = () => {
  (document.body.scrollTop >= 100) | (document.documentElement.scrollTop >= 100)
    ? (r.classList.add("colored"), r.classList.remove("transparent"))
    : (r.classList.add("transparent"), r.classList.remove("colored"));
};
gsap.fromTo(
  ".terre",
  { rotate: 0 },
  { rotate: 360, repeat: -1, duration: 15, ease: "linear.out" },
  2.5
);
gsap
  .timeline()
  .to(".interrogation", { x: "2%", rotate: -25 })
  .to(".interrogation", { y: "-2%", rotate: 35 })
  .to(".interrogation", { x: "-2%", rotate: -15 })
  .to(".interrogation", { y: "2%", rotate: 10 })
  .to(".interrogation", {
    x: "2%",
    rotate: -20,
    ease: "power1.inOut",
    yoyo: !0,
    repeat: -1,
  });
new a(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  autoplay: { delay: 2500, disableOnInteraction: !0 },
  loop: !0,
  breakpoints: {
    640: { slidesPerView: 1, spaceBetween: 20 },
    768: { slidesPerView: 2, spaceBetween: 40 },
    1024: { slidesPerView: 3, spaceBetween: 50 },
  },
});
new a(".heroSwiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: { delay: 2500, disableOnInteraction: !0 },
  loop: !0,
  pagination: { el: ".pagination", clickable: !0 },
});
var u = document.getElementById("myModal"),
  p = document.getElementById("myInput");
u.addEventListener("shown.bs.modal", function () {
  p.focus();
});
