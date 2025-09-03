<?php
// Retrieve ACF fields
$background_video_file = get_field('hero_bg_video'); // This will return an array for a File field
$main_heading = get_field('hero_heading');
$subheading = get_field('hero_subheading');
$primary_button = get_field('hero_primary_btn');   // This will return an array for a Link field
$secondary_button = get_field('hero_secondary_btn'); // This will return an array for a Link field

// Extract video URL if the file field exists
$background_video_url = '';
if ($background_video_file && is_array($background_video_file) && isset($background_video_file['url'])) {
    $background_video_url = $background_video_file['url'];
}
?>

<section class="relative h-screen w-full flex items-center justify-center text-center overflow-hidden px-4 sm:px-6 lg:px-8">

    <!-- Background Video -->
    <?php if ($background_video_url): ?>
    <video
        class="absolute z-[-1] w-auto min-w-full min-h-full max-w-none"
        autoplay
        loop
        muted
        playsinline>
        <source src="<?php echo $background_video_url; ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <?php endif; ?>

    <!-- Video Overlay -->
    <div class="absolute top-0 left-0 w-full h-full bg-[#0d0d0d]/80"></div>

    <!-- Content Container -->
    <div class="relative z-10 max-w-4xl mx-auto text-white">
        <!-- Main Heading -->
        <?php if ($main_heading): ?>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-medium leading-tight mb-4">
                <?php echo esc_html($main_heading); ?>
            </h1>
        <?php endif; ?>

        <!-- Subheading -->
        <?php if ($subheading): ?>
            <p class="text-base sm:text-lg lg:text-xl max-w-2xl mx-auto mb-8 text-gray-300">
                <?php echo apply_filters('the_content', $subheading); // Use apply_filters for Wysiwyg editor content ?>
            </p>
        <?php endif; ?>

        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <!-- Primary CTA Button with slide-up transition -->
            <?php if ($primary_btn_url && $primary_btn_text): ?>
                <a href="<?php echo $primary_btn_url; ?>"
                   target="<?php echo $primary_btn_target; ?>"
                   class="group relative inline-block overflow-hidden rounded-lg bg-[#ff520e] px-5 py-[7px] text-base text-white transition-colors duration-500">

                    <!-- The visible text that slides up on hover -->
                    <span class="inline-block transition-transform duration-500 ease-in-out group-hover:-translate-y-full">
                        <?php echo $primary_btn_text; ?>
                    </span>

                    <!-- The hover text that slides down from above -->
                    <span class="absolute inset-0 flex items-center justify-center translate-y-full transition-transform duration-500 ease-in-out group-hover:translate-y-0">
                        <?php echo $primary_btn_text; ?>
                    </span>
                </a>
            <?php endif; ?>

            <!-- Secondary CTA Button -->
            <?php if ($secondary_btn_url && $secondary_btn_text): ?>
                <a href="<?php echo $secondary_btn_url; ?>"
                   target="<?php echo $secondary_btn_target; ?>"
                   class="group relative inline-block overflow-hidden rounded-lg border border-white/20 px-5 py-[7px] text-base text-white transition-colors duration-500 hover:border-[#ff520e]">

                    <!-- The visible text that slides up -->
                    <span class="inline-block transition-transform duration-500 ease-in-out group-hover:-translate-y-full">
                        <?php echo $secondary_btn_text; ?>
                    </span>
                    <!-- The hover text that slides down from above (if you want the same effect as primary CTA) -->
                    <span class="absolute inset-0 flex items-center justify-center translate-y-full transition-transform duration-500 ease-in-out group-hover:translate-y-0">
                        <?php echo $secondary_btn_text; ?>
                    </span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>