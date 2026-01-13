// Image Slider/Carousel Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all sliders on the page
    const sliders = document.querySelectorAll('.image-slider');
    
    sliders.forEach((slider, index) => {
        initSlider(slider, index);
    });
});

function initSlider(slider, index) {
    const slides = slider.querySelectorAll('.slide');
    const prevBtn = slider.querySelector('.slider-prev');
    const nextBtn = slider.querySelector('.slider-next');
    const dotsContainer = slider.querySelector('.slider-dots');
    
    if (slides.length === 0) return;
    
    let currentSlide = 0;
    
    // Create dots if there are multiple slides
    if (slides.length > 1 && dotsContainer) {
        slides.forEach((_, i) => {
            const dot = document.createElement('span');
            dot.classList.add('dot');
            if (i === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(i));
            dotsContainer.appendChild(dot);
        });
    }
    
    // Show initial slide
    showSlide(currentSlide);
    
    // Next button
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        });
    }
    
    // Previous button
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        });
    }
    
    // Auto-play functionality (optional)
    let autoPlayInterval;
    if (slider.dataset.autoplay === 'true') {
        autoPlayInterval = setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }, 5000); // Change slide every 5 seconds
        
        // Pause on hover
        slider.addEventListener('mouseenter', () => {
            clearInterval(autoPlayInterval);
        });
        
        slider.addEventListener('mouseleave', () => {
            autoPlayInterval = setInterval(() => {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }, 5000);
        });
    }
    
    function showSlide(n) {
        // Hide all slides
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === n) {
                slide.classList.add('active');
            }
        });
        
        // Update dots
        const dots = dotsContainer?.querySelectorAll('.dot');
        if (dots) {
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === n);
            });
        }
    }
    
    function goToSlide(n) {
        currentSlide = n;
        showSlide(currentSlide);
    }
    
    // Touch/swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    slider.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    slider.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        if (touchEndX < touchStartX - 50) {
            // Swipe left - next slide
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }
        if (touchEndX > touchStartX + 50) {
            // Swipe right - previous slide
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }
    }
}

