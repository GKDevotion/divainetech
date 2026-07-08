<?php
include_once('elements/header.php');
?>

<style>
 
  /* ══ LAYOUT ══ */
  .tc-wrapper {
    max-width: 1300px;
    margin: 0 auto;
    padding: 56px 1.5rem 72px;
    display: grid;
    grid-template-columns: 270px 1fr;
    gap: 2.6rem;
    align-items: start;
  }

  /* ══ SIDEBAR ══ */
  .tc-sidebar {
    position: sticky;
    top: 80px;
    display: flex;
    flex-direction: column;
    gap: 1.2rem;
  }

  /* TOC card */
  .toc-card {
    background: #ffffff;
    border: 1px solid #e3dfd7;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 14px rgba(0, 0, 0, .06);
  }

  .toc-header { 
    padding: .9rem 1.15rem;
    display: flex;
    align-items: center;
    gap: .6rem;
  }

  .toc-header i {
    color: var(--gold);
    font-size: 1.5rem;
  }

  .toc-header span {
    color: #000;
    font-size: 1.5rem;
    font-weight: 700;
    letter-spacing: .5px;
    text-transform: uppercase;
  }

  .toc-body {
    padding: .65rem 0;
  }

  .toc-link {
    display: flex;
    align-items: center;
    gap: .6rem;
    padding: .46rem 1.1rem;
    color: #626262;
    font-size: 1rem;
    text-decoration: none;
    border-left: 2px solid transparent;
    transition: color .18s, border-color .18s, background .18s, padding-left .2s;
  }

  .toc-link .dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--gold);
    opacity: 0;
    transform: scale(0);
    transition: opacity .18s, transform .18s;
    flex-shrink: 0;
  }

  .toc-link:hover,
  .toc-link.active {
    color: var(--gold);
    border-left-color: var(--gold); 
    padding-left: 1.35rem;
  }

  .toc-link:hover .dot,
  .toc-link.active .dot {
    opacity: 1;
    transform: scale(1);
  }

  .toc-divider {
    height: 1px;
    background: #e3dfd7;
    margin: .35rem 1.1rem;
  }

  /* Accept card */
  .accept-card { 
    border: 1px solid rgba(170, 128, 56, .28);
    border-radius: 12px;
    padding: 1.3rem;
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .accept-card::before {
    content: '';
    position: absolute;
    top: -30px;
    right: -30px;
    width: 110px;
    height: 110px;
    background: radial-gradient(circle, rgba(170, 128, 56, .18) 0%, transparent 70%);
    pointer-events: none;
  }

  .accept-icon {
    width: 50px;
    height: 50px;
    background: rgba(170, 128, 56, .12);
    border: 2px solid rgba(170, 128, 56, .28);
    border-radius: 50%;
    display: grid;
    place-items: center;
    margin: 0 auto .8rem;
  }

  .accept-icon i {
    color: var(--gold);
    font-size: 1.1rem;
  }

  .accept-card h5 {
    color: #000;
    font-size: .88rem;
    font-weight: 700;
    margin-bottom: .5rem;
  }

  .accept-card p {
    color: #000;
    font-size: .78rem;
    line-height: 1.65;
    margin-bottom: 1rem;
  }

  .accept-card a {
    display: inline-flex;
    align-items: center;
    gap: .4rem;
    background: var(--gold);
    color: #fff;
    font-weight: 700;
    font-size: .78rem;
    padding: .5rem 1.15rem;
    border-radius: 50px;
    text-decoration: none;
    transition: background .22s, transform .2s;
  }

  .accept-card a:hover {
    background: #c99a46;
    transform: translateY(-2px);
  }

  /* Stats mini card */
  .stats-card {
    background: #ffffff;
    border: 1px solid #e3dfd7;
    border-radius: 12px;
    padding: 1rem 1.15rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: .8rem;
  }

  .stat-item {
    text-align: center;
  }

  .stat-num {
    font-size: 1.4rem;
    font-weight: 900;
    color: var(--gold);
    line-height: 1;
  }

  .stat-label {
    font-size: .7rem;
    color: #626262;
    margin-top: .2rem;
  }

  /* Intro banner */
  .intro-banner {
    border: 1px solid rgba(170, 128, 56, .28);
    border-radius: 14px;
    padding: 2rem 2.4rem;
    margin-bottom: 1.6rem;
    position: relative;
    overflow: hidden;
    opacity: 0;
    transform: translateY(16px);
    transition: opacity .4s ease, transform .4s ease;
  }

  .intro-banner.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .intro-banner::after {
    content: '⚖';
    position: absolute;
    right: 1.5rem;
    bottom: -1rem;
    font-size: 5rem;
    opacity: .04;
    pointer-events: none;
  }

  .intro-banner p {
    font-size: 1rem;
    line-height: 1.82;
    margin: 0;
  }

  .intro-banner strong {
    color: var(--gold);
  }

  /* Warning strip */
  .warn-strip {
    display: flex;
    align-items: flex-start;
    gap: .7rem;
    background: rgba(170, 128, 56, .08);
    border: 1px solid rgba(170, 128, 56, .22);
    border-radius: 8px;
    padding: .8rem 1rem;
    margin-top: 1.1rem;
  }

  .warn-strip i {
    color: var(--gold);
    font-size: 1.5rem;
    margin-top: .05rem;
    flex-shrink: 0;
  }

  .warn-strip p {
    margin: 0;
    font-size: 1rem;
    line-height: 1.65;
  }

  /* Section card */
  .tc-section { 
    border: 1px solid #e3dfd7;
    border-radius: 14px;
    padding: 2rem 2.3rem;
    margin-bottom: 1.5rem;
    position: relative;
    overflow: hidden;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity .45s ease, transform .45s ease, box-shadow .25s;
  }

  .tc-section.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .tc-section:hover {
    box-shadow: 0 6px 28px rgba(0, 0, 0, .09);
  }

  /* Animated gold left bar */
  .tc-section::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 0;
    background: linear-gradient(180deg, var(--gold) 0%, #c99a46 100%);
    transition: width .35s ease;
    border-radius: 14px 0 0 14px;
  }

  .tc-section.visible:hover::before {
    width: 4px;
  }

  /* Section number badge */
  .sec-num {
    position: absolute;
    top: 1.6rem;
    right: 1.8rem;
    font-size: 3rem;
    font-weight: 900;
    color: rgba(170, 128, 56, .07);
    line-height: 1;
    pointer-events: none;
    user-select: none;
  }

  /* Title row */
  .sec-title {
    display: flex;
    align-items: center;
    gap: .75rem;
    margin-bottom: 1.15rem;
  }

  .sec-icon {
    width: 40px;
    height: 40px;
    background: rgba(170, 128, 56, .12);
    border: 1.5px solid rgba(170, 128, 56, .28);
    border-radius: 9px;
    display: grid;
    place-items: center;
    flex-shrink: 0;
    transition: background .22s, border-color .22s, transform .22s;
  }

  .tc-section:hover .sec-icon {
    background: var(--gold);
    border-color: var(--gold);
    transform: rotate(-6deg) scale(1.08);
  }

  .tc-section:hover .sec-icon i {
    color: #fff;
  }

  .sec-icon i {
    color: var(--gold);
    font-size: .88rem;
    transition: color .22s;
  }

  .sec-title h2 {
    font-size: 1.5rem;
    font-weight: 800;
    color: #1a1a1a;
    margin: 0;
  }

  /* Body text */
  .tc-section p {
    color: #626262;
    font-size: 1rem;
    line-height: 1.8;
    margin-bottom: .8rem;
  }

  .tc-section p:last-child {
    margin-bottom: 0;
  }

  /* Lists */
  .tc-list {
    list-style: none;
    margin: .6rem 0 .9rem;
    padding: 0;
  }

  .tc-list li {
    display: flex;
    align-items: flex-start;
    gap: .65rem;
    color: #626262;
    font-size: 1rem;
    line-height: 1.72;
    margin-bottom: .55rem;
    padding-left: .1rem;
  }

  .tc-list li .bullet {
    width: 18px;
    height: 18px;
    background: rgba(170, 128, 56, .12);
    border: 1.5px solid rgba(170, 128, 56, .28);
    border-radius: 50%;
    display: grid;
    place-items: center;
    flex-shrink: 0;
    margin-top: .18rem;
  }

  .tc-list li .bullet i {
    color: var(--gold);
    font-size: .5rem;
  }

  /* Numbered list variant */
  .tc-list.numbered {
    counter-reset: tc-counter;
  }

  .tc-list.numbered li {
    counter-increment: tc-counter;
  }

  .tc-list.numbered li .bullet {
    background: var(--gold);
    border-color: var(--gold);
    color: #fff;
    font-size: 1rem;
    font-weight: 900;
  }

  .tc-list.numbered li .bullet::before {
    content: counter(tc-counter);
    font-size: .6rem;
    font-weight: 900;
    color: #fff;
  }

  .tc-list.numbered li .bullet i {
    display: none;
  }

  /* Info box */
  .info-box {
    display: flex;
    gap: .7rem;
    align-items: flex-start;
    background: rgba(170, 128, 56, .12);
    border: 1px solid rgba(170, 128, 56, .28);
    border-radius: 9px;
    padding: .9rem 1.1rem;
    margin: 1rem 0;
  }

  .info-box i {
    color: var(--gold);
    font-size: 1.5rem;
    margin-top: .08rem;
    flex-shrink: 0;
  }

  .info-box p {
    margin: 0;
    color: #555;
    font-size: 1rem;
    line-height: 1.7;
  }

  /* Warning box */
  .warn-box {
    display: flex;
    gap: .7rem;
    align-items: flex-start; 
    border: 1px solid #c99a46;
    border-radius: 9px;
    padding: .9rem 1.1rem;
    margin: 1rem 0;
  }

  .warn-box i {
    color: #dc3545;
    font-size: 1.4rem;
    margin-top: .08rem;
    flex-shrink: 0;
  }

  .warn-box p {
    margin: 0;
    color: #555;
    font-size: 1rem;
    line-height: 1.7;
  }

  /* Two-col grid inside section */
  .two-col {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: .9rem;
    margin: .9rem 0;
  }

  .col-box { 
    border: 1px solid #e3dfd7;
    border-radius: 8px;
    padding: .9rem 1rem;
  }

  .col-box h6 {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--gold);
    margin-bottom: .5rem;
    display: flex;
    align-items: center;
    gap: .4rem;
    text-transform: uppercase;
    letter-spacing: .4px;
  }

  .col-box p {
    font-size: 1rem;
    color: #626262;
    margin: 0;
    line-height: 1.65;
  }

  /* Table */
  .tc-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 1rem;
    margin: .8rem 0;
    border-radius: 8px;
    overflow: hidden;
  }

  .tc-table th {
    color: var(--gold);
    font-weight: 700;
    font-size: 1.2rem;
    text-transform: uppercase;
    letter-spacing: .5px;
    padding: .7rem 1rem;
    text-align: left;
  }

  .tc-table td {
    padding: .62rem 1rem;
    color: #626262;
    border-bottom: 1px solid #e3dfd7;
  }

  .tc-table tr:last-child td {
    border-bottom: none;
  }

  .tc-table tbody tr:hover td {
    background: rgba(170, 128, 56, .12);
  }

  .badge-tc {
    display: inline-block;
    background: rgba(170, 128, 56, .12);
    border: 1px solid rgba(170, 128, 56, .28);
    color: var(--gold);
    font-size: .68rem;
    font-weight: 700;
    padding: .15rem .58rem;
    border-radius: 50px;
    white-space: nowrap;
  }

  .badge-red {
    background: rgba(220, 53, 69, .08);
    border-color: rgba(220, 53, 69, .25);
    color: #dc3545;
  }

  .badge-green {
    background: rgba(25, 135, 84, .08);
    border-color: rgba(25, 135, 84, .25);
    color: #198754;
  }

  /* ══ ACCEPTANCE FOOTER SECTION ══ */
  .accept-section { 
    border: 1px solid rgba(170, 128, 56, .28);
    border-radius: 14px;
    padding: 2.2rem 2.4rem;
    margin-bottom: 1.5rem;
    text-align: center;
    position: relative;
    overflow: hidden;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity .45s ease, transform .45s ease;
  }

  .accept-section.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .accept-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 50% 0%, rgba(170, 128, 56, .14) 0%, transparent 60%);
    pointer-events: none;
  }

  .accept-section h3 {
    color: #000;
    font-size: 1.3rem;
    font-weight: 800;
    margin-bottom: .6rem;
    position: relative;
  }

  .accept-section p {
    color: #000;
    font-size: .88rem;
    line-height: 1.7;
    margin-bottom: 1.4rem;
    position: relative;
    max-width: 560px;
    margin-left: auto;
    margin-right: auto;
  }

  .accept-btns {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: .9rem;
    flex-wrap: wrap;
    position: relative;
  }

  .btn-accept {
    display: inline-flex;
    align-items: center;
    gap: .45rem;
    background: var(--gold);
    color: #fff;
    font-weight: 700;
    font-size: .86rem;
    padding: .65rem 1.6rem;
    border-radius: 50px;
    text-decoration: none;
    border: 2px solid var(--gold);
    transition: background .22s, transform .22s, box-shadow .22s;
  }

  .btn-accept:hover {
    background: #c99a46;
    border-color: #c99a46;
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(170, 128, 56, .35);
  }

  .btn-outline {
    display: inline-flex;
    align-items: center;
    gap: .45rem;
    background: var(--gold);
    color: #fff;
    font-weight: 600;
    font-size: .86rem;
    padding: .65rem 1.6rem;
    border-radius: 50px;
    text-decoration: none;
    border: 2px solid rgba(255, 255, 255, .18);
    transition: border-color .22s, color .22s, transform .22s;
  }

  .btn-outline:hover {
    border-color: var(--gold);
    color: #fff;
    transform: translateY(-2px);
  }

  /* ══ FOOTER ══ */
  .site-footer {
    background: #0e1309;
    border-top: 1px solid rgba(170, 128, 56, .15);
    padding: 1.1rem 0;
  }

  .footer-inner {
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 1.5rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: .6rem;
  }

  .footer-inner p {
    color: rgba(255, 255, 255, .38);
    font-size: .78rem;
    margin: 0;
  }

  .footer-inner a {
    color: var(--gold);
    text-decoration: none;
    font-weight: 600;
  }

  .footer-links-bar {
    display: flex;
    gap: 1.3rem;
    flex-wrap: wrap;
  }

  .footer-links-bar a {
    color: rgba(255, 255, 255, .38);
    font-size: .78rem;
    text-decoration: none;
    transition: color .18s;
  }

  .footer-links-bar a:hover {
    color: var(--gold);
  }

  /* ══ SCROLL TO TOP ══ */
  .scroll-top-btn {
    position: fixed;
    bottom: 1.8rem;
    right: 1.8rem;
    width: 40px;
    height: 40px;
    background: var(--gold);
    color: #111;
    border: none;
    border-radius: 8px;
    display: grid;
    place-items: center;
    cursor: pointer;
    font-size: .75rem;
    box-shadow: 0 4px 14px rgba(170, 128, 56, .4);
    opacity: 0;
    transform: translateY(12px);
    transition: opacity .3s, transform .3s, background .22s;
    z-index: 500;
  }

  .scroll-top-btn.show {
    opacity: 1;
    transform: translateY(0);
  }

  .scroll-top-btn:hover {
    background: #c99a46;
  }

  /* ══ RESPONSIVE ══ */
  @media (max-width: 991px) {
    .tc-wrapper {
      grid-template-columns: 1fr;
    }

    .tc-sidebar {
      position: static;
      flex-direction: row;
      flex-wrap: wrap;
    }

    .toc-card {
      flex: 1 1 280px;
    }

    .accept-card,
    .stats-card {
      flex: 1 1 200px;
    }

    .nav-links,
    .btn-appt.d-desk {
      display: none !important;
    }

    .hamburger {
      display: flex;
    }

    .topbar-info span:nth-child(n+2) {
      display: none;
    }
  }

  @media (max-width: 767px) {
    .two-col {
      grid-template-columns: 1fr;
    }

    .tc-section {
      padding: 1.5rem 1.3rem;
    }

    .intro-banner {
      padding: 1.5rem 1.3rem;
    }

    .accept-section {
      padding: 1.8rem 1.3rem;
    }
  }

  @media (max-width: 575px) {
    .topbar-info {
      display: none;
    }

    .tc-wrapper {
      padding: 28px 1rem 52px;
    }

    .hero-meta {
      gap: .4rem;
    }
  }
</style>

<section class="top-banner-background" style="background-image: url('assets/images/banner-img.png');">
    <div>
        <h1 class="mb-0 text-center" >
            Terms & Condition
        </h1>
        <p class="text-black text-center mt-2">
              Please review our terms and conditions governing the use of our services.
        </p>
    </div>
</section>

<!-- MAIN LAYOUT -->
<div class="tc-wrapper">

  <!-- SIDEBAR -->
  <aside class="tc-sidebar">

    <div class="toc-card">
      <div class="toc-header"><i class="fas fa-list-ul"></i><span>Contents</span></div>
      <div class="toc-body" id="tocBody">
        <a href="#intro" class="toc-link active">Introduction</a> 
        <a href="#acceptance" class="toc-link">Acceptance of Terms</a>
        <a href="#services" class="toc-link">Use of Services</a>
        <a href="#accounts" class="toc-link">User Accounts</a>
        <a href="#ip" class="toc-link">Intellectual Property</a>
        <a href="#payment" class="toc-link">Payment &amp; Billing</a>
        <a href="#prohibited" class="toc-link">Prohibited Activities</a>
        <a href="#liability" class="toc-link">Limitation of Liability</a>
        <a href="#privacy" class="toc-link">Privacy &amp; Data</a>
        <a href="#termination" class="toc-link">Termination</a>
        <a href="#governing" class="toc-link">Governing Law</a>
        <a href="#contact" class="toc-link">Contact Us</a>
      </div>
    </div>

    <div class="accept-card">
      <div class="accept-icon"><i class="fas fa-handshake"></i></div>
      <h5>Agree to Terms</h5>
      <p>By continuing to use our services, you confirm that you have read and accepted these terms.</p>
      <a href="Javascript:void();"><i class="fas fa-check-circle"></i> I Agree</a>
    </div>

  </aside>

  <!-- MAIN -->
  <main class="tc-main">

    <!-- Intro banner -->
    <div class="intro-banner" id="intro">
      <p>Welcome to <strong>Devotion Contracting</strong>. These Terms &amp; Conditions ("Terms") govern your access to and use of our website, products, and services. This is a legally binding agreement between you ("User") and <strong>Devotion Contracting Inc.</strong> ("Company," "we," "us," or "our"). If you do not agree to these Terms, you must not use our services.</p>
      <div class="warn-strip">
        <i class="fas fa-triangle-exclamation"></i>
        <p>By accessing or using any part of our platform after the effective date above, you acknowledge that you have read, understood, and agree to be bound by all of these Terms and our Privacy Policy.</p>
      </div>
    </div>

    <!-- 1. Acceptance -->
    <div class="tc-section" id="acceptance">
      <div class="sec-num">01</div>
      <div class="sec-title">
        <div class="sec-icon"><i class="fas fa-signature"></i></div>
        <h2>Acceptance of Terms</h2>
      </div>
      <p>By creating an account, clicking "I Agree," or otherwise accessing or using the Service, you represent that you are at least 18 years of age and have the legal capacity to enter into a binding agreement.</p>
      <ul class="tc-list">
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>You must be at least <strong>18 years old</strong> to use our services.</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>If using on behalf of an organisation, you represent that you have authority to bind that entity.</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>Your continued use after changes constitutes acceptance of revised terms.</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>We reserve the right to update these terms at any time with reasonable notice.</span>
        </li>
      </ul>
    </div>

    <!-- 2. Services -->
    <div class="tc-section" id="services">
      <div class="sec-num">02</div>
      <div class="sec-title">
        <div class="sec-icon"><i class="fas fa-briefcase"></i></div>
        <h2>Use of Services</h2>
      </div>
      <p>Devotion Contracting grants you a limited, non-exclusive, non-transferable, revocable licence to access and use our services strictly in accordance with these Terms. The licence does not include any rights to:</p>
      <ul class="tc-list">
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>Resell, sublicence, or commercially exploit any portion of the Service.</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>Copy, duplicate, or create derivative works without our written consent.</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>Use data mining, robots, or similar data gathering tools.</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>Frame or mirror any part of the Service without prior written authorisation.</span>
        </li>
      </ul>
      <div class="info-box"><i class="fas fa-circle-info"></i>
        <p>We reserve the right to modify, suspend, or discontinue any part of the Service at any time without liability to you, with or without prior notice.</p>
      </div>
    </div>

    <!-- 3. Accounts -->
    <div class="tc-section" id="accounts">
      <div class="sec-num">03</div>
      <div class="sec-title">
        <div class="sec-icon"><i class="fas fa-circle-user"></i></div>
        <h2>User Accounts</h2>
      </div>
      <p>To access certain features, you must register for an account. You agree to:</p>
      <div class="two-col">
        <div class="col-box">
          <h6><i class="fas fa-check"></i> Your Responsibilities</h6>
          <p>Provide accurate and complete information during registration and keep your account details up to date at all times.</p>
        </div>
        <div class="col-box">
          <h6><i class="fas fa-lock"></i> Account Security</h6>
          <p>Maintain the confidentiality of your password and notify us immediately of any unauthorised access to your account.</p>
        </div>
        <div class="col-box">
          <h6><i class="fas fa-user-shield"></i> Account Ownership</h6>
          <p>Your account is personal and non-transferable. You may not share or sell access to your account to any third party.</p>
        </div>
        <div class="col-box">
          <h6><i class="fas fa-triangle-exclamation"></i> Liability</h6>
          <p>You are liable for all activities conducted through your account, whether authorised by you or not.</p>
        </div>
      </div>
    </div>

    <!-- 4. IP -->
    <div class="tc-section" id="ip">
      <div class="sec-num">04</div>
      <div class="sec-title">
        <div class="sec-icon"><i class="fas fa-copyright"></i></div>
        <h2>Intellectual Property</h2>
      </div>
      <p>All content on our platform — including but not limited to text, graphics, logos, icons, images, audio clips, digital downloads, and software — is the property of Devotion Contracting Inc. or its content suppliers and is protected by intellectual property laws.</p>
      <ul class="tc-list">
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>The Devotion Contracting name, logo, and all related marks are registered trademarks of Devotion Contracting Inc.</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>You may not use our trademarks without prior written permission.</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>User-submitted content remains your property; you grant us a licence to use it on the platform.</span>
        </li>
      </ul>
      <div class="warn-box"><i class="fas fa-triangle-exclamation"></i>
        <p>Unauthorised use of our intellectual property may result in legal action and termination of your account without refund.</p>
      </div>
    </div>

    <!-- 5. Payment -->
    <div class="tc-section" id="payment">
      <div class="sec-num">05</div>
      <div class="sec-title">
        <div class="sec-icon"><i class="fas fa-credit-card"></i></div>
        <h2>Payment &amp; Billing</h2>
      </div>
      <p>Certain services are offered on a paid basis. The following payment terms apply:</p>
      <table class="tc-table">
        <thead>
          <tr>
            <th>Term</th>
            <th>Details</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Billing Cycle</td>
            <td>Monthly or Annual (your choice at checkout)</td>
            <td><span class="badge-tc badge-green">Active</span></td>
          </tr>
          <tr>
            <td>Refund Window</td>
            <td>14-day money-back guarantee on first purchase</td>
            <td><span class="badge-tc badge-green">Active</span></td>
          </tr>
          <tr>
            <td>Auto-Renewal</td>
            <td>Subscriptions renew automatically unless cancelled</td>
            <td><span class="badge-tc">Required</span></td>
          </tr>
          <tr>
            <td>Late Payments</td>
            <td>Service suspended after 7 days past due</td>
            <td><span class="badge-tc badge-red">Warning</span></td>
          </tr>
          <tr>
            <td>Price Changes</td>
            <td>30-day notice given before any price increase</td>
            <td><span class="badge-tc">Policy</span></td>
          </tr>
        </tbody>
      </table>
      <div class="info-box"><i class="fas fa-credit-card"></i>
        <p>All payments are processed securely via our payment partners. We do not store full credit card details on our servers.</p>
      </div>
    </div>

    <!-- 6. Prohibited -->
    <div class="tc-section" id="prohibited">
      <div class="sec-num">06</div>
      <div class="sec-title">
        <div class="sec-icon"><i class="fas fa-ban"></i></div>
        <h2>Prohibited Activities</h2>
      </div>
      <p>You agree not to engage in any of the following activities when using our Services:</p>
      <ul class="tc-list numbered">
        <li>
          <div class="bullet"></div><span>Violating any applicable local, national, or international laws or regulations.</span>
        </li>
        <li>
          <div class="bullet"></div><span>Transmitting any unsolicited or unauthorised advertising or promotional material (spam).</span>
        </li>
        <li>
          <div class="bullet"></div><span>Impersonating any person or entity or misrepresenting your affiliation with any person or entity.</span>
        </li>
        <li>
          <div class="bullet"></div><span>Uploading or distributing viruses, malware, or any other malicious code.</span>
        </li>
        <li>
          <div class="bullet"></div><span>Attempting to gain unauthorised access to any part of the Service or its related systems.</span>
        </li>
        <li>
          <div class="bullet"></div><span>Engaging in any conduct that restricts or inhibits anyone's use or enjoyment of the Service.</span>
        </li>
        <li>
          <div class="bullet"></div><span>Scraping, crawling, or otherwise extracting data from the Service without written permission.</span>
        </li>
      </ul>
    </div>

    <!-- 7. Liability -->
    <div class="tc-section" id="liability">
      <div class="sec-num">07</div>
      <div class="sec-title">
        <div class="sec-icon"><i class="fas fa-scale-balanced"></i></div>
        <h2>Limitation of Liability</h2>
      </div>
      <p>To the fullest extent permitted by applicable law, Devotion Contracting Inc. and its officers, directors, employees, and agents shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising out of your use of, or inability to use, the Service.</p>
      <div class="warn-box"><i class="fas fa-exclamation-circle"></i>
        <p>Our total liability to you for any claim arising from these Terms or the Service shall not exceed the amount you paid us in the 12 months preceding the claim.</p>
      </div>
      <p>Some jurisdictions do not allow the exclusion or limitation of liability for consequential or incidental damages, so the above limitation may not apply to you.</p>
    </div>

    <!-- 8. Privacy -->
    <div class="tc-section" id="privacy">
      <div class="sec-num">08</div>
      <div class="sec-title">
        <div class="sec-icon"><i class="fas fa-shield-halved"></i></div>
        <h2>Privacy &amp; Data</h2>
      </div>
      <p>Your use of the Service is also governed by our Privacy Policy, which is incorporated into these Terms by reference. By using the Service, you consent to the collection and use of your data as described in our Privacy Policy.</p>
      <ul class="tc-list">
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>We collect, process, and store personal data in accordance with applicable data protection laws.</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>You retain ownership of your personal data and can request deletion at any time.</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>We implement appropriate security measures to protect your data against unauthorised access.</span>
        </li>
      </ul>
      <div class="info-box"><i class="fas fa-file-shield"></i>
        <p>Please review our full <a href="privacy-policy.php" style="color:var(--gold);font-weight:600;">Privacy Policy</a> to understand our complete data practices.</p>
      </div>
    </div>

    <!-- 9. Termination -->
    <div class="tc-section" id="termination">
      <div class="sec-num">09</div>
      <div class="sec-title">
        <div class="sec-icon"><i class="fas fa-power-off"></i></div>
        <h2>Termination</h2>
      </div>
      <p>Either party may terminate this agreement at any time. The following conditions apply upon termination:</p>
      <div class="two-col">
        <div class="col-box">
          <h6><i class="fas fa-user"></i> You May Terminate</h6>
          <p>Cancel your account at any time via your account settings. Cancellation takes effect at end of billing period.</p>
        </div>
        <div class="col-box">
          <h6><i class="fas fa-building"></i> We May Terminate</h6>
          <p>We reserve the right to suspend or terminate your account immediately for violations of these Terms.</p>
        </div>
      </div>
      <p>Upon termination, your right to use the Service ceases immediately. We may delete your data after a 30-day grace period unless legally required to retain it.</p>
    </div>

    <!-- 10. Governing -->
    <div class="tc-section" id="governing">
      <div class="sec-num">10</div>
      <div class="sec-title">
        <div class="sec-icon"><i class="fas fa-landmark"></i></div>
        <h2>Governing Law</h2>
      </div>
      <p>These Terms shall be governed by and construed in accordance with the laws of the State of New York, United States, without regard to its conflict of law provisions.</p>
      <ul class="tc-list">
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>Any disputes shall be resolved exclusively in the courts located in New York, NY.</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>You waive any objection to jurisdiction or venue in such courts.</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span>Class action waivers apply — disputes must be brought individually, not collectively.</span>
        </li>
      </ul>
    </div>

    <!-- 11. Contact -->
    <div class="tc-section" id="contact">
      <div class="sec-num">11</div>
      <div class="sec-title">
        <div class="sec-icon"><i class="fas fa-envelope-open-text"></i></div>
        <h2>Contact Us</h2>
      </div>
      <p>If you have any questions, concerns, or requests regarding these Terms &amp; Conditions, please contact our Legal team:</p>
      <ul class="tc-list">
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span><strong>Email:</strong> legal@Devotion Contracting.com</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span><strong>Phone:</strong> +1123 456 789</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span><strong>Address:</strong> 28/A Street, New York, USA</span>
        </li>
        <li>
          <div class="bullet"><i class="fas fa-circle"></i></div><span><strong>Hours:</strong> SAT – THU, 10:00 AM – 6:00 PM</span>
        </li>
      </ul>
    </div>

    <!-- Acceptance CTA -->
    <div class="accept-section" id="accept-cta">
      <h3>Do You Accept These Terms?</h3>
      <p>By continuing to use Devotion Contracting services, you confirm that you have read, understood, and agree to be bound by these Terms &amp; Conditions and our Privacy Policy.</p>
      <div class="accept-btns">
        <a href="javascript:void();" class="btn-accept"><i class="fas fa-check-circle"></i> I Accept the Terms</a>
        <a href="javascript:void();" class="btn-outline"><i class="fas fa-file-pdf"></i> Download PDF</a>
      </div>
    </div>

  </main>
</div>

<script>
  /* Scroll reveal */
  const revealEls = document.querySelectorAll('.tc-section, .intro-banner, .accept-section');
  const revealObs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        revealObs.unobserve(e.target);
      }
    });
  }, {
    threshold: 0.07
  });
  revealEls.forEach(el => revealObs.observe(el));

  /* Active TOC tracking */
  const allSections = document.querySelectorAll('[id]');
  const tocLinks = document.querySelectorAll('.toc-link');
  const tocObs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        tocLinks.forEach(a => a.classList.remove('active'));
        const act = document.querySelector('.toc-link[href="#' + e.target.id + '"]');
        if (act) act.classList.add('active');
      }
    });
  }, {
    rootMargin: '-25% 0px -65% 0px'
  });
  allSections.forEach(s => tocObs.observe(s));

  /* Smooth scroll TOC */
  tocLinks.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const t = document.querySelector(link.getAttribute('href'));
      if (t) t.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    });
  });
</script>

<?php
// include_once('elements/faqs.php');
include_once('elements/footer.php');
?>