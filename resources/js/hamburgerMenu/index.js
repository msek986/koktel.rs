const navBtn = document.querySelector(".nav-btn");
const nav = document.querySelector(".nav__links");
// const navOverlay = document.querySelector(".nav__overlay");
const header = document.querySelector(".header");

let navOpen = false;
navBtn.addEventListener("click", () => {
    if (!navOpen) {
        header.classList.add("header--open");
        navBtn.classList.add("open");
        nav.classList.add("nav__links--open");
        navOpen = true;
    } else {
        header.classList.remove("header--open");
        navBtn.classList.remove("open");
        nav.classList.remove("nav__links--open");
        navOpen = false;
    }
});

// navOverlay.addEventListener("click", () => {
//     navBtn.classList.remove("open");
//     nav.classList.remove("nav__links--open");
//     navOpen = false;
// });
