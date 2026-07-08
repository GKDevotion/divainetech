<?php
include_once('elements/header.php');
?>

<style>
  
    /* SHARED */
    .section-eyebrow {
        font-size: 1.5rem;
        font-weight: 600;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: var(--gold);
        margin-bottom: 0.8rem;
    }

    .section-title { 
        font-family: 'DM Sans', sans-serif;
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 700; 
        line-height: 1.2;
        letter-spacing: -0.02em;
    }

    .section-lead {
        font-size: 1.5rem;
        font-weight: 300;
        color: #4a4a4a;
        line-height: 1.8;
        max-width: 600px;
    }

    /* WHY US */
    .why-us {
        padding: 6rem 0;
        background: #faf8f4;
    }

    .value-card {
        background: #ffffff;
        border: 1px solid #e8e0d0;
        border-radius: 30px;
        padding: 2rem 1.8rem;
        height: 100%;
        position: relative;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .value-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: var(--gold);
        transform: scaleY(0);
        transform-origin: bottom;
        transition: transform 0.35s ease;
    }

    .value-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 36px rgba(0, 0, 0, 0.09);
    }

    .value-card:hover::before {
        transform: scaleY(1);
    }

    .value-icon {
        width: 48px;
        height: 48px;
        background: #f5ead8;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.2rem;
        transition: background 0.3s;
    }

 
    .value-card h5 { 
        font-size: 1.15rem;
        font-weight: 600;
        margin-bottom: 0.6rem;
        color: #1a1a1a;
    }

    .value-card p {
        font-size: 1rem;
        color: #8a8a8a;
        line-height: 1.7;
        margin: 0;
    }

    /* OPEN ROLES */
    .open-roles {
        padding: 6rem 0;
    }

    .filter-tabs {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        margin-bottom: 2rem;
    }

    .filter-tab {
        font-size: 1rem;
        font-weight: 500;
        letter-spacing: 0.04em;
        padding: 0.5rem 1.2rem;
        border: 1px solid #e8e0d0;
        border-radius: 100px;
        background: transparent;
        color: #8a8a8a;
        cursor: pointer;
        transition: all 0.2s;
    }

    .filter-tab:hover,
    .filter-tab.active {
        background: var(--gold);
        border-color: var(--gold);
        color: #ffffff;
    }

    .job-card {
        border: 1px solid #e8e0d0;
        border-radius: 20px;
        padding: 1.6rem 1.8rem;
        background: #ffffff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        transition: border-color 0.25s, box-shadow 0.25s, transform 0.25s;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        text-decoration: none;
        color: inherit;
    }

    .job-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: var(--gold);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.35s ease;
    }

    .job-card:hover {
        border-color: rgba(170, 128, 56, 0.3);
        box-shadow: 0 6px 24px rgba(170, 128, 56, 0.1);
        transform: translateX(4px);
        color: inherit;
    }

    .job-card:hover::after {
        transform: scaleX(1);
    }

    .job-dept {
        font-size: 1rem;
        font-weight: 600;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        color: var(--gold);
        margin-bottom: 0.3rem;
    }

    .job-title { 
        font-size: 1.5rem;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 0.5rem;
    }

    .job-meta {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .job-tag {
        font-size: 1.2rem;
        color: #8a8a8a;
        display: flex;
        align-items: center;
        gap: 0.3rem;
    }

    .job-arrow {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid #e8e0d0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: background 0.2s, border-color 0.2s;
    }

    .job-card:hover .job-arrow {
        background: var(--gold);
        border-color: var(--gold);
    }

    .job-card:hover .job-arrow svg path {
        stroke: #ffffff;
    }

    /* PROCESS */
    .process-section {
        padding: 6rem 0; 
    }

    .process-section .section-title {
        color: #000;
    }

    .process-section .section-lead {
        color: #626262;
    }

    .process-step {
        position: relative;
        padding-left: 1.5rem;
    }

    .process-step::before {
        content: '';
        position: absolute;
        left: 2px;
        top: 28px;
        bottom: -40px;
        width: 1px;
        background: linear-gradient(to bottom, var(--gold), transparent);
    }

    .process-step:last-child::before {
        display: none;
    }

    .step-num {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--gold);
        letter-spacing: 0.15em;
        margin-bottom: 0.4rem;
    }

    .step-dot {
        position: absolute;
        left: -5px;
        top: 6px;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background: var(--gold);
        border: 1px solid #fff;
    }

    .step-title { 
        font-size: 1.5rem;
        font-weight: 600;
        color: #000;
        margin-bottom: 0.5rem;
    }

    .step-desc {
        font-size: 1rem;
        color: #000;
        line-height: 1.7;
    }

    /* CULTURE */
    .culture-grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 12px;
    }

    .culture-cell {
        border-radius: 6px;
        overflow: hidden;
    }

    .culture-cell-inner {
        width: 100%;
        display: flex;
        align-items: flex-end;
        padding: 1.2rem;
        position: relative;
    }

    .culture-cell:nth-child(1) {
        grid-column: span 7;
    }

    .culture-cell:nth-child(2) {
        grid-column: span 5;
    }

    .culture-cell:nth-child(3) {
        grid-column: span 4;
    }

    .culture-cell:nth-child(4) {
        grid-column: span 8;
    }

    .culture-label {
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--gold);
        background: rgba(255, 255, 255, 0.92);
        padding: 0.3rem 0.8rem;
        border-radius: 2px;
    }

    /* PERKS */
    .perks-section {
        padding: 5rem 0;
        background: #faf8f4;
    }

    .perk-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1.4rem 0;
        border-bottom: 1px solid #e8e0d0;
    }

    .perk-item:last-child {
        border-bottom: none;
    }

    .perk-dot {
        width: 15px;
        height: 15px;
        background: var(--gold);
        border-radius: 50%;
        margin-top: 0.55rem;
        flex-shrink: 0;
    }

    .perk-name {
        font-weight: 600;
        font-size: 1.5rem;
        margin-bottom: 0.2rem;
        color: #000;
    }

    .perk-desc {
        font-size: 1.2rem;
        color: #8a8a8a;
        line-height: 1.6;
        margin: 0;
    }

    /* CTA BAND */
    .cta-band {
        padding: 6rem 0;
        background: var(--gold);
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .cta-band::before {
        content: '';
        position: absolute;
        inset: 0;
        background: repeating-linear-gradient(45deg, transparent, transparent 30px, rgba(255, 255, 255, 0.04) 30px, rgba(255, 255, 255, 0.04) 60px);
    }

    .cta-band-title {
        font-family: 'Playfair Display', serif;
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 700;
        color: #ffffff;
        letter-spacing: -0.02em;
        margin-bottom: 1rem;
    }

    .cta-band-sub {
        font-size: 1.5rem;
        color: rgba(255, 255, 255, 0.75);
        margin-bottom: 2.5rem;
        font-weight: 300;
    }

    .btn-white {
        background: #ffffff;
        color: var(--gold);
        font-weight: 700;
        font-size: 0.9rem;
        letter-spacing: 0.05em;
        padding: 0.9rem 2.2rem;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-white:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        color: var(--gold);
    }
 

    /* SCROLL REVEAL */
    .reveal {
        opacity: 0;
        transform: translateY(28px);
        transition: opacity 0.65s ease, transform 0.65s ease;
    }

    .reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .reveal-delay-1 {
        transition-delay: 0.1s;
    }

    .reveal-delay-2 {
        transition-delay: 0.2s;
    }

    .reveal-delay-3 {
        transition-delay: 0.3s;
    }

    .reveal-delay-4 {
        transition-delay: 0.4s;
    }

    @media (prefers-reduced-motion: reduce) {
        .reveal {
            opacity: 1;
            transform: none;
            transition: none;
        } 
    }

    @media (max-width: 991px) {
    
        .culture-cell:nth-child(1) {
            grid-column: span 12;
        }

        .culture-cell:nth-child(2) {
            grid-column: span 12;
        }

        .culture-cell:nth-child(3) {
            grid-column: span 6;
        }

        .culture-cell:nth-child(4) {
            grid-column: span 6;
        }
    }

    @media (max-width: 575px) {
      
        .culture-cell {
            grid-column: span 12 !important;
        }

        .job-card {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>

<section class="top-banner-background" style="background-image: url('assets/images/banner-img.png');">
    <div>
        <h1 class="mb-0 text-center" >
            Career
        </h1>
        <p class="text-black text-center mt-2">
                Join our team and build a successful career with us.
        </p>
    </div>
</section>
 
<!-- WHY US -->
<section class="why-us" id="culture">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 reveal">
                <p class="section-eyebrow">Why Aurum</p>
                <h2 class="section-title">A place where your best work lives</h2>
            </div>
            <div class="col-lg-5 offset-lg-1 d-flex align-items-end reveal reveal-delay-1">
                <p class="section-lead">We design environments for impact, not attendance. Every role is an opportunity to own something real.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 reveal">
                <div class="value-card">
                    <div class="value-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#aa8038" stroke-width="2" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5>Ownership Culture</h5>
                    <p>Every team member leads meaningful work. No cogs, no gatekeeping — just deep responsibility and trust.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal reveal-delay-1">
                <div class="value-card">
                    <div class="value-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="9" stroke="#aa8038" stroke-width="2" />
                            <path d="M12 7v5l3 3" stroke="#aa8038" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h5>Async-First Work</h5>
                    <p>Deep focus isn't scheduled around meetings. We build tools, culture, and rituals for thoughtful async collaboration.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal reveal-delay-2">
                <div class="value-card">
                    <div class="value-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="#aa8038" stroke-width="2" />
                            <circle cx="9" cy="7" r="4" stroke="#aa8038" stroke-width="2" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" stroke="#aa8038" stroke-width="2" />
                        </svg>
                    </div>
                    <h5>Diverse by Design</h5>
                    <p>120+ team members across 18 countries. We actively recruit from underrepresented communities and measure our progress.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal reveal-delay-3">
                <div class="value-card">
                    <div class="value-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M12 20V10M18 20V4M6 20v-4" stroke="#aa8038" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h5>Real Growth</h5>
                    <p>Structured promotions, personal learning budgets, and a mentorship program that actually works.</p>
                </div>
            </div>
        </div>
    </div>
</section>
 
<!-- OPEN ROLES -->
<section class="open-roles" id="roles">

    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-6 reveal">
                <p class="section-eyebrow">Open Positions</p>
                <h2 class="section-title">Find your role</h2>
            </div>
        </div>

        <div class="filter-tabs reveal">
            <button class="filter-tab active" onclick="filterJobs('all',this)">All Roles</button>
            <button class="filter-tab" onclick="filterJobs('Engineering',this)">Engineering</button>
            <button class="filter-tab" onclick="filterJobs('Design',this)">Design</button>
            <button class="filter-tab" onclick="filterJobs('Product',this)">Product</button>
            <button class="filter-tab" onclick="filterJobs('Marketing',this)">Marketing</button>
            <button class="filter-tab" onclick="filterJobs('Operations',this)">Operations</button>
        </div>

        <div class="d-flex flex-column gap-3" id="jobList">

            <a class="job-card reveal" data-dept="Engineering" href="javascript:void();">
                <div>
                    <div class="job-dept">Engineering</div>
                    <div class="job-title">Senior Frontend Engineer</div>
                    <div class="job-meta">
                        <span class="job-tag"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Remote</span>
                        <span class="job-tag"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="7" width="20" height="14" rx="2" />
                            </svg>Full-time</span>
                        <span class="job-tag">$120k – $160k</span>
                    </div>
                </div>
                <div class="job-arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12h14M12 5l7 7-7 7" stroke="#4a4a4a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
            </a>

            <a class="job-card reveal reveal-delay-1" data-dept="Design" href="javascript:void();">
                <div>
                    <div class="job-dept">Design</div>
                    <div class="job-title">Lead Product Designer</div>
                    <div class="job-meta">
                        <span class="job-tag"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Hybrid · Mumbai</span>
                        <span class="job-tag"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="7" width="20" height="14" rx="2" />
                            </svg>Full-time</span>
                    </div>
                </div>
                <div class="job-arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12h14M12 5l7 7-7 7" stroke="#4a4a4a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
            </a>

            <a class="job-card reveal reveal-delay-2" data-dept="Product" href="javascript:void();">
                <div>
                    <div class="job-dept">Product</div>
                    <div class="job-title">Product Manager — Growth</div>
                    <div class="job-meta">
                        <span class="job-tag"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Remote</span>
                        <span class="job-tag"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="7" width="20" height="14" rx="2" />
                            </svg>Full-time</span>
                    </div>
                </div>
                <div class="job-arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12h14M12 5l7 7-7 7" stroke="#4a4a4a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
            </a>

            <a class="job-card reveal reveal-delay-3" data-dept="Engineering" href="javascript:void();">
                <div>
                    <div class="job-dept">Engineering</div>
                    <div class="job-title">Backend Engineer — Platform</div>
                    <div class="job-meta">
                        <span class="job-tag"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Remote</span>
                        <span class="job-tag">$100k – $140k</span>
                    </div>
                </div>
                <div class="job-arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12h14M12 5l7 7-7 7" stroke="#4a4a4a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
            </a>

            <a class="job-card reveal reveal-delay-4" data-dept="Marketing" href="javascript:void();">
                <div>
                    <div class="job-dept">Marketing</div>
                    <div class="job-title">Content Strategist</div>
                    <div class="job-meta">
                        <span class="job-tag"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Remote</span>
                        <span class="job-tag">Contract</span>
                    </div>
                </div>
                <div class="job-arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12h14M12 5l7 7-7 7" stroke="#4a4a4a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
            </a>

            <a class="job-card reveal" data-dept="Operations" href="javascript:void();">
                <div>
                    <div class="job-dept">Operations</div>
                    <div class="job-title">People &amp; Culture Lead</div>
                    <div class="job-meta">
                        <span class="job-tag"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Hybrid · Bengaluru</span>
                        <span class="job-tag">Full-time</span>
                    </div>
                </div>
                <div class="job-arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12h14M12 5l7 7-7 7" stroke="#4a4a4a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
            </a>

        </div>

    </div>
    
</section>

<!-- PROCESS -->
<section class="process-section">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-4 mb-5 mb-lg-0 reveal">
                <p class="section-eyebrow">How We Hire</p>
                <h2 class="section-title">A process built on respect</h2>
                <p class="section-lead mt-3">No trick questions. No ghost stages. We value your time and tell you exactly what to expect.</p>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="d-flex flex-column gap-4 ps-3">
                    <div class="process-step reveal reveal-delay-1">
                        <div class="step-dot"></div>
                        <div class="step-num">01</div>
                        <div class="step-title">Apply Online</div>
                        <p class="step-desc">A short, focused application — no cover letter needed unless you want to share one. We review every submission within 5 business days.</p>
                    </div>
                    <div class="process-step reveal reveal-delay-2">
                        <div class="step-dot"></div>
                        <div class="step-num">02</div>
                        <div class="step-title">Intro Call</div>
                        <p class="step-desc">A 30-minute conversation with someone from the hiring team. We share context about the role; you share context about yourself.</p>
                    </div>
                    <div class="process-step reveal reveal-delay-3">
                        <div class="step-dot"></div>
                        <div class="step-num">03</div>
                        <div class="step-title">Skills Assessment</div>
                        <p class="step-desc">A practical exercise relevant to the role — paid, bounded to 3 hours, and designed to reflect real work, not trivia.</p>
                    </div>
                    <div class="process-step reveal reveal-delay-4">
                        <div class="step-dot"></div>
                        <div class="step-num">04</div>
                        <div class="step-title">Team Interviews</div>
                        <p class="step-desc">Two conversations with future teammates and a hiring manager. You'll meet the people you'd actually work with.</p>
                    </div>
                    <div class="process-step reveal">
                        <div class="step-dot"></div>
                        <div class="step-num">05</div>
                        <div class="step-title">Offer &amp; Onboarding</div>
                        <p class="step-desc">Clear offer, transparent comp structure, and a structured first-90-days plan. You're set up to succeed from day one.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PERKS -->
<section class="perks-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col reveal">
                <p class="section-eyebrow">Benefits &amp; Perks</p>
                <h2 class="section-title">We take care of our people</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="perk-item reveal">
                    <div class="perk-dot"></div>
                    <div>
                        <div class="perk-name">Competitive Salary + Equity</div>
                        <p class="perk-desc">Top-of-market cash comp and meaningful equity so you share in what we build together.</p>
                    </div>
                </div>
                <div class="perk-item reveal reveal-delay-1">
                    <div class="perk-dot"></div>
                    <div>
                        <div class="perk-name">&#8377;2.5L Annual Learning Budget</div>
                        <p class="perk-desc">Courses, conferences, books, certifications — spend it how your growth demands.</p>
                    </div>
                </div>
                <div class="perk-item reveal reveal-delay-2">
                    <div class="perk-dot"></div>
                    <div>
                        <div class="perk-name">Unlimited PTO (that people actually use)</div>
                        <p class="perk-desc">No accrual politics. We track culture, not hours. Leadership models this from the top.</p>
                    </div>
                </div>
                <div class="perk-item reveal reveal-delay-3">
                    <div class="perk-dot"></div>
                    <div>
                        <div class="perk-name">Home Office Stipend</div>
                        <p class="perk-desc">&#8377;1.2L setup allowance and a &#8377;6k/month internet subsidy for remote team members.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="perk-item reveal">
                    <div class="perk-dot"></div>
                    <div>
                        <div class="perk-name">Comprehensive Health Coverage</div>
                        <p class="perk-desc">Medical, dental, and vision for you and your dependents — 100% employer-paid premiums.</p>
                    </div>
                </div>
                <div class="perk-item reveal reveal-delay-1">
                    <div class="perk-dot"></div>
                    <div>
                        <div class="perk-name">Parental Leave</div>
                        <p class="perk-desc">16 weeks fully paid for all parents — birthing, non-birthing, and adoptive.</p>
                    </div>
                </div>
                <div class="perk-item reveal reveal-delay-2">
                    <div class="perk-dot"></div>
                    <div>
                        <div class="perk-name">Annual Team Retreats</div>
                        <p class="perk-desc">Twice a year, the whole team comes together somewhere memorable. Past locations: Lisbon, Bali, Tbilisi.</p>
                    </div>
                </div>
                <div class="perk-item reveal reveal-delay-3">
                    <div class="perk-dot"></div>
                    <div>
                        <div class="perk-name">Mental Health Support</div>
                        <p class="perk-desc">Access to therapy and counseling through our EAP, plus regular mental wellness days built into the calendar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA BAND -->
<section class="cta-band">
    <div class="container position-relative">
        <h2 class="cta-band-title reveal">Don't see your role yet?</h2>
        <p class="cta-band-sub reveal reveal-delay-1">We're always looking for exceptional people. Send us a note and tell us what you'd build here.</p>
        <a href="contact.php" class="btn-white reveal reveal-delay-2">Get in Touch</a>
    </div>
</section>
 
 
<script>
 
   const reveals = document.querySelectorAll('.reveal'); 
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                revealObserver.unobserve(e.target);
            }
        });
    }, {
        threshold: 0.08
    }); 
    reveals.forEach(el => revealObserver.observe(el));

    function filterJobs(dept, btn) {
        document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
        btn.classList.add('active');
        document.querySelectorAll('.job-card').forEach(card => {
            card.style.display = (dept === 'all' || card.dataset.dept === dept) ? 'flex' : 'none';
        });
    }
</script>

<?php
// include_once('elements/faqs.php');
include_once('elements/footer.php');
?>