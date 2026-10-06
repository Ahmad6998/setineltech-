<?php
/**
 * Template Name: About Page
 * Template Post Type: page
 *
 * @package Setinel_Tech
 */

get_header();
?>

<div style="padding-top: 104px;">
    <!-- HERO / FEATURED SHOWCASE: Exact match to reference screenshot -->
    <section class="section-frame" style="padding-top: 80px; padding-bottom: 90px;">
        <div class="pattern-bg">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pattern.webp'); ?>" alt="<?php esc_attr_e('Background pattern', 'setinel-tech'); ?>" width="1920" height="1030">
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
                    <div style="display: flex; gap: 16px; align-items: center; flex-wrap: wrap;">
                        <a href="#company-pillars" class="btn-read-more">
                            <span class="square-btn"></span>
                            <span><?php esc_html_e('EXPLORE CAPABILITIES', 'setinel-tech'); ?></span>
                        </a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary" style="padding: 13px 26px;">
                            <span><?php esc_html_e('Schedule Call', 'setinel-tech'); ?></span>
                        </a>
                    </div>
                </div>

                <div class="visual-illustration-holder">
                    <div class="image-globes">
                        <div class="globe-box">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/globe-1.webp'); ?>" alt="<?php esc_attr_e('Pendant lamp decorative light', 'setinel-tech'); ?>" width="65" height="352">
                        </div>
                        <div class="globe-box">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/globe-2.webp'); ?>" alt="<?php esc_attr_e('Pendant lamp decorative light', 'setinel-tech'); ?>" width="65" height="352">
                        </div>
                    </div>
                    <div class="header-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ttl-home-section.gif'); ?>" alt="<?php esc_attr_e('Setinel Tech Transformation Platform', 'setinel-tech'); ?>" width="1040" height="734">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: WHO WE ARE & MISSION -->
    <section id="company-pillars" class="section-spacing" style="background: #ffffff;">
        <div class="container">
            <div class="section-head text-center" style="max-width: 820px; margin: 0 auto 60px;">
                <span style="font-size: 0.82rem; font-weight: 700; color: #d97706; letter-spacing: 0.1em; text-transform: uppercase;"><?php esc_html_e('ENGINEERING BEYOND LIMITS', 'setinel-tech'); ?></span>
                <h2 style="font-size: 2.5rem; color: #0c1464; margin-top: 8px;"><?php esc_html_e('Pioneering Intelligent Technology Solutions', 'setinel-tech'); ?></h2>
                <div class="sign-line" style="margin: 16px auto 24px;"></div>
                <p style="color: #475569; font-size: 1.05rem; line-height: 1.7;">
                    <?php esc_html_e('We engineer mission-critical digital systems for hyper-growth enterprises and ambitious tech leaders. By combining senior software engineering with round-the-clock site reliability operations, we turn technical complexity into a competitive superpower.', 'setinel-tech'); ?>
                </p>
            </div>

            <!-- 3 Core Strategic Pillars -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-bottom: 70px;">
                <!-- Pillar 1 -->
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 36px 30px;">
                    <div style="width: 54px; height: 54px; border-radius: 12px; background: rgba(12, 20, 100, 0.08); display: flex; align-items: center; justify-content: center; margin-bottom: 22px;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#0c1464" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                    </div>
                    <h3 style="font-size: 1.35rem; color: #0c1464; font-weight: 700; margin-bottom: 12px;"><?php esc_html_e('Enterprise Web Platforms', 'setinel-tech'); ?></h3>
                    <p style="color: #64748b; font-size: 0.95rem; line-height: 1.65; margin-bottom: 20px;">
                        <?php esc_html_e('High-velocity, conversion-obsessed web platforms engineered with headless WordPress, React, and modern micro-frontends designed to scale under peak viral traffic.', 'setinel-tech'); ?>
                    </p>
                    <a href="<?php echo esc_url(home_url('/web-development')); ?>" style="color: #0c1464; font-weight: 700; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                        <span><?php esc_html_e('Learn More', 'setinel-tech'); ?></span> &rarr;
                    </a>
                </div>

                <!-- Pillar 2 -->
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 36px 30px;">
                    <div style="width: 54px; height: 54px; border-radius: 12px; background: rgba(245, 158, 11, 0.12); display: flex; align-items: center; justify-content: center; margin-bottom: 22px;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                    </div>
                    <h3 style="font-size: 1.35rem; color: #0c1464; font-weight: 700; margin-bottom: 12px;"><?php esc_html_e('Scalable Mobile & Web Apps', 'setinel-tech'); ?></h3>
                    <p style="color: #64748b; font-size: 0.95rem; line-height: 1.65; margin-bottom: 20px;">
                        <?php esc_html_e('Feature-rich native and cross-platform apps built with Flutter, iOS Swift, and Android Kotlin, integrated with resilient serverless cloud APIs and real-time synchronization.', 'setinel-tech'); ?>
                    </p>
                    <a href="<?php echo esc_url(home_url('/app-development')); ?>" style="color: #0c1464; font-weight: 700; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                        <span><?php esc_html_e('Learn More', 'setinel-tech'); ?></span> &rarr;
                    </a>
                </div>

                <!-- Pillar 3 -->
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 36px 30px;">
                    <div style="width: 54px; height: 54px; border-radius: 12px; background: rgba(16, 185, 129, 0.12); display: flex; align-items: center; justify-content: center; margin-bottom: 22px;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <h3 style="font-size: 1.35rem; color: #0c1464; font-weight: 700; margin-bottom: 12px;"><?php esc_html_e('24/7 Web Handling & DevSecOps', 'setinel-tech'); ?></h3>
                    <p style="color: #64748b; font-size: 0.95rem; line-height: 1.65; margin-bottom: 20px;">
                        <?php esc_html_e('Autonomous server management, sub-minute incident response, zero-downtime CI/CD deployments, and enterprise WAF threat neutralization around the clock.', 'setinel-tech'); ?>
                    </p>
                    <a href="<?php echo esc_url(home_url('/web-handling')); ?>" style="color: #0c1464; font-weight: 700; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                        <span><?php esc_html_e('Learn More', 'setinel-tech'); ?></span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Metrics Figures Bar -->
            <div style="background: linear-gradient(135deg, #0c1464 0%, #080f48 100%); border-radius: 16px; padding: 45px 30px; color: #ffffff; box-shadow: 0 20px 40px rgba(12, 20, 100, 0.2);">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 30px; text-align: center;">
                    <div>
                        <div style="font-size: 2.8rem; font-weight: 800; color: #f59e0b; font-family: var(--font-heading); line-height: 1;">99.99%</div>
                        <div style="font-size: 0.95rem; color: rgba(255, 255, 255, 0.85); font-weight: 600; margin-top: 8px;"><?php esc_html_e('Uptime SLA Guarantee', 'setinel-tech'); ?></div>
                        <p style="font-size: 0.82rem; color: rgba(255, 255, 255, 0.6); margin-top: 4px;"><?php esc_html_e('Zero unplanned downtime', 'setinel-tech'); ?></p>
                    </div>
                    <div>
                        <div style="font-size: 2.8rem; font-weight: 800; color: #f59e0b; font-family: var(--font-heading); line-height: 1;">2.4x</div>
                        <div style="font-size: 0.95rem; color: rgba(255, 255, 255, 0.85); font-weight: 600; margin-top: 8px;"><?php esc_html_e('Speed Acceleration', 'setinel-tech'); ?></div>
                        <p style="font-size: 0.82rem; color: rgba(255, 255, 255, 0.6); margin-top: 4px;"><?php esc_html_e('Edge caching & database tuning', 'setinel-tech'); ?></p>
                    </div>
                    <div>
                        <div style="font-size: 2.8rem; font-weight: 800; color: #f59e0b; font-family: var(--font-heading); line-height: 1;">0</div>
                        <div style="font-size: 0.95rem; color: rgba(255, 255, 255, 0.85); font-weight: 600; margin-top: 8px;"><?php esc_html_e('Critical Security Breaches', 'setinel-tech'); ?></div>
                        <p style="font-size: 0.82rem; color: rgba(255, 255, 255, 0.6); margin-top: 4px;"><?php esc_html_e('Continuous zero-trust WAF shielding', 'setinel-tech'); ?></p>
                    </div>
                    <div>
                        <div style="font-size: 2.8rem; font-weight: 800; color: #f59e0b; font-family: var(--font-heading); line-height: 1;">24/7</div>
                        <div style="font-size: 0.95rem; color: rgba(255, 255, 255, 0.85); font-weight: 600; margin-top: 8px;"><?php esc_html_e('Live SRE Incident Response', 'setinel-tech'); ?></div>
                        <p style="font-size: 0.82rem; color: rgba(255, 255, 255, 0.6); margin-top: 4px;"><?php esc_html_e('Always-on senior engineering team', 'setinel-tech'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="section-spacing" style="background: #f8fafc; border-top: 1px solid #e2e8f0; text-align: center;">
        <div class="container" style="max-width: 760px;">
            <h2 style="font-size: 2.3rem; color: #0c1464; font-weight: 800; margin-bottom: 16px;"><?php esc_html_e('Ready to Elevate Your Digital Foundation?', 'setinel-tech'); ?></h2>
            <p style="color: #64748b; font-size: 1.05rem; line-height: 1.65; margin-bottom: 32px;">
                <?php esc_html_e('Speak directly with our senior technology architects. We analyze your requirements, audit your infrastructure, and provide an actionable roadmap within 24 hours.', 'setinel-tech'); ?>
            </p>
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary" style="padding: 14px 32px; font-size: 1rem;">
                    <span><?php esc_html_e('Get a Free Quote', 'setinel-tech'); ?></span> &rarr;
                </a>
                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', get_theme_mod('setinel_contact_phone', '+92 300 0941144'))); ?>" class="btn-read-more" style="padding: 13px 26px;">
                    <span class="square-btn"></span>
                    <span><?php echo esc_html(get_theme_mod('setinel_contact_phone', '+92 300 0941144')); ?></span>
                </a>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
