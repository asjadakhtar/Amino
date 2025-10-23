<section class="py-32 md:py-24 my-0 md:my-24">
  <div class="max-w-4xl mx-auto px-4">
    <?php 
      $calendly_type = get_field('calendly_link');

      if( $calendly_type === 'iframe' ): 
        $iframe_url = 'https://calendly.com/aminomarketing-info/business-consultation?';
    ?>
        <div class="w-full h-[700px] sm:h-[750px] md:h-[950px] overflow-hidden rounded-xl shadow-lg">
          <iframe 
            src="<?php echo esc_url($iframe_url); ?>" 
            class="w-full h-full border-0" 
            style="overflow:hidden;" 
            scrolling="no" 
            allowfullscreen
            title="Calendly Scheduling">
          </iframe>
        </div>
    <?php else: ?>
        <p class="text-center text-gray-500">Please select the Calendly type in ACF.</p>
    <?php endif; ?>
  </div>
</section>
