<?php
/**
 * Setinel Tech Footer Template
 *
 * @package Setinel_Tech
 */
$contact_email = get_theme_mod('setinel_contact_email', 'setineltech@gmail.com');
$contact_phone = get_theme_mod('setinel_contact_phone', '+92 300 0941144');
?>
</main><!-- #main-content -->

<footer class="site-footer">
    <div class="container">
        <!-- CTA Section -->
        <div class="cta-banner" style="margin-bottom: 70px;">
            <div class="badge badge-emerald">Ready To Scale?</div>
            <h2>Let's Engineer Your Next <span class="gradient-text">Breakthrough Product</span></h2>
            <p>From modern web applications and native mobile experiences to 24/7 autonomous web handling, Setinel Tech is your technology vanguard.</p>
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-primary">
                    <span>Schedule Free Architecture Review</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
                <a href="<?php echo esc_url(home_url('/#services')); ?>" class="btn btn-secondary">
                    <span>Explore All Services</span>
                </a>
            </div>
        </div>

        <div class="footer-grid">
            <div class="footer-brand">
                <div class="brand-logo">
                    <div class="brand-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-icon.png?v=4'); ?>" alt="<?php bloginfo('name'); ?>" width="40" height="40" style="width: 40px; height: 40px; max-width: 40px; max-height: 40px; object-fit: contain; display: block;">
                    </div>
                    <span>SETINEL<span class="emerald-text">TECH</span></span>
                </div>
                <p>Enterprise-grade web engineering, cross-platform mobile apps, and 24/7 managed web handling infrastructure built for hyper-growth companies.</p>
            </div>

            <div class="footer-col">
                <h4>Core Services</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>">Web Development</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>">Mobile App Engineering</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#handling')); ?>">24/7 Web Handling</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#handling')); ?>">Cloud DevOps & WAF</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#contact')); ?>">Schedule Consultation</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Solutions</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/#tech-stack')); ?>">Full-Stack SaaS</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#tech-stack')); ?>">Headless WordPress</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#tech-stack')); ?>">iOS & Android Apps</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#handling')); ?>">SLA & Disaster Recovery</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#case-studies')); ?>">Client Case Studies</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Contact & Operations</h4>
                <ul class="footer-links">
                    <li style="color: #cbd5e1;"><strong style="color: #ffffff;">HQ:</strong> <span style="color: #cbd5e1;">Silicon Valley & Distributed Global</span></li>
                    <li style="color: #cbd5e1;"><strong style="color: #ffffff;">Email:</strong> <a href="mailto:<?php echo esc_attr($contact_email); ?>" style="color: #cbd5e1;"><?php echo esc_html($contact_email); ?></a></li>
                    <li style="color: #cbd5e1;"><strong style="color: #ffffff;">Phone:</strong> <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $contact_phone)); ?>" style="color: #cbd5e1;"><?php echo esc_html($contact_phone); ?></a></li>
                    <li style="color: #cbd5e1;"><strong style="color: #ffffff;">Uptime Status:</strong> <span class="emerald-text" style="font-weight: 600;">99.99% Operational</span></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div>&copy; <?php echo esc_html(date('Y')); ?> Setinel Tech Inc. All rights reserved. Built for high performance & security.</div>
            <div style="display: flex; gap: 20px;">
                <a href="#" style="color: #94a3b8;">Privacy Policy</a>
                <a href="#" style="color: #94a3b8;">Terms of Service</a>
                <a href="#" style="color: #94a3b8;">Security Statement</a>
            </div>
        </div>
    </div>
</footer>

<?php
$wa_number = get_theme_mod('setinel_whatsapp_number', '923000941144');
$clean_wa = preg_replace('/[^0-9]/', '', $wa_number);
$wa_url = 'https://wa.me/' . $clean_wa . '?text=' . rawurlencode('Hello Setinel Tech, I would like to discuss a project.');
?>
<!-- Floating WhatsApp Action Button -->
<a href="<?php echo esc_url($wa_url); ?>" class="whatsapp-float-btn" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Chat with Setinel Tech on WhatsApp', 'setinel-tech'); ?>">
    <div class="whatsapp-pulse"></div>
    <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
        <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2m.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.27-2.42 5.82a8.19 8.19 0 0 1-5.82 2.42c-1.48 0-2.93-.39-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.18 8.18 0 0 1-1.23-4.38c0-4.54 3.7-8.24 8.24-8.24m4.53 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.4-1.75-.15-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.78 2.72 4.31 3.81.6.26 1.07.42 1.44.54.61.19 1.16.17 1.6.1.49-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.1-.23-.17-.48-.3"/>
    </svg>
    <span class="whatsapp-tooltip"><?php esc_html_e('Chat with us on WhatsApp', 'setinel-tech'); ?></span>
</a>

<?php wp_footer(); ?>
</body>
</html>
