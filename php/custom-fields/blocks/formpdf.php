<!-- Button -->
<div class="text-center">
  <button onclick="openModal()" 
    class="bg-[#ff520e] hover:bg-[rgb(224,72,12)] text-white font-medium py-3 px-6 rounded-lg transition-colors duration-300 cursor-pointer">
    Book our free compliance book
  </button>
</div>

<!-- Modal -->
<div id="cf7Modal" class="fixed inset-0 bg-black/90 hidden items-center justify-center z-50 opacity-0 transition-opacity duration-300">
  <div class="bg-[#2e2b2b12] border border-white/20 sm:p-6 p-4 rounded-xl transform scale-95 transition-all duration-300 ease-out max-w-lg w-full mx-4 relative overflow-hidden">
    
    <!-- Decorative Blur Background -->
    <div class="absolute bottom-0 right-0 h-[220px] w-[200px] max-w-full bg-[#ff520e] opacity-50 blur-[100px]" aria-hidden="true"></div>
    
    <!-- Close Button -->
    <button onclick="closeModal()" 
            class="absolute top-3 right-3 text-[#ff520e] z-10">
      ✕
    </button>

    <!-- Modal Heading -->
    <h2 class="sm:text-4xl text-2xl font-medium text-white text-center sm:mb-4 mb-0 relative z-10">
      Get Your Free PDF
    </h2>

    <!-- Contact Form 7 -->
    <div class="relative z-10">
      <?php echo do_shortcode('[contact-form-7 id="d5b4ecd" title="Book Free"]'); ?>
    </div>
  </div>
</div>