<?php
/**
 * Template Name: Contact Page Template
 * Template Post Type: page
 *
 * @package Setinel_Tech
 */

get_header();
?>

<div class="hero-section" style="padding-top: 140px; padding-bottom: 40px;">
    <div class="container">
        <div class="badge">Direct Engineering Access</div>
        <h1>Contact <span class="gradient-text">Setinel Tech</span></h1>
        <p class="hero-description" style="max-width: 700px;">
            Ready to architect a high-performance web application, build a scalable mobile app, or hand off 24/7 web operations to certified engineers? We're ready.
        </p>
    </div>
</div>

<?php
get_template_part('template-parts/contact-section');
get_footer();
