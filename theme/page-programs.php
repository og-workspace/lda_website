<?php
/*
 * Template Name: Programs Page
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
        <h1 style="font-size:2.8rem;color:var(--dark);margin-bottom:12px;font-family:var(--heading-font);">Our <span style="color:var(--primary);">Programs</span></h1>
        <p style="color:var(--text);font-size:1.05rem;max-width:560px;margin:0 auto 20px;">Five age-tailored programs designed to nurture every child from infancy through kindergarten.</p>
        <span style="display:inline-block;background:rgba(245,166,35,0.15);color:#e0911a;padding:6px 20px;border-radius:50px;font-weight:700;font-size:14px;">NOW ENROLLING</span>
    </div>
</section>

<!-- PROGRAM TABS -->
<section class="section">
    <div class="container">

        <!-- Tab Nav -->
        <div class="program-tabs">
            <button class="tab-btn active" data-tab="infant">👶 Infants</button>
            <button class="tab-btn" data-tab="pretoddler">🧸 Pre-Toddlers</button>
            <button class="tab-btn" data-tab="toddlers">🎨 Toddlers</button>
            <button class="tab-btn" data-tab="prek">✏️ Pre-Kindergarten</button>
            <button class="tab-btn" data-tab="kinder">🏫 Private Kindergarten</button>
        </div>

        <!-- Tab: Infants -->
        <div class="tab-content active" id="tab-infant">
            <div class="program-detail-grid">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/program-infants.jpg" alt="Infant program" class="program-detail-img">
                <div class="program-detail-content">
                    <span class="program-age-badge">6 weeks – 1 year</span>
                    <h2>Infant Program</h2>
                    <p>Our infant program is customized to each family's individual needs. Our staff collaborates closely with families to create curricula that match their specific needs and lifestyle, ensuring a seamless transition from home to childcare.</p>
                    <p>We provide daily reports summarizing when children eat, sleep, and play, along with text message updates as needed for quicker parent notifications.</p>

                    <div class="program-features-grid">
                        <div class="program-feature-block">
                            <h4>🎵 Daily Activities</h4>
                            <ul>
                                <li>Singing & story time</li>
                                <li>Introduction to colors</li>
                                <li>Puzzles & self-exploration</li>
                            </ul>
                        </div>
                        <div class="program-feature-block">
                            <h4>🌱 Developmental Focus</h4>
                            <ul>
                                <li>Small & large muscle development</li>
                                <li>Caregiver & peer bonding</li>
                                <li>Early language & sound formation</li>
                                <li>Introduction to books</li>
                            </ul>
                        </div>
                    </div>

                    <div class="ratio-badge">
                        <strong>Staff Ratio:</strong> 1 teacher per 4 children
                    </div>

                    <a href="https://calendly.com/oghafour5/ms-darlene-s-early-learning-center-tours" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="margin-top:24px;">Book a Tour</a>
                </div>
            </div>
        </div>

        <!-- Tab: Pre-Toddlers -->
        <div class="tab-content" id="tab-pretoddler">
            <div class="program-detail-grid reverse">
                <div class="program-detail-content">
                    <span class="program-age-badge" style="background:rgba(75,181,196,0.12);color:#389aa8;">12 – 24 months</span>
                    <h2>Pre-Toddler Program</h2>
                    <p>Each day begins with singing songs along with finger and hand motions to warm up and prepare for gross motor activities. Our pre-toddler program is designed to support growing explorers as they begin developing independence and social awareness.</p>

                    <div class="program-features-grid">
                        <div class="program-feature-block">
                            <h4>🎨 Activities</h4>
                            <ul>
                                <li>Arts & crafts — gluing, coloring, painting, finger painting</li>
                                <li>Introduction to colors, numbers, letters & shapes</li>
                                <li>Texture exploration</li>
                                <li>Indoor & outdoor climbing toys</li>
                            </ul>
                        </div>
                        <div class="program-feature-block">
                            <h4>🤝 Social Skills</h4>
                            <ul>
                                <li>Learning peers' names</li>
                                <li>Practicing sharing & interaction</li>
                                <li>Communication through play</li>
                            </ul>
                        </div>
                    </div>

                    <div class="ratio-badge">
                        <strong>Staff Ratio:</strong> 1 teacher per 5 children
                    </div>

                    <a href="https://calendly.com/oghafour5/ms-darlene-s-early-learning-center-tours" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="margin-top:24px;">Book a Tour</a>
                </div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/program-pretoddler.jpg" alt="Pre-Toddler program" class="program-detail-img">
            </div>
        </div>

        <!-- Tab: Toddlers -->
        <div class="tab-content" id="tab-toddlers">
            <div class="program-detail-grid">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/program-toddlers.jpg" alt="Toddler program" class="program-detail-img">
                <div class="program-detail-content">
                    <span class="program-age-badge" style="background:rgba(123,198,126,0.15);color:#4a8c4c;">2 – 3 years</span>
                    <h2>Toddler Program</h2>
                    <p>Autonomy is encouraged as children are beginning to think independently. Our toddler program offers a rich environment that supports exploration, communication, and growing confidence through new activities every single day.</p>

                    <div class="program-features-grid">
                        <div class="program-feature-block">
                            <h4>📚 Curriculum</h4>
                            <ul>
                                <li>Letters, colors, numbers & name spelling</li>
                                <li>Fine motor skills: cutting, coloring, painting</li>
                                <li>Communication development</li>
                            </ul>
                        </div>
                        <div class="program-feature-block">
                            <h4>🎭 Daily Activities</h4>
                            <ul>
                                <li>Dramatic play</li>
                                <li>Sensory tables</li>
                                <li>Outdoor play</li>
                                <li>Musical instruments</li>
                                <li>Coloring & painting</li>
                            </ul>
                        </div>
                    </div>

                    <div class="ratio-badge">
                        <strong>Staff Ratio:</strong> 1 teacher per 6 children
                    </div>

                    <a href="https://calendly.com/oghafour5/ms-darlene-s-early-learning-center-tours" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="margin-top:24px;">Book a Tour</a>
                </div>
            </div>
        </div>

        <!-- Tab: Pre-K -->
        <div class="tab-content" id="tab-prek">
            <div class="program-detail-grid reverse">
                <div class="program-detail-content">
                    <span class="program-age-badge" style="background:rgba(232,138,180,0.15);color:#b05080;">3 – 4 years</span>
                    <h2>Pre-Kindergarten Program</h2>
                    <p>Our Pre-K program builds upon the social, fine motor, and gross motor skills developed in earlier programs. Children are challenged with more structured learning while continuing to grow through play and peer interaction.</p>

                    <div class="program-features-grid">
                        <div class="program-feature-block">
                            <h4>📖 Literacy</h4>
                            <ul>
                                <li>Uppercase vs. lowercase letters</li>
                                <li>Letter tracing & phonics</li>
                                <li>Story time comprehension & predictions</li>
                            </ul>
                        </div>
                        <div class="program-feature-block">
                            <h4>🔢 Math & Science</h4>
                            <ul>
                                <li>Basic addition & subtraction</li>
                                <li>Animals & their habitats</li>
                                <li>Character development</li>
                            </ul>
                        </div>
                    </div>

                    <div class="ratio-badge">
                        <strong>Staff Ratio:</strong> 1 teacher per 8 children
                    </div>

                    <a href="https://calendly.com/oghafour5/ms-darlene-s-early-learning-center-tours" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="margin-top:24px;">Book a Tour</a>
                </div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/program-prek.jpg" alt="Pre-K program" class="program-detail-img">
            </div>
        </div>

        <!-- Tab: Private Kindergarten -->
        <div class="tab-content" id="tab-kinder">
            <div class="program-detail-grid">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/program-kinder.jpg" alt="Kindergarten program" class="program-detail-img">
                <div class="program-detail-content">
                    <span class="program-age-badge" style="background:rgba(155,127,232,0.15);color:#6b4cc0;">4 – 5 years</span>
                    <h2>Private Kindergarten</h2>
                    <p>Our Private Kindergarten program is focused on preparing children for first grade. Children progress from tracing letters to writing independently, and are encouraged to sound out letters and begin recognizing words.</p>

                    <div class="program-features-grid">
                        <div class="program-feature-block">
                            <h4>📖 Literacy & Math</h4>
                            <ul>
                                <li>Independent letter writing & basic reading</li>
                                <li>Addition & subtraction with larger numbers</li>
                                <li>Planets, plants & animals in depth</li>
                            </ul>
                        </div>
                        <div class="program-feature-block">
                            <h4>💛 Social & Wellness</h4>
                            <ul>
                                <li>Health, safety & nutrition</li>
                                <li>Articulating feelings & problem-solving</li>
                                <li>Collaboration through free & structured play</li>
                            </ul>
                        </div>
                    </div>

                    <div class="ratio-badge">
                        <strong>Staff Ratio:</strong> 1 teacher per 12 children
                    </div>

                    <a href="https://calendly.com/oghafour5/ms-darlene-s-early-learning-center-tours" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="margin-top:24px;">Book a Tour</a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- RATIOS SECTION -->
<section class="section" style="background:var(--light);padding-top:0;">
    <div class="container">
        <div class="text-center" style="margin-bottom:40px;">
            <h2 class="section-title">Staff <span class="text-primary">Ratios</span></h2>
            <p class="section-subtitle" style="margin-bottom:0;">We maintain low staff-to-child ratios to ensure every child receives attentive, personalized care.</p>
        </div>
        <div class="ratios-table-wrap">
            <table class="ratios-table">
                <thead>
                    <tr>
                        <th>Age Group</th>
                        <th>Staff : Children Ratio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>6 weeks – 12 months</td><td>1 : 4</td></tr>
                    <tr><td>13 – 24 months</td><td>1 : 5</td></tr>
                    <tr><td>25 – 35 months</td><td>1 : 6</td></tr>
                    <tr><td>36 – 47 months</td><td>1 : 8</td></tr>
                    <tr><td>48 – 59 months</td><td>1 : 12</td></tr>
                    <tr><td>60 months and over</td><td>1 : 15</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<style>
/* ---- Program Tabs ---- */
.program-tabs {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 40px;
    border-bottom: 2px solid #eee;
    padding-bottom: 0;
}

.tab-btn {
    padding: 12px 22px;
    border: none;
    background: none;
    font-family: var(--heading-font);
    font-size: 14px;
    font-weight: 700;
    color: var(--text);
    cursor: pointer;
    border-bottom: 3px solid transparent;
    margin-bottom: -2px;
    transition: all 0.2s;
    border-radius: 6px 6px 0 0;
}

.tab-btn:hover { color: var(--primary); }

.tab-btn.active {
    color: var(--primary);
    border-bottom-color: var(--primary);
    background: rgba(245,166,35,0.07);
}

.tab-content { display: none; }
.tab-content.active { display: block; }

/* ---- Program Detail Layout ---- */
.program-detail-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.program-detail-grid.reverse { direction: rtl; }
.program-detail-grid.reverse > * { direction: ltr; }

.program-detail-img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
}

.program-age-badge {
    display: inline-block;
    background: rgba(245,166,35,0.12);
    color: #e0911a;
    padding: 5px 16px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 14px;
}

.program-detail-content h2 {
    font-size: 2rem;
    margin-bottom: 16px;
}

.program-detail-content p {
    color: var(--text);
    margin-bottom: 14px;
}

.program-features-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin: 24px 0;
}

.program-feature-block {
    background: var(--light);
    border-radius: 14px;
    padding: 20px;
}

.program-feature-block h4 {
    font-size: 14px;
    margin-bottom: 12px;
    color: var(--dark);
}

.program-feature-block ul {
    list-style: disc;
    padding-left: 18px;
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.program-feature-block li {
    font-size: 13px;
    color: var(--text);
}

.ratio-badge {
    display: inline-block;
    background: rgba(75,181,196,0.12);
    color: var(--secondary-dark);
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin-top: 8px;
}

/* ---- Ratios Table ---- */
.ratios-table-wrap {
    max-width: 600px;
    margin: 0 auto;
}

.ratios-table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.07);
}

.ratios-table thead {
    background: var(--primary);
    color: #fff;
}

.ratios-table th {
    padding: 16px 24px;
    font-family: var(--heading-font);
    font-size: 14px;
    text-align: left;
}

.ratios-table td {
    padding: 14px 24px;
    font-size: 14px;
    border-bottom: 1px solid #f0ede0;
}

.ratios-table tbody tr:nth-child(even) { background: rgba(245,166,35,0.06); }
.ratios-table tbody tr:last-child td { border-bottom: none; }

@media (max-width: 768px) {
    .program-detail-grid { grid-template-columns: 1fr; }
    .program-detail-grid.reverse { direction: ltr; }
    .program-detail-img { height: 260px; }
    .program-features-grid { grid-template-columns: 1fr; }
    .program-tabs { gap: 6px; }
    .tab-btn { font-size: 12px; padding: 10px 14px; }
}
</style>

<script>
function activateTab(tabId) {
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
    const btn = document.querySelector('.tab-btn[data-tab="' + tabId + '"]');
    const content = document.getElementById('tab-' + tabId);
    if (btn && content) {
        btn.classList.add('active');
        content.classList.add('active');
    }
}

document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => activateTab(btn.dataset.tab));
});

// Open correct tab from URL hash (e.g. /programs/#prek)
const hash = window.location.hash.replace('#', '');
const validTabs = ['infant', 'pretoddler', 'toddlers', 'prek', 'kinder'];
if (hash && validTabs.includes(hash)) {
    activateTab(hash);
}
</script>

<?php get_footer(); ?>
