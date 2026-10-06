<?php
/**
 * Contact Section Template Part
 *
 * @package Setinel_Tech
 */
$contact_email = get_theme_mod('setinel_contact_email', 'setineltech@gmail.com');
$contact_phone = get_theme_mod('setinel_contact_phone', '+92 300 0941144');
?>
<section id="contact" class="section-spacing">
    <div class="container">
        <div class="section-head" style="text-align: center; margin-bottom: 50px;">
            <span style="font-size: 0.82rem; font-weight: 700; color: var(--gold-light); letter-spacing: 0.1em; text-transform: uppercase;">GET IN TOUCH</span>
            <h2 style="font-size: 2.4rem;">Start Your Engineering Consultation</h2>
            <div class="dot-dash"></div>
            <p style="color: var(--text-muted); max-width: 600px; margin: 0 auto;">Connect directly with our engineering team for an architectural review, project estimate, or 24/7 web handling retainer.</p>
        </div>

        <div class="contact-grid">
            <!-- Left Info Panel -->
            <div class="glass-card" style="padding: 36px;">
                <h3 style="margin-bottom: 16px;">Direct Channels</h3>
                <p style="font-size: 0.95rem; margin-bottom: 30px;">Prefer to skip the form? Reach out directly via our executive technical advisory desk:</p>

                <div style="display: flex; flex-direction: column; gap: 14px; margin-bottom: 36px;">
                    <a href="mailto:<?php echo esc_attr($contact_email); ?>" class="direct-channel-item" style="display: flex; align-items: center; gap: 14px; text-decoration: none; padding: 12px 14px; border-radius: 12px; background: rgba(255, 255, 255, 0.02); border: 1px solid var(--border-subtle); transition: var(--transition-fast);">
                        <div class="channel-icon-box channel-icon-email">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>
                        </div>
                        <div>
                            <div style="font-size: 0.75rem; color: var(--gold-light); text-transform: uppercase; font-weight: 700; letter-spacing: 0.05em;"><?php esc_html_e('Direct Email', 'setinel-tech'); ?></div>
                            <div class="direct-channel-val"><?php echo esc_html($contact_email); ?></div>
                        </div>
                    </a>

                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $contact_phone)); ?>" class="direct-channel-item" style="display: flex; align-items: center; gap: 14px; text-decoration: none; padding: 12px 14px; border-radius: 12px; background: rgba(255, 255, 255, 0.02); border: 1px solid var(--border-subtle); transition: var(--transition-fast);">
                        <div class="channel-icon-box channel-icon-phone">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div>
                            <div style="font-size: 0.75rem; color: var(--gold-light); text-transform: uppercase; font-weight: 700; letter-spacing: 0.05em;"><?php esc_html_e('Hotline & SLA Support', 'setinel-tech'); ?></div>
                            <div class="direct-channel-val"><?php echo esc_html($contact_phone); ?></div>
                        </div>
                    </a>

                    <?php
                    $wa_number_section = get_theme_mod('setinel_whatsapp_number', '923000941144');
                    $clean_wa_sec = preg_replace('/[^0-9]/', '', $wa_number_section);
                    $wa_url_sec = 'https://wa.me/' . $clean_wa_sec . '?text=' . rawurlencode('Hello Setinel Tech, I would like to discuss a project.');
                    ?>
                    <a href="<?php echo esc_url($wa_url_sec); ?>" target="_blank" rel="noopener noreferrer" class="direct-channel-item whatsapp-channel" style="display: flex; align-items: center; gap: 14px; text-decoration: none; padding: 12px 14px; border-radius: 12px; transition: var(--transition-fast);">
                        <div class="channel-icon-box channel-icon-whatsapp">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2m.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.27-2.42 5.82a8.19 8.19 0 0 1-5.82 2.42c-1.48 0-2.93-.39-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.18 8.18 0 0 1-1.23-4.38c0-4.54 3.7-8.24 8.24-8.24m4.53 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.4-1.75-.15-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.78 2.72 4.31 3.81.6.26 1.07.42 1.44.54.61.19 1.16.17 1.6.1.49-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.1-.23-.17-.48-.3"/>
                            </svg>
                        </div>
                        <div>
                            <div style="font-size: 0.75rem; color: #25d366; text-transform: uppercase; font-weight: 700; letter-spacing: 0.05em;"><?php esc_html_e('WhatsApp Chat', 'setinel-tech'); ?></div>
                            <div class="direct-channel-val"><?php esc_html_e('Direct Lead Engineer →', 'setinel-tech'); ?></div>
                        </div>
                    </a>

                    <div class="direct-channel-item" style="display: flex; align-items: center; gap: 14px; padding: 12px 14px; border-radius: 12px; background: rgba(255, 255, 255, 0.02); border: 1px solid var(--border-subtle);">
                        <div class="channel-icon-box channel-icon-clock">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div>
                            <div style="font-size: 0.75rem; color: var(--gold-light); text-transform: uppercase; font-weight: 700; letter-spacing: 0.05em;"><?php esc_html_e('Turnaround Commitment', 'setinel-tech'); ?></div>
                            <div class="direct-channel-val"><?php esc_html_e('Guaranteed < 12 Hours', 'setinel-tech'); ?></div>
                        </div>
                    </div>
                </div>

                <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 18px;">
                    <div style="font-size: 0.85rem; font-weight: 600; color: var(--emerald-light); margin-bottom: 4px;">NDA Protected</div>
                    <div style="font-size: 0.8rem; color: var(--text-muted);">All discussions and architecture blueprints are protected under strict non-disclosure terms by default.</div>
                </div>
            </div>

            <!-- Right Contact Form -->
            <div class="glass-card" style="padding: 36px;">
                <form id="setinel-inquiry-form" onsubmit="event.preventDefault(); alert('Inquiry received! A Setinel Tech Lead Architect will contact you shortly.');">
                    <div class="form-row-2">
                        <div>
                            <label style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 6px; color: var(--text-muted);">Your Name *</label>
                            <input type="text" required placeholder="Alex Turner" style="width: 100%; background: #0c0e15; border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 12px 14px; color: #fff; font-size: 0.95rem;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 6px; color: var(--text-muted);">Email Address *</label>
                            <input type="email" required placeholder="alex@company.com" style="width: 100%; background: #0c0e15; border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 12px 14px; color: #fff; font-size: 0.95rem;">
                        </div>
                    </div>

                    <div style="margin-bottom: 18px;">
                        <label style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 6px; color: var(--text-muted);">Primary Service Needed</label>
                        <select style="width: 100%; background: #0c0e15; border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 12px 14px; color: #fff; font-size: 0.95rem;">
                            <option value="web">Web Development (WordPress, Next.js, Full-Stack)</option>
                            <option value="app">Mobile App Development (iOS / Android / Flutter)</option>
                            <option value="handling">Web Handling & Maintenance (24/7 SLA & DevOps)</option>
                            <option value="bundle">Full Digital Transformation Ecosystem (Web + App + Handling)</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 18px;">
                        <label style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 6px; color: var(--text-muted);">Project Scope & Engagement Tier</label>
                        <select id="estimated-cost-input" style="width: 100%; background: #0c0e15; border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 12px 14px; color: #fff; font-size: 0.95rem;">
                            <option value="Standard MVP / Website Build">Standard MVP / Website Build</option>
                            <option value="Growth Platform / Mobile App" selected>Growth Platform / Mobile App Engineering</option>
                            <option value="Enterprise Architecture">Enterprise Systems & Cloud Architecture</option>
                            <option value="24/7 Web Handling SLA">24/7 Web Handling & DevOps SLA Retainer</option>
                            <option value="Custom Technical Consultation">Custom Technical Consultation</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 24px;">
                        <label style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 6px; color: var(--text-muted);">Project Scope & Objectives *</label>
                        <textarea rows="4" required placeholder="Describe your web app, mobile requirements, or web handling priorities..." style="width: 100%; background: #0c0e15; border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 12px 14px; color: #fff; font-size: 0.95rem; font-family: var(--font-main);"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <span>Submit Project Brief</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
