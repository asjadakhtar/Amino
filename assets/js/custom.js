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