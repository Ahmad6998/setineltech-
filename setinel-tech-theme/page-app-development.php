<?php
/**
 * Template Name: App Development Service Page
 * Template Post Type: page
 *
 * @package Setinel_Tech
 */

get_header();
?>

<div class="hero-section" style="padding-top: 140px; padding-bottom: 60px;">
    <div class="container">
        <div class="badge badge-emerald">Core Pillar 02</div>
        <h1>Mobile <span class="gradient-text">App Development</span></h1>
        <p class="hero-description" style="max-width: 720px;">
            We engineer high-performance mobile applications for iOS and Android. Built with React Native, Flutter, and native Swift/Kotlin to deliver seamless native performance, offline sync, and intuitive user experiences.
        </p>
    </div>
</div>

<div class="container section-spacing" style="padding-top: 0;">
    <div class="deep-dive-block">
        <div class="deep-dive-content">
            <div class="badge">Cross-Platform Velocity</div>
            <h2 style="margin-bottom: 18px;">One Codebase, Native Polish: React Native & Flutter</h2>
            <p style="margin-bottom: 20px;">
                Ship your iOS and Android apps simultaneously with single-codebase velocity without sacrificing smooth 60fps animations, biometric authentication, or device hardware access.
            </p>
            <ul class="service-feature-list">
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>React Native & Expo with Native Module bridges</span>
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Flutter & Dart for graphics-intensive UI components</span>
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>60% faster development cycle vs. duplicate native teams</span>
                </li>
            </ul>
        </div>
        <div class="deep-dive-visual">
            <div class="terminal-title">// mobile-runtime-health.sh</div>
            <div class="terminal-body">
                <span class="json-key">[BUILD]</span> Target: <span class="json-prop">iOS (App Store) &amp; Android (AAB Play)</span><br>
                <span class="json-key">[METRIC]</span> FPS Render Rate: <span class="json-val-num">60.0 FPS Stable</span><br>
                <span class="json-key">[MEMORY]</span> RAM Usage: <span class="json-val-num">42MB (Low footprint)</span><br>
                <span class="json-key">[OFFLINE]</span> SQLite Sync Status: <span class="json-val-str">100% Synchronized</span><br>
                <span class="json-key">[AUTH]</span> FaceID / Biometrics Bridge: <span class="json-val-num">Active</span>
            </div>
        </div>
    </div>

    <div class="deep-dive-block">
        <div class="deep-dive-content">
            <div class="badge badge-emerald">Native & Backend Sync</div>
            <h2 style="margin-bottom: 18px;">Real-Time Data & Seamless App Store Launches</h2>
            <p style="margin-bottom: 20px;">
                Our engineers manage every step of the mobile development lifecycle, from backend WebSocket architecture and push notification infrastructure to rigorous Apple App Store & Google Play Store guidelines compliance.
            </p>
            <ul class="service-feature-list">
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Push Notifications (Firebase Cloud Messaging & APNs)</span>
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>In-App Purchases (IAP) & Subscription Revenue Engines</span>
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <span>Guaranteed First-Submission App Store Review Approval</span>
                </li>
            </ul>
        </div>
        <div class="deep-dive-visual">
            <div class="terminal-title">// app-delivery-phases</div>
            <div class="terminal-body">
                1. <span class="json-key">UX Flow:</span> Interactive Figma Prototypes<br>
                2. <span class="json-key">Core Architecture:</span> API Contracts &amp; State Management<br>
                3. <span class="json-key">Hardware Integration:</span> Camera, GPS &amp; Biometrics<br>
                4. <span class="json-key">Automated Cloud QA:</span> Real Device Farm Verification<br>
                5. <span class="json-key">Store Deployment:</span> App Store &amp; Google Play Direct Launch
            </div>
        </div>
    </div>
</div>

<?php
get_template_part('template-parts/contact-section');
get_footer();
