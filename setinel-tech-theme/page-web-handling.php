<?php
/**
 * Template Name: Web Handling Service Page
 * Template Post Type: page
 *
 * @package Setinel_Tech
 */

get_header();
?>

<div class="hero-section" style="padding-top: 140px; padding-bottom: 60px;">
    <div class="container">
        <div class="badge badge-emerald">Core Pillar 03</div>
        <h1>Autonomous <span class="gradient-text">Web Handling & DevOps</span></h1>
        <p class="hero-description" style="max-width: 720px;">
            Eliminate website downtime, security vulnerabilities, and slow loading times forever. Setinel Tech acts as your dedicated 24/7 web operations team, handling hosting, security, backups, updates, and speed optimization around the clock.
        </p>
    </div>
</div>

<div class="container section-spacing" style="padding-top: 0;">
    <div class="deep-dive-block">
        <div class="deep-dive-content">
            <div class="badge">Zero Downtime Philosophy</div>
            <h2 style="margin-bottom: 18px;">What Does Setinel Web Handling Include?</h2>
            <p style="margin-bottom: 20px;">
                Most businesses only think about their website when it breaks or gets hacked. Our proactive Web Handling model detects anomalies before they affect your users or cause lost revenue.
            </p>
            <ul class="service-feature-list">
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span><strong>Continuous 60-Second Health Probing:</strong> Real-time HTTP, SSL, and DB checks.</span>
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span><strong>Automated Encrypted Backups:</strong> Hourly and daily offsite storage with 1-click restore.</span>
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span><strong>Security Hardening & WAF:</strong> Custom rules to block bots, brute-force attacks, and DDoS.</span>
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span><strong>Safe Staging Updates:</strong> All WordPress core, theme, and plugin updates tested in sandbox.</span>
                </li>
            </ul>
        </div>
        <div class="deep-dive-visual">
            <div style="font-family: var(--font-mono); font-size: 0.85rem; color: var(--emerald-light); margin-bottom: 10px;">// setinel-handling-daemon.log</div>
            <div style="background: rgba(0,0,0,0.5); padding: 18px; border-radius: 8px; font-family: var(--font-mono); font-size: 0.8rem; line-height: 1.6;">
                10:42:01 [DAEMON] Ping check completed: 200 OK (TTFB: 42ms)<br>
                10:42:03 [BACKUP] S3 Snapshot created: setinel-db-auto.sql.enc<br>
                10:42:05 [WAF] Blocked 14 malicious SQL injection attempts (Cloudflare)<br>
                10:42:09 [CACHE] Redis hit ratio: <span style="color: #34d399;">98.6%</span><br>
                10:42:15 [STATUS] System Health: <span style="color: #34d399;">ALL SYSTEMS NOMINAL</span>
            </div>
        </div>
    </div>
</div>

<?php
get_template_part('template-parts/handling-plans');
get_template_part('template-parts/contact-section');
get_footer();
