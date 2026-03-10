<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <div class="hero-inner">
            <div class="hero-content">
                <span class="hero-badge">Licensed & Loving Care</span>
                <h1>Where Every Child <span>Learns, Plays</span> & Grows</h1>
                <p>Ms. Darlene's Early Learning Center and Childcare provides a warm, nurturing environment where children thrive through play-based learning, creativity, and hands-on discovery in Londonderry, NH.</p>
                <div class="hero-buttons">
                    <a href="https://calendly.com/oghafour5/ms-darlene-s-early-learning-center-tours" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Enroll Now</a>
                    <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="btn btn-secondary">Our Programs</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hero-kids.jpg" alt="Happy children learning at Ms. Darlene's">
                <div class="hero-badge-float top-left">
                    <span class="badge-icon">🎓</span>
                    <div class="badge-text">
                        <strong>5 Programs</strong>
                        <span>Infants to Kindergarten</span>
                    </div>
                </div>
                <div class="hero-badge-float bottom-right">
                    <span class="badge-icon">❤️</span>
                    <div class="badge-text">
                        <strong>Licensed & Trusted</strong>
                        <span>Londonderry, NH</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROGRAMS -->
<section class="programs section">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Our <span class="text-primary">Programs</span></h2>
            <p class="section-subtitle">Age-appropriate programs designed to support every stage of your child's development.</p>
        </div>
        <div class="programs-grid">

            <div class="program-card">
                <div class="program-icon">👶</div>
                <h3>Infants</h3>
                <span class="program-ages">6 weeks – 12 months</span>
                <p>Our infant program provides a warm, nurturing environment that focuses on meeting the individual needs of each baby through attentive care and gentle stimulation.</p>
                <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="program-link">Learn More →</a>
            </div>

            <div class="program-card">
                <div class="program-icon">🧸</div>
                <h3>Pre-Toddlers</h3>
                <span class="program-ages">12 months – 2 years</span>
                <p>Our pre-toddler program supports growing explorers as they begin developing independence, language skills, and social awareness in a safe and loving setting.</p>
                <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="program-link">Learn More →</a>
            </div>

            <div class="program-card">
                <div class="program-icon">🎨</div>
                <h3>Toddlers</h3>
                <span class="program-ages">2 – 3 years</span>
                <p>Our toddler program offers a play-based environment supporting social-emotional growth, fine and gross motor development, and joyful group exploration.</p>
                <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="program-link">Learn More →</a>
            </div>

            <div class="program-card">
                <div class="program-icon">✏️</div>
                <h3>Pre-K</h3>
                <span class="program-ages">3 – 4 years</span>
                <p>Our Pre-K program builds the social skills, problem-solving abilities, and early academic foundations children need for a successful transition to school.</p>
                <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="program-link">Learn More →</a>
            </div>

            <div class="program-card">
                <div class="program-icon">🏫</div>
                <h3>Kindergarten</h3>
                <span class="program-ages">4 – 5 years</span>
                <p>Our Kindergarten program challenges children to grow academically and socially, focusing on literacy, numeracy, critical thinking, and building a love for learning.</p>
                <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="program-link">Learn More →</a>
            </div>

        </div>
    </div>
</section>

<!-- ABOUT -->
<section class="section" id="about">
    <div class="container">
        <div class="about-inner">
            <div class="about-images">
                <img class="about-img-main" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about-main.jpg" alt="Children learning together">
                <img class="about-img-secondary" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about-secondary.jpg" alt="Teacher with students">
            </div>
            <div class="about-content">
                <span class="about-tag">About Us</span>
                <h2>The Right Environment for Growing</h2>
                <p>Our team believes in providing a quality program children will enjoy and where all children can thrive. Our staff actively participates in all activities and ensures each child has a pleasant, fun, and welcoming experience at Ms. Darlene's Early Learning Center.</p>
                <p>Our team is committed to fostering a partnership with families to best meet the needs of all children in our program. Under the caring leadership of Director Michlyn DeRocher, we create a second home for every child.</p>
                <div class="about-stats">
                    <div class="stat-item">
                        <span class="stat-number" data-target="5" data-suffix="+">0+</span>
                        <span class="stat-label">Programs</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="100" data-suffix="%">0%</span>
                        <span class="stat-label">Dedicated</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="100" data-suffix="%">0%</span>
                        <span class="stat-label">Licensed</span>
                    </div>
                </div>
                <a href="https://calendly.com/oghafour5/ms-darlene-s-early-learning-center-tours" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Schedule a Tour</a>
            </div>
        </div>
    </div>
</section>

<!-- CORE VALUES -->
<section class="values section">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Playful Learning, <span class="text-primary">Lasting Memories</span></h2>
            <p class="section-subtitle">Everything we do is guided by our commitment to each child's wellbeing and development.</p>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">🌟</div>
                <h3>Learning & Fun</h3>
                <p>Discovering a world of learning and fun together every single day.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">🥗</div>
                <h3>Healthy Habits</h3>
                <p>Nutritious meals, happy hearts — healthy habits start here.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">🛡️</div>
                <h3>Safety First</h3>
                <p>Children's safety is our top priority, always and forever.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">🏡</div>
                <h3>Home-Like Setting</h3>
                <p>Step into our warm environment, where every child feels at home.</p>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="section" id="why-us">
    <div class="container">
        <div class="why-inner">
            <div class="why-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/why-us.jpg" alt="Child learning in classroom">
            </div>
            <div class="why-content">
                <span class="why-tag">Why Choose Us</span>
                <h2>A Place Where Children Truly <span class="text-primary">Belong</span></h2>
                <div class="why-features">
                    <div class="why-feature">
                        <div class="why-feature-icon">🎮</div>
                        <div>
                            <h4>Play-Based Curriculum</h4>
                            <p>Children learn best through play. Our curriculum is designed to make every activity meaningful and fun.</p>
                        </div>
                    </div>
                    <div class="why-feature">
                        <div class="why-feature-icon">🌳</div>
                        <div>
                            <h4>Outdoor Exploration</h4>
                            <p>Regular outdoor time supports physical development, imagination, and a love for the natural world.</p>
                        </div>
                    </div>
                    <div class="why-feature">
                        <div class="why-feature-icon">📚</div>
                        <div>
                            <h4>Reading & Literacy Focus</h4>
                            <p>A dedicated reading area and daily storytime instill a lifelong love of books and language.</p>
                        </div>
                    </div>
                    <div class="why-feature">
                        <div class="why-feature-icon">🤝</div>
                        <div>
                            <h4>Family Partnership</h4>
                            <p>We work closely with families to ensure every child's individual needs are met with care and consistency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials section">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Hear From Our <span style="color:#f5a623;">Parents</span></h2>
            <p class="section-subtitle" style="color:rgba(255,255,255,0.85);">Families trust us with what matters most — their children.</p>
        </div>
        <div class="testimonials-grid">

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>"My children attended Ms. Darlene's childcare. We interviewed many providers but she was the best fit. Caring, dependable, energetic, compassionate — all the qualities you would want from someone entrusted to nurture your children. I highly recommend her childcare."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">K</div>
                    <div class="author-info">
                        <strong>Kerri R.</strong>
                        <span>Parent</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>"Finding a good daycare provider can be a real challenge… Of all the daycare providers we interviewed, it was the children at Ms. Darlene's that seemed to be the happiest, the brightest, the friendliest, and most behaved. It felt like family to us. Harmony. Good Spirit. Happiness."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">B</div>
                    <div class="author-info">
                        <strong>Brian &amp; Tara Joyce</strong>
                        <span>Parents</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>"After a not so positive experience elsewhere I found Ms. Darlene's. Her warmth and caring nature was apparent from the moment we met. Her personality, and that of her staff, really makes it feel like a family. I am grateful for the peace of mind knowing that my son is in a loving, safe, and nurturing environment."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">J</div>
                    <div class="author-info">
                        <strong>Joshua &amp; Jennifer Cort</strong>
                        <span>Parents</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>"We love Miss Darlene and her staff! As a teacher myself, it was really important for me to find an environment that was nurturing, fun, and educational. I am amazed at what my three year old daughter has learned! Best of all, she loves school!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar">S</div>
                    <div class="author-info">
                        <strong>Stacey Campbell</strong>
                        <span>Parent &amp; Teacher</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>"I know my 2-year-old is getting excellent care because she talks about Ms. Darlene and the other teachers all of the time and is always excited to go back and see them again."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">C</div>
                    <div class="author-info">
                        <strong>Crystal Chapman</strong>
                        <span>Parent</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>"You were an integral part of Olivia's life and I can't wait until you can positively affect more children the way you did mine!"</p>
                <div class="testimonial-author">
                    <div class="author-avatar">J</div>
                    <div class="author-info">
                        <strong>Jennifer Loftus LaBranche</strong>
                        <span>Parent</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- GALLERY -->
<section class="section" id="gallery">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">A Day in Our <span class="text-primary">Life</span></h2>
            <p class="section-subtitle">Glimpses of the joy, creativity, and learning that happen every day.</p>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item tall">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gallery-1.jpg" alt="Kids painting">
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gallery-2.jpg" alt="Building activities">
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gallery-3.jpg" alt="Classroom learning">
            </div>
            <div class="gallery-item wide">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gallery-4.jpg" alt="Group activities">
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gallery-5.jpg" alt="Story time">
            </div>
        </div>
    </div>
</section>

<!-- CONTACT FORM -->
<section class="contact-section section" id="contact">
    <div class="container">
        <div class="contact-inner">
            <div class="contact-info">
                <h2>Get in <span class="text-primary">Touch</span></h2>
                <p>Have a question or want to schedule a tour? Fill out the form and we'll get back to you as soon as possible.</p>
                <div class="contact-details">
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
            </div>

            <div class="contact-form-wrap">
                <h3>Send Us a Message</h3>
                <?php echo do_shortcode('[lda_form]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
