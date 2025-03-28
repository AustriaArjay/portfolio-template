document.addEventListener("DOMContentLoaded", function() {
    // Get all FAQ question buttons
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
