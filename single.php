<!-- Header with Decorative Gradient -->
<header class="absolute top-0 left-0 w-full z-20 bg-transparent">
    
    <!-- Decorative Gradient Blur Element -->
    <div class="absolute top-0 right-0 h-[212px] w-[1047px] max-w-full bg-[#ff520e] opacity-50 blur-[100px]" aria-hidden="true"></div>

    <!-- Header Content Wrapper -->
    <div class="relative max-w-screen-xl mx-auto flex justify-between items-center p-5 text-white overflow-hidden">
        
        <!-- Logo -->
        <div class="w-10">
            <svg viewBox="0 0 227 222" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M128.534 83.2519H29.1311V0.985596H128.534C175.46 0.985596 213.904 37.893 213.904 83.2519C213.904 128.611 175.46 165.518 128.534 165.518H86.2731V221.014H29.1311V83.2519H128.534Z" fill="white"/>
            </svg>
        </div>

        <!-- Navigation Links with Swipe Effect -->
        <nav class="hidden md:flex">
            <ul class="flex items-center space-x-10 text-base text-gray-200">
                
                <li>
                    <a href="#" 
                    class="group relative inline-block overflow-hidden transition-colors duration-500 hover:text-[#ff520e]"
                    data-text="How it works">
                        <span class="inline-block transition-transform duration-500 ease-in-out group-hover:-translate-y-full">
                            How it works
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#" 
                    class="group relative inline-block overflow-hidden transition-colors duration-500 hover:text-[#ff520e]"
                    data-text="Techstack">
                        <span class="inline-block transition-transform duration-500 ease-in-out group-hover:-translate-y-full">
                            Techstack
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#" 
                    class="group relative inline-block overflow-hidden transition-colors duration-500 hover:text-[#ff520e]"
                    data-text="Pricings">
                        <span class="inline-block transition-transform duration-500 ease-in-out group-hover:-translate-y-full">
                            Pricings
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#" 
                    class="group relative inline-block overflow-hidden transition-colors duration-500 hover:text-[#ff520e]"
                    data-text="FAQs">
                        <span class="inline-block transition-transform duration-500 ease-in-out group-hover:-translate-y-full">
                            FAQs
                        </span>
                    </a>
                </li>

            </ul>
        </nav>

       <!-- CTA Button with a clean, best-practice swipe effect -->
        <div>
            <a href="#" 
            class="group relative inline-block overflow-hidden rounded-lg border border-white/5 px-5 py-[7px] text-base text-white transition-colors duration-500 hover:border-[#ff520e]"
            data-text="Book a call">
                
                <!-- The visible text that slides up -->
                <span class="inline-block transition-transform duration-500 ease-in-out group-hover:-translate-y-full">
                    Book a call
                </span>
            </a>
        </div>
    </div>
</header>






<section class="relative h-screen w-full flex items-center justify-center text-center overflow-hidden">
        
    <!-- Background Video -->
    <video 
        class="absolute z-[-1] w-auto min-w-full min-h-full max-w-none" 
        autoplay 
        loop 
        muted 
        playsinline>
        <!-- Note: Apni video ka path yahan 'src' mein daalein. -->
        <!-- Example video from Pexels -->
        <source src="https://videos.pexels.com/video-files/853878/853878-hd_1920_1080_25fps.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
    <!-- Video Overlay -->
    <div class="absolute top-0 left-0 w-full h-full bg-black/50"></div>

    <!-- Content Container -->
    <div class="relative z-10 max-w-screen-xl mx-auto px-4 text-white">
        <!-- Main Heading -->
        <h1 class="text-4xl lg:text-[64px] font-medium leading-tight mb-4">
            Scale Your Peptide Brand with Proven Marketing Strategies
        </h1>
        
        <!-- Subheading -->
        <p class="text-lg max-w-2xl mx-auto mb-8 text-gray-300">
            We help peptide businesses overcome compliance challenges, generate leads on autopilot, and turn clicks into loyal customers.
        </p>
        
        <!-- CTA Button -->
        <a href="#" class="bg-[#ff520e] text-white font-medium py-3 px-10 rounded-lg text-base hover:bg-[rgb(224,72,12)] transition-colors duration-300 inline-block">
            Book a call
        </a>

        
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.group[data-text]').forEach(element => {
            const originalTextSpan = element.querySelector('span'); // Get the original span
            const dataText = element.getAttribute('data-text');

            // Create the duplicated text element
            const duplicatedTextSpan = document.createElement('span');
            duplicatedTextSpan.textContent = dataText;
            duplicatedTextSpan.className = 'absolute inset-0 flex items-center justify-center transition-transform duration-500 ease-in-out translate-y-full group-hover:translate-y-0';
            
            element.appendChild(duplicatedTextSpan);
        });
    });
</script>




















<section class="relative h-screen w-full flex items-center justify-center text-center overflow-hidden">
        
    <!-- Background Video -->
    <video 
        class="absolute z-[-1] w-auto min-w-full min-h-full max-w-none" 
        autoplay 
        loop 
        muted 
        playsinline>
        <source src="http://localhost/amino/wp-content/uploads/2025/08/istockphoto-1313959448-640_adpp_is.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
    <!-- Video Overlay -->
    <!-- Using inline style for demonstration, but you'd ideally put this in a stylesheet -->
    <div class="absolute top-0 left-0 w-full h-full" style="background-color: #ff520e; mix-blend-mode: multiply;"></div>
    <!-- Note: mix-blend-mode: luminosity; would be ideal, but it generally works between overlapping elements, not directly on the background video in this simple overlay setup without more complex layering or SVG filters. 'multiply' or 'overlay' can often give a nice color tint effect. -->

    <!-- Content Container -->
    <div class="relative z-10 max-w-screen-xl mx-auto px-4 text-white">
        <!-- Main Heading -->
        <h1 class="text-4xl lg:text-[64px] font-medium leading-tight mb-4">
            Scale Your Peptide Brand with Proven Marketing Strategies
        </h1>
        
        <!-- Subheading -->
        <p class="text-lg max-w-2xl mx-auto mb-8 text-gray-300">
            We help peptide businesses overcome compliance challenges, generate leads on autopilot, and turn clicks into loyal customers.
        </p>
        
        <!-- CTA Button -->
        <a href="#" class="bg-[#ff520e] text-white font-medium py-3 px-10 rounded-lg text-base hover:bg-[rgb(224,72,12)] transition-colors duration-300 inline-block">
            Book a call
        </a>

        
    </div>

</section>