<?php
/**
 * Visual Section Hero Template Part (Tower Tech Style with Gold 3D Tower & Animated Canvas)
 *
 * @package Setinel_Tech
 */
?>
<section id="home" class="visual-section">
    <div class="bg-image">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/bg-visual-theme.webp'); ?>" alt="<?php bloginfo('name'); ?> Intelligent Solutions" width="1920" height="1080">
    </div>
    <canvas id="hero-banner-canvas"></canvas>
    <div class="container visual-container">
        <div class="visual-text-box">
            <h1 class="hero-tower-title">
                Delivering <br>
                <span class="hero-highlight-box">
                    Intelligent Solutions
                    <span class="node node-tl"></span>
                    <span class="node node-tr"></span>
                    <span class="node node-bl"></span>
                    <span class="node node-br"></span>
                </span>
            </h1>
            <p class="hero-tower-desc">
                We believe in creating enduring value for our stakeholders through meaningful and intelligent technological solutions by fostering our digital foundations to fullest potential.
            </p>
            <div class="hero-tower-btn-wrap">
                <a href="<?php echo esc_url(home_url('/#about-value')); ?>" class="btn-see-detail">SEE DETAIL</a>
            </div>
        </div>

        <div class="btn-holder">
            <a href="<?php echo esc_url(home_url('/#about-value')); ?>" class="btn-explore" aria-label="<?php esc_attr_e('Scroll down', 'setinel-tech'); ?>">
                <div class="mouse"></div>
                <div class="arrow-scroll">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div>
    </div>
</section>
