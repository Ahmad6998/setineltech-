<?php
/**
 * Hero Section Template Part
 *
 * @package Setinel_Tech
 */
$hero_title = get_theme_mod('setinel_hero_tagline', 'Architecting Next-Gen Web, Mobile & Cloud Systems');
?>
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="badge">
                    <span class="badge-pulse"></span>
                    <span>ENTERPRISE DIGITAL ENGINEERING</span>
                </div>
                <h1><?php echo esc_html($hero_title); ?></h1>
                <p class="hero-description">
                    Setinel Tech empowers modern businesses with resilient web development, high-performance mobile apps, and mission-critical 24/7 web handling. Zero downtime. Bulletproof code.
                </p>
                <div class="hero-cta-group">
                    <a href="#contact" class="btn btn-primary">
                        <span>Request a Proposal</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="#services" class="btn btn-secondary">
                        <span>Our 3 Core Pillars</span>
                    </a>
                </div>
            </div>

            <div class="hero-preview">
                <div class="hero-preview-card">
                    <div class="terminal-header">
                        <div class="terminal-dots">
                            <span class="terminal-dot dot-red"></span>
                            <span class="terminal-dot dot-yellow"></span>
                            <span class="terminal-dot dot-green"></span>
                        </div>
                        <div class="terminal-title">setinel-ops-cluster-01.sys</div>
                        <div style="font-size: 0.75rem; color: var(--emerald-light); font-weight: 600;">ACTIVE</div>
                    </div>
                    <div class="terminal-body">
                        <div class="term-line">
                            <span class="term-prompt">$</span>
                            <span class="term-cmd">setinel-guard --check-health --env=production</span>
                        </div>
                        <div style="color: var(--text-dark); margin-bottom: 12px; font-size: 0.8rem;">
                            [OK] DNS Cluster Cloudflare Enterprise: Synced<br>
                            [OK] SSL/TLS Edge Certificates: Valid (Auto-renewed)<br>
                            [OK] Core Web Vitals: LCP 0.8s, FID 12ms, CLS 0.00
                        </div>

                        <div class="term-status-grid">
                            <div class="term-stat-box">
                                <div class="term-stat-label">System Uptime</div>
                                <div class="term-stat-val">99.998%</div>
                            </div>
                            <div class="term-stat-box">
                                <div class="term-stat-label">Global Latency</div>
                                <div class="term-stat-val" id="stat-latency">18.4ms</div>
                            </div>
                            <div class="term-stat-box">
                                <div class="term-stat-label">Throughput</div>
                                <div class="term-stat-val" id="stat-active-reqs">1,480 req/s</div>
                            </div>
                            <div class="term-stat-box">
                                <div class="term-stat-label">Security Shield</div>
                                <div class="term-stat-val" style="color: var(--violet-light);">Active (Zero Threat)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Metrics Strip -->
<div class="metrics-strip">
    <div class="container">
        <div class="metrics-grid">
            <div class="metric-item">
                <div class="metric-number">99.99%</div>
                <div class="metric-label">Guaranteed Uptime SLA</div>
            </div>
            <div class="metric-item">
                <div class="metric-number">150+</div>
                <div class="metric-label">Digital Platforms Built</div>
            </div>
            <div class="metric-item">
                <div class="metric-number">&lt; 250ms</div>
                <div class="metric-label">Average Edge Response</div>
            </div>
            <div class="metric-item">
                <div class="metric-number">24/7/365</div>
                <div class="metric-label">Autonomous Web Handling</div>
            </div>
        </div>
    </div>
</div>
