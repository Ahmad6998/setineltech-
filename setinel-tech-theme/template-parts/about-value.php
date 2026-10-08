<?php
/**
 * Creating Value & Customer Success Template Part (.section-frame)
 * Exact match to TowerTech layout
 *
 * @package Setinel_Tech
 */
?>
<section id="about-value" class="section-frame">
    <div class="pattern-bg">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pattern.webp'); ?>" alt="<?php esc_attr_e('Background Pattern', 'setinel-tech'); ?>" width="1920" height="1030" loading="lazy" decoding="async">
    </div>
    <div class="container">
        <div class="section-image-head">
            <div class="header-textbox">
                <h2><?php esc_html_e('CREATING VALUE & ENSURING CUSTOMER SUCCESS', 'setinel-tech'); ?></h2>
                <span class="sign-line"></span>
                <h5><?php esc_html_e('TECH TRANSFORMATION EXPERTS', 'setinel-tech'); ?></h5>
                <p>
                    <?php esc_html_e('Setinel Tech is an avant-garde technology enterprise that specializes in the conception and implementation of groundbreaking software solutions. With an ardent focus on cutting-edge technologies, Setinel Tech endeavors to reshape industries and empower businesses in attaining their objectives within the digital epoch.', 'setinel-tech'); ?>
                </p>
                <a href="<?php echo esc_url(home_url('/about')); ?>" title="<?php esc_attr_e('Read more about Setinel Tech', 'setinel-tech'); ?>" class="btn-read-more">
                    <span class="square-btn"></span>
                    <span><?php esc_html_e('READ MORE', 'setinel-tech'); ?></span>
                </a>
            </div>

            <div class="visual-illustration-holder">
                <div class="image-globes">
                    <div class="globe-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/globe-1.webp'); ?>" alt="<?php esc_attr_e('Decorative Light', 'setinel-tech'); ?>" width="65" height="352" loading="lazy" decoding="async">
                    </div>
                    <div class="globe-box">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/globe-2.webp'); ?>" alt="<?php esc_attr_e('Decorative Light', 'setinel-tech'); ?>" width="65" height="352" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="header-image">
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ttl-home-section.webp'); ?>" type="image/webp">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ttl-home-section.gif'); ?>" alt="<?php esc_attr_e('Setinel Tech Transformation Platform', 'setinel-tech'); ?>" width="1040" height="734" loading="lazy" decoding="async">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
