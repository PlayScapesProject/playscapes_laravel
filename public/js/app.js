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
