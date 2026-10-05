<?php
/**
 * Setinel Tech Fallback Blog & Archive Template
 *
 * @package Setinel_Tech
 */

get_header();
?>

<div class="hero-section" style="padding-top: 140px; padding-bottom: 50px;">
    <div class="container">
        <div class="badge">Engineering Insights</div>
        <h1>Setinel Tech <span class="gradient-text">Blog & Updates</span></h1>
        <p class="hero-description" style="max-width: 650px;">
            In-depth guides on WordPress performance, modern web engineering, mobile development best practices, and 24/7 web operations.
        </p>
    </div>
</div>

<div class="container section-spacing" style="padding-top: 20px;">
    <?php if (have_posts()) : ?>
        <div class="case-studies-grid">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" class="case-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="case-card-img">
                            <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                        </div>
                    <?php else : ?>
                        <div class="case-card-img" style="background: #141824;">
                            <span style="font-size: 2.2rem; color: var(--violet-light);">📰</span>
                        </div>
                    <?php endif; ?>

                    <div class="case-card-body">
                        <span class="case-tag"><?php echo get_the_date(); ?></span>
                        <h3 style="margin-bottom: 12px;">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p style="font-size: 0.92rem; margin-bottom: 18px;">
                            <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="emerald-text" style="font-size: 0.88rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
                            <span>Read Article</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <div style="margin-top: 50px; text-align: center;">
            <?php
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('&larr; Previous', 'setinel-tech'),
                'next_text' => __('Next &rarr;', 'setinel-tech'),
            ));
            ?>
        </div>
    <?php else : ?>
        <div class="glass-card" style="text-align: center; padding: 60px;">
            <h2>No Articles Found</h2>
            <p style="margin-top: 12px; margin-bottom: 24px;">Check back soon for fresh engineering updates and case studies.</p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Return Home</a>
        </div>
    <?php endif; ?>
</div>

<?php
get_footer();
