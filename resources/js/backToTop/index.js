const backToTopButton = document.querySelector("#back-to-top-btn");
// const header = document.querySelector(".header");

document.documentElement.scrollTop = 0;
document.body.scrollTop = 0;

window.addEventListener("scroll", scrollFunction);

function scrollFunction() {
    if (window.pageYOffset > 180) {
        // Show backToTopButton
        if (!backToTopButton.classList.contains("btnEntrance")) {
            // header.classList.add("background");
            backToTopButton.classList.remove("btnExit");
            backToTopButton.classList.add("btnEntrance");
            backToTopButton.style.display = "block";
        }
    } else {
        // Hide backToTopButton
        if (backToTopButton.classList.contains("btnEntrance")) {
            // header.classList.remove("background");
            backToTopButton.classList.remove("btnEntrance");
            backToTopButton.classList.add("btnExit");
            setTimeout(function () {
                backToTopButton.style.display = "none";
            }, 250);
        }
    }
}

backToTopButton.addEventListener("click", smoothScrollBackToTop);

function smoothScrollBackToTop() {
    const targetPosition = 0;
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    const duration = 650;
    let start = null;

    window.requestAnimationFrame(step);

    function step(timestamp) {
        if (!start) start = timestamp;
        const progress = timestamp - start;
        window.scrollTo(
            0,
            easeInOutCubic(progress, startPosition, distance, duration)
        );
        if (progress < duration) window.requestAnimationFrame(step);
    }
}

function easeInOutCubic(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return (c / 2) * t * t * t + b;
    t -= 2;
    return (c / 2) * (t * t * t + 2) + b;
}

// Sticky navbar
window.addEventListener("scroll", function () {});

//Reset scroll top
