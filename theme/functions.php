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
    if (is_page_template('page-gallery.php')) {
        wp_enqueue_style('lda-gallery', get_template_directory_uri() . '/css/gallery.css', ['lda-style'], '1.0.0');
    }
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
                    <label for="lda_emp_name">Full Name *</label>
                    <input type="text" id="lda_emp_name" name="name" required placeholder="Your full name">
                </div>
                <div class="form-group">
                    <label for="lda_emp_phone">Phone *</label>
                    <input type="tel" id="lda_emp_phone" name="phone" required placeholder="(603) 000-0000">
                </div>
            </div>
            <div class="form-group">
                <label for="lda_emp_email">Email *</label>
                <input type="email" id="lda_emp_email" name="email" required placeholder="your@email.com">
            </div>
            <div class="form-group">
                <label for="lda_emp_subject">Position of Interest</label>
                <input type="text" id="lda_emp_subject" name="subject" placeholder="e.g. Lead Teacher, Assistant Teacher">
            </div>
            <div class="form-group">
                <label for="lda_emp_message">Message</label>
                <textarea id="lda_emp_message" name="message" placeholder="Tell us about yourself..."></textarea>
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
                    <label for="lda_parent_name">Parent Name *</label>
                    <input type="text" id="lda_parent_name" name="parent_name" required placeholder="Your full name">
                </div>
                <div class="form-group">
                    <label for="lda_phone">Phone *</label>
                    <input type="tel" id="lda_phone" name="phone" required placeholder="(603) 000-0000">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="lda_email">Email *</label>
                    <input type="email" id="lda_email" name="email" required placeholder="your@email.com">
                </div>
                <div class="form-group">
                    <label for="lda_child_name">Child's Name *</label>
                    <input type="text" id="lda_child_name" name="child_name" required placeholder="Child's full name">
                </div>
            </div>
            <div class="form-group">
                <label for="lda_child_age">Child's Age</label>
                <select id="lda_child_age" name="child_age">
                    <option value="">Select age range</option>
                    <option>6 weeks – 12 months (Infants)</option>
                    <option>12 months – 2 years (Pre-Toddlers)</option>
                    <option>2 – 3 years (Toddlers)</option>
                    <option>3 – 4 years (Pre-K)</option>
                    <option>4 – 5 years (Kindergarten)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lda_message">Message</label>
                <textarea id="lda_message" name="message" placeholder="Any questions or additional information..."></textarea>
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

    $parent_name = sanitize_text_field($_POST['parent_name'] ?? '');
    $phone       = sanitize_text_field($_POST['phone'] ?? '');
    $email       = sanitize_email($_POST['email'] ?? '');
    $child_name  = sanitize_text_field($_POST['child_name'] ?? '');

    if (empty($parent_name) || empty($phone) || empty($email) || empty($child_name) || !is_email($email)) {
        wp_safe_redirect(add_query_arg('sent', '0', wp_get_referer() ?: home_url('/contact/')));
        exit;
    }

    $to      = 'staff@msdarleneselcc.com';
    $subject = 'New Contact / Enrollment Inquiry from Website';
    $body    = "Parent Name: " . $parent_name . "\n"
             . "Phone: "       . $phone . "\n"
             . "Email: "       . $email . "\n"
             . "Child Name: "  . $child_name . "\n"
             . "Child Age: "   . sanitize_text_field($_POST['child_age'] ?? '') . "\n"
             . "Message: "     . sanitize_textarea_field($_POST['message'] ?? '');
    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    $sent = wp_mail($to, $subject, $body, $headers);
    wp_safe_redirect(add_query_arg('sent', $sent ? '1' : '0', home_url('/contact/')));
    exit;
}
add_action('admin_post_lda_contact_form', 'lda_handle_contact_form');
add_action('admin_post_nopriv_lda_contact_form', 'lda_handle_contact_form');

// Handle employment form submission
function lda_handle_employment_form() {
    if (!isset($_POST['lda_nonce']) || !wp_verify_nonce($_POST['lda_nonce'], 'lda_employment_nonce')) {
        wp_die('Security check failed.');
    }

    $name  = sanitize_text_field($_POST['name'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');

    if (empty($name) || empty($phone) || empty($email) || !is_email($email)) {
        wp_safe_redirect(add_query_arg('sent', '0', wp_get_referer() ?: home_url('/employment-opportunities/')));
        exit;
    }

    $to      = 'staff@msdarleneselcc.com';
    $subject = 'New Employment Application from Website';
    $body    = "Name: "     . $name . "\n"
             . "Phone: "    . $phone . "\n"
             . "Email: "    . $email . "\n"
             . "Position: " . sanitize_text_field($_POST['subject'] ?? '') . "\n"
             . "Message: "  . sanitize_textarea_field($_POST['message'] ?? '');
    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    $sent = wp_mail($to, $subject, $body, $headers);
    wp_safe_redirect(add_query_arg('sent', $sent ? '1' : '0', home_url('/employment-opportunities/')));
    exit;
}
add_action('admin_post_lda_employment_form', 'lda_handle_employment_form');
add_action('admin_post_nopriv_lda_employment_form', 'lda_handle_employment_form');
