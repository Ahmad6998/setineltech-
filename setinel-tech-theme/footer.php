<?php
/**
 * Setinel Tech Footer Template (Dual-Tier Enterprise Footer)
 *
 * @package Setinel_Tech
 */
$contact_email = get_theme_mod('setinel_contact_email', 'setineltech@gmail.com');
$contact_phone = get_theme_mod('setinel_contact_phone', '+92 300 0941144');
$wa_number = get_theme_mod('setinel_whatsapp_number', '923000941144');
$clean_wa = preg_replace('/[^0-9]/', '', $wa_number);
$wa_url = 'https://wa.me/' . $clean_wa . '?text=' . rawurlencode('Hello Setinel Tech, I would like to discuss a project.');
?>
</main><!-- #main-content -->

<!-- Sleek Minimalist 4-Column Footer (Matching Reference Screenshot) -->
<footer class="site-footer-clean">
    <div class="container footer-clean-grid">
        <!-- Column 1: Brand & Copyright -->
        <div class="footer-clean-col footer-col-brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-clean-logo" aria-label="<?php bloginfo('name'); ?>">
                <div class="footer-clean-logo-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-icon.png?v=5'); ?>" alt="<?php bloginfo('name'); ?>" width="36" height="36" class="footer-clean-logo-img">
                </div>
                <span class="footer-clean-logo-text">SETINEL<span class="text-amber">TECH</span></span>
            </a>
            <p class="footer-clean-copy">Copyright <?php echo esc_html(date('Y')); ?> Setinel Tech</p>
        </div>

        <!-- Column 2: Address -->
        <div class="footer-clean-col footer-col-address">
            <h4 class="footer-clean-title"><?php esc_html_e('Address', 'setinel-tech'); ?></h4>
            <p class="footer-clean-text"><?php echo esc_html(get_theme_mod('setinel_address', 'main multan road  Lahore, Punjab')); ?></p>
        </div>

        <!-- Column 3: Contact Us -->
        <div class="footer-clean-col footer-col-contact">
            <h4 class="footer-clean-title"><?php esc_html_e('Contact Us', 'setinel-tech'); ?></h4>
            <p class="footer-clean-text">
                <a href="mailto:<?php echo esc_attr($contact_email); ?>" class="footer-clean-email"><?php echo esc_html($contact_email); ?></a>
            </p>
            <p class="footer-clean-text footer-clean-phone"><?php echo esc_html($contact_phone); ?></p>
        </div>

        <!-- Column 4: Follow Us -->
        <div class="footer-clean-col footer-col-follow">
            <h4 class="footer-clean-title"><?php esc_html_e('Follow Us', 'setinel-tech'); ?></h4>
            <div class="footer-clean-socials">
                <a href="<?php echo esc_url(get_theme_mod('setinel_facebook_url', 'https://facebook.com')); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-btn fb" aria-label="Facebook">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="#ffffff"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="<?php echo esc_url(get_theme_mod('setinel_linkedin_url', 'https://linkedin.com')); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-btn in" aria-label="LinkedIn">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="#ffffff"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
                <a href="<?php echo esc_url(get_theme_mod('setinel_youtube_url', 'https://youtube.com')); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-btn yt" aria-label="YouTube">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="#ffffff"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                <a href="<?php echo esc_url(get_theme_mod('setinel_tiktok_url', 'https://tiktok.com')); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-btn tt" aria-label="TikTok">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="#ffffff"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.29 0 .57.04.84.11V9.32a6.34 6.34 0 0 0-.84-.06 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34-6.34V8.58a8.28 8.28 0 0 0 4.83 1.56V6.69z"/></svg>
                </a>
                <a href="<?php echo esc_url(get_theme_mod('setinel_instagram_url', 'https://instagram.com')); ?>" target="_blank" rel="noopener noreferrer" class="footer-social-btn ig" aria-label="Instagram">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="#ffffff"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
            </div>
            <div>
                <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="footer-clean-privacy"><?php esc_html_e('Privacy Policy', 'setinel-tech'); ?></a>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Back-to-Top Button (TowerTech Component) -->
<a href="#" id="back-to-top" class="back-to-top" aria-label="<?php esc_attr_e('Back to top', 'setinel-tech'); ?>" title="<?php esc_attr_e('Back to top', 'setinel-tech'); ?>">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="18 15 12 9 6 15"></polyline>
    </svg>
</a>

<!-- Floating Live Chat Widget (Matching TowerTech Reference Screenshot) -->
<div class="floating-chat-container">
    <div class="floating-chat-tooltip">
        <span>👋 Hi! We are here, let's chat about your project.</span>
    </div>
    <a href="<?php echo esc_url($wa_url); ?>" class="floating-chat-btn" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Chat with Setinel Tech', 'setinel-tech'); ?>">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12c0 1.82.49 3.53 1.34 5L2 22l5.16-1.31C8.61 21.49 10.26 22 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2zm0 18c-1.57 0-3.04-.44-4.3-1.21l-.31-.19-3.2.81.85-3.08-.2-.33A7.95 7.95 0 0 1 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8-3.59 8-8 8zm-3.5-9c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm7 0c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7.05 3.5c.67 1.48 2.14 2.5 4.05 2.5s3.38-1.02 4.05-2.5a.75.75 0 1 0-1.37-.62c-.44.97-1.46 1.62-2.68 1.62s-2.24-.65-2.68-1.62a.75.75 0 0 0-1.37.62z"/>
        </svg>
    </a>
</div>

<?php wp_footer(); ?>
</body>
</html>
