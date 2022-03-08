// ----------- Regular -----------//
const swiper = new Swiper(".swiper-container", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    // autoplay: {
    //     delay: 3500,
    //     disableOnInteraction: false,
    // },

    //Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// ----------- Cube 3d -----------//
// var swiper = new Swiper(".swiper-container", {
//     effect: "cube",
//     loop: true,
//     grabCursor: true,
//     autoplay: {
//         delay: 2500,
//         disableOnInteraction: false,
//     },
//     cubeEffect: {
//         shadow: true,
//         slideShadows: true,
//         shadowOffset: 20,
//         shadowScale: 0.94,
//     },
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });
