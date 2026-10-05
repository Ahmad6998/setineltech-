<?php
/**
 * Setinel Tech Default Page Template
 *
 * @package Setinel_Tech
 */

get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="hero-section" style="padding-top: 140px; padding-bottom: 50px;">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="container section-spacing" style="padding-top: 20px;">
        <div class="glass-card" style="padding: 40px; font-size: 1.05rem; line-height: 1.8;">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</article>

<?php
get_footer();
