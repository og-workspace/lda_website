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
            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="Ms. Darlene's Early Learning Center and Childcare">
            </a>

            <button class="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>

            <ul class="site-nav">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/programs/')); ?>">Our Programs</a></li>
                <li><a href="<?php echo esc_url(home_url('/employment-opportunities/')); ?>">Join Our Team</a></li>
                <li><a href="https://calendly.com/oghafour5/ms-darlene-s-early-learning-center-tours" target="_blank" rel="noopener noreferrer" class="nav-cta">Schedule a Tour!</a></li>
            </ul>
        </nav>
    </div>
</header>
