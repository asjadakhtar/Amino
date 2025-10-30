<section class="relative py-16 md:py-24">
    <div class="max-w-3xl mx-auto text-center px-4">
        
        <!-- Form Wrapper -->
        <div class="relative bg-[#ffffff12] border border-white/5 rounded-xl p-6 md:p-8 newsletter-hover-wrapper">
            <!-- Heading -->
            <h2 class="text-4xl sm:text-4xl font-normal text-white mb-4">
                Stay Ahead in the Peptide Industry
            </h2>
            <p class="text-[#D6D6D6] text-base sm:text-lg mb-10">
                Subscribe to get marketing insights, compliance tips, and strategies for peptide brand growth-straight to your inbox.
            </p>
            <div class="absolute bottom-[-45px] right-[-233px] h-[126px] w-[621px] bg-[#ff520e] opacity-0 blur-[100px] transition-opacity duration-500 ease-in-out z-10 newsletter-glow" aria-hidden="true"></div>

            <div class="relative z-20 newsletter-flex-wrapper">
                <?php echo do_shortcode('[contact-form-7 id="b8a6ef3" title="Newsletter"]'); ?>
            </div>
        </div>

    </div>
</section>

<style>
.newsletter-flex-wrapper .wpcf7-form {
    display: flex;
    gap: 12px;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    position: relative;
}

.newsletter-flex-wrapper .newsletter-attached {
    display: flex;
    gap: 12px;
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
}

.newsletter-flex-wrapper .email-newsletter {
    flex: 1;
}

.newsletter-flex-wrapper .email-newsletter input[type="email"] {
    width: 100%;
    padding: 12px 16px;
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    background: rgba(255, 255, 255, 0.05);
    color: white;
}

.newsletter-flex-wrapper .subscribe-newsletter {
    position: relative;
}

.newsletter-flex-wrapper .subscribe-newsletter input[type="submit"] {
    padding: 10px 32px;
    border-radius: 8px;
    white-space: nowrap;
}

/* Loader ko button ke andar center mein rakhna */
.newsletter-flex-wrapper .wpcf7-spinner {
    position: absolute !important;
    top: 50% !important;
    left: 50% !important;
    transform: translate(-50%, -50%) !important;
    margin: 0 !important;
    opacity: 0.8;
}

/* Hover effect for the entire section */
.newsletter-hover-wrapper:hover .newsletter-glow {
    opacity: 0.25;
}
</style>