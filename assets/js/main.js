"use strict";

var navToggle = document.querySelector("#navToggle");
var navClosedIcon = document.querySelector("#navClosed");
var navOpenIcon = document.querySelector("#navOpen");
var navIcon = document.querySelectorAll(".navIcon");
var nav = document.querySelector("nav");
navToggle.addEventListener("click", function () {
  nav.classList.toggle("open");
  navIcon.forEach(function (icon) {
    icon.classList.toggle("hidden");
  });
});
window.addEventListener("resize", function () {
  if (document.body.clientWidth > 720) {
    nav.classList.remove("open");
    navIcon.forEach(function (icon) {
      icon.classList.remove("hidden");
    });
    navOpenIcon.classList.add("hidden");
  }
}, {
  passive: false
});