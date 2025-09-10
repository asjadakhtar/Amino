<!-- Button -->
<div class="text-center">
  <button onclick="openModal()" 
    class="bg-[#ff520e] hover:bg-[rgb(224,72,12)] text-white font-medium py-3 px-6 rounded-lg transition-colors duration-300 cursor-pointer">
    Book our free compliance book
  </button>
</div>

<!-- Modal -->
<div id="cf7Modal" class="fixed inset-0 bg-black/90 hidden items-center justify-center z-50 opacity-0 transition-opacity duration-300">
  <div class="bg-[#2e2b2b12] border border-white/20 sm:p-6 p-4 rounded-xl transform scale-95 transition-all duration-300 ease-out max-w-4xl w-full mx-4 relative overflow-hidden">
    
    <!-- Decorative Blur Background -->
    <div class="absolute bottom-0 right-0 h-[220px] w-[200px] max-w-full bg-[#ff520e] opacity-50 blur-[100px]" aria-hidden="true"></div>
    
    <!-- Close Button -->
    <button onclick="closeModal()" 
            class="absolute top-3 right-3 text-[#ff520e] z-20">
      ✕
    </button>

    <!-- Modal Content: Image on Left, Form on Right -->
    <div class="flex flex-col md:flex-row items-center justify-center relative z-10">
      
      <!-- Image on the Left -->
      <div class="md:w-1/2 w-full flex items-center justify-center p-4">
        <!-- Replace 'your-image-url.jpg' with your actual image path -->
        <img src="https://aminomarketing.com/wp-content/uploads/2025/09/cover.png" alt="Compliance Book Cover" class="max-w-full h-auto rounded-lg shadow-lg">
      </div>

      <!-- Form Content on the Right -->
      <div class="md:w-1/2 w-full p-4">
        <!-- Modal Heading -->
        <h2 class="sm:text-4xl text-2xl font-medium text-white text-center sm:mb-4 mb-0 relative z-10">
          Get Your Free PDF
        </h2>

        <!-- Contact Form 7 -->
        <div class="relative z-10 mt-4">
          <?php echo do_shortcode('[contact-form-7 id="9d051e3" title="Book Free"]'); ?>
        </div>
      </div>
    </div>
    
  </div>
</div>