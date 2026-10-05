<?php
/**
 * Setinel Tech Single Post Template
 *
 * @package Setinel_Tech
 */

get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="hero-section" style="padding-top: 140px; padding-bottom: 50px;">
        <div class="container" style="max-width: 860px;">
            <div class="badge badge-emerald"><?php the_category(', '); ?></div>
            <h1><?php the_title(); ?></h1>
            <div style="font-size: 0.9rem; color: var(--text-dark); margin-top: 14px;">
                Published by <?php the_author(); ?> on <?php echo get_the_date(); ?>
            </div>
        </div>
    </div>

    <div class="container section-spacing" style="padding-top: 20px; max-width: 860px;">
        <?php if (has_post_thumbnail()) : ?>
            <div style="margin-bottom: 40px; border-radius: 16px; overflow: hidden; border: 1px solid var(--border-subtle);">
                <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; display: block;')); ?>
            </div>
        <?php endif; ?>

        <div class="glass-card" style="padding: 40px; font-size: 1.1rem; line-height: 1.8;">
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
