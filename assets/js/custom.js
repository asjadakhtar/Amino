document.addEventListener('DOMContentLoaded', function () {
    // Yahan humne dono classes select kar li hain
    const sliders = document.querySelectorAll('.brand-slider, .growth-brand-slider');

    // Har slider ke liye alag alag logic chalayenge taake clash na ho
    sliders.forEach(sliderContainer => {
        const mySwiper = new Swiper(sliderContainer, {
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

        // Event listeners bhi ab har specific slider ke liye add honge
        sliderContainer.addEventListener('mouseenter', () => {
            mySwiper.autoplay.stop();
        });
        
        sliderContainer.addEventListener('mouseleave', () => {
            mySwiper.autoplay.start();
        });
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



// Contact Form 7 Modal Popup
function openModal() {
    const modal = document.getElementById("cf7Modal");
    modal.classList.remove("hidden");
    setTimeout(() => {
      modal.classList.add("opacity-100");
      modal.classList.remove("opacity-0");
      modal.querySelector("div").classList.add("scale-100");
      modal.querySelector("div").classList.remove("scale-95");
    }, 10);
    modal.classList.add("flex");
  }

  function closeModal() {
    const modal = document.getElementById("cf7Modal");
    modal.classList.remove("opacity-100");
    modal.classList.add("opacity-0");
    modal.querySelector("div").classList.remove("scale-100");
    modal.querySelector("div").classList.add("scale-95");
    setTimeout(() => {
      modal.classList.remove("flex");
      modal.classList.add("hidden");
    }, 300); // wait for animation to finish
  }






document.addEventListener('DOMContentLoaded', () => {
    const roasChartContainer = document.getElementById('roasChartContainer');
    const chartBars = roasChartContainer.querySelectorAll('.chart-bar');
    const chartValues = roasChartContainer.querySelectorAll('.text-sm.mb-1'); // Select the value spans

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // When the chart is in view, apply the animation class
                chartBars.forEach((bar, index) => {
                    // Set the target height
                    bar.style.height = bar.dataset.height;
                    bar.classList.add('animate');

                    // Animate the value text
                    const valueSpan = chartValues[index];
                    const targetValue = parseFloat(valueSpan.dataset.value);
                    let currentValue = 0;
                    const duration = 1000; // 1 second for the value count-up
                    const increment = targetValue / (duration / 10); // Adjust 10ms for smoother animation

                    const animateValue = setInterval(() => {
                        currentValue += increment;
                        if (currentValue >= targetValue) {
                            currentValue = targetValue;
                            clearInterval(animateValue);
                        }
                        valueSpan.textContent = currentValue.toFixed(1) + ' x'; // Format as 'X.X x'
                    }, 10);
                });
                observer.unobserve(entry.target); // Stop observing once animated
            }
        });
    }, {
        threshold: 0.5 // Trigger when 50% of the element is visible
    });

    observer.observe(roasChartContainer);
});


document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null, // relative to the viewport
        rootMargin: '0px',
        threshold: 0.5 // Trigger when 50% of the element is visible
    };

    const countUp = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                
                // Number uthaya (PHP se clean number araha hai)
                const target = parseFloat(element.getAttribute('data-target'));
                
                // NOTE: Suffix yahan se hata diya hai kyunke ab wo HTML/PHP handle kar raha hai
                
                const duration = 2000; // 2 seconds
                let start = 0;
                let startTime = null;

                const animate = (currentTime) => {
                    if (!startTime) startTime = currentTime;
                    const progress = (currentTime - startTime) / duration;

                    if (progress < 1) {
                        const current = start + (target - start) * progress;
                        
                        // YAHAN CHANGE KIYA HAI:
                        // .toFixed(1) hata kar Math.floor() lagaya hai.
                        // Is se 575757.0 nahi balkay sirf 575757 ayega.
                        element.textContent = Math.floor(current); 
                        
                        requestAnimationFrame(animate);
                    } else {
                        // Animation khatam honay par original target show karega
                        element.textContent = target;
                    }
                };

                requestAnimationFrame(animate);
                observer.unobserve(element); // Stop observing once animation starts
            }
        });
    };

    const observer = new IntersectionObserver(countUp, observerOptions);

    document.querySelectorAll('.counting-number').forEach(numberElement => {
        observer.observe(numberElement);
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const closeButton = document.querySelector('.close-button');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');
    const galleryImages = document.querySelectorAll('.gallery-image');

    let currentImageIndex = 0;
    let images = [];

    // Populate the images array
    galleryImages.forEach((img, index) => {
        images.push(img.src);
    });

    // Function to open the modal
    function openModal(index) {
        modal.style.display = 'block';
        currentImageIndex = index;
        updateModalImage();
    }

    // Function to update the image in the modal
    function updateModalImage() {
        modalImage.src = images[currentImageIndex];
    }

    // Event listeners for opening the modal
    galleryImages.forEach((img, index) => {
        img.addEventListener('click', () => {
            openModal(index);
        });
    });

    // Event listener for closing the modal
    closeButton.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Close modal when clicking outside the image content
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });

    // Event listener for previous button
    prevButton.addEventListener('click', (e) => {
        e.stopPropagation(); // Prevent modal from closing if clicked on background
        currentImageIndex--;
        if (currentImageIndex < 0) {
            currentImageIndex = images.length - 1; // Loop back to last image
        }
        updateModalImage();
    });

    // Event listener for next button
    nextButton.addEventListener('click', (e) => {
        e.stopPropagation(); // Prevent modal from closing if clicked on background
        currentImageIndex++;
        if (currentImageIndex >= images.length) {
            currentImageIndex = 0; // Loop back to first image
        }
        updateModalImage();
    });

    // Keyboard navigation (optional)
    document.addEventListener('keydown', (e) => {
        if (modal.style.display === 'block') {
            if (e.key === 'ArrowLeft') {
                prevButton.click();
            } else if (e.key === 'ArrowRight') {
                nextButton.click();
            } else if (e.key === 'Escape') {
                closeButton.click();
            }
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const rows = document.querySelectorAll('.process-row');
    let firstStepCompleted = false;  // To track the completion of the first step

    function updateProgress() {
        rows.forEach((row, index) => {
            const track = row.querySelector('.slider-track');
            const processIcon = row.querySelector('.process-icon');
            const contentDiv = row.querySelector('.contant'); // Select the content div
            const rowRect = row.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            
            // Calculate the start and end points for filling (halfway down the viewport)
            const startFill = windowHeight * 0.5; // Start filling when halfway through the viewport
            const endFill = windowHeight * 0.2;   // Complete filling when 20% of the way down the screen
            
            if (rowRect.top <= startFill && rowRect.bottom >= endFill) {
                // Calculate progress based on position
                const total = startFill - endFill;
                const current = startFill - rowRect.top;
                const progress = Math.min(Math.max((current / total) * 100, 0), 100);
                
                track.style.height = `${progress}%`;
                
                // Add active class to control opacity for both icon and content
                processIcon.classList.add('active');
                if (contentDiv) contentDiv.classList.add('active'); // Also activate content

                // Check if the first step is completed
                if (index === 0 && progress === 100) {
                    firstStepCompleted = true;
                }

                // If the first step is completed, start the second step's progress
                if (index === 1 && firstStepCompleted) {
                    track.style.height = `${progress}%`;
                }
            } else if (rowRect.top > startFill) {
                // Reset progress when above starting point
                track.style.height = '0%';
                processIcon.classList.remove('active');
                if (contentDiv) contentDiv.classList.remove('active'); // Deactivate content
            } else if (rowRect.bottom < endFill) {
                // Keep full when below ending point
                track.style.height = '100%';
                processIcon.classList.add('active');
                if (contentDiv) contentDiv.classList.add('active'); // Keep content active
            }
        });
    }

    // Update on scroll
    window.addEventListener('scroll', updateProgress);
    
    // Initial update
    updateProgress();
});



// smooth scroller

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});



//mobile menu toggle
 const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');
  const iconMenu = document.getElementById('icon-menu');
  const iconClose = document.getElementById('icon-close');

  btn.addEventListener('click', () => {
    // Check if menu is hidden
    if (menu.classList.contains('opacity-0')) {
        // OPEN MENU
        // Remove hidden styles
        menu.classList.remove('opacity-0', 'invisible', 'scale-90');
        // Add visible styles
        menu.classList.add('opacity-100', 'visible', 'scale-100');
        
        // Icon Swap
        iconMenu.classList.add('hidden');
        iconClose.classList.remove('hidden');
        // Rotate animation reset for X icon
        setTimeout(() => iconClose.classList.remove('rotate-90'), 50);
        
    } else {
        // CLOSE MENU
        // Add hidden styles
        menu.classList.add('opacity-0', 'invisible', 'scale-90');
        // Remove visible styles
        menu.classList.remove('opacity-100', 'visible', 'scale-100');
        
        // Icon Swap
        iconMenu.classList.remove('hidden');
        iconClose.classList.add('hidden');
        iconClose.classList.add('rotate-90'); // Prepare for next rotation
    }
  });
  
  // Close menu on link click
  const mobileLinks = menu.querySelectorAll('a');
  mobileLinks.forEach(link => {
    link.addEventListener('click', () => {
        menu.classList.add('opacity-0', 'invisible', 'scale-90');
        menu.classList.remove('opacity-100', 'visible', 'scale-100');
        iconMenu.classList.remove('hidden');
        iconClose.classList.add('hidden');
    });
  });