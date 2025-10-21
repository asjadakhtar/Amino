<section class="py-12 md:py-24 my-0 md:my-24">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-4xl sm:text-4xl lg:text-5xl font-normal text-white text-center mb-10 sm:mb-12">Projects</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php 
            if( have_rows('works_grid') ): // Repeater for multiple works
                while( have_rows('works_grid') ): the_row(); 
                    $logo = get_sub_field('project_logo');
                    $name = get_sub_field('project_name');
                    $tags = get_sub_field('project_tags');
                    $hero_image = get_sub_field('project_hero_image');

                    // Get the post object instead of manual link
                    $project_post = get_sub_field('project_post'); // Make this a Post Object ACF field
                    $link = $project_post ? get_permalink($project_post->ID) : '#';
            ?>
            <div class="relative group w-full cursor-pointer mx-auto overflow-hidden rounded-xl">
                <a href="<?php echo esc_url($link); ?>">
                    <div class="bg-[#ffffff12] border border-white/5 p-6 rounded-xl shadow-lg
                        transition-all duration-500 ease-out
                        group-hover:border-[#ff520e]
                        group-hover:bg-black/40
                        group-hover:shadow-[inset_0_0_20px_rgba(255,82,14,0.5)]">

                        <div class="flex items-center justify-between pb-4
                            transition-all duration-500 ease-out group-hover:opacity-0">
                            <h2 class="text-white text-xl font-medium"><?php echo esc_html($name); ?></h2>
                            <div class="flex items-center text-[#9ca3af] text-sm">
                                <span>3.9K</span>
                            </div>
                        </div>

                        <?php if( $tags ): ?>
                        <div class="flex flex-wrap gap-1 pb-6
                            transition-all duration-500 ease-out group-hover:opacity-0">
                            <?php foreach( $tags as $tag ): ?>
                                <span class="bg-[#2a2a2a] text-[#8e8e8e] text-xs px-2 py-1 rounded-full font-medium">
                                    <?php echo esc_html($tag['tag']); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>

                        <?php if( $hero_image ): ?>
                        <div class="relative h-60 rounded-lg overflow-hidden group-hover:overflow-visible -mb-6">
                            <img src="<?php echo esc_url($hero_image['url']); ?>" 
                                alt="<?php echo esc_attr($name); ?>" 
                                class="absolute inset-0 w-full h-full object-cover rounded-lg
                                       transition-transform duration-500 ease-out
                                       group-hover:translate-y-[-5.5rem]">
                            <div class="absolute bottom-0 left-0 right-0 flex items-center justify-between text-white text-lg font-medium
                                       px-2 py-6
                                       opacity-0 translate-y-full
                                       transition-all duration-500 ease-out
                                       group-hover:opacity-100 group-hover:translate-y-0">
                                Visit Project
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </div>
                        </div>
                        <?php endif; ?>

                    </div>
                </a>
            </div>
            <?php 
                endwhile; 
            endif; 
            ?>
        </div>

        <div class="mt-12 text-center">
            <div class="mb-4 text-sm md:text-base text-[#D6D6D6]">Ready to take your brand to the next level?</div>
            <a href="https://calendly.com/aminomarketing-info/business-consultation?primary_color=ff5c07&month=2025-10"
               class="group relative inline-block overflow-hidden rounded-lg border border-white/20 px-5 py-[7px] text-base text-white transition-colors duration-500 hover:border-[#ff520e]"
               data-text="Book a call">
                <span class="inline-block transition-transform duration-500 ease-in-out group-hover:-translate-y-full">
                    Book a call
                </span>
            </a>
        </div>

    </div>
</section>
