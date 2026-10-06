<?php
/**
 * Aside Quote Strip Template Part (.aside-quote)
 *
 * @package Setinel_Tech
 */
$wa_number_quote = get_theme_mod('setinel_whatsapp_number', '923000941144');
$clean_wa_quote = preg_replace('/[^0-9]/', '', $wa_number_quote);
$wa_url_quote = 'https://wa.me/' . $clean_wa_quote . '?text=' . rawurlencode('Hello Setinel Tech, I would like to discuss a project.');
?>
<section class="aside-quote">
    <div class="container">
        <div class="quote-block-new">
            <span style="font-size: 0.82rem; font-weight: 700; color: var(--gold-light); letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 12px; display: block;">READY TO ACCELERATE</span>
            <h2>Ready to Architect Your Next Big Breakthrough?</h2>
            <p style="color: var(--text-muted); max-width: 680px; margin: 0 auto 30px; font-size: 1.05rem; line-height: 1.65;">
                Partner with seasoned senior engineers committed to delivering scalable, secure, and world-class digital solutions. Discuss your roadmap today.
            </p>
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="button btn-gold">
                    <span>Schedule Free Technical Consultation</span>
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
                <a href="<?php echo esc_url($wa_url_quote); ?>" target="_blank" rel="noopener noreferrer" class="button btn-grey" style="background: rgba(37, 211, 102, 0.12); border-color: rgba(37, 211, 102, 0.4); color: #25d366;">
                    <span>Chat on WhatsApp</span>
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2m.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.27-2.42 5.82a8.19 8.19 0 0 1-5.82 2.42c-1.48 0-2.93-.39-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.18 8.18 0 0 1-1.23-4.38c0-4.54 3.7-8.24 8.24-8.24m4.53 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.4-1.75-.15-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.78 2.72 4.31 3.81.6.26 1.07.42 1.44.54.61.19 1.16.17 1.6.1.49-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.1-.23-.17-.48-.3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
