document.addEventListener('DOMContentLoaded', function () {
    const brandSlider = new Swiper('.brand-slider', {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 60, 
        speed: 10000,
        autoplay: {
            delay: 1,
            disableOnInteraction: false,
        },
        freeMode: true,
        allowTouchMove: false,
    });

    
    const sliderContainer = document.querySelector('.brand-slider');
    sliderContainer.addEventListener('mouseenter', () => {
        brandSlider.autoplay.stop();
    });
    sliderContainer.addEventListener('mouseleave', () => {
        brandSlider.autoplay.start();
    });
});




const swiper = new Swiper('.testimonials-slider', {
    loop: true,
    autoplay: {
        delay: 0, 
        disableOnInteraction: false,
    },
    speed: 9000,
    slidesPerView: 1,
    spaceBetween: 20,
    breakpoints: {
        // 768px 
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        // 1024px 
        1024: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
    },
});


// faq accordion
function toggleAccordion(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('.accordion-icon');
    const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

    // Close all other accordions
    document.querySelectorAll('.accordion-content').forEach((item) => {
        if (item !== content) {
            item.style.maxHeight = '0px';
            item.previousElementSibling.querySelector('.accordion-icon').style.transform = 'rotate(0deg)';
        }
    });

    // Toggle current accordion
    if (isOpen) {
        content.style.maxHeight = '0px';
        icon.style.transform = 'rotate(0deg)';
    } else {
        content.style.maxHeight = content.scrollHeight + 'px';
        icon.style.transform = 'rotate(45deg)';
    }
}

// Initialize first accordion as open
document.addEventListener('DOMContentLoaded', function() {
    const firstAccordion = document.querySelector('.accordion-button');
    if (firstAccordion) {
        toggleAccordion(firstAccordion);
    }
});