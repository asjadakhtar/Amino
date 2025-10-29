<?php
/**
 * Template Name: Single Project
 * Template for displaying single project posts
 * Save this file as: single-projects.php in your theme directory
 */

get_header(); ?>

<section class="py-32 md:py-24 my-0 md:my-24">
    <?php 
while (have_posts()) : the_post();
    $logo = get_field('project_logo');
    
    // Get project name - ACF field or post title
    $name = get_field('project_name');
    if (!$name) {
        $name = get_the_title();
    }
    
    $website = get_field('project_website');
    
    // Get project tags - ACF field or taxonomy
    $tags = get_field('project_tags');
    if (!$tags) {
        $taxonomy_tags = get_the_terms(get_the_ID(), 'project_category');
        if ($taxonomy_tags && !is_wp_error($taxonomy_tags)) {
            $tags = array();
            foreach ($taxonomy_tags as $tax_tag) {
                $tags[] = array('tag' => $tax_tag->name);
            }
        }
    }
    
    // Get featured image or hero image
    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
    if (!$featured_image) {
        $hero_image_field = get_field('project_hero_image');
        $featured_image = $hero_image_field ? $hero_image_field['url'] : '';
    }
?>

<div class="max-w-4xl mx-auto px-4">
    <div class="group relative bg-[#ffffff12] border border-white/5 p-6 md:p-8 rounded-xl transition-colors duration-500 ease-in-out overflow-hidden h-full flex flex-col">

        <!-- Hover Gradient Blur Effect -->
        <div class="absolute bottom-[-45px] right-[-233px] h-[126px] w-[621px] bg-[#ff520e] opacity-0 blur-[100px] transition-opacity duration-500 ease-in-out group-hover:opacity-25 z-10" aria-hidden="true"></div>

        <!-- Content Wrapper -->
        <div class="relative z-20 flex flex-col h-full">
            <div class="flex items-center mb-8 gap-6">
                <!-- Project Logo or Featured Image -->
                <div class="w-24 h-24 flex items-center justify-center rounded-xl bg-white/10 border border-white/10 overflow-hidden">
                    <?php if ($logo): ?>
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="w-8 h-8 md:w-16 md:h-16 object-contain">
                    <?php elseif ($featured_image): ?>
                        <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($name); ?>" class="w-full h-full object-cover">
                    <?php endif; ?>
                </div>

                <!-- Project Name & Website -->
                <div>
                    <?php if ($name): ?>
                        <h3 class="text-xl md:text-4xl font-medium text-white mb-2">
                            <?php echo esc_html($name); ?>
                        </h3>
                    <?php endif; ?>

                    <?php if ($website): ?>
                        <p class="text-sm md:text-base text-[#D6D6D6]">
                            <?php echo esc_url($website); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Project Tags -->
            <?php if ($tags): ?>
                <div class="flex flex-wrap gap-3 sm:gap-4 mt-auto justify-center sm:justify-start">
                    <?php foreach ($tags as $tag): ?>
                        <span class="w-full sm:w-auto text-center px-6 py-3 text-xs text-[#D6D6D6] bg-white/10 rounded-full">
                            <?php echo esc_html($tag['tag']); ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php 
$project_hero_image = get_field('project_hero_image'); 
if ($project_hero_image): ?>
<section class="py-12">
    <div class="max-w-4xl mx-auto px-4">
        <div class="relative bg-[#ffffff12] border border-white/5 rounded-xl overflow-hidden">
            <div class="relative w-full p-6 flex items-center justify-center h-full sm:h-[650px]">
                <img src="<?php echo esc_url($project_hero_image['url']); ?>" 
                    alt="<?php echo esc_attr($project_hero_image['alt']); ?>" 
                    class="w-full h-full object-cover block rounded-md">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>




    <?php 
    $client_success_story = get_field('client_success_story');
    $approach_steps = get_field('approach_steps');
    ?>

    <section class="sm:py-12 py-6">
        <div class="max-w-4xl mx-auto px-4">
            
            <?php if ($client_success_story): ?>
                <h2 class="text-3xl md:text-4xl font-medium text-white mb-6">Client Success Story</h2>
                <div class="text-base md:text-lg text-[#D6D6D6] mb-12 prose prose-invert max-w-none">
                    <?php echo wp_kses_post($client_success_story); ?>
                </div>
            <?php endif; ?>

            <?php if ($approach_steps): ?>
                <h3 class="text-2xl md:text-3xl font-medium text-white mb-6">Our Approach</h3>
                <ul class="list-disc pl-5 text-base md:text-lg text-[#D6D6D6] space-y-2">
                    <?php foreach ($approach_steps as $step): ?>
                        <li class="break-words pr-2"><?php echo esc_html($step['step']); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            
        </div>
    </section>


    <section class="sm:py-12 py-6">
        <div class="max-w-4xl mx-auto px-4">
            <div id="roasChartContainer" class="group relative bg-[#ffffff12] border border-white/5 p-6 md:p-8 rounded-xl overflow-hidden">
                <!-- Hover Gradient Blur Effect -->
                <div class="absolute bottom-[-45px] right-[-233px] h-[126px] w-[1100px] bg-[#ff520e] opacity-0 blur-[100px] transition-opacity duration-500 ease-in-out group-hover:opacity-25 z-10" aria-hidden="true"></div>

                <div class="relative z-20 flex flex-col items-center justify-center">
                    <h3 class="text-xl md:text-2xl font-medium text-white mb-8">ROAS Growth Over Months</h3>

                    <div class="flex items-end justify-around w-full max-w-2xl h-64 border-l border-b border-gray-600 relative">
                        <!-- Y-axis Label -->
                        <span class="absolute left-[-40px] bottom-1/2 -rotate-90 transform origin-left text-[#D6D6D6] text-sm">ROAS</span>

                        <!-- Bar 1: Month 1 -->
                        <div class="flex flex-col items-center justify-end h-full">
                            <span class="text-white text-sm mb-1" data-value="6.5 x"></span>
                            <div class="w-12 md:w-16 bg-[#ff520e] rounded-t-sm chart-bar" data-height="85%"></div>
                            <span class="text-[#D6D6D6] text-sm mt-2">Month 1</span>
                        </div>

                        <!-- Bar 2: Month 2 -->
                        <div class="flex flex-col items-center justify-end h-full">
                            <span class="text-white text-sm mb-1" data-value="4 x"></span>
                            <div class="w-12 md:w-16 bg-[#ff520e] rounded-t-sm chart-bar" data-height="50%"></div>
                            <span class="text-[#D6D6D6] text-sm mt-2">Month 2</span>
                        </div>

                        <!-- Bar 3: Month 3 -->
                        <div class="flex flex-col items-center justify-end h-full">
                            <span class="text-white text-sm mb-1" data-value="6 x"></span>
                            <div class="w-12 md:w-16 bg-[#ff520e] rounded-t-sm chart-bar" data-height="75%"></div>
                            <span class="text-[#D6D6D6] text-sm mt-2">Month 3</span>
                        </div>

                        <!-- Bar 4: Month 4 -->
                        <div class="flex flex-col items-center justify-end h-full">
                            <span class="text-white text-sm mb-1" data-value="6 x"></span>
                            <div class="w-12 md:w-16 bg-[#ff520e] rounded-t-sm chart-bar" data-height="75%"></div>
                            <span class="text-[#D6D6D6] text-sm mt-2">Month 4</span>
                        </div>
                    </div>
                    <!-- X-axis Label -->
                    <span class="text-[#D6D6D6] text-sm mt-4">MONTH</span>
                </div>
            </div>
        </div>
    </section>



    <section class="sm:py-12 py-6">
        <div class="max-w-4xl mx-auto px-4">

            <div class="group relative bg-[#ffffff12] border border-white/5 py-10 px-6 rounded-xl transition-colors duration-500 ease-in-out overflow-hidden">

                <div class="relative z-20">
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center">
                        <!-- Stat Card 1 -->
                        <div class="bg-white/5 p-6 rounded-lg text-center w-full max-w-[200px]">
                            <div class="text-3xl md:text-5xl font-medium text-white counting-number mb-3" data-target="4.8" data-suffix="x">0x</div>
                            <div class="text-sm md:text-base text-[#D6D6D6]">ROAS Achieved</div>
                        </div>
                        <!-- Stat Card 2 -->
                        <div class="bg-white/5 p-6 rounded-lg text-center w-full max-w-[200px]">
                            <div class="text-3xl md:text-5xl font-medium text-white counting-number mb-3" data-target="5.4" data-suffix="x">0x</div>
                            <div class="text-sm md:text-base text-[#D6D6D6]">Monthly Revenue</div>
                        </div>
                        <!-- Stat Card 3 -->
                        <div class="bg-white/5 p-6 rounded-lg text-center w-full max-w-[200px]">
                            <div class="text-3xl md:text-5xl font-medium text-white counting-number mb-3" data-target="6.2" data-suffix="x">0x</div>
                            <div class="text-sm md:text-base text-[#D6D6D6]">Conversion Rate</div>
                        </div>
                        <!-- Stat Card 4 -->
                        <div class="bg-white/5 p-6 rounded-lg text-center w-full max-w-[200px]">
                            <div class="text-3xl md:text-5xl font-medium text-white counting-number mb-3" data-target="8.1" data-suffix="x">0x</div>
                            <div class="text-sm md:text-base text-[#D6D6D6]">Average Order Value</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    $graphics_title = get_field('graphics_title');
    $graphics_content = get_field('graphics_content');
    ?>

    <?php if ($graphics_title || $graphics_content): ?>
    <section class="sm:py-12 py-6">
        <div class="max-w-4xl mx-auto px-4">
            <?php if ($graphics_title): ?>
                <h2 class="text-3xl md:text-4xl font-medium text-white mb-6">
                    <?php echo esc_html($graphics_title); ?>
                </h2>
            <?php endif; ?>

            <?php if ($graphics_content): ?>
                <div class="text-base md:text-lg text-[#D6D6D6] mb-6 prose prose-invert max-w-none">
                    <?php echo wp_kses_post($graphics_content); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>



    <?php
    $gallery = get_field('projects_gallery');
    $text = get_field('projects_gallery_text');
    ?>

    <section class="sm:py-12 py-6">
        <div class="max-w-4xl mx-auto px-4">
            <div class="group relative bg-[#ffffff12] border border-white/5 p-6 md:p-8 rounded-xl transition-colors duration-500 ease-in-out overflow-hidden">
                <div class="relative z-20">
                    <?php if( $gallery ): ?>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <?php foreach( $gallery as $image ): ?>
                                <div class="rounded-lg overflow-hidden h-full sm:h-[320px] cursor-pointer">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-full object-cover gallery-image">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php if( $text ): ?>
                        <div class="text-center text-sm md:text-base text-[#D6D6D6] mt-4">
                            <?php echo esc_html($text); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>


    <!-- The Modal Structure -->
    <div id="imageModal" class="modal">
        <span class="close-button">&times;</span>
        <div class="modal-content">
            <img id="modalImage" src="" alt="Modal Image">
            <a class="prev-button">&#10094;</a>
            <a class="next-button">&#10095;</a>
        </div>
    </div>


    <?php
    $image = get_field('project_main_image');
    $heading = get_field('project_heading');
    $para1 = get_field('project_paragraph_1');
    $para2 = get_field('project_paragraph_2');
    ?>

    <section class="sm:py-12 py-6">
        <div class="max-w-4xl mx-auto px-4">
            <div class="group relative bg-[#ffffff12] border border-white/5 rounded-xl overflow-hidden">
                <div class="relative z-20 w-full p-6 flex items-center justify-center h-full sm:h-[650px]">
                    <?php if( $image ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-full object-cover block rounded-md">
                    <?php endif; ?>
                </div>
            </div>

            <div class="mt-12">
                <?php if( $heading ): ?>
                    <h2 class="text-3xl md:text-4xl font-medium text-white mb-6"><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>

                <?php if( $para1 ): ?>
                    <p class="text-base md:text-lg text-[#D6D6D6] mb-6"><?php echo esc_html($para1); ?></p>
                <?php endif; ?>

                <?php if( $para2 ): ?>
                    <p class="text-base md:text-lg text-[#D6D6D6] mb-12"><?php echo esc_html($para2); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>



    <?php
    $heading = get_field('testimonial_heading');
    $rating = get_field('testimonial_rating');
    $testimonial_text = get_field('testimonial_text');
    $testimonial_image = get_field('testimonial_image');
    $testimonial_name = get_field('testimonial_name');
    $position = get_field('testimonial_position');
    ?>

    <section class="sm:py-12 py-6">
        <div class="max-w-2xl mx-auto px-4">
            <?php if( $heading ): ?>
                <div class="text-center mb-12">
                    <h2 class="text-4xl sm:text-4xl lg:text-5xl font-normal text-white text-center">
                        <?php echo esc_html($heading); ?>
                    </h2>
                </div>
            <?php endif; ?>

            <div class="relative border border-white/10 rounded-lg p-8 h-full flex flex-col bg-[#0F0F0F] group overflow-hidden">
                <div class="flex items-center mb-4">
                    <?php if( $rating ): ?>
                        <div class="text-[#ff520e] flex">
                            <?php for( $i=1; $i <= 5; $i++ ): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="<?php echo $i <= $rating ? 'currentColor' : 'none'; ?>" stroke="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if( $testimonial_text ): ?>
                    <p class="text-white text-lg font-normal mb-6 flex-grow">
                        "<?php echo esc_html($testimonial_text); ?>"
                    </p>
                <?php endif; ?>

                <div class="flex items-center">
                    <?php if( $testimonial_image ): ?>
                        <img class="w-12 h-12 rounded-full mr-4" src="<?php echo esc_url($testimonial_image['url']); ?>" alt="<?php echo esc_attr($testimonial_image['alt']); ?>">
                    <?php endif; ?>
                    <div>
                        <?php if( $testimonial_name ): ?>
                            <p class="text-white font-bold"><?php echo esc_html($testimonial_name); ?></p>
                        <?php endif; ?>
                        <?php if( $position ): ?>
                            <p class="text-gray-400 text-sm"><?php echo esc_html($position); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="absolute bottom-[-45px] right-[-233px] h-[126px] w-[621px] bg-[#ff520e] opacity-0 blur-[100px] transition-opacity duration-500 ease-in-out group-hover:opacity-25 z-10" aria-hidden="true"></div>
            </div>
        </div>
    </section>



    <?php
$project_logo = get_field('next_project_logo');
$project_name = get_field('next_project_name');
$project_website = get_field('next_project_website');
?>

<!-- <section class="py-8 sm:py-12">
    <div class="max-w-4xl mx-auto px-4">
        <div class="group relative bg-[#ffffff12] border border-white/5 p-4 sm:p-6 md:p-8 rounded-xl transition-colors duration-500 ease-in-out overflow-hidden h-full flex flex-col">

            <div class="relative z-20 flex flex-col h-full">
                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-6 sm:gap-8">

                    <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6 sm:text-left">
                        <?php if( $project_logo ): ?>
                            <div class="w-20 h-20 sm:w-24 sm:h-24 sm:mx-0 flex items-center justify-center rounded-xl bg-white/10 border border-white/10">
                                <img src="<?php echo esc_url($project_logo['url']); ?>" 
                                     alt="<?php echo esc_attr($project_name); ?>" 
                                     class="w-10 h-10 sm:w-16 sm:h-16">
                            </div>
                        <?php endif; ?>

                        <div>
                            <?php if( $project_name ): ?>
                                <h3 class="text-2xl sm:text-3xl md:text-4xl font-medium text-white mb-2">
                                    <?php echo esc_html($project_name); ?>
                                </h3>
                            <?php endif; ?>
                            <?php if( $project_website ): ?>
                                <p class="text-sm sm:text-base text-[#D6D6D6] break-words">
                                    <?php echo esc_url($project_website); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if( $project_website ): ?>
                        <div class="sm:text-right">
                            <a href="<?php echo esc_url($project_website); ?>"  
                               class="text-sm sm:text-base text-[#D6D6D6] hover:text-[#ff520e] transition-all duration-500 ease-in-out">
                                View project
                            </a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
</section> -->


    <?php endwhile; ?>

</section>

<?php get_footer(); ?>












