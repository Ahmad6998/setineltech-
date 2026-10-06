<?php
/**
 * Services We Offer Template Part (.section-services)
 *
 * @package Setinel_Tech
 */
?>
<section id="services" class="section-services">
    <div class="container">
        <div class="header-textbox">
            <span style="font-size: 0.82rem; font-weight: 700; color: var(--gold-light); letter-spacing: 0.1em; text-transform: uppercase;">CORE CAPABILITIES</span>
            <h2>Services We Offer</h2>
            <span class="sign-line"></span>
        </div>

        <div class="services-content">
            <h5>Comprehensive Technology Engineering Tailored for Enterprise Scalability and Maximum Performance</h5>
            <div class="text-block-blue">
                <p>From modern cloud-native web architectures and high-impact mobile apps to round-the-clock infrastructure handling, our cross-functional squads deliver resilient, scalable, and defensible digital assets.</p>
            </div>
        </div>

        <div class="services-grid-new">
            <!-- Service 1: Web Development -->
            <div class="services-box-new">
                <div>
                    <div class="ico-holder">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <h5>Enterprise Web &amp; SaaS Development</h5>
                    <div class="service-para">
                        <p>Architecting robust, ultra-fast web applications, customer portals, and headless architectures with Next.js, React, Node.js, and modern PHP frameworks.</p>
                    </div>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 8px; margin-bottom: 24px; font-size: 0.88rem; color: var(--text-muted); padding: 0;">
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> Micro-frontend architectures</li>
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> Sub-second page speed &amp; Core Web Vitals</li>
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> Headless CMS &amp; API-first design</li>
                    </ul>
                </div>
                <a href="<?php echo esc_url(home_url('/web-development')); ?>" class="button btn-grey" style="width: 100%; text-align: center;">Explore Web Engineering</a>
            </div>

            <!-- Service 2: Mobile Apps -->
            <div class="services-box-new">
                <div>
                    <div class="ico-holder">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                            <line x1="12" y1="18" x2="12.01" y2="18"></line>
                        </svg>
                    </div>
                    <h5>Native &amp; Cross-Platform Mobile Apps</h5>
                    <div class="service-para">
                        <p>Building intuitive, fluid mobile experiences across iOS and Android with React Native and Flutter. Offline-first architectures with bi-directional syncing.</p>
                    </div>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 8px; margin-bottom: 24px; font-size: 0.88rem; color: var(--text-muted); padding: 0;">
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> 60 FPS smooth native interactions</li>
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> Biometric security &amp; local encrypted storage</li>
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> App Store &amp; Play Store release automation</li>
                    </ul>
                </div>
                <a href="<?php echo esc_url(home_url('/app-development')); ?>" class="button btn-grey" style="width: 100%; text-align: center;">Explore Mobile Engineering</a>
            </div>

            <!-- Service 3: 24/7 Web Handling -->
            <div class="services-box-new">
                <div>
                    <div class="ico-holder">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h5>24/7 Mission-Critical Web Handling</h5>
                    <div class="service-para">
                        <p>Autonomous site reliability engineering, proactive server maintenance, continuous security patching, and instant disaster recovery backed by strict SLAs.</p>
                    </div>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 8px; margin-bottom: 24px; font-size: 0.88rem; color: var(--text-muted); padding: 0;">
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> 15-minute emergency response SLA</li>
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> Real-time telemetry &amp; uptime monitoring</li>
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> Automated database backups &amp; rollbacks</li>
                    </ul>
                </div>
                <a href="<?php echo esc_url(home_url('/web-handling')); ?>" class="button btn-grey" style="width: 100%; text-align: center;">Explore Web Handling</a>
            </div>

            <!-- Service 4: Cloud DevOps -->
            <div class="services-box-new">
                <div>
                    <div class="ico-holder">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path>
                        </svg>
                    </div>
                    <h5>Cloud DevOps &amp; Infrastructure as Code</h5>
                    <div class="service-para">
                        <p>Architecting multi-region AWS and Google Cloud environments with Terraform, Docker, and Kubernetes for high availability, fault tolerance, and cost control.</p>
                    </div>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 8px; margin-bottom: 24px; font-size: 0.88rem; color: var(--text-muted); padding: 0;">
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> Auto-scaling container clusters</li>
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> Zero-downtime blue/green deployments</li>
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> Cloud spend optimization &amp; FinOps</li>
                    </ul>
                </div>
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="button btn-grey" style="width: 100%; text-align: center;">Consult Cloud Architect</a>
            </div>

            <!-- Service 5: Cyber Defense -->
            <div class="services-box-new">
                <div>
                    <div class="ico-holder">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </div>
                    <h5>Cyber Defense &amp; Zero-Trust Hardening</h5>
                    <div class="service-para">
                        <p>Defending digital perimeters against automated bot attacks, credential stuffing, zero-day vulnerabilities, and SQL injection with enterprise WAF policies.</p>
                    </div>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 8px; margin-bottom: 24px; font-size: 0.88rem; color: var(--text-muted); padding: 0;">
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> Web Application Firewall rule tuning</li>
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> SOC2 &amp; ISO27001 compliance readiness</li>
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> End-to-end payload encryption</li>
                    </ul>
                </div>
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="button btn-grey" style="width: 100%; text-align: center;">Request Security Audit</a>
            </div>

            <!-- Service 6: APIs -->
            <div class="services-box-new">
                <div>
                    <div class="ico-holder">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="4 17 10 11 4 5"></polyline>
                            <line x1="12" y1="19" x2="20" y2="19"></line>
                        </svg>
                    </div>
                    <h5>API Architecture &amp; Database Optimization</h5>
                    <div class="service-para">
                        <p>Designing high-throughput REST and GraphQL APIs, asynchronous queue architectures (Kafka/RabbitMQ), and sub-millisecond Redis caching layers.</p>
                    </div>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 8px; margin-bottom: 24px; font-size: 0.88rem; color: var(--text-muted); padding: 0;">
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> High-concurrency event-driven schemas</li>
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> PostgreSQL query indexing &amp; sharding</li>
                        <li style="display: flex; align-items: center; gap: 8px;"><span style="color: var(--gold-light);">✔</span> Third-party payment &amp; ERP integrations</li>
                    </ul>
                </div>
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="button btn-grey" style="width: 100%; text-align: center;">Inquire About APIs</a>
            </div>
        </div>
    </div>
</section>
