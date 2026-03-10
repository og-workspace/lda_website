<?php
/*
 * Template Name: Employment Page
 */
get_header(); ?>

<!-- PAGE HERO -->
<section style="background: linear-gradient(135deg, #fff9ec 0%, #e8f7f9 100%); padding: 80px 0; text-align: center;">
    <div class="container">
        <h1 class="section-title">COME JOIN <span class="text-primary">OUR TEAM!</span></h1>
        <p class="section-subtitle" style="margin-bottom:0;">Be part of something meaningful — help children grow every day.</p>
    </div>
</section>

<!-- EMPLOYMENT CONTENT -->
<section class="section">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1.5fr;gap:60px;align-items:start;">
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
