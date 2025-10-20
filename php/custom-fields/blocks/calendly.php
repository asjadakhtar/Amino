<?php
/* Template Name: Calendly Page */
get_header();
?>

<section class="py-12 md:py-24 my-0 md:my-24">
  <div class="max-w-4xl mx-auto px-4">
    <?php 
      $calendly_link = get_field('calendly_link');
      if( $calendly_link ): ?>
        <div class="calendly-inline-widget" 
             data-url="<?php echo esc_url($calendly_link); ?>" 
             style="min-width:320px;height:750px;">
        </div>
    <?php else: ?>
        <p class="text-center text-gray-500">Calendly link not set. Please add it in ACF.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
