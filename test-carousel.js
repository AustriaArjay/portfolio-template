document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;

    // Function to update the carousel view with sliding effect
    function updateCarousel() {
        // Remove the 'active' and 'inactive' classes from all items
        items.forEach((item, index) => {
            item.classList.remove('active', 'inactive');
            
            // If this is the current item, make it active
            if (index === currentIndex) {
                item.classList.add('active');
            } else {
                // All other items should be inactive
                item.classList.add('inactive');
            }
        });
    }

    // Next button functionality
    const nextBtn = document.getElementById('nextBtn');
    nextBtn.addEventListener('click', function () {
        // Move to the next item
        currentIndex = (currentIndex + 1) % items.length; // Loop back to first item
        updateCarousel();
    });

    // Previous button functionality
    const prevBtn = document.getElementById('prevBtn');
    prevBtn.addEventListener('click', function () {
        // Move to the previous item
        currentIndex = (currentIndex - 1 + items.length) % items.length; // Loop back to last item
        updateCarousel();
    });

    // Initialize the carousel by showing the first item
    updateCarousel();
});
