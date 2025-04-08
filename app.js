// ==========================
// Toggle Mobile Navigation Menu
// ==========================
const navToggle = document.getElementById("nav-toggle");
const navMenu = document.getElementById("nav-menu");

navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("nav__menu--open");
    changeIcon();
});

// Change nav toggle icon
function changeIcon() {
    if (navMenu.classList.contains("nav__menu--open")) {
        navToggle.classList.replace("ri-menu-3-line", "ri-close-line");
    } else {
        navToggle.classList.replace("ri-close-line", "ri-menu-3-line");
    }
}

// ==========================
// Smooth Scrolling for Navigation Links
// ==========================
const navLinks = document.querySelectorAll("nav ul li a, header a");

navLinks.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        const targetSection = document.querySelector(link.getAttribute("href"));
        window.scrollTo({
            top: targetSection.offsetTop - 70, // Adjusting for the fixed navbar height
            behavior: "smooth"
        });
    });
});

// ==========================
// Swiper.js Initialization for Testimonials Section
// ==========================
document.addEventListener("DOMContentLoaded", () => {
    // Swiper for Testimonial Section
    const testimonialSlide = new Swiper(".testimonial__wrapper", {
        loop: true,
        spaceBetween: 30,
        centeredSlides: true,
        effect: "coverflow",
        grabCursor: true,
        slidesPerView: 2,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            520: {
                slidesPerView: "auto",
            },
        },
        autoplay: {
            delay: 2000, // 2 seconds delay
            // disableOnInteraction: false, // Keeps autoplay running even after user interacts with the swiper
        },
         speed: 2500,
    });

    // ==========================
    // ScrollReveal.js Initialization for Animations
    // ==========================
    ScrollReveal().reveal('.home', {
        origin: 'top',
        distance: '100px',
        duration: 1200,
        delay: 400,
        easing: 'ease-out',
    });

    ScrollReveal().reveal('.maxicare-plan2, .maxicare-plan1, .why-content, .faq-item, .card-middle, .consultation-container', {
        origin: 'bottom',
        distance: '100px',
        duration: 1200,
        delay: 300,
        easing: 'ease-out',
        interval: 200,
    });

    ScrollReveal().reveal('.testimonial__wrapper, .card-right', {
        origin: 'right',
        distance: '100px',
        duration: 1500,
        delay: 300,
        easing: 'ease-out',
    });

    ScrollReveal().reveal('.about__card, .card-left', {
        origin: 'left',
        distance: '150px',
        duration: 1500,
        delay: 300,
        easing: 'ease-out',
    });

    // ==========================
    // Close Navigation Menu on Link Click (Mobile)
    // ==========================
    navLinks.forEach(link => {
        link.addEventListener("click", () => {
            if (window.innerWidth <= 768) {
                navMenu.classList.remove("nav__menu--open");
            }
        });
    });

    // ==========================
    // Make the Navbar Sticky on Scroll (Header Scroll Effect)
    // ==========================
    window.addEventListener("scroll", () => {
        const navbar = document.querySelector("nav");
        if (window.scrollY > 0) {
            navbar.classList.add("header--scroll");
        } else {
            navbar.classList.remove("header--scroll");
        }
    });

    // ==========================
    // FAQ Accordion
    // ==========================
    const faqQuestions = document.querySelectorAll(".faq-question");

    faqQuestions.forEach((faqQuestion) => {
        faqQuestion.addEventListener("click", function() {
            const faqAnswer = this.nextElementSibling; // Get the associated answer

            // Toggle the answer visibility
            faqAnswer.classList.toggle("open");

            // Optionally close all other answers
            document.querySelectorAll(".faq-answer").forEach((otherAnswer) => {
                if (otherAnswer !== faqAnswer) {
                    otherAnswer.classList.remove("open");
                }
            });
        });
    });
    
});

document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;

    // Function to update the carousel view with sliding effect
    function updateCarousel() {
        // Hide all items
        items.forEach((item, index) => {
            item.classList.remove('active', 'inactive');
            item.classList.add(index === currentIndex ? 'active' : 'inactive');
        });
    }

    // Next button functionality
    const nextBtn = document.getElementById('nextBtn');
    nextBtn.addEventListener('click', function () {
        currentIndex = (currentIndex + 1) % items.length; // Loop back to first item
        updateCarousel();
    });

    // Previous button functionality
    const prevBtn = document.getElementById('prevBtn');
    prevBtn.addEventListener('click', function () {
        currentIndex = (currentIndex - 1 + items.length) % items.length; // Loop back to last item
        updateCarousel();
    });

    // Initialize the carousel by showing the first item
    updateCarousel();
});
