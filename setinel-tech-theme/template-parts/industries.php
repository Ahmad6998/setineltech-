<?php
/**
 * Industries We Serve & Testimonials Template Part (.industries-we-serve)
 *
 * @package Setinel_Tech
 */
?>
<section id="industries" class="industries-we-serve">
    <div class="container">
        <div class="industries-banner">
            <span style="font-size: 0.82rem; font-weight: 700; color: var(--gold-light); letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 8px; display: block;">CROSS-INDUSTRY EXPERTISE</span>
            <h2>Engineering Solutions Tailored Across 10+ Global Industry Verticals</h2>
        </div>

        <div class="industries-slider-container">
            <div class="industries-slider-header-bar">
                <div class="industries-slider-status">
                    <span class="status-dot"></span>
                    <span><?php esc_html_e('Interactive Industry Showcase (Auto-sliding • Swipe or use arrows)', 'setinel-tech'); ?></span>
                </div>
                <div class="industries-slider-controls">
                    <button class="industries-slider-btn prev" aria-label="<?php esc_attr_e('Previous Industry', 'setinel-tech'); ?>">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>
                    <button class="industries-slider-btn next" aria-label="<?php esc_attr_e('Next Industry', 'setinel-tech'); ?>">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="industries-slider-viewport">
                <div class="industries-slider-track">
                    <div class="industry-slide-item">
                        <div class="industry-slide-icon-wrap">💳</div>
                        <strong class="industry-slide-title">FinTech &amp; Banking</strong>
                        <span class="industry-slide-desc">High-throughput core processing, PCI-DSS compliance, and automated settlement engines.</span>
                    </div>
                    <div class="industry-slide-item">
                        <div class="industry-slide-icon-wrap">🏥</div>
                        <strong class="industry-slide-title">HealthTech &amp; Care</strong>
                        <span class="industry-slide-desc">HIPAA-compliant EHR portals, telehealth streaming, and medical device analytics.</span>
                    </div>
                    <div class="industry-slide-item">
                        <div class="industry-slide-icon-wrap">🛒</div>
                        <strong class="industry-slide-title">E-Commerce &amp; Retail</strong>
                        <span class="industry-slide-desc">Omnichannel POS sync, flash-sale auto-scaling, and headless store architectures.</span>
                    </div>
                    <div class="industry-slide-item">
                        <div class="industry-slide-icon-wrap">🚚</div>
                        <strong class="industry-slide-title">Logistics &amp; Supply</strong>
                        <span class="industry-slide-desc">Real-time GPS fleet telemetry, route optimization, and automated dispatch.</span>
                    </div>
                    <div class="industry-slide-item">
                        <div class="industry-slide-icon-wrap">🏢</div>
                        <strong class="industry-slide-title">Real Estate &amp; PropTech</strong>
                        <span class="industry-slide-desc">Interactive virtual walkthroughs, automated MLS feeds, and leasing management.</span>
                    </div>
                    <div class="industry-slide-item">
                        <div class="industry-slide-icon-wrap">☁️</div>
                        <strong class="industry-slide-title">SaaS &amp; Cloud Tools</strong>
                        <span class="industry-slide-desc">Multi-tenant Kubernetes microservices, billing integrations, and API gateways.</span>
                    </div>
                    <div class="industry-slide-item">
                        <div class="industry-slide-icon-wrap">🎓</div>
                        <strong class="industry-slide-title">EdTech &amp; Learning</strong>
                        <span class="industry-slide-desc">Gamified LMS platforms, live interactive streaming, and student progress engines.</span>
                    </div>
                    <div class="industry-slide-item">
                        <div class="industry-slide-icon-wrap">📡</div>
                        <strong class="industry-slide-title">Telecom &amp; Networks</strong>
                        <span class="industry-slide-desc">Carrier-grade OSS/BSS software, self-care mobile apps, and low-latency billing.</span>
                    </div>
                    <div class="industry-slide-item">
                        <div class="industry-slide-icon-wrap">🏭</div>
                        <strong class="industry-slide-title">Industrial IoT</strong>
                        <span class="industry-slide-desc">Edge sensor data pipelines, predictive machine maintenance, and SCADA UI.</span>
                    </div>
                    <div class="industry-slide-item">
                        <div class="industry-slide-icon-wrap">🏛️</div>
                        <strong class="industry-slide-title">Public Sector / GovTech</strong>
                        <span class="industry-slide-desc">FedRAMP/ISO security architectures, digital citizen portals, and e-governance.</span>
                    </div>
                </div>
            </div>

            <div class="industries-slider-dots"></div>
        </div>

        <!-- Testimonials Cards Grid -->
        <div style="margin-top: 70px;">
            <div class="section-head" style="text-align: center; margin-bottom: 40px;">
                <span style="font-size: 0.82rem; font-weight: 700; color: var(--gold-light); letter-spacing: 0.1em; text-transform: uppercase;">CLIENT VOICES</span>
                <h2 style="font-size: 2.2rem;">Trusted by Engineering &amp; Business Leaders</h2>
                <div class="dot-dash"></div>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card-new">
                    <div>
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="testimonial-quote">
                            "Setinel Tech re-architected our transaction processing engine from the ground up. We handled Black Friday volume exceeding 45,000 requests per second with 100% zero downtime and sub-20ms latency."
                        </p>
                    </div>
                    <div class="testimonial-client">
                        <div class="client-avatar">RK</div>
                        <div class="client-info">
                            <strong>Rehan Khan</strong>
                            <span>Chief Technology Officer, PayStream Global</span>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card-new">
                    <div>
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="testimonial-quote">
                            "Finding an engineering partner who understands both rapid agile development and strict HIPAA-compliant zero-trust security is rare. Setinel Tech delivered ahead of our launch deadline."
                        </p>
                    </div>
                    <div class="testimonial-client">
                        <div class="client-avatar">DR</div>
                        <div class="client-info">
                            <strong>Dr. David Ross</strong>
                            <span>VP of Digital Engineering, CareWave Health</span>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card-new">
                    <div>
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="testimonial-quote">
                            "Their 24/7 web handling team is phenomenal. Our infrastructure is continuously optimized, DDoS attacks are mitigated automatically, and our Core Web Vitals are all in the 95th percentile."
                        </p>
                    </div>
                    <div class="testimonial-client">
                        <div class="client-avatar">SM</div>
                        <div class="client-info">
                            <strong>Sarah Miller</strong>
                            <span>Head of Infrastructure, NexaCloud Systems</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
