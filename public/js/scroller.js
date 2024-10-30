const scrollContainer = document.getElementById('scroll-container');
let scrollAmount = 0;

function scrollHorizontally() {
    scrollAmount += 1;
    if (scrollAmount >= scrollContainer.scrollWidth / 2) {
        scrollAmount = 0;
    }
    scrollContainer.style.transform = `translateX(${-scrollAmount}px)`;
    requestAnimationFrame(scrollHorizontally);
}

scrollHorizontally();
