
    <!-- Original header with updated hover color for navigation links -->
    <header class="w-full bg-gradient-to-r from-[#0d0d0d] to-[#ff520e]/40">
        <div class="max-w-screen-xl mx-auto flex justify-between items-center p-5 text-white">
            
            <!-- Logo -->
            <div class="w-10">
                <svg viewBox="0 0 227 222" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M128.534 83.2519H29.1311V0.985596H128.534C175.46 0.985596 213.904 37.893 213.904 83.2519C213.904 128.611 175.46 165.518 128.534 165.518H86.2731V221.014H29.1311V83.2519H128.534Z" fill="white"/>
                </svg>
            </div>

            <!-- Navigation Links with UPDATED hover color -->
            <nav class="hidden md:flex">
                <ul class="flex items-center space-x-10 text-base text-gray-200">
                    <!-- Yahan hover:text-[#ff520e] class add ki gayi hai -->
                    <li><a href="#" class="hover:text-[#ff520e] transition-colors duration-300">How it works</a></li>
                    <li><a href="#" class="hover:text-[#ff520e] transition-colors duration-300">Techstack</a></li>
                    <li><a href="#" class="hover:text-[#ff520e] transition-colors duration-300">Pricings</a></li>
                    <li><a href="#" class="hover:text-[#ff520e] transition-colors duration-300">FAQs</a></li>
                </ul>
            </nav>

            <!-- CTA Button -->
            <div>
                <a href="#" class="border border-white/5 rounded-lg px-5 py-3 text-base hover:bg-[#ff520e] hover:border-[#ff520e] transition-colors duration-300">
                    Book a call
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