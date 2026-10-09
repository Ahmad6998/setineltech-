<?php
/**
 * Template Name: Web Development Service Page
 * Template Post Type: page
 *
 * @package Setinel_Tech
 */

get_header();
?>

<div class="hero-section" style="padding-top: 140px; padding-bottom: 60px;">
    <div class="container">
        <div class="badge">Core Pillar 01</div>
        <h1>Enterprise <span class="gradient-text">Web Development</span></h1>
        <p class="hero-description" style="max-width: 720px;">
            We engineer lightning-fast, high-conversion web platforms combining the modular power of WordPress with the blazing performance of modern React & Next.js architectures.
        </p>
    </div>
</div>

<div class="container section-spacing" style="padding-top: 0;">
    <div class="deep-dive-block">
        <div class="deep-dive-content">
            <div class="badge badge-emerald">Modern Architecture</div>
            <h2 style="margin-bottom: 18px;">Headless & Custom WordPress Systems</h2>
            <p style="margin-bottom: 20px;">
                WordPress powers over 43% of the internet, but standard off-the-shelf themes are bloated and sluggish. Setinel Tech crafts custom, lightweight, enterprise-grade WordPress themes and headless decoupled backends that score 99+ on Google Core Web Vitals.
            </p>
            <ul class="service-feature-list">
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Custom Block Themes & Advanced Custom Fields (ACF Pro)</span>
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Clean PHP & REST API / WPGraphQL Decoupled Endpoints</span>
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Sub-second page loads without heavy plugin dependencies</span>
                </li>
            </ul>
        </div>
        <div class="deep-dive-visual">
            <div class="terminal-title">// web-performance-audit.json</div>
            <div class="terminal-body">
                <span class="json-key">"scores"</span>: {<br>
                &nbsp;&nbsp;<span class="json-prop">"performance"</span>: <span class="json-val-num">100</span>,<br>
                &nbsp;&nbsp;<span class="json-prop">"accessibility"</span>: <span class="json-val-num">98</span>,<br>
                &nbsp;&nbsp;<span class="json-prop">"best_practices"</span>: <span class="json-val-num">100</span>,<br>
                &nbsp;&nbsp;<span class="json-prop">"seo"</span>: <span class="json-val-num">100</span><br>
                },<br>
                <span class="json-key">"metrics"</span>: {<br>
                &nbsp;&nbsp;<span class="json-prop">"first_contentful_paint"</span>: <span class="json-val-str">"0.38s"</span>,<br>
                &nbsp;&nbsp;<span class="json-prop">"largest_contentful_paint"</span>: <span class="json-val-str">"0.62s"</span>,<br>
                &nbsp;&nbsp;<span class="json-prop">"cumulative_layout_shift"</span>: <span class="json-val-str">"0.000"</span><br>
                }
            </div>
        </div>
    </div>

    <div class="deep-dive-block">
        <div class="deep-dive-content">
            <div class="badge">E-Commerce & Full-Stack</div>
            <h2 style="margin-bottom: 18px;">Scalable E-Commerce & Custom SaaS</h2>
            <p style="margin-bottom: 20px;">
                Whether you need high-volume WooCommerce engineering with automated payment gateways or a bespoke SaaS platform with subscription billing, our web team delivers frictionless user flows and rock-solid reliability.
            </p>
            <ul class="service-feature-list">
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Stripe, PayPal & Custom Multi-Currency Gateways</span>
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Automated Inventory & ERP Synchronization</span>
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Zero-Downtime Migration from Legacy CMS Platforms</span>
                </li>
            </ul>
        </div>
        <div class="deep-dive-visual">
            <div class="terminal-title">// architecture-overview</div>
            <div class="terminal-body">
                • <span class="json-key">Edge CDN Caching:</span> Cloudflare Global Anycast<br>
                • <span class="json-key">Server-Side Rendering:</span> Next.js / Node.js Engine<br>
                • <span class="json-key">Headless Data Layer:</span> WordPress REST API + MySQL 8.0<br>
                • <span class="json-key">High Availability:</span> Redis Object Cache &amp; Automated Session Pooling
            </div>
        </div>
    </div>
</div>

<?php
get_template_part('template-parts/contact-section');
get_footer();
