<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- SIDE ANIMATIONS (global) -->
<div class="side-anim side-left">
    <span class="sa-item bird1">🐦</span>
    <span class="sa-item bird2">🐦</span>
    <span class="sa-item flower1">🌸</span>
    <span class="sa-item flower2">🌼</span>
    <span class="sa-item leaf1">🍃</span>
</div>
<div class="side-anim side-right">
    <span class="sa-item bird3">🐦</span>
    <span class="sa-item flower3">🌺</span>
    <span class="sa-item flower4">🌸</span>
    <span class="sa-item leaf2">🍃</span>
    <span class="sa-item star1">⭐</span>
</div>

<!-- TOP BAR -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-info">
            <span><i class="fas fa-map-marker-alt"></i> 10 Kendall Pond Rd, Londonderry NH 03053</span>
            <span><i class="fas fa-clock"></i> Mon – Fri: 7:00 AM – 5:00 PM</span>
            <span><i class="fas fa-phone"></i> <a href="tel:6038181405" style="color:inherit;">603-818-1405</a></span>
            <span><i class="fas fa-envelope"></i> <a href="mailto:staff@msdarleneselcc.com" style="color:inherit;">staff@msdarleneselcc.com</a></span>
        </div>
    </div>
</div>

<!-- HEADER -->
<header class="site-header">
    <div class="container">
        <nav class="nav-wrap">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo-text">
                <span class="logo-line1">Ms. Darlene's</span>
                <span class="logo-line2">Early Learning Center &amp; Childcare</span>
            </a>

            <button class="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>

            <ul class="site-nav">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/programs/')); ?>">Our Programs</a></li>
                <li><a href="<?php echo esc_url(home_url('/photo-gallery/')); ?>">Photo Gallery</a></li>
                <li><a href="<?php echo esc_url(home_url('/employment-opportunities/')); ?>">Join Our Team</a></li>
                <li><a href="https://calendly.com/oghafour5/ms-darlene-s-early-learning-center-tours" target="_blank" rel="noopener noreferrer" class="nav-cta">Schedule a Tour!</a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
(function() {
    const header = document.querySelector('.site-header');
    function onScroll() {
        header.classList.toggle('scrolled', window.scrollY > 50);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
})();
</script>
