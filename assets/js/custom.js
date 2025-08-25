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
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
});