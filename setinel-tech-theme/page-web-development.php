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
            <div style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--emerald-light); margin-bottom: 10px;">// web-performance-audit.json</div>
            <div style="background: rgba(0,0,0,0.5); padding: 18px; border-radius: 8px; font-family: var(--font-mono); font-size: 0.8rem; line-height: 1.6;">
                "scores": {<br>
                &nbsp;&nbsp;"performance": <span style="color: #34d399;">100</span>,<br>
                &nbsp;&nbsp;"accessibility": <span style="color: #34d399;">98</span>,<br>
                &nbsp;&nbsp;"best_practices": <span style="color: #34d399;">100</span>,<br>
                &nbsp;&nbsp;"seo": <span style="color: #34d399;">100</span><br>
                },<br>
                "metrics": {<br>
                &nbsp;&nbsp;"first_contentful_paint": "<span style="color: #a78bfa;">0.38s</span>",<br>
                &nbsp;&nbsp;"largest_contentful_paint": "<span style="color: #a78bfa;">0.62s</span>",<br>
                &nbsp;&nbsp;"cumulative_layout_shift": "<span style="color: #a78bfa;">0.000</span>"<br>
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
            <div style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--violet-light); margin-bottom: 10px;">// architecture-overview</div>
            <div style="background: rgba(0,0,0,0.5); padding: 18px; border-radius: 8px; font-size: 0.85rem; color: #cbd5e1; line-height: 1.7;">
                • Edge CDN Caching (Cloudflare Global Anycast)<br>
                • Server-Side Rendering (Next.js / Node.js Engine)<br>
                • Headless Data Layer (WordPress Rest API + MySQL 8.0)<br>
                • Redis Object Cache & Automated Session Pooling
            </div>
        </div>
    </div>
</div>

<?php
get_template_part('template-parts/contact-section');
get_footer();
