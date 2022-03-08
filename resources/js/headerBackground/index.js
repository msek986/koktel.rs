const header = document.querySelector(".header");

window.addEventListener("scroll", headerBackground);

function headerBackground() {
    if (window.pageYOffset > 30) {
        if (!header.classList.contains("background")) {
            header.classList.add("background");
        }
    } else {
        // Hide backToTopButton
        if (header.classList.contains("background")) {
            header.classList.remove("background");
        }
    }
}
