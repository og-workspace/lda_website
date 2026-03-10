<?php
/*
 * Template Name: Photo Gallery Page
 */
get_header(); ?>

<!-- GALLERY PAGE -->
<div class="gallery-page">

    <!-- Animated background shapes -->
    <div class="bg-shapes">
        <div class="shape shape-1">⭐</div>
        <div class="shape shape-2">🎈</div>
        <div class="shape shape-3">🌟</div>
        <div class="shape shape-4">✨</div>
        <div class="shape shape-5">🎨</div>
        <div class="shape shape-6">🌈</div>
        <div class="shape shape-7">⭐</div>
        <div class="shape shape-8">🎈</div>
        <div class="shape shape-9">✨</div>
        <div class="shape shape-10">🌟</div>
        <!-- Geometric blobs -->
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
        <div class="blob blob-4"></div>
    </div>

    <!-- Hero -->
    <div class="gallery-hero">
        <h1>Photo <span>Gallery</span></h1>
        <p>A peek into the fun, learning, and community that makes Ms. Darlene's so special.</p>
    </div>

    <!-- Cards -->
    <div class="container">
        <div class="pg-grid">

            <div class="pg-item float-1" data-index="0">
                <div class="pg-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pg-police.jpg" alt="Londonderry Police Department Visit">
                    <div class="pg-overlay"><span class="pg-zoom">🔍</span></div>
                </div>
                <div class="pg-caption">
                    <span class="pg-tag">Community</span>
                    <p>The Londonderry Police Department was kind enough to come out to our school during our summer activities!</p>
                </div>
            </div>

            <div class="pg-item float-2" data-index="1">
                <div class="pg-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pg-soccer.jpg" alt="Soccer Activities">
                    <div class="pg-overlay"><span class="pg-zoom">🔍</span></div>
                </div>
                <div class="pg-caption">
                    <span class="pg-tag">Activities</span>
                    <p>We have many activities throughout the year, like soccer for all ages!</p>
                </div>
            </div>

            <div class="pg-item float-3" data-index="2">
                <div class="pg-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pg-fire.jpg" alt="Fire Department Visit">
                    <div class="pg-overlay"><span class="pg-zoom">🔍</span></div>
                </div>
                <div class="pg-caption">
                    <span class="pg-tag">Community</span>
                    <p>Even the Londonderry Fire Department came out to enjoy the summer activities!</p>
                </div>
            </div>

            <div class="pg-item float-1" data-index="3">
                <div class="pg-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pg-karate.jpg" alt="Karate with Granite State American Kenpo">
                    <div class="pg-overlay"><span class="pg-zoom">🔍</span></div>
                </div>
                <div class="pg-caption">
                    <span class="pg-tag">Activities</span>
                    <p>We love Granite State American Kenpo! They were amazing and the kids had SO much fun!</p>
                </div>
            </div>

            <div class="pg-item float-2" data-index="4">
                <div class="pg-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pg-homedepot.jpg" alt="Home Depot Building Activity">
                    <div class="pg-overlay"><span class="pg-zoom">🔍</span></div>
                </div>
                <div class="pg-caption">
                    <span class="pg-tag">Activities</span>
                    <p>The kids LOVE when Home Depot comes to the school and builds fun toys with them!</p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox">
    <button class="lb-close" aria-label="Close">&times;</button>
    <button class="lb-prev" aria-label="Previous">&#8592;</button>
    <button class="lb-next" aria-label="Next">&#8594;</button>
    <div class="lb-content">
        <img src="" alt="" id="lb-img">
        <p id="lb-caption"></p>
    </div>
</div>


<script>
(function() {
    // Staggered entrance animation
    const items = document.querySelectorAll('.pg-item');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const idx = parseInt(entry.target.getAttribute('data-index'), 10) || 0;
                setTimeout(() => entry.target.classList.add('visible'), idx * 120);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    items.forEach(item => observer.observe(item));

    // Lightbox
    const lightbox = document.getElementById('lightbox');
    const lbImg    = document.getElementById('lb-img');
    const lbCap    = document.getElementById('lb-caption');
    let current    = 0;

    const data = Array.from(items).map(item => {
        const img     = item.querySelector('img');
        const capEl   = item.querySelector('.pg-caption p');
        return {
            src:     img ? img.src : '',
            alt:     img ? img.alt : '',
            caption: capEl ? capEl.textContent : ''
        };
    });

    function openLightbox(index) {
        current = index;
        lbImg.src = data[current].src;
        lbImg.alt = data[current].alt;
        lbCap.textContent = data[current].caption;
        lightbox.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightbox.classList.remove('open');
        document.body.style.overflow = '';
    }

    function navigate(dir) {
        current = (current + dir + data.length) % data.length;
        lbImg.src    = data[current].src;
        lbImg.alt    = data[current].alt;
        lbCap.textContent = data[current].caption;
    }

    items.forEach((item, i) => item.addEventListener('click', () => openLightbox(i)));
    document.querySelector('.lb-close').addEventListener('click', closeLightbox);
    document.querySelector('.lb-prev').addEventListener('click',  () => navigate(-1));
    document.querySelector('.lb-next').addEventListener('click',  () => navigate(1));
    lightbox.addEventListener('click', e => { if (e.target === lightbox) closeLightbox(); });

    document.addEventListener('keydown', e => {
        if (!lightbox.classList.contains('open')) return;
        if (e.key === 'Escape')     closeLightbox();
        if (e.key === 'ArrowLeft')  navigate(-1);
        if (e.key === 'ArrowRight') navigate(1);
    });
})();
</script>

<?php get_footer(); ?>
