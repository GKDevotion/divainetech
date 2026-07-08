<?php
include_once('elements/header.php');
?>

<style>
 
    /* LAYOUT */
    .policy-wrapper {
        max-width: 1280px;
        margin: 0 auto;
        padding: 56px 1.5rem 72px;
        display: grid;
        grid-template-columns: 260px 1fr;
        gap: 2.5rem;
        align-items: start;
    }

    /* SIDEBAR */
    .policy-sidebar {
        position: sticky;
        top: 80px;
    }

    .toc-card {
        background: #ffffff;
        border: 1px solid #e4e0d8;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 12px rgba(0, 0, 0, .06);
    }

    .toc-header { 
        padding: .9rem 1.1rem;
        display: flex;
        align-items: center;
        gap: .55rem;
    }

    .toc-header i {
        color: var(--gold);
        font-size: .85rem;
    }

    .toc-header span {
        color: #000;
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: .4px;
        text-transform: uppercase;
    }

    .toc-body {
        padding: .7rem 0;
    }

    .toc-body a {
        display: flex;
        align-items: center;
        gap: .55rem;
        padding: .5rem 1.1rem;
        color: #6b6b6b;
        font-size: 1rem;
        text-decoration: none;
        border-left: 2px solid transparent;
        transition: color .18s, border-color .18s, background .18s, padding-left .18s;
    }

    .toc-body a i {
        font-size: .6rem;
        color: var(--gold);
        opacity: 0;
        transition: opacity .18s;
    }

    .toc-body a:hover,
    .toc-body a.toc-active {
        color: var(--gold);
        border-left-color: var(--gold);
        /* background: rgba(170, 128, 56, .12); */
        padding-left: 1.3rem;
    }

    .toc-body a:hover i,
    .toc-body a.toc-active i {
        opacity: 1;
    }

   
    .contact-card { 
        border: 1px solid #a3808a;
        border-radius: 10px;
        padding: 1.2rem;
        margin-top: 1.2rem;
        text-align: center;
    }

    .contact-card .icon-ring {
        width: 48px;
        height: 48px;
        background: rgba(170, 128, 56, .12);
        border: 2px solid rgba(170, 128, 56, .25);
        border-radius: 50%;
        display: grid;
        place-items: center;
        margin: 0 auto .75rem;
    }

    .contact-card .icon-ring i {
        color: var(--gold);
        font-size: 1rem;
    }

    .contact-card p {
        color: #000;
        font-size: 1rem;
        margin-bottom: .9rem;
        line-height: 1.6;
    }

    .contact-card a {
        display: inline-block;
        background: var(--gold);
        color: #fff;
        font-weight: 700;
        font-size: .8rem;
        padding: .5rem 1.2rem;
        border-radius: 50px;
        text-decoration: none;
        transition: background .22s, transform .2s;
    }

    .contact-card a:hover {
        background: #c99a46;
        transform: translateY(-2px);
    }

    /* SECTIONS */
    .policy-section {
        background: #ffffff;
        border: 1px solid #e4e0d8;
        border-radius: 12px;
        padding: 2rem 2.2rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 8px rgba(0, 0, 0, .04);
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: translateY(18px);
        transition: opacity .45s ease, transform .45s ease, box-shadow .25s;
    }

    .policy-section.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .policy-section:hover {
        box-shadow: 0 4px 24px rgba(0, 0, 0, .09);
    }

    .policy-section::before {
        content: '';
        position: absolute;
        left: 0;
        top: 1.5rem;
        bottom: 1.5rem;
        width: 3px;
        background: var(--gold);
        border-radius: 0 2px 2px 0;
        opacity: 0;
        transition: opacity .3s;
    }

    .policy-section.visible::before {
        opacity: 1;
    }

    .section-title {
        display: flex;
        align-items: center;
        gap: .7rem;
        margin-bottom: 1.1rem;
    }

    .section-title .s-icon {
        width: 38px;
        height: 38px;
        background: rgba(170, 128, 56, .12);
        border: 1.5px solid rgba(170, 128, 56, .25);
        border-radius: 8px;
        display: grid;
        place-items: center;
        flex-shrink: 0;
        transition: background .22s, border-color .22s;
    }

    .policy-section:hover .s-icon {
        /* background: var(--gold); */
        border-color: var(--gold);
        color: var(--gold);
    }

    .policy-section:hover .s-icon i {
        color: var(--gold);
    }

    .section-title .s-icon i {
        color: var(--gold);
        font-size: .85rem;
        transition: color .22s;
    }

    .section-title h2 {
        font-size: 1.5rem;
        font-family: 'DM Sans', sans-serif;
        font-weight: 700;
        color: #1e1e1e;
        margin: 0;
    }

    .policy-section p {
        color: #6b6b6b;
        font-size: 1rem;
        line-height: 1.78;
        margin-bottom: .75rem;
    }

    .policy-section p:last-child {
        margin-bottom: 0;
    }

    .policy-list {
        list-style: none;
        margin: .5rem 0 .75rem;
        padding: 0;
    }

    .policy-list li {
        display: flex;
        align-items: flex-start;
        gap: .65rem;
        color: #6b6b6b;
        font-size: 1rem;
        line-height: 1.7;
        margin-bottom: .5rem;
    }

    .policy-list li i {
        color: var(--gold);
        font-size: .55rem;
        margin-top: .45rem;
        flex-shrink: 0;
    }

    .highlight-box {
        background: rgba(170, 128, 56, .12);
        border: 1px solid rgba(170, 128, 56, .25);
        border-radius: 8px;
        padding: .9rem 1.1rem;
        margin: 1rem 0;
        display: flex;
        gap: .65rem;
        align-items: flex-start;
    }

    .highlight-box i {
        color: var(--gold);
        font-size: 1.2rem;
        margin-top: .4rem;
        flex-shrink: 0;
    }

    .highlight-box p {
        margin: 0;
        color: #555;
        font-size: 1rem;
        line-height: 1.7;
    }

    /* TABLE */
    .policy-table {
        width: 100%;
        border-collapse: collapse;
        font-size: .85rem;
        margin: .75rem 0;
    }

    .policy-table th {
        background: var(--gold);
        color: #fff;
        font-weight: 700;
        font-size: .78rem;
        text-transform: uppercase;
        letter-spacing: .4px;
        padding: .65rem 1rem;
        text-align: left;
    }

    .policy-table td {
        padding: .6rem 1rem;
        color: #6b6b6b;
        font-size: 1rem;
        border-bottom: 1px solid #e4e0d8;
    }

    .policy-table tr:last-child td {
        border-bottom: none;
    }

    .policy-table tr:hover td {
        background: rgba(170, 128, 56, .12);
    }

    .badge-gold {
        display: inline-block; 
        border: 1px solid var(--gold);
        color: var(--gold);
        font-size: 0.7rem;
        font-weight: 700;
        padding: .18rem .6rem;
        border-radius: 50px;
        white-space: nowrap;
    }

    /* INTRO CARD */
    .intro-card { 
        border: 1px solid rgba(170, 128, 56, .25);
        border-radius: 12px;
        padding: 2rem 2.2rem;
        margin-bottom: 1.5rem;
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: translateY(16px);
        transition: opacity .4s, transform .4s;
    }

    .intro-card.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .intro-card::after {
        content: '';
        position: absolute;
        right: -40px;
        bottom: -40px;
        width: 160px;
        height: 160px;
        background: radial-gradient(circle, rgba(170, 128, 56, .18) 0%, transparent 70%);
        pointer-events: none;
    }

    .intro-card p {
        color: #000;
        font-size: 1rem;
        line-height: 1.8;
        margin: 0;
    }

    .intro-card strong {
        color: var(--gold);
    }

    /* FOOTER */
    .site-footer-mini {
        background: #0e1309;
        border-top: 1px solid rgba(170, 128, 56, .15);
        padding: 1.1rem 0;
    }

    .footer-mini-inner {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: .5rem;
    }

    .footer-mini-inner p {
        color: rgba(255, 255, 255, .4);
        font-size: .78rem;
        margin: 0;
    }

    .footer-mini-inner a {
        color: var(--gold);
        text-decoration: none;
        font-weight: 600;
    }

    .footer-mini-links {
        display: flex;
        gap: 1.2rem;
    }

    .footer-mini-links a {
        color: rgba(255, 255, 255, .4);
        font-size: .78rem;
        text-decoration: none;
        transition: color .18s;
    }

    .footer-mini-links a:hover {
        color: var(--gold);
    }

    /* RESPONSIVE */
    @media (max-width: 991px) {
        .policy-wrapper {
            grid-template-columns: 1fr;
        }

        .policy-sidebar {
            position: static;
        }

        .nav-links,
        .btn-appt.desktop {
            display: none;
        }

        .hamburger {
            display: flex;
        }

        .topbar-info span:not(:first-child) {
            display: none;
        }
    }

    @media (max-width: 575px) {
        .policy-section {
            padding: 1.4rem 1.2rem;
        }

        .intro-card {
            padding: 1.4rem 1.2rem;
        }

        .topbar-info {
            display: none;
        }

        .policy-wrapper {
            padding: 32px 1rem 48px;
        }
    }
</style>
 
 <section class="top-banner-background" style="background-image: url('assets/images/banner-img.png');">
    <div>
        <h1 class="mb-0 text-center" >
            Privacy Policy
        </h1>
        <p class="text-black text-center mt-2">
             Learn how we collect, use, and protect your personal information.
        </p>
    </div>
</section>

<!-- CONTENT -->
<div class="policy-wrapper">

    <!-- Sidebar -->
    <aside class="policy-sidebar">
        <div class="toc-card">
            <div class="toc-header"><i class="fas fa-list-ul"></i><span>Table of Contents</span></div>
            <div class="toc-body" id="tocBody">
                <a href="#intro" class="toc-active"> Introduction</a> 
                <a href="#collect"> Information We Collect</a>
                <a href="#use"> How We Use Your Data</a>
                <a href="#cookies"> Cookies Policy</a>
                <a href="#sharing"> Data Sharing</a>
                <a href="#security"> Data Security</a>
                <a href="#rights"> Your Rights</a>
                <a href="#retention"> Data Retention</a>
                <a href="#children"> Children's Privacy</a>
                <a href="#changes"> Policy Changes</a>
                <a href="#contact"> Contact Us</a>
            </div>
        </div> 
    </aside>

    <!-- Main -->
    <main class="policy-main">

        <div class="intro-card" id="intro">
            <p>Welcome to <strong>Devotion Contracting</strong>. We respect your privacy and are committed to protecting your personal data. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services. By using our services, you agree to the practices described here.</p>
        </div>

        <div class="policy-section" id="collect">
            <div class="section-title">
                <div class="s-icon"><i class="fas fa-database"></i></div>
                <h2>Information We Collect</h2>
            </div>
            <p>We collect information you provide directly, automatically, and from third-party sources:</p>
            <ul class="policy-list">
                <li><i class="fas fa-circle"></i><span><strong>Personal identifiers</strong> — name, email address, phone number, and mailing address when you register or contact us.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Usage data</strong> — IP address, browser type, pages visited, time spent, and referring URLs collected automatically.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Transaction data</strong> — billing details, purchase history, and payment method information when you make a purchase.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Communications</strong> — messages you send us via email, chat, or contact forms.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Device information</strong> — hardware model, operating system, and unique device identifiers.</span></li>
            </ul>
            <div class="highlight-box"><i class="fas fa-circle-info"></i>
                <p>We never collect sensitive personal data (such as health information or government IDs) unless explicitly required and with your clear consent.</p>
            </div>
        </div>

        <div class="policy-section" id="use">
            <div class="section-title">
                <div class="s-icon"><i class="fas fa-gears"></i></div>
                <h2>How We Use Your Data</h2>
            </div>
            <p>We use the information we collect for the following purposes:</p>
            <table class="policy-table">
                <thead>
                    <tr>
                        <th>Purpose</th>
                        <th>Legal Basis</th>
                        <th>Retention</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Providing and improving services</td>
                        <td><span class="badge-gold">Contract</span></td>
                        <td>Duration of account</td>
                    </tr>
                    <tr>
                        <td>Sending service notifications</td>
                        <td><span class="badge-gold">Legitimate Interest</span></td>
                        <td>3 years</td>
                    </tr>
                    <tr>
                        <td>Marketing communications</td>
                        <td><span class="badge-gold">Consent</span></td>
                        <td>Until opt-out</td>
                    </tr>
                    <tr>
                        <td>Fraud prevention &amp; security</td>
                        <td><span class="badge-gold">Legal Obligation</span></td>
                        <td>7 years</td>
                    </tr>
                    <tr>
                        <td>Analytics &amp; performance</td>
                        <td><span class="badge-gold">Legitimate Interest</span></td>
                        <td>26 months</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="policy-section" id="cookies">
            <div class="section-title">
                <div class="s-icon"><i class="fas fa-cookie-bite"></i></div>
                <h2>Cookies Policy</h2>
            </div>
            <p>We use cookies and similar tracking technologies to enhance your experience. Cookies are small text files stored on your device that help us remember preferences and understand usage patterns.</p>
            <ul class="policy-list">
                <li><i class="fas fa-circle"></i><span><strong>Essential cookies</strong> — required for the website to function. Cannot be disabled.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Analytics cookies</strong> — help us understand how visitors interact with our website.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Preference cookies</strong> — remember your settings and personalisation choices.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Marketing cookies</strong> — track activity across sites to deliver relevant ads. Require your consent.</span></li>
            </ul>
            <p>You can manage cookie preferences through your browser settings or our cookie consent banner at any time.</p>
        </div>

        <div class="policy-section" id="sharing">
            <div class="section-title">
                <div class="s-icon"><i class="fas fa-share-nodes"></i></div>
                <h2>Data Sharing &amp; Disclosure</h2>
            </div>
            <p>We do not sell your personal data. We may share it only in these circumstances:</p>
            <ul class="policy-list">
                <li><i class="fas fa-circle"></i><span><strong>Service providers</strong> — trusted partners (hosting, payment, analytics) under strict confidentiality agreements.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Legal requirements</strong> — when required by law, court order, or government authority.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Business transfers</strong> — in the event of a merger, acquisition, or asset sale.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>With your consent</strong> — for any other purpose with your explicit prior consent.</span></li>
            </ul>
            <div class="highlight-box"><i class="fas fa-lock"></i>
                <p>All third-party partners are contractually required to handle your data securely and in compliance with applicable data protection laws.</p>
            </div>
        </div>

        <div class="policy-section" id="security">
            <div class="section-title">
                <div class="s-icon"><i class="fas fa-shield-halved"></i></div>
                <h2>Data Security</h2>
            </div>
            <p>We implement appropriate technical and organisational measures to protect your personal data. These include:</p>
            <ul class="policy-list">
                <li><i class="fas fa-circle"></i><span>SSL/TLS encryption for all data transmitted to and from our website.</span></li>
                <li><i class="fas fa-circle"></i><span>AES-256 encryption for data stored at rest in our databases.</span></li>
                <li><i class="fas fa-circle"></i><span>Role-based access controls limiting who can view or process your data.</span></li>
                <li><i class="fas fa-circle"></i><span>Regular security audits and penetration testing by third-party specialists.</span></li>
                <li><i class="fas fa-circle"></i><span>Incident response procedures with 72-hour breach notification to authorities where required.</span></li>
            </ul>
        </div>

        <div class="policy-section" id="rights">
            <div class="section-title">
                <div class="s-icon"><i class="fas fa-scale-balanced"></i></div>
                <h2>Your Rights</h2>
            </div>
            <p>Depending on your location, you may have the following rights regarding your personal data:</p>
            <ul class="policy-list">
                <li><i class="fas fa-circle"></i><span><strong>Access</strong> — request a copy of the personal data we hold about you.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Rectification</strong> — request correction of inaccurate or incomplete data.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Erasure</strong> — request deletion of your personal data ("right to be forgotten").</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Portability</strong> — receive your data in a structured, machine-readable format.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Objection</strong> — object to processing based on legitimate interests or for direct marketing.</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Restriction</strong> — request that we limit how we use your data in certain circumstances.</span></li>
            </ul>
            <p>To exercise any of these rights, contact us at <strong style="color:var(--gold)">privacy@Devotion Contracting.com</strong>. We will respond within 30 days.</p>
        </div>

        <div class="policy-section" id="retention">
            <div class="section-title">
                <div class="s-icon"><i class="fas fa-clock-rotate-left"></i></div>
                <h2>Data Retention</h2>
            </div>
            <p>We retain your personal data only as long as necessary to fulfil the purposes for which it was collected, comply with legal obligations, resolve disputes, and enforce our agreements. When data is no longer needed, it is securely deleted or anonymised.</p>
        </div>

        <div class="policy-section" id="children">
            <div class="section-title">
                <div class="s-icon"><i class="fas fa-child"></i></div>
                <h2>Children's Privacy</h2>
            </div>
            <p>Our services are not directed to individuals under the age of 16. We do not knowingly collect personal data from children. If you believe a child has provided us with personal information, please contact us immediately and we will delete such information.</p>
        </div>

        <div class="policy-section" id="changes">
            <div class="section-title">
                <div class="s-icon"><i class="fas fa-rotate"></i></div>
                <h2>Policy Changes</h2>
            </div>
            <p>We may update this Privacy Policy from time to time to reflect changes in our practices, technology, or legal requirements. When we make material changes, we will notify you by email or by posting a prominent notice on our website prior to the changes taking effect.</p>
            <div class="highlight-box"><i class="fas fa-bell"></i>
                <p>We encourage you to review this page periodically. Your continued use of our services after changes are posted constitutes acceptance of the updated policy.</p>
            </div>
        </div>

        <div class="policy-section" id="contact">
            <div class="section-title">
                <div class="s-icon"><i class="fas fa-envelope-open-text"></i></div>
                <h2>Contact Us</h2>
            </div>
            <p>If you have any questions or requests regarding this Privacy Policy, please reach out to our Data Protection team:</p>
            <ul class="policy-list">
                <li><i class="fas fa-circle"></i><span><strong>Email:</strong> devotiongroup@gmail.com</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Phone:</strong> +91 9999998559</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Address:</strong> 28/A Street, Dubai</span></li>
                <li><i class="fas fa-circle"></i><span><strong>Business hours:</strong> SAT – THU, 10:00 AM – 6:00 PM</span></li>
            </ul>
        </div>

    </main>
</div>
 
<script>

    const revealEls = document.querySelectorAll('.policy-section, .intro-card');
    const revealObs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObs.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.08
    });
    revealEls.forEach(el => revealObs.observe(el));

    const sections = document.querySelectorAll('[id]');
    const tocLinks = document.querySelectorAll('#tocBody a');
    const tocObs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                tocLinks.forEach(a => a.classList.remove('toc-active'));
                const active = document.querySelector('#tocBody a[href="#' + entry.target.id + '"]');
                if (active) active.classList.add('toc-active');
            }
        });
    }, {
        rootMargin: '-30% 0px -60% 0px'
    });
    sections.forEach(s => tocObs.observe(s));

    tocLinks.forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            const target = document.querySelector(link.getAttribute('href'));
            if (target) target.scrollIntoView({
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