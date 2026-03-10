<?php
/*
 * Template Name: Employment Page
 */
get_header(); ?>

<!-- PAGE HERO -->
<section class="fun-page-hero">
    <div class="fun-hero-bubbles">
        <div class="bubble b1"></div><div class="bubble b2"></div>
        <div class="bubble b3"></div><div class="bubble b4"></div>
        <div class="bubble b5"></div><div class="bubble b6"></div>
    </div>
    <div class="container" style="position:relative;z-index:1;">
        <h1 style="font-size:2.8rem;color:var(--dark);margin-bottom:12px;font-family:var(--heading-font);">Come Join <span style="color:var(--primary);">Our Team!</span></h1>
        <p style="color:var(--text);font-size:1.05rem;max-width:560px;margin:0 auto;">Be part of something meaningful — help children grow every day.</p>
    </div>
</section>

<!-- EMPLOYMENT CONTENT -->
<section class="section">
    <div class="container">
        <div class="employment-grid">
            <div>
                <h2 style="font-size:1.8rem;margin-bottom:16px;">Interested in Working With Us?</h2>
                <p>At Ms. Darlene's Early Learning Center and Childcare, we are always looking for passionate, caring, and dedicated people to join our team.</p>
                <p style="margin-top:16px;">We offer a fun environment, a rewarding career, and guaranteed laughter every single day. If you have a heart for children and a commitment to quality early childhood education, we'd love to hear from you.</p>
                <p style="margin-top:16px;">Fill out the form and we'll be in touch!</p>

                <div style="margin-top:36px;display:flex;flex-direction:column;gap:16px;">
                    <div style="display:flex;align-items:center;gap:14px;background:var(--light);padding:16px;border-radius:12px;">
                        <span style="font-size:24px;">📍</span>
                        <div>
                            <strong style="display:block;font-size:14px;">Location</strong>
                            <span style="font-size:14px;color:var(--text);">10 Kendall Pond Rd, Londonderry NH 03053</span>
                        </div>
                    </div>
                    <div style="display:flex;align-items:center;gap:14px;background:var(--light);padding:16px;border-radius:12px;">
                        <span style="font-size:24px;">📧</span>
                        <div>
                            <strong style="display:block;font-size:14px;">Email</strong>
                            <a href="mailto:staff@msdarleneselcc.com" style="font-size:14px;color:var(--text);">staff@msdarleneselcc.com</a>
                        </div>
                    </div>
                    <div style="display:flex;align-items:center;gap:14px;background:var(--light);padding:16px;border-radius:12px;">
                        <span style="font-size:24px;">📞</span>
                        <div>
                            <strong style="display:block;font-size:14px;">Phone</strong>
                            <a href="tel:6038181405" style="font-size:14px;color:var(--text);">603-818-1405</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrap">
                <h3>Apply Now</h3>
                <?php echo do_shortcode('[lda_form type="employment"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
