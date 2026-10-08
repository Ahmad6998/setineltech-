<?php
/**
 * Software Engineering Process Template Part (.section-procedure)
 *
 * @package Setinel_Tech
 */
?>
<section id="process" class="section-procedure">
    <div class="container">
        <div class="section-head">
            <span style="font-size: 0.82rem; font-weight: 700; color: var(--gold-light); letter-spacing: 0.1em; text-transform: uppercase;">HOW WE WORK</span>
            <h2>Our 6-Stage Engineering Process</h2>
            <div class="dot-dash"></div>
            <p>A battle-tested methodology that balances rapid delivery velocity with rigorous architectural stability.</p>
        </div>

        <div class="process-tabs-wrap">
            <!-- Accordion List -->
            <ul class="process-accordion">
                <!-- Stage 1 -->
                <li class="process-acc-item active" data-step="1">
                    <div class="process-acc-header">
                        <div class="left-info">
                            <div class="step-badge">01</div>
                            <h5>Discovery &amp; Technical Requirements Gathering</h5>
                        </div>
                        <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                    <div class="process-acc-body">
                        We conduct an exhaustive technical discovery: analyzing existing infrastructure, documenting latency bottlenecks, mapping data flows, and defining non-functional requirements such as peak concurrent users and failover tolerances.
                    </div>
                </li>

                <!-- Stage 2 -->
                <li class="process-acc-item" data-step="2">
                    <div class="process-acc-header">
                        <div class="left-info">
                            <div class="step-badge">02</div>
                            <h5>Architecture Design &amp; Threat Modeling</h5>
                        </div>
                        <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                    <div class="process-acc-body">
                        Our principal engineers draft full system blueprints, database entity-relationship models, API schemas, and cybersecurity threat vectors before writing a single line of production code.
                    </div>
                </li>

                <!-- Stage 3 -->
                <li class="process-acc-item" data-step="3">
                    <div class="process-acc-header">
                        <div class="left-info">
                            <div class="step-badge">03</div>
                            <h5>Agile Engineering &amp; Automated CI/CD</h5>
                        </div>
                        <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                    <div class="process-acc-body">
                        Bi-weekly sprint execution with transparent GitHub repositories, continuous integration test suites, automated linting, and continuous staging previews for stakeholder verification.
                    </div>
                </li>

                <!-- Stage 4 -->
                <li class="process-acc-item" data-step="4">
                    <div class="process-acc-header">
                        <div class="left-info">
                            <div class="step-badge">04</div>
                            <h5>Stress Testing &amp; Quality Assurance</h5>
                        </div>
                        <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                    <div class="process-acc-body">
                        We simulate peak load scenarios up to 50,000+ simultaneous virtual connections, run automated security penetration audits, verify WCAG accessibility, and ensure sub-second Core Web Vitals.
                    </div>
                </li>

                <!-- Stage 5 -->
                <li class="process-acc-item" data-step="5">
                    <div class="process-acc-header">
                        <div class="left-info">
                            <div class="step-badge">05</div>
                            <h5>Zero-Downtime Deployment &amp; Cloud Launch</h5>
                        </div>
                        <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                    <div class="process-acc-body">
                        Blue-green Kubernetes cluster routing, global CDN warm-up, DNS cutover with zero downtime, and instant automated rollback safeguards should any threshold fail.
                    </div>
                </li>

                <!-- Stage 6 -->
                <li class="process-acc-item" data-step="6">
                    <div class="process-acc-header">
                        <div class="left-info">
                            <div class="step-badge">06</div>
                            <h5>24/7 Monitoring, SRE Support &amp; Continuous Scaling</h5>
                        </div>
                        <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                    <div class="process-acc-body">
                        Proactive round-the-clock site reliability engineering, telemetry alerting, automated weekly dependency updates, database index optimization, and ongoing architectural scaling.
                    </div>
                </li>
            </ul>

            <!-- Dynamic Visual Graphic -->
            <div class="process-visual-box">
                <div style="font-size: 0.78rem; font-weight: 700; color: var(--gold-light); letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 16px;" id="process-preview-step">PHASE 01</div>
                <div class="circle-chart">
                    <span class="chart-inner-icon" id="process-preview-icon">🔍</span>
                </div>
                <h4 id="process-preview-title">Discovery &amp; Technical Requirements</h4>
                <p id="process-preview-desc">In-depth consultation, system architecture audit, threat vector analysis, and precise technical specification.</p>
                <div class="process-visual-meta" style="margin-top: 24px; padding-top: 20px; border-top: 1px solid var(--border-subtle); display: flex; justify-content: space-around; text-align: left;">
                    <div>
                        <span style="font-size: 0.75rem; color: var(--text-muted); display: block;">Deliverable</span>
                        <strong style="font-size: 0.88rem; color: var(--text-main);">Technical Blueprint</strong>
                    </div>
                    <div>
                        <span style="font-size: 0.75rem; color: var(--text-muted); display: block;">SLA Confidence</span>
                        <strong style="font-size: 0.88rem; color: #10b981;">100% Guaranteed</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
