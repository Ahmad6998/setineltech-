<?php
/**
 * Setinel Tech Theme Functions and Definitions
 *
 * @package Setinel_Tech
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('SETINEL_TECH_VERSION', '1.0.0');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function setinel_tech_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 630, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary-menu'   => __('Primary Navigation', 'setinel-tech'),
        'footer-services'=> __('Footer Services Menu', 'setinel-tech'),
        'footer-company' => __('Footer Company Menu', 'setinel-tech'),
    ));

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for core custom logo.
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 280,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'setinel_tech_setup');

/**
 * Enqueue scripts and styles.
 */
function setinel_tech_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'setinel-tech-fonts',
        'https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600&family=Outfit:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Main Stylesheet
    wp_enqueue_style(
        'setinel-tech-theme-style',
        get_stylesheet_uri(),
        array('setinel-tech-fonts'),
        SETINEL_TECH_VERSION
    );

    // Main Interactive JS
    wp_enqueue_script(
        'setinel-tech-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        SETINEL_TECH_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'setinel_tech_scripts');

/**
 * Register widget area.
 */
function setinel_tech_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Column 1', 'setinel-tech'),
        'id'            => 'footer-col-1',
        'description'   => __('Add widgets here to appear in footer column 1.', 'setinel-tech'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 2', 'setinel-tech'),
        'id'            => 'footer-col-2',
        'description'   => __('Add widgets here to appear in footer column 2.', 'setinel-tech'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'setinel_tech_widgets_init');

/**
 * Customizer Additions for Setinel Tech.
 */
function setinel_tech_customize_register($wp_customize) {
    // Agency Contact & Info Section
    $wp_customize->add_section('setinel_agency_options', array(
        'title'    => __('Setinel Tech Settings', 'setinel-tech'),
        'priority' => 30,
    ));

    // Contact Email
    $wp_customize->add_setting('setinel_contact_email', array(
        'default'           => 'contact@setineltech.io',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('setinel_contact_email', array(
        'label'    => __('Agency Contact Email', 'setinel-tech'),
        'section'  => 'setinel_agency_options',
        'type'     => 'email',
    ));

    // Contact Phone
    $wp_customize->add_setting('setinel_contact_phone', array(
        'default'           => '+92 300 0941144',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('setinel_contact_phone', array(
        'label'    => __('Agency Phone Number', 'setinel-tech'),
        'section'  => 'setinel_agency_options',
        'type'     => 'text',
    ));

    // WhatsApp Number
    $wp_customize->add_setting('setinel_whatsapp_number', array(
        'default'           => '923000941144',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('setinel_whatsapp_number', array(
        'label'    => __('WhatsApp Phone Number (with country code, e.g. 923000941144)', 'setinel-tech'),
        'section'  => 'setinel_agency_options',
        'type'     => 'text',
    ));

    // Hero Tagline
    $wp_customize->add_setting('setinel_hero_tagline', array(
        'default'           => 'Architecting Next-Gen Web, Mobile & Cloud Systems',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('setinel_hero_tagline', array(
        'label'    => __('Hero Main Headline', 'setinel-tech'),
        'section'  => 'setinel_agency_options',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'setinel_tech_customize_register');

/**
 * Fallback Navigation Menu
 */
function setinel_tech_default_menu() {
    $home_url = esc_url(home_url('/'));
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . $home_url . '" class="nav-link">' . esc_html__('Home', 'setinel-tech') . '</a></li>';
    echo '<li><a href="' . $home_url . '#services" class="nav-link">' . esc_html__('Services', 'setinel-tech') . '</a></li>';
    echo '<li><a href="' . $home_url . '#handling" class="nav-link">' . esc_html__('Web Handling', 'setinel-tech') . '</a></li>';
    echo '<li><a href="' . $home_url . '#tech-stack" class="nav-link">' . esc_html__('Tech Stack', 'setinel-tech') . '</a></li>';
    echo '<li><a href="' . $home_url . '#case-studies" class="nav-link">' . esc_html__('Case Studies', 'setinel-tech') . '</a></li>';
    echo '<li><a href="' . $home_url . '#contact" class="nav-link">' . esc_html__('Contact', 'setinel-tech') . '</a></li>';
    echo '</ul>';
}
