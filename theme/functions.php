<?php
if (!defined('ABSPATH')) exit;

// Theme setup
function lda_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'lda-theme'),
    ]);
}
add_action('after_setup_theme', 'lda_theme_setup');

// Enqueue styles & scripts
function lda_enqueue_assets() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Open+Sans:wght@400;500;600&display=swap', [], null);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', [], '6.4.0');
    wp_enqueue_style('lda-style', get_stylesheet_uri(), ['google-fonts', 'font-awesome'], '1.0.0');
    wp_enqueue_script('lda-main', get_template_directory_uri() . '/js/main.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'lda_enqueue_assets');

// Register contact form shortcode
function lda_contact_form($atts) {
    $atts = shortcode_atts(['type' => 'contact'], $atts);
    ob_start();

    if ($atts['type'] === 'employment') {
        ?>
        <form class="lda-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <input type="hidden" name="action" value="lda_employment_form">
            <?php wp_nonce_field('lda_employment_nonce', 'lda_nonce'); ?>
            <div class="form-row">
                <div class="form-group">
                    <label>Full Name *</label>
                    <input type="text" name="name" required placeholder="Your full name">
                </div>
                <div class="form-group">
                    <label>Phone *</label>
                    <input type="tel" name="phone" required placeholder="(603) 000-0000">
                </div>
            </div>
            <div class="form-group">
                <label>Email *</label>
                <input type="email" name="email" required placeholder="your@email.com">
            </div>
            <div class="form-group">
                <label>Position of Interest</label>
                <input type="text" name="subject" placeholder="e.g. Lead Teacher, Assistant Teacher">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" placeholder="Tell us about yourself..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary form-submit">Send My Message</button>
        </form>
        <?php
    } else {
        ?>
        <form class="lda-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <input type="hidden" name="action" value="lda_contact_form">
            <?php wp_nonce_field('lda_contact_nonce', 'lda_nonce'); ?>
            <div class="form-row">
                <div class="form-group">
                    <label>Parent Name *</label>
                    <input type="text" name="parent_name" required placeholder="Your full name">
                </div>
                <div class="form-group">
                    <label>Phone *</label>
                    <input type="tel" name="phone" required placeholder="(603) 000-0000">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="email" required placeholder="your@email.com">
                </div>
                <div class="form-group">
                    <label>Child's Name *</label>
                    <input type="text" name="child_name" required placeholder="Child's full name">
                </div>
            </div>
            <div class="form-group">
                <label>Child's Age</label>
                <select name="child_age">
                    <option value="">Select age range</option>
                    <option>6 weeks – 12 months (Infants)</option>
                    <option>12 months – 2 years (Pre-Toddlers)</option>
                    <option>2 – 3 years (Toddlers)</option>
                    <option>3 – 4 years (Pre-K)</option>
                    <option>4 – 5 years (Kindergarten)</option>
                </select>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" placeholder="Any questions or additional information..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary form-submit">Send Message</button>
        </form>
        <?php
    }

    return ob_get_clean();
}
add_shortcode('lda_form', 'lda_contact_form');

// Handle contact form submission
function lda_handle_contact_form() {
    if (!isset($_POST['lda_nonce']) || !wp_verify_nonce($_POST['lda_nonce'], 'lda_contact_nonce')) {
        wp_die('Security check failed.');
    }

    $to      = 'staff@msdarleneselcc.com';
    $subject = 'New Contact / Enrollment Inquiry from Website';
    $body    = "Parent Name: " . sanitize_text_field($_POST['parent_name'] ?? '') . "\n"
             . "Phone: "       . sanitize_text_field($_POST['phone'] ?? '') . "\n"
             . "Email: "       . sanitize_email($_POST['email'] ?? '') . "\n"
             . "Child Name: "  . sanitize_text_field($_POST['child_name'] ?? '') . "\n"
             . "Child Age: "   . sanitize_text_field($_POST['child_age'] ?? '') . "\n"
             . "Message: "     . sanitize_textarea_field($_POST['message'] ?? '');
    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    wp_mail($to, $subject, $body, $headers);
    wp_redirect(home_url('/contact/?sent=1'));
    exit;
}
add_action('admin_post_lda_contact_form', 'lda_handle_contact_form');
add_action('admin_post_nopriv_lda_contact_form', 'lda_handle_contact_form');

// Handle employment form submission
function lda_handle_employment_form() {
    if (!isset($_POST['lda_nonce']) || !wp_verify_nonce($_POST['lda_nonce'], 'lda_employment_nonce')) {
        wp_die('Security check failed.');
    }

    $to      = 'staff@msdarleneselcc.com';
    $subject = 'New Employment Application from Website';
    $body    = "Name: "     . sanitize_text_field($_POST['name'] ?? '') . "\n"
             . "Phone: "    . sanitize_text_field($_POST['phone'] ?? '') . "\n"
             . "Email: "    . sanitize_email($_POST['email'] ?? '') . "\n"
             . "Position: " . sanitize_text_field($_POST['subject'] ?? '') . "\n"
             . "Message: "  . sanitize_textarea_field($_POST['message'] ?? '');
    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    wp_mail($to, $subject, $body, $headers);
    wp_redirect(home_url('/employment-opportunities/?sent=1'));
    exit;
}
add_action('admin_post_lda_employment_form', 'lda_handle_employment_form');
add_action('admin_post_nopriv_lda_employment_form', 'lda_handle_employment_form');
