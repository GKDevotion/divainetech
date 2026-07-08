<?php
include_once('elements/header.php');
?>
<style>
  
  /* HERO */
  .policy-hero {
    background: #1a1612;
    padding: 100px 0 80px;
    position: relative;
    overflow: hidden;
  }

  .policy-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 60% 80% at 80% 50%, rgba(170, 128, 56, .18) 0%, transparent 70%),
      radial-gradient(ellipse 40% 60% at 10% 90%, rgba(170, 128, 56, .10) 0%, transparent 60%);
  }

  .hero-eyebrow {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: .2em;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .hero-eyebrow::before {
    content: '';
    display: inline-block;
    width: 32px;
    height: 1px;
    background: var(--gold);
  }

  .policy-hero h1 {
    font-size: clamp(2.4rem, 5vw, 3.8rem);
    font-weight: 600;
    color: #fff;
    line-height: 1.15;
    margin-bottom: 20px;
  }

  .policy-hero h1 span {
    color: var(--gold-light);
  }

  .hero-meta {
    font-size: 13px;
    color: rgba(255, 255, 255, .45);
    display: flex;
    gap: 24px;
    flex-wrap: wrap;
    margin-top: 28px;
  }

  .hero-meta strong {
    color: rgba(255, 255, 255, .75);
  }

  /* CONSENT BANNER */
  .consent-banner {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1050;
    background: #1a1612;
    border-top: 2px solid var(--gold);
    padding: 18px 24px;
    transform: translateY(100%);
    transition: transform .45s cubic-bezier(.22, .68, 0, 1.2);
    box-shadow: 0 -8px 40px rgba(0, 0, 0, .35);
  }

  .consent-banner.visible {
    transform: translateY(0);
  }

  .consent-banner p {
    color: rgba(255, 255, 255, .75);
    font-size: 13.5px;
    margin: 0;
  }

  .consent-banner a {
    color: var(--gold-light);
    text-underline-offset: 3px;
  }

  .btn-gold {
    background: var(--gold);
    border: none;
    color: #fff;
    font-size: 13px;
    font-weight: 600;
    padding: 9px 22px;
    border-radius: 4px;
    cursor: pointer;
    transition: background .2s, transform .15s;
    white-space: nowrap;
  }

  .btn-gold:hover {
    background: var(--gold-light);
    transform: translateY(-1px);
  }

  .btn-ghost {
    background: transparent;
    border: 1px solid rgba(255, 255, 255, .2);
    color: rgba(255, 255, 255, .65);
    font-size: 13px;
    font-weight: 500;
    padding: 8px 18px;
    border-radius: 4px;
    cursor: pointer;
    transition: border-color .2s, color .2s;
    white-space: nowrap;
  }

  .btn-ghost:hover {
    border-color: var(--gold);
    color: var(--gold-light);
  }

  /* TOC SIDEBAR */
  .toc-sidebar {
    position: sticky;
    top: 100px;
  }

  .toc-card {
    background: #fff;
    border: 1px solid #e8dcc8;
    border-radius: 8px;
    padding: 24px;
    border-left: 3px solid var(--gold);
  }

  .toc-title {
    font-size: 1.3rem;
    font-weight: 600;
    letter-spacing: .15em;
    text-transform: uppercase;
    color: #000;
    margin-bottom: 16px;
  }

  .toc-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .toc-list li {
    border-bottom: 1px solid #e8dcc8;
  }

  .toc-list li:last-child {
    border-bottom: none;
  }

  .toc-list a {
    display: block;
    padding: 9px 0;
    font-size: 1rem;
    color: #4a4035;
    text-decoration: none;
    transition: color .2s, padding-left .2s;
  }

  .toc-list a:hover,
  .toc-list a.active {
    color: var(--gold);
    padding-left: 6px;
  }

  .toc-update {
    margin-top: 20px;
    padding: 12px 14px;
    background: #f5ead8;
    border-radius: 6px;
    font-size: 1rem;
    color: #7a5a20;
    line-height: 1.5;
  }

  /* POLICY SECTIONS */
  .policy-body {
    padding: 64px 0 80px;
  }

  .policy-section {
    margin-bottom: 56px;
    opacity: 0;
    transform: translateY(28px);
    transition: opacity .55s ease, transform .55s ease;
  }

  .policy-section.in-view {
    opacity: 1;
    transform: none;
  }

  .section-number {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: .15em;
    color: var(--gold);
    text-transform: uppercase;
    margin-bottom: 8px;
  }

  .section-title {
    font-size: 1.55rem;
    font-family: 'DM Sans', sans-serif;
    font-weight: 600;
    color: #1a1612;
    margin-bottom: 16px;
    padding-bottom: 14px;
    border-bottom: 1px solid #e8dcc8;
  }

  .policy-section p,
  .policy-section li {
    font-size: 1rem;
    color: #4a4035;
    line-height: 1.8;
  }

  /* COOKIE TYPE CARDS */
  .cookie-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 16px;
    margin-top: 24px;
  }

  .cookie-card {
    background: #fff;
    border: 1px solid #e8dcc8;
    border-radius: 8px;
    padding: 20px;
    position: relative;
    overflow: hidden;
    transition: box-shadow .25s, transform .25s, border-color .25s;
  }

  .cookie-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .3s ease;
  }

  .cookie-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 32px rgba(170, 128, 56, .12);
    border-color: var(--gold-light);
  }

  .cookie-card:hover::before {
    transform: scaleX(1);
  }

  .cookie-icon {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    background: #f5ead8;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 14px;
    font-size: 18px;
  }

  .cookie-card h4 {
    font-size: 1.2rem;
    font-weight: 600;
    color: #1a1612;
    margin-bottom: 6px;
  }

  .cookie-card p {
    font-size: 1rem;
    color: #4a4035;
    margin: 0;
    line-height: 1.6;
  }

  .badge-required {
    font-size: 10px;
    font-weight: 600;
    letter-spacing: .05em;
    padding: 3px 8px;
    border-radius: 20px;
    background: #f5ead8;
    color: #7a5a20;
    display: inline-block;
    margin-top: 10px;
  }

  .badge-optional {
    font-size: 10px;
    font-weight: 600;
    letter-spacing: .05em;
    padding: 3px 8px;
    border-radius: 20px;
    background: #eaf3de;
    color: #3b6d11;
    display: inline-block;
    margin-top: 10px;
  }

  /* TABLE */
  .pref-table {
    border-radius: 8px;
    overflow: hidden;
    border: 1px solid #e8dcc8;
  }

  .pref-table thead th {
    color: var(--gold);
    font-size: 1rem;
    font-weight: 600;
    letter-spacing: .1em;
    text-transform: uppercase;
    padding: 12px 16px;
    border-bottom: 1px solid #e8dcc8;
  }

  .pref-table tbody tr {
    border-bottom: 1px solid #e8dcc8;
    transition: background .18s;
  }

  .pref-table tbody tr:last-child {
    border-bottom: none;
  }

  .pref-table tbody tr:hover {
    background: #f5ead8;
  }

  .pref-table td {
    padding: 13px 16px;
    font-size: 1rem;
    color: #4a4035;
    vertical-align: middle;
  }

  .pref-table td:first-child {
    font-weight: 500;
    color: #1a1612;
  }

  /* TOGGLE */
  .toggle-wrap {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .toggle-switch {
    position: relative;
    width: 40px;
    height: 22px;
    flex-shrink: 0;
  }

  .toggle-switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }

  .toggle-slider {
    position: absolute;
    inset: 0;
    background: #d0ccc4;
    border-radius: 22px;
    cursor: pointer;
    transition: background .25s;
  }

  .toggle-slider::before {
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    left: 3px;
    top: 3px;
    background: #fff;
    border-radius: 50%;
    transition: transform .25s;
    box-shadow: 0 1px 4px rgba(0, 0, 0, .2);
  }

  .toggle-switch input:checked+.toggle-slider {
    background: var(--gold);
  }

  .toggle-switch input:checked+.toggle-slider::before {
    transform: translateX(18px);
  }

  .toggle-switch input:disabled+.toggle-slider {
    cursor: not-allowed;
    opacity: .65;
  }

  .toggle-label {
    font-size: 12px;
    color: #4a4035;
  }

  /* CALLOUT */
  .callout {
    background: #f5ead8;
    border-left: 4px solid var(--gold);
    border-radius: 0 8px 8px 0;
    padding: 18px 20px;
    margin: 24px 0;
    font-size: 1rem;
    color: #7a5a20;
    line-height: 1.7;
  }

  /* CONTACT */
  .contact-block {
    border-radius: 12px;
    border: 1px solid var(--gold);
    padding: 40px;
    color: rgba(255, 255, 255, .8);
    position: relative;
    overflow: hidden;
    margin-top: 32px;
  }

  .contact-block::after {
    content: '';
    position: absolute;
    bottom: -40px;
    right: -40px;
    width: 160px;
    height: 160px;
    border-radius: 50%;
    border: 40px solid rgba(170, 128, 56, .15);
  }

  .contact-block h3 {
    font-size: 1.4rem;
    color: #000;
    margin-bottom: 12px;
  }

  .contact-block a {
    color: var(--gold-light);
    text-decoration: none;
    border-bottom: 1px solid rgba(170, 128, 56, .35);
    transition: border-color .2s;
  }

  .contact-block a:hover {
    border-color: var(--gold-light);
  }


  /* RESPONSIVE */
  @media (max-width: 768px) {
    .policy-body {
      padding: 40px 0 56px;
    }

    .contact-block {
      padding: 28px 24px;
    }

    .cookie-grid {
      grid-template-columns: 1fr 1fr;
    }
  }

  @media (max-width: 480px) {
    .cookie-grid {
      grid-template-columns: 1fr;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .policy-section {
      opacity: 1;
      transform: none;
      transition: none;
    }

    .cookie-card,
    .btn-gold,
    .consent-banner {
      transition: none;
    }
  }
</style>

 <section class="top-banner-background" style="background-image: url('assets/images/banner-img.png');">
    <div>
        <h1 class="mb-0 text-center" >
            Cookie Policy
        </h1>
        <p class="text-black text-center mt-2">
            Learn how we use cookies to enhance your browsing experience.
        </p>
    </div>
</section>

<!-- BODY -->
<section class="policy-body">
  <div class="container">
    <div class="row g-5">

      <!-- Sidebar TOC -->
      <div class="col-lg-3 d-none d-lg-block">
        <nav class="toc-sidebar">
          <div class="toc-card">
            <p class="toc-title">Contents</p>
            <ul class="toc-list">
              <li><a href="#section-what">What are cookies?</a></li>
              <li><a href="#section-types">Types we use</a></li>
              <li><a href="#section-third">Third-party cookies</a></li>
              <li><a href="#section-prefs">Your preferences</a></li>
              <li><a href="#section-manage">Managing cookies</a></li>
              <li><a href="#section-changes">Policy changes</a></li>
              <li><a href="#section-contact">Contact us</a></li>
            </ul>
            <div class="toc-update">
              <strong>Last updated</strong><br>10 June 2025 — Updated third-party vendor list.
            </div>
          </div>
        </nav>
      </div>

      <!-- Main content -->
      <div class="col-lg-9">

        <div class="policy-section" id="section-what">
          <p class="section-number">01 — Overview</p>
          <h2 class="section-title">What are cookies?</h2>
          <p>Cookies are small text files placed on your device when you visit a website. They are widely used to make websites work, or work more efficiently, as well as to provide information to the site operators.</p>
          <p>Cookies do not typically contain personally identifying information, but personal information that we store about you may be linked to the information stored in and obtained from cookies.</p>
          <div class="callout">
            <strong>Quick summary:</strong> Cookies help us remember your preferences, understand how you use our site, and show you relevant content. You are always in control and can update your choices at any time.
          </div>
        </div>

        <div class="policy-section" id="section-types">
          <p class="section-number">02 — Cookie Types</p>
          <h2 class="section-title">Types of cookies we use</h2>
          <p>We use a combination of first-party and third-party cookies. The cards below explain the types in use and their purpose.</p>
          <div class="cookie-grid">
            <div class="cookie-card">
              <div class="cookie-icon">🔒</div>
              <h4>Strictly Necessary</h4>
              <p>Essential for the website to function. Cannot be disabled as they power core features like login and cart.</p>
              <span class="badge-required">Always active</span>
            </div>
            <div class="cookie-card">
              <div class="cookie-icon">📊</div>
              <h4>Performance & Analytics</h4>
              <p>Help us understand how visitors interact with the site — pages visited, time spent, errors encountered.</p>
              <span class="badge-optional">Optional</span>
            </div>
            <div class="cookie-card">
              <div class="cookie-icon">⚙️</div>
              <h4>Functional</h4>
              <p>Remember your preferences (language, region, font size) to personalise your experience across visits.</p>
              <span class="badge-optional">Optional</span>
            </div>
            <div class="cookie-card">
              <div class="cookie-icon">🎯</div>
              <h4>Targeting & Advertising</h4>
              <p>Used to deliver ads relevant to your interests and to measure the effectiveness of advertising campaigns.</p>
              <span class="badge-optional">Optional</span>
            </div>
          </div>
        </div>

        <div class="policy-section" id="section-third">
          <p class="section-number">03 — Third-party Vendors</p>
          <h2 class="section-title">Third-party cookies</h2>
          <p>Some cookies are placed by third-party services that appear on our pages. We do not control the setting of these cookies, so we recommend you check those third parties' websites for their cookie policies.</p>
          <div class="table-responsive">
            <table class="pref-table w-100">
              <thead>
                <tr>
                  <th>Vendor</th>
                  <th>Purpose</th>
                  <th>Retention</th>
                  <th>Category</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Google Analytics</td>
                  <td>Website usage analytics</td>
                  <td>26 months</td>
                  <td><span class="badge-optional">Performance</span></td>
                </tr>
                <tr>
                  <td>Google Tag Manager</td>
                  <td>Tag management</td>
                  <td>Session</td>
                  <td><span class="badge-optional">Performance</span></td>
                </tr>
                <tr>
                  <td>Hotjar</td>
                  <td>Heatmaps &amp; recordings</td>
                  <td>1 year</td>
                  <td><span class="badge-optional">Performance</span></td>
                </tr>
                <tr>
                  <td>Meta Pixel</td>
                  <td>Advertising &amp; retargeting</td>
                  <td>90 days</td>
                  <td><span class="badge-optional">Targeting</span></td>
                </tr>
                <tr>
                  <td>Intercom</td>
                  <td>Live chat &amp; support</td>
                  <td>9 months</td>
                  <td><span class="badge-optional">Functional</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="policy-section" id="section-prefs">
          <p class="section-number">04 — Your Preferences</p>
          <h2 class="section-title">Manage your cookie preferences</h2>
          <p>You can control which cookies we set below. Note that disabling some cookies may impact the functionality and experience on our website.</p>
          <div class="table-responsive">
            <table class="pref-table w-100">
              <thead>
                <tr>
                  <th>Cookie category</th>
                  <th>Description</th>
                  <th style="min-width:120px;">Your choice</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Strictly Necessary</td>
                  <td>Required for the website to function properly.</td>
                  <td>
                    <div class="toggle-wrap">
                      <label class="toggle-switch"><input type="checkbox" checked disabled><span class="toggle-slider"></span></label>
                      <span class="toggle-label">Always on</span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Analytics</td>
                  <td>Help us improve by measuring how you use the site.</td>
                  <td><label class="toggle-switch"><input type="checkbox" checked><span class="toggle-slider"></span></label></td>
                </tr>
                <tr>
                  <td>Functional</td>
                  <td>Remember your settings and preferences.</td>
                  <td><label class="toggle-switch"><input type="checkbox" checked><span class="toggle-slider"></span></label></td>
                </tr>
                <tr>
                  <td>Targeting</td>
                  <td>Show personalised advertising based on interests.</td>
                  <td><label class="toggle-switch"><input type="checkbox"><span class="toggle-slider"></span></label></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-end mt-3">
            <button class="btn-gold" onclick="savePrefs()">Save preferences</button>
          </div>
          <div id="saveMsg" style="display:none;font-size:13px;color:#7a5a20;margin-top:10px;text-align:right;">
            ✓ Preferences saved successfully.
          </div>
        </div>

        <div class="policy-section" id="section-manage">
          <p class="section-number">05 — Browser Controls</p>
          <h2 class="section-title">Managing cookies in your browser</h2>
          <p>Most web browsers allow you to manage your cookie preferences through their settings. You can set your browser to refuse cookies, or to alert you before accepting them. However, blocking all cookies may mean you are unable to access all or parts of our website.</p>
          <ul>
            <li><strong>Chrome:</strong> Settings → Privacy and security → Cookies and other site data</li>
            <li><strong>Firefox:</strong> Options → Privacy &amp; Security → Cookies and Site Data</li>
            <li><strong>Safari:</strong> Preferences → Privacy → Manage Website Data</li>
            <li><strong>Edge:</strong> Settings → Cookies and site permissions → Manage and delete cookies</li>
          </ul>
          <div class="callout">
            You can also opt out of interest-based advertising across participating companies at <strong>youronlinechoices.eu</strong> (Europe) or <strong>aboutads.info</strong> (US).
          </div>
        </div>

        <div class="policy-section" id="section-changes">
          <p class="section-number">06 — Updates</p>
          <h2 class="section-title">Changes to this policy</h2>
          <p>We may update this Cookie Policy from time to time in order to reflect changes to the cookies we use, or for other operational, legal, or regulatory reasons. Please therefore re-visit this Cookie Policy regularly to stay informed.</p>
          <p>The date at the top of this Cookie Policy indicates when it was last updated. We will notify you of any material changes by posting a notice on our website.</p>
        </div>

        <div class="policy-section" id="section-contact">
          <p class="section-number">07 — Get in Touch</p>
          <h2 class="section-title">Contact us</h2>
          <p>If you have any questions about our use of cookies or this Cookie Policy, you can contact us using the details below.</p>
          <div class="contact-block">
            <h3>Privacy &amp; Legal Team</h3>
            <p style="margin-bottom:16px;">We aim to respond within 5 business days.</p>
            <p><strong style="color:#000;">Email:</strong> &nbsp;<a href="mailto:privacy@yourcompany.com">privacy@yourcompany.com</a></p>
            <p><strong style="color:#000;">Post:</strong> &nbsp;Data Protection Officer, 42 Example Street, Mumbai 400001, India</p>
            <p style="margin:0;"><strong style="color:#000;">DPA registration:</strong> &nbsp;Reference #DPA-2024-88291</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<script>
 
  const sections = document.querySelectorAll('.policy-section');

  const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        setTimeout(() => e.target.classList.add('in-view'), 60);
        sectionObserver.unobserve(e.target);
      }
    });
  }, {
    threshold: 0.08
  });

  sections.forEach(s => sectionObserver.observe(s));

  const tocLinks = document.querySelectorAll('.toc-list a');
  const secObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        tocLinks.forEach(l => l.classList.remove('active'));
        const active = document.querySelector(`.toc-list a[href="#${e.target.id}"]`);
        if (active) active.classList.add('active');
      }
    });
  }, {
    rootMargin: '-30% 0px -60% 0px'
  });
  sections.forEach(s => secObserver.observe(s));

  function savePrefs() {
    const msg = document.getElementById('saveMsg');
    msg.style.display = 'block';
    setTimeout(() => msg.style.display = 'none', 3000);
  }

  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
</script>

<?php
// include_once('elements/faqs.php');
include_once('elements/footer.php');
?>