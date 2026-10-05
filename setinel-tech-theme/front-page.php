<?php
/**
 * Setinel Tech Front Page Template
 *
 * @package Setinel_Tech
 */

get_header();

// Hero Section
get_template_part('template-parts/hero');

// 3 Core Services: Web Dev, App Dev, Web Handling
get_template_part('template-parts/services');

// Web Handling & 24/7 Operations SLA Tiers
get_template_part('template-parts/handling-plans');

// Engineering Arsenal / Tech Stacks
get_template_part('template-parts/tech-stack');

// Case Studies
get_template_part('template-parts/case-studies');

// Contact Form & Project Scoping
get_template_part('template-parts/contact-section');

get_footer();
