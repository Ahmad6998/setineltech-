<?php
/**
 * Setinel Tech Front Page Template (TowerTech Enterprise Architecture)
 *
 * @package Setinel_Tech
 */

get_header();

// Hero Section with Terminal & Mouse Scroll
get_template_part('template-parts/hero');

// Section 1: Creating Value & Ensuring Customer Success (.section-frame with .sign-line)
get_template_part('template-parts/about-value');

// Section 2: Why Choose Setinel Tech? (.section-why 6-Pillar Grid with .dot-dash)
get_template_part('template-parts/why-us');

// Section 3: Accomplishments Figure Block (.figure-block Counters)
get_template_part('template-parts/accomplishments');

// Section 4: Services We Offer (.section-services 6-Card Grid)
get_template_part('template-parts/services');

// Section 5: Software Engineering Lifecycle Process (.section-procedure Accordion)
get_template_part('template-parts/software-process');

// Section 6: Industries We Serve & Client Testimonials (.industries-we-serve)
get_template_part('template-parts/industries');

// Section 7: Our Technology Partners & Ecosystem (.our-partners)
get_template_part('template-parts/partners');

// Section 8: Featured Case Studies & Builds (#case-studies)
get_template_part('template-parts/case-studies');

// Section 9: Aside Quote Call-to-Action Strip (.aside-quote)
get_template_part('template-parts/aside-quote');

// Section 10: Contact & Consultation Form (#contact)
get_template_part('template-parts/contact-section');

get_footer();
