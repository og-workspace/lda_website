<?php get_header(); ?>

<!-- LOADING SCREEN (first visit only) -->
<div id="loading-screen" style="display:none;">
    <canvas id="fw-canvas"></canvas>
    <div class="ls-shapes">
        <div class="ls-shape s1">⭐</div><div class="ls-shape s2">🎈</div>
        <div class="ls-shape s3">🌟</div><div class="ls-shape s4">✨</div>
        <div class="ls-shape s5">🎨</div><div class="ls-shape s6">🌈</div>
        <div class="ls-blob lb1"></div><div class="ls-blob lb2"></div>
        <div class="ls-blob lb3"></div><div class="ls-blob lb4"></div>
    </div>
    <div class="ls-content">
        <div class="ls-glow"></div>
        <div class="ls-bulb">💡</div>
        <h2 class="ls-title">Welcome to Ms. Darlene's!</h2>
        <p class="ls-sub">Early Learning Center &amp; Childcare</p>
    </div>
</div>

<!-- HERO -->
<section class="hero hero-fun">
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
                <a href="<?php echo esc_url(home_url('/programs/#infant')); ?>" class="program-link">Learn More →</a>
            </div>

            <div class="program-card">
                <div class="program-icon">🧸</div>
                <h3>Pre-Toddlers</h3>
                <span class="program-ages">12 months – 2 years</span>
                <p>Our pre-toddler program supports growing explorers as they begin developing independence, language skills, and social awareness in a safe and loving setting.</p>
                <a href="<?php echo esc_url(home_url('/programs/#pretoddler')); ?>" class="program-link">Learn More →</a>
            </div>

            <div class="program-card">
                <div class="program-icon">🎨</div>
                <h3>Toddlers</h3>
                <span class="program-ages">2 – 3 years</span>
                <p>Our toddler program offers a play-based environment supporting social-emotional growth, fine and gross motor development, and joyful group exploration.</p>
                <a href="<?php echo esc_url(home_url('/programs/#toddlers')); ?>" class="program-link">Learn More →</a>
            </div>

            <div class="program-card">
                <div class="program-icon">✏️</div>
                <h3>Pre-K</h3>
                <span class="program-ages">3 – 4 years</span>
                <p>Our Pre-K program builds the social skills, problem-solving abilities, and early academic foundations children need for a successful transition to school.</p>
                <a href="<?php echo esc_url(home_url('/programs/#prek')); ?>" class="program-link">Learn More →</a>
            </div>

            <div class="program-card">
                <div class="program-icon">🏫</div>
                <h3>Kindergarten</h3>
                <span class="program-ages">4 – 5 years</span>
                <p>Our Kindergarten program challenges children to grow academically and socially, focusing on literacy, numeracy, critical thinking, and building a love for learning.</p>
                <a href="<?php echo esc_url(home_url('/programs/#kinder')); ?>" class="program-link">Learn More →</a>
            </div>

        </div>
    </div>
</section>

<!-- ABOUT -->
<section class="section" id="about">
    <div class="container">
        <div class="about-inner">
            <div class="about-images">
                <img class="about-img-main" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about-main.jpg" alt="Children learning together" loading="lazy" decoding="async">
                <img class="about-img-secondary" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about-secondary.jpg" alt="Teacher with students" loading="lazy" decoding="async">
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
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/why-us.jpg" alt="Child learning in classroom" loading="lazy" decoding="async">
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

<!-- GALLERY CAROUSEL -->
<section class="section" id="gallery">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">A Day in Our <span class="text-primary">Life</span></h2>
            <p class="section-subtitle">Glimpses of the joy, creativity, and learning that happen every day.</p>
        </div>

        <div class="carousel-wrap">
            <button class="carousel-btn prev" aria-label="Previous">&#8592;</button>

            <div class="carousel-track-wrap">
                <div class="carousel-track">
                    <div class="carousel-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gallery-1.jpg" alt="Kids painting" loading="lazy" decoding="async">
                    </div>
                    <div class="carousel-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gallery-2.jpg" alt="Daycare activities" loading="lazy" decoding="async">
                    </div>
                    <div class="carousel-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gallery-3.jpg" alt="Classroom learning" loading="lazy" decoding="async">
                    </div>
                    <div class="carousel-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gallery-4.jpg" alt="Group activities" loading="lazy" decoding="async">
                    </div>
                    <div class="carousel-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gallery-5.jpg" alt="Story time" loading="lazy" decoding="async">
                    </div>
                    <div class="carousel-slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/gallery-6.jpg" alt="Building blocks" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>

            <button class="carousel-btn next" aria-label="Next">&#8594;</button>
        </div>

        <!-- Dots (generated by JS) -->
        <div class="carousel-dots"></div>
    </div>
</section>

<style>
.carousel-wrap {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-top: 50px;
}

.carousel-track-wrap {
    overflow: hidden;
    border-radius: 20px;
    flex: 1;
}

.carousel-track {
    display: flex;
    transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.carousel-slide {
    min-width: calc(100% / 3);
    padding: 0 8px;
    box-sizing: border-box;
}

.carousel-slide img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    border-radius: 16px;
    display: block;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.carousel-slide img:hover { transform: scale(1.03); }

.carousel-btn {
    background: var(--primary);
    color: #fff;
    border: none;
    width: 46px;
    height: 46px;
    border-radius: 50%;
    font-size: 18px;
    cursor: pointer;
    flex-shrink: 0;
    transition: all 0.3s;
    box-shadow: 0 4px 14px rgba(245,166,35,0.4);
}

.carousel-btn:hover {
    background: var(--primary-dark);
    transform: scale(1.08);
}

.carousel-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 24px;
}

.dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #ddd;
    cursor: pointer;
    transition: all 0.3s;
}

.dot.active {
    background: var(--primary);
    transform: scale(1.3);
}

@media (max-width: 768px) {
    .carousel-slide { min-width: 100%; }
    .carousel-btn { width: 38px; height: 38px; font-size: 15px; }
}
</style>

<script>
(function() {
    const track     = document.querySelector('.carousel-track');
    const slides    = document.querySelectorAll('.carousel-slide');
    const dotsWrap  = document.querySelector('.carousel-dots');
    const total     = slides.length;
    let current     = 0;
    let perView     = window.innerWidth <= 768 ? 1 : 3;
    let autoplay;

    function buildDots() {
        dotsWrap.innerHTML = '';
        const count = total - perView + 1;
        for (let i = 0; i < count; i++) {
            const d = document.createElement('span');
            d.className = 'dot' + (i === current ? ' active' : '');
            d.addEventListener('click', () => { goTo(i); resetAutoplay(); });
            dotsWrap.appendChild(d);
        }
    }

    function updateDots() {
        document.querySelectorAll('.dot').forEach((d, i) => d.classList.toggle('active', i === current));
    }

    function goTo(index) {
        const max = total - perView;
        current = Math.max(0, Math.min(index, max));
        track.style.transform = 'translateX(-' + (current * (100 / perView)) + '%)';
        updateDots();
    }

    function startAutoplay() {
        autoplay = setInterval(() => {
            goTo(current + 1 > total - perView ? 0 : current + 1);
        }, 3500);
    }

    function resetAutoplay() { clearInterval(autoplay); startAutoplay(); }

    document.querySelector('.carousel-btn.prev').addEventListener('click', () => { goTo(current - 1); resetAutoplay(); });
    document.querySelector('.carousel-btn.next').addEventListener('click', () => { goTo(current + 1); resetAutoplay(); });

    window.addEventListener('resize', () => {
        perView = window.innerWidth <= 768 ? 1 : 3;
        buildDots();
        goTo(0);
    });

    buildDots();
    goTo(0);
    startAutoplay();
})();
</script>

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

<style>
/* =============================================
   LOADING SCREEN
   ============================================= */
#loading-screen {
    position: fixed;
    inset: 0;
    z-index: 99999;
    background: linear-gradient(135deg, #1a1a4e 0%, #2d1b69 40%, #11998e 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.8s ease, transform 0.8s ease;
    overflow: hidden;
}

#loading-screen.hide {
    opacity: 0;
    transform: scale(1.04);
    pointer-events: none;
    transition: opacity 2.8s ease, transform 2.8s ease;
}

#fw-canvas {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

/* Floating shapes */
.ls-shapes { position: absolute; inset: 0; pointer-events: none; }

.ls-shape {
    position: absolute;
    font-size: 26px;
    opacity: 0.2;
    animation: lsFloat linear infinite;
}

.s1 { left:5%;  top:15%; animation-duration:12s; }
.s2 { left:18%; top:72%; animation-duration:16s; animation-delay:2s; }
.s3 { left:30%; top:25%; animation-duration:10s; animation-delay:1s; }
.s4 { left:55%; top:78%; animation-duration:14s; animation-delay:3s; }
.s5 { left:70%; top:12%; animation-duration:18s; animation-delay:0.5s; }
.s6 { left:85%; top:55%; animation-duration:13s; animation-delay:1.5s; }

@keyframes lsFloat {
    0%,100% { transform: translateY(0) rotate(0deg);   opacity:.2; }
    50%      { transform: translateY(-35px) rotate(15deg); opacity:.35; }
}

.ls-blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(70px);
    opacity: 0.2;
    animation: blobDrift ease-in-out infinite alternate;
}
.lb1 { width:350px;height:350px;background:#f5a623;top:-80px; left:-80px;  animation-duration:7s; }
.lb2 { width:300px;height:300px;background:#4ab5c4;bottom:-60px;right:-60px;animation-duration:9s;animation-delay:1s; }
.lb3 { width:250px;height:250px;background:#e88ab4;top:30%; left:40%;     animation-duration:8s;animation-delay:2s; }
.lb4 { width:200px;height:200px;background:#7bc67e;bottom:10%;left:20%;    animation-duration:6s;animation-delay:3s; }

@keyframes blobDrift {
    from { transform: scale(1) translate(0,0); }
    to   { transform: scale(1.2) translate(15px,-15px); }
}

/* Content */
.ls-content {
    position: relative;
    z-index: 2;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.ls-glow {
    position: absolute;
    width: 260px;
    height: 260px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255,220,50,0.45) 0%, transparent 70%);
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    animation: glowPulse 2s ease-in-out infinite alternate;
}

@keyframes glowPulse {
    from { transform: translate(-50%,-50%) scale(0.9); opacity:0.6; }
    to   { transform: translate(-50%,-50%) scale(1.2); opacity:1; }
}

.ls-bulb {
    font-size: 110px;
    filter: drop-shadow(0 0 40px rgba(255,220,50,0.95));
    animation: bulbPop 0.7s cubic-bezier(0.34,1.56,0.64,1) 0.2s both;
    position: relative;
    z-index: 1;
}

.ls-title {
    font-family: var(--heading-font);
    font-size: 2.2rem;
    font-weight: 900;
    color: #fff;
    text-shadow: 0 3px 24px rgba(0,0,0,0.4);
    margin-top: 18px;
    position: relative;
    z-index: 1;
    animation: slideUp 0.6s ease 0.7s both;
}

.ls-sub {
    font-size: 1rem;
    color: rgba(255,255,255,0.78);
    margin-top: 8px;
    font-family: var(--heading-font);
    letter-spacing: 1px;
    animation: slideUp 0.6s ease 0.95s both;
    position: relative;
    z-index: 1;
}

@keyframes bulbPop  { from { transform: scale(0) rotate(-20deg); opacity:0; } to { transform: scale(1) rotate(0); opacity:1; } }
@keyframes slideUp  { from { transform: translateY(16px); opacity:0; } to { transform: translateY(0); opacity:1; } }

/* =============================================
   FUN HERO BACKGROUND
   ============================================= */
.hero-fun {
    background: linear-gradient(135deg, #fff8e7 0%, #fde9f4 40%, #e0f7fa 100%) !important;
    position: relative;
    overflow: hidden;
}

/* Floating background shapes behind hero content */
.hero-fun::before { display: none; }

.hero-bubbles {
    position: absolute;
    inset: 0;
    pointer-events: none;
    overflow: hidden;
}

.bubble {
    position: absolute;
    border-radius: 50%;
    opacity: 0.18;
    animation: bubbleFloat ease-in-out infinite alternate;
}

.b1  { width:120px; height:120px; background:#f5a623; top:10%;  left:5%;   animation-duration:6s; }
.b2  { width:80px;  height:80px;  background:#4ab5c4; top:60%;  left:2%;   animation-duration:8s; animation-delay:1s; }
.b3  { width:60px;  height:60px;  background:#7bc67e; top:30%;  right:8%;  animation-duration:7s; animation-delay:2s; }
.b4  { width:100px; height:100px; background:#e88ab4; bottom:5%;right:15%; animation-duration:9s; animation-delay:0.5s; }
.b5  { width:50px;  height:50px;  background:#9b7fe8; top:70%;  left:45%;  animation-duration:5s; animation-delay:3s; }
.b6  { width:70px;  height:70px;  background:#f5a623; top:5%;   right:35%; animation-duration:7s; animation-delay:1.5s; }

@keyframes bubbleFloat {
    from { transform: translateY(0)   scale(1); }
    to   { transform: translateY(-25px) scale(1.08); }
}

/* Confetti dots scattered in hero */
.hero-fun .confetti-dot {
    position: absolute;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    animation: confettiSpin linear infinite;
    opacity: 0.5;
}

@keyframes confettiSpin {
    0%   { transform: translateY(0)   rotate(0deg); }
    100% { transform: translateY(-60px) rotate(360deg); opacity: 0; }
}

</style>

<script>
(function() {
    const screen     = document.getElementById('loading-screen');
    const firstVisit = !sessionStorage.getItem('lda_visited');

    // Only show on first visit per session
    if (!firstVisit) {
        screen.remove();
        initLogoAnim(400);
        initHeroBubbles();
        return;
    }
    sessionStorage.setItem('lda_visited', '1');
    screen.style.display = '';

    // --- Fireworks on loading screen ---
    const canvas = document.getElementById('fw-canvas');
    const ctx    = canvas.getContext('2d');
    let particles = [];
    let animId;

    function resize() { canvas.width = window.innerWidth; canvas.height = window.innerHeight; }
    resize();
    window.addEventListener('resize', resize);

    function randomColor() {
        return ['#f5a623','#4ab5c4','#7bc67e','#e88ab4','#9b7fe8','#ffd700','#ff6b6b'][Math.floor(Math.random()*7)];
    }

    function burst(x, y) {
        const count = 60 + Math.floor(Math.random() * 25);
        const color = randomColor();
        for (let i = 0; i < count; i++) {
            const angle = (Math.PI * 2 / count) * i;
            const speed = 2.5 + Math.random() * 5;
            particles.push({
                x, y,
                vx: Math.cos(angle) * speed,
                vy: Math.sin(angle) * speed,
                alpha: 1, color,
                radius: 2 + Math.random() * 3,
                gravity: 0.07 + Math.random() * 0.05,
                trail: []
            });
        }
    }

    function launch() {
        burst(canvas.width * (0.2 + Math.random() * 0.6), canvas.height * (0.1 + Math.random() * 0.5));
    }

    function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles = particles.filter(p => p.alpha > 0.02);
        particles.forEach(p => {
            p.trail.push({x: p.x, y: p.y});
            if (p.trail.length > 5) p.trail.shift();
            p.vy += p.gravity; p.x += p.vx; p.y += p.vy; p.alpha -= 0.015;
            p.trail.forEach((t, i) => {
                ctx.beginPath();
                ctx.arc(t.x, t.y, p.radius * (i / p.trail.length) * 0.5, 0, Math.PI*2);
                ctx.fillStyle = p.color;
                ctx.globalAlpha = p.alpha * (i / p.trail.length) * 0.35;
                ctx.fill();
            });
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.radius, 0, Math.PI*2);
            ctx.fillStyle = p.color;
            ctx.globalAlpha = p.alpha;
            ctx.fill();
        });
        ctx.globalAlpha = 1;
        animId = requestAnimationFrame(draw);
    }

    [400, 800, 1200, 1600, 2000].forEach(d => setTimeout(launch, d));
    draw();

    // Dismiss loading screen after 2.8s
    setTimeout(() => {
        cancelAnimationFrame(animId);
        screen.classList.add('hide');
        setTimeout(() => screen.remove(), 3000);
    }, 2800);

    // Logo anim fires after loading screen clears on first visit
    setTimeout(() => initLogoAnim(firstVisit ? 3400 : 400), 0);
    initHeroBubbles();

    function initLogoAnim(delay) {
        const line = document.querySelector('.logo-line1');
        if (!line) return;
        const text = line.textContent.trim();
        setTimeout(() => {
            line.innerHTML = text.split('').map((ch, i) =>
                `<span class="lc" style="animation-delay:${i * 80}ms">${ch === ' ' ? '&nbsp;' : ch}</span>`
            ).join('');
            // Flatten back to static dim glow after all letters finish
            setTimeout(() => { line.innerHTML = text; }, (text.length * 80) + 700);
        }, delay);
    }

    function initHeroBubbles() {
        const hero = document.querySelector('.hero-fun');
        if (!hero) return;
        const wrap = document.createElement('div');
        wrap.className = 'hero-bubbles';
        ['b1','b2','b3','b4','b5','b6'].forEach(cls => {
            const b = document.createElement('div');
            b.className = 'bubble ' + cls;
            wrap.appendChild(b);
        });
        const colors = ['#f5a623','#4ab5c4','#e88ab4','#7bc67e','#9b7fe8'];
        for (let i = 0; i < 12; i++) {
            const dot = document.createElement('div');
            dot.className = 'confetti-dot';
            dot.style.cssText = `left:${Math.random()*90+5}%;top:${Math.random()*80+5}%;background:${colors[Math.floor(Math.random()*colors.length)]};animation-duration:${3+Math.random()*4}s;animation-delay:${Math.random()*3}s;`;
            wrap.appendChild(dot);
        }
        hero.prepend(wrap);
    }
})();
</script>

<?php get_footer(); ?>
