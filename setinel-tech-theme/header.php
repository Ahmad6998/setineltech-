<?php
/**
 * Setinel Tech Header Template
 *
 * @package Setinel_Tech
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url(get_template_directory_uri() . '/favicon.ico'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/favicon-16x16.png'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/apple-touch-icon.png'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="cyber-bg-glow"></div>

<header class="site-header">
    <div class="container header-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                ?>
                <div class="brand-icon">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-icon.png?v=4'); ?>" alt="<?php bloginfo('name'); ?>" width="40" height="40" style="width: 40px; height: 40px; max-width: 40px; max-height: 40px; object-fit: contain; display: block;">
                </div>
                <span>SETINEL<span class="emerald-text">TECH</span></span>
                <?php
            }
            ?>
        </a>

        <nav class="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'setinel-tech'); ?>">
            <?php
            if (has_nav_menu('primary-menu')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'nav-menu',
                    'fallback_cb'    => 'setinel_tech_default_menu',
                ));
            } else {
                setinel_tech_default_menu();
            }
            ?>
        </nav>

        <div class="nav-actions">
            <?php
            $wa_number_hdr = get_theme_mod('setinel_whatsapp_number', '923000941144');
            $clean_wa_hdr = preg_replace('/[^0-9]/', '', $wa_number_hdr);
            $wa_url_hdr = 'https://wa.me/' . $clean_wa_hdr . '?text=' . rawurlencode('Hello Setinel Tech, I would like to discuss a project.');
            ?>
            <a href="<?php echo esc_url($wa_url_hdr); ?>" class="header-whatsapp-btn" target="_blank" rel="noopener noreferrer" title="<?php esc_attr_e('Chat on WhatsApp', 'setinel-tech'); ?>" aria-label="<?php esc_attr_e('WhatsApp Chat', 'setinel-tech'); ?>">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2m.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.27-2.42 5.82a8.19 8.19 0 0 1-5.82 2.42c-1.48 0-2.93-.39-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.18 8.18 0 0 1-1.23-4.38c0-4.54 3.7-8.24 8.24-8.24m4.53 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.4-1.75-.15-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.78 2.72 4.31 3.81.6.26 1.07.42 1.44.54.61.19 1.16.17 1.6.1.49-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.1-.23-.17-.48-.3"/>
                </svg>
            </a>
            <button id="theme-toggle" class="theme-toggle-btn" aria-label="<?php esc_attr_e('Toggle Theme Mode', 'setinel-tech'); ?>" title="<?php esc_attr_e('Toggle Light/Dark Theme', 'setinel-tech'); ?>">
                <svg class="sun-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5"></circle>
                    <line x1="12" y1="1" x2="12" y2="3"></line>
                    <line x1="12" y1="21" x2="12" y2="23"></line>
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                    <line x1="1" y1="12" x2="3" y2="12"></line>
                    <line x1="21" y1="12" x2="23" y2="12"></line>
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                </svg>
                <svg class="moon-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            </button>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-primary btn-sm">
                <span>Get in Touch</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
            <button class="mobile-toggle" aria-label="<?php esc_attr_e('Toggle navigation', 'setinel-tech'); ?>">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </div>
</header>
<main id="main-content">
