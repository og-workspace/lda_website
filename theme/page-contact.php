<?php
/*
 * Template Name: Contact Page
 */
get_header(); ?>

<!-- PAGE HERO -->
<section style="background: linear-gradient(135deg, #fff9ec 0%, #e8f7f9 100%); padding: 80px 0; text-align: center;">
    <div class="container">
        <h1 class="section-title">Schedule a <span class="text-primary">Tour!</span></h1>
        <a href="https://calendly.com/oghafour5/ms-darlene-s-early-learning-center-tours" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="margin-top:24px;">Book via Calendly</a>
        <p class="section-subtitle" style="margin-bottom:0;">Have a question? We've got your answer! Fill out the form below and we'll get back to you as soon as we can.</p>
    </div>
</section>

<!-- CONTACT -->
<section class="contact-section section">
    <div class="container">
        <div class="contact-inner">
            <div class="contact-info">
                <h2>Keep In <span class="text-primary">Touch</span></h2>
                <p>We'd love to hear from you. Whether you want to schedule a tour, ask about enrollment, or just say hello — reach out anytime.</p>
                <div class="contact-details">
                    <div class="contact-detail">
                        <div class="contact-detail-icon"><i class="fas fa-user"></i></div>
                        <div>
                            <h4>Director</h4>
                            <p>Michlyn DeRocher</p>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-detail-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Address</h4>
                            <p>10 Kendall Pond Rd, Londonderry NH 03053</p>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-detail-icon"><i class="fas fa-phone"></i></div>
                        <div>
                            <h4>Phone</h4>
                            <p><a href="tel:6038181405">603-818-1405</a></p>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-detail-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4>Email</h4>
                            <p><a href="mailto:staff@msdarleneselcc.com">staff@msdarleneselcc.com</a></p>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-detail-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <h4>Hours</h4>
                            <p>Monday – Friday: 7:00 AM – 5:00 PM</p>
                        </div>
                    </div>
                </div>

                <!-- Map embed placeholder -->
                <div style="margin-top:30px;border-radius:16px;overflow:hidden;height:250px;">
                    <iframe
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY&q=10+Kendall+Pond+Rd,+Londonderry+NH+03053"
                        width="100%" height="250" style="border:0;" allowfullscreen loading="lazy"
                        title="Ms. Darlene's ELC Location">
                    </iframe>
                </div>
            </div>

            <div class="contact-form-wrap">
                <h3>Send Us a Message</h3>
                <?php echo do_shortcode('[lda_form]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
