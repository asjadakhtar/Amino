<footer class="relative overflow-hidden text-white py-12 px-4 md:px-4">
    
    <!-- Decorative Gradient Blur Element -->
    <div class="absolute bottom-0 right-0 h-[320px] w-[1047px] max-w-full bg-[#ff520e] opacity-50 blur-[100px]" aria-hidden="true"></div>

    <!-- Footer Content Wrapper -->
    <div class="relative z-10 max-w-4xl mx-auto flex flex-col md:flex-row justify-between items-center space-y-10 md:space-y-0 md:space-x-12">
        
        <!-- Left Section: Logo and Text Content -->
        <div class="flex flex-col space-y-6 md:w-1/2">
            <!-- Logo -->
            <div class="w-32">
                <a href="https://aminomarketing.com" target="_blank" rel="noopener">
                    <img src="https://aminomarketing.com/wp-content/uploads/2025/10/Logo-on-dar.svg" alt="logo">
                </a>
            </div>
            
            <!-- Text Content -->
            <div class="mt-4 max-w-xl">
                <p class="font-medium tracking-widest text-sm uppercase mb-3">
                    Contact Amino Marketing
                </p>
                <h3 class="text-2xl sm:text-3xl font-medium leading-tight mb-5">
                    Ready to Grow Safely? Let's Talk.
                </h3>
                <p class="text-base text-[#d6d6d6] leading-relaxed mb-4">
                    We help brands in the peptide industry grow using simple, proven marketing systems. No buzzwords, just results.
                </p>
                <p class="text-base text-[#d6d6d6] leading-relaxed mb-4">
                   Our team is always ready to answer your questions and guide you on the next steps.
                </p>
                <p class="text-base text-gray-300 leading-relaxed">
                    Prefer Email? <a href="mailto:info@aminomarketing.com" class="underline hover:text-white transition-colors duration-300">info@aminomarketing.com</a>
                </p>
            </div>

        </div>

        <!-- Right Section: Contact Form -->
        <div class="md:w-1/2 mt-10 md:mt-0 w-full"> <!-- Added w-full here to make the form full width on small screens -->
            <h3 class="text-2xl sm:text-3xl font-medium leading-tight mb-6">
                Get in Touch
            </h3>
           <form class="space-y-4">
                <!-- First Name and Last Name -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="first-name" class="sr-only">First Name</label>
                        <input type="text" id="first-name" name="first-name" placeholder="First Name" required
                            class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/5 focus:ring-[#ff520e] focus:border-[#ff520e] text-white placeholder-gray-400 transition-colors duration-300 outline-none text-sm sm:text-base">
                    </div>
                    <div>
                        <label for="last-name" class="sr-only">Last Name</label>
                        <input type="text" id="last-name" name="last-name" placeholder="Last Name" required
                            class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/5 focus:ring-[#ff520e] focus:border-[#ff520e] text-white placeholder-gray-400 transition-colors duration-300 outline-none text-sm sm:text-base">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required
                        class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/5 focus:ring-[#ff520e] focus:border-[#ff520e] text-white placeholder-gray-400 transition-colors duration-300 outline-none text-sm sm:text-base">
                </div>

                <!-- Phone Number -->
                <div>
                    <label for="phone" class="sr-only">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Phone Number" required
                        inputmode="tel" pattern="[0-9+ ]{6,15}"
                        class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/5 focus:ring-[#ff520e] focus:border-[#ff520e] text-white placeholder-gray-400 transition-colors duration-300 outline-none text-sm sm:text-base">
                </div>

                <!-- Website URL -->
                <div>
                    <label for="website-url" class="sr-only">Website URL</label>
                    <input type="url" id="website-url" name="website-url" placeholder="Website URL"
                        class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/5 focus:ring-[#ff520e] focus:border-[#ff520e] text-white placeholder-gray-400 transition-colors duration-300 outline-none text-sm sm:text-base">
                </div>

                <!-- Monthly Revenue Dropdown -->
                <div>
                    <label for="monthly-revenue" class="sr-only">Monthly Revenue</label>
                    <div class="relative">
                        <select id="monthly-revenue" name="monthly-revenue"
                            class="block w-full px-4 pr-10 py-3 rounded-lg bg-white/10 border border-white/5 focus:ring-[#ff520e] focus:border-[#ff520e] text-white placeholder-gray-400 transition-colors duration-300 appearance-none outline-none cursor-pointer text-sm sm:text-base">
                            <option value="" disabled selected class="text-gray-400 bg-[#0d0d0d]">Monthly Revenue</option>
                            <option value="new" class="bg-[#0d0d0d]">New Business</option>
                            <option value="1-10k" class="bg-[#0d0d0d]">$1,000 - $10,000</option>
                            <option value="10k-50k" class="bg-[#0d0d0d]">$10,000 - $50,000</option>
                            <option value="50k-100k" class="bg-[#0d0d0d]">$50,000 - $100,000</option>
                            <option value="100k-150k" class="bg-[#0d0d0d]">$100,000 - $150,000</option>
                            <option value="150k+" class="bg-[#0d0d0d]">$150,000+</option>
                        </select>
                        <!-- Custom arrow -->
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-white">
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-[#ff520e] text-white font-medium py-3 px-6 rounded-lg text-base hover:bg-[rgb(224,72,12)] transition-colors duration-300">
                        Submit
                    </button>
                </div>
            </form>


        </div>
    </div>

    <!-- Bottom Section: Copyright and Social Icons -->
    <div class="relative z-10 max-w-4xl mx-auto mt-12 pt-8 border-t border-white/20 flex flex-col sm:flex-row justify-between items-center text-sm text-[#d6d6d6] space-y-4 sm:space-y-0">
        <!-- Copyright -->
        <p>&copy; 2025 Amino Marketing. All rights reserved.</p>

        <!-- Social Icons -->
        <div class="flex space-x-4">
            <a href="https://www.facebook.com/aminomarketing" target="_blank" rel="noopener noreferrer" class="hover:text-[#ff520e] transition-colors duration-300">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.776-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33V22c4.781-.75 8.438-4.887 8.438-9.878z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</footer>