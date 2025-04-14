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

    const track = document.getElementById('carouselTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let slides = document.querySelectorAll('.carousel-item');
    let index = 1;
    let interval;

    // Clone first and last slides
    const firstClone = slides[0].cloneNode(true);
    const lastClone = slides[slides.length - 1].cloneNode(true);

    firstClone.id = 'first-clone';
    lastClone.id = 'last-clone';

    track.appendChild(firstClone);
    track.insertBefore(lastClone, slides[0]);

    slides = document.querySelectorAll('.carousel-item');
    const slideWidth = slides[index].clientWidth;

    track.style.transform = `translateX(-${slideWidth * index}px)`;

    const moveToSlide = () => {
      track.style.transition = 'transform 0.5s ease-in-out';
      track.style.transform = `translateX(-${slideWidth * index}px)`;
    };

    const resetPosition = () => {
      slides = document.querySelectorAll('.carousel-item');
      if (slides[index].id === 'first-clone') {
        track.style.transition = 'none';
        index = 1;
        track.style.transform = `translateX(-${slideWidth * index}px)`;
      }
      if (slides[index].id === 'last-clone') {
        track.style.transition = 'none';
        index = slides.length - 2;
        track.style.transform = `translateX(-${slideWidth * index}px)`;
      }
    };

    const startAutoSlide = () => {
      interval = setInterval(() => {
        index++;
        moveToSlide();
      }, 5000);
    };

    const stopAutoSlide = () => clearInterval(interval);

    track.addEventListener('transitionend', resetPosition);

    nextBtn.addEventListener('click', () => {
      if (index >= slides.length - 1) return;
      index++;
      moveToSlide();
      stopAutoSlide();
      startAutoSlide();
    });

    prevBtn.addEventListener('click', () => {
      if (index <= 0) return;
      index--;
      moveToSlide();
      stopAutoSlide();
      startAutoSlide();
    });

    window.addEventListener('resize', () => {
      const newWidth = slides[0].clientWidth;
      track.style.transition = 'none';
      track.style.transform = `translateX(-${newWidth * index}px)`;
    });

    // Handle tab visibility change
    document.addEventListener("visibilitychange", () => {
        if (document.hidden) {
            stopAutoSlide(); // Stop auto slide when the tab is inactive
        } else {
            startAutoSlide(); // Restart auto slide when the tab becomes active
        }
    });

    // Init
    startAutoSlide();
});
