let currentSlideIndex = 0;
const slides = document.querySelectorAll('.step');
const dots = document.querySelectorAll('.dot');

// Variables for swipe detection
let startX = 0;
let endX = 0;

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

// Add touch event listeners for swipe
const carouselContainer = document.querySelector('.carousel-container');

carouselContainer.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
});

carouselContainer.addEventListener('touchmove', (e) => {
    endX = e.touches[0].clientX;
});

carouselContainer.addEventListener('touchend', () => {
    handleSwipe();
});

// Handle swipe direction and trigger the slide change
function handleSwipe() {
    const swipeDistance = endX - startX;

    if (swipeDistance > 50) {
        // Swipe right, show the previous slide
        showSlide(currentSlideIndex - 1);
    } else if (swipeDistance < -50) {
        // Swipe left, show the next slide
        showSlide(currentSlideIndex + 1);
    }

    // Reset swipe start and end
    startX = 0;
    endX = 0;
}


document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll(".carousel-slide-premium");
    const dots = document.querySelectorAll(".dot-mobile");

    let currentSlide = 0;
    let startX, endX;

    // Function to show the slide based on the index
    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove("active");
            dots[i].classList.remove("active");
        });
        slides[index].classList.add("active");
        dots[index].classList.add("active");
    }

    // Handle click on navigation dots
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });

    // Swipe functionality
    const carousel = document.querySelector('.carousel-premium');

    carousel.addEventListener('touchstart', function(e) {
        startX = e.touches[0].clientX;
    });

    carousel.addEventListener('touchend', function(e) {
        endX = e.changedTouches[0].clientX;
        if (startX > endX + 50) {
            // Swipe left
            currentSlide = (currentSlide + 1) % slides.length;
        } else if (startX < endX - 50) {
            // Swipe right
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        }
        showSlide(currentSlide);
    });

    // Initialize the first slide as active
    showSlide(currentSlide);
});



