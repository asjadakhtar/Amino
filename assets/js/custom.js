document.addEventListener('DOMContentLoaded', function () {
            const brandSlider = new Swiper('.brand-slider', {
                loop: true,
                slidesPerView: 'auto',
                spaceBetween: 60, // 60px gap between logos
                speed: 10000,      // Slower speed (10 seconds transition)
                autoplay: {
                    delay: 1,
                    disableOnInteraction: false,
                },
                freeMode: true,
                allowTouchMove: false, // Disables manual sliding for a smoother auto-scroll
            });

            // Pause on hover
            const sliderContainer = document.querySelector('.brand-slider');
            sliderContainer.addEventListener('mouseenter', () => {
                brandSlider.autoplay.stop();
            });
            sliderContainer.addEventListener('mouseleave', () => {
                brandSlider.autoplay.start();
            });
        });