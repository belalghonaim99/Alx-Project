'use strict';


/**
 * navbar toggle in mobile view
 */

const $navbar = document.querySelector("[data-navbar]");
const $navToggler = document.querySelector("[data-nav-toggler]");

$navToggler.addEventListener("click", () => $navbar.classList.toggle("active"));

/**
 * Header scroll
 */

const $header = document.querySelector("[data-header]");

window.addEventListener("scroll", () => {
    $header.classList[window.scrollY > 50 ? "add" : "remove"]("active");
});


/**
 * add to favorite button
 */

const $toggleBtns = document.querySelectorAll("[data-toggle-btn]");

$toggleBtns.forEach($toggleBtn => {
    $toggleBtn.addEventListener("click", () => {
        $toggleBtn.classList.toggle("active");
    });
});


// script.js

document.getElementById("getStartedBtn").addEventListener("click", function() {
    // Redirect the user to the registration page
    window.location.href = "registration.html"; // Replace "registration.html" with the actual URL of your registration page
});