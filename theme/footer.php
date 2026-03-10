<!-- ENROLL CTA -->
<section class="enroll-cta">
    <div class="container">
        <h2>Enroll Now</h2>
        <p>Join the Ms. Darlene's Family Today!</p>
        <a href="https://calendly.com/oghafour5/ms-darlene-s-early-learning-center-tours" target="_blank" rel="noopener noreferrer" class="btn btn-outline">Schedule a Tour!</a>
    </div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand -->
            <div class="footer-brand">
                <div class="footer-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo-text">
                        <span class="logo-line1">Ms. Darlene's</span>
                        <span class="logo-line2">Early Learning Center &amp; Childcare</span>
                    </a>
                </div>
                <p>Welcome to Ms. Darlene's Early Learning Center and Childcare. Nestled in Londonderry, NH, we embrace each child's uniqueness, fostering holistic development through personalized care and engaging activities. We believe in cultivating a foundation for lifelong learning in an environment that feels like a second home.</p>
                <?php
                $fb_url = get_theme_mod('facebook_url', '');
                $ig_url = get_theme_mod('instagram_url', '');
                if ($fb_url || $ig_url) : ?>
                <div class="social-links">
                    <?php if ($fb_url) : ?>
                        <a href="<?php echo esc_url($fb_url); ?>" class="social-link" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>
                    <?php if ($ig_url) : ?>
                        <a href="<?php echo esc_url($ig_url); ?>" class="social-link" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/programs/')); ?>"><i class="fas fa-chevron-right"></i> Our Programs</a></li>
                    <li><a href="<?php echo esc_url(home_url('/employment-opportunities/')); ?>"><i class="fas fa-chevron-right"></i> Join Our Team</a></li>
                    <li><a href="https://calendly.com/oghafour5/ms-darlene-s-early-learning-center-tours" target="_blank" rel="noopener noreferrer"><i class="fas fa-chevron-right"></i> Schedule a Tour</a></li>
                </ul>
            </div>

            <!-- Programs -->
            <div class="footer-col">
                <h4>Our Programs</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/programs/')); ?>"><i class="fas fa-chevron-right"></i> Infants</a></li>
                    <li><a href="<?php echo esc_url(home_url('/programs/')); ?>"><i class="fas fa-chevron-right"></i> Pre-Toddlers</a></li>
                    <li><a href="<?php echo esc_url(home_url('/programs/')); ?>"><i class="fas fa-chevron-right"></i> Toddlers</a></li>
                    <li><a href="<?php echo esc_url(home_url('/programs/')); ?>"><i class="fas fa-chevron-right"></i> Pre-K</a></li>
                    <li><a href="<?php echo esc_url(home_url('/programs/')); ?>"><i class="fas fa-chevron-right"></i> Kindergarten</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-col">
                <h4>Contact Us</h4>
                <div class="footer-contact-list">
                    <div class="footer-contact-item">
                        <i class="fas fa-user"></i>
                        <div>
                            <strong style="color:#fff;">Director: Michlyn DeRocher</strong>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>10 Kendall Pond Rd,<br>Londonderry NH 03053</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-phone"></i>
                        <a href="tel:6038181405" style="color:inherit;">603-818-1405</a>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:staff@msdarleneselcc.com" style="color:inherit;">staff@msdarleneselcc.com</a>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-clock"></i>
                        <span>Mon – Fri: 7:00 AM – 5:00 PM</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Ms. Darlene's Early Learning Center and Childcare. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
