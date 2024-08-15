let currentSlideIndex = 0;
const slides = document.querySelectorAll('.step');
const dots = document.querySelectorAll('.dot');

function showSlide(index) {
    if (index >= slides.length) {
        currentSlideIndex = 0;
    } else if (index < 0) {
        currentSlideIndex = slides.length - 1;
    } else {
        currentSlideIndex = index;
    }

    // Update the transform property to show the current slide
    const translateXValue = -currentSlideIndex * 100;
    slides.forEach(slide => {
        slide.style.transform = `translateX(${translateXValue}%)`;
    });

    // Update the dots
    dots.forEach(dot => dot.classList.remove('active'));
    dots[currentSlideIndex].classList.add('active');
}

function currentSlide(index) {
    showSlide(index - 1);
}

// Initialize the carousel by showing the first slide
showSlide(0);

// From AI Two
document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll(".carousel-slide-premium");
    const dots = document.querySelectorAll(".dot-mobile");

    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove("active");
            dots[i].classList.remove("active");
        });
        slides[index].classList.add("active");
        dots[index].classList.add("active");
    }

    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });

    // Initialize the first slide as active
    showSlide(currentSlide);
});



