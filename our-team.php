 <?php
    include_once('elements/header.php');
?>
  <style> 
    /* ── Section header ── */
    .section-eyebrow {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .section-title {
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 800;
      line-height: 1.1;
      color: #1a1a1a;
    }

    .section-title span {
      color: var(--gold);
    }

    .gold-rule {
      width: 56px;
      height: 3px;
      background: var(--gold);
      border: none;
      margin: 0;
    }
    .team-card {
      position: relative;
      border-radius: 16px;
      overflow: hidden;
      background: #fff;
      cursor: pointer;
      transition: transform 0.35s ease, box-shadow 0.35s ease;
      aspect-ratio: 4/4.5;
    }
    .team-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: top;
      display: block;
      transition: transform 0.4s ease;
      filter: grayscale(0%);
    }
    .team-card:hover {
      transform: translateY(-8px);
      /* box-shadow: 0 16px 40px rgba(170,128,56,0.3); */
    }
    .team-card:hover img { transform: scale(1.05); }

    .card-overlay {
      position: absolute;
      inset: 0; 
      opacity: 0;
      transition: opacity 0.35s ease;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 1.25rem;
    }
    .team-card:hover .card-overlay { opacity: 1; }

    .card-overlay .member-name {
      color: #fff;
      font-size: 1.05rem;
      font-weight: 600;
      margin: 0 0 2px;
    }
    .card-overlay .member-role {
      color: rgba(255,255,255,0.85);
      font-size: 0.82rem;
      margin: 0 0 10px;
    }
    .social-icons { display: flex; gap: 8px; }
    .social-icons a {
      width: 40px; height: 40px;
      border-radius: 50%;
      background: rgba(255,255,255,0.2);
      border: 1px solid rgba(255,255,255,0.5);
      display: flex; align-items: center; justify-content: center;
      color: #fff;
      text-decoration: none;
      font-size: 20px;
      transition: background 0.2s, border-color 0.2s;
    }
    .social-icons a:hover { background: #fff; color: var(--gold); border-color: #fff; }

    .card-border-accent {
      position: absolute;
      inset: 0;
      border-radius: 16px;
      border: 2px solid transparent;
      transition: border-color 0.35s ease;
      pointer-events: none;
    }
    .team-card:hover .card-border-accent { border-color: var(--gold); }

 
  </style>

  <section class="top-banner-background" style="background-image: url('assets/images/banner-img.png');">
      <div>
          <h1 class="mb-0 text-center" data-aos="fade-up">
              Our Team
          </h1>
          <p class="text-black text-center mt-2" data-aos="fade-up">
                Meet the dedicated professionals behind our success.
          </p>
      </div>
  </section>

  <section class="py-5 px-3">
    <div class="container">

      <!-- Section Header -->
      <div class="row mb-5">
        <div class="col-lg-6">
          <p class="section-eyebrow mb-2" data-aos="fade-up">The people behind the work</p>
          <h2 class="section-title mb-3" data-aos="fade-up">Meet Our <span>Creative</span> Team</h2>
          <hr class="gold-rule mb-3"  data-aos="fade-up"/>
          <p class="text-muted" style="font-size:1rem; line-height:1.7;" data-aos="fade-up">
            A collective of designers, strategists, and storytellers who believe that craft and intention make all the difference.
          </p>
        </div>
      </div>

      <!-- Team Grid -->
      <div class="row g-4" data-aos="fade-up">

        <div class="col-6 col-md-3">
            <div class="team-card">
              <img src="assets/images/team.jpg" alt="Team member">
              <div class="card-overlay">
                <p class="member-name">James Carter</p>
                <p class="member-role">Marketing Director</p>
                <div class="social-icons">
                  <a href="#" aria-label="LinkedIn"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></a>
                  <a href="#" aria-label="Twitter"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg></a>
                  <a href="#" aria-label="Instagram"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
                </div>
              </div>
              <div class="card-border-accent"></div>
            </div>
        </div>

        <div class="col-6 col-md-3">
          <div class="team-card">
            <img src="assets/images/team.jpg" alt="Team member">
            <div class="card-overlay">
              <p class="member-name">Ronald Richards</p>
              <p class="member-role">Finance Advisor</p>
              <div class="social-icons">
                <a href="#" aria-label="LinkedIn"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></a>
                <a href="#" aria-label="Twitter"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg></a>
                <a href="#" aria-label="Instagram"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
              </div>
            </div>
            <div class="card-border-accent"></div>
          </div>
        </div>

        <div class="col-6 col-md-3">
          <div class="team-card">
            <img src="assets/images/team.jpg" alt="Team member">
            <div class="card-overlay">
              <p class="member-name">Michael Steele</p>
              <p class="member-role">Legal Counsel</p>
              <div class="social-icons">
                <a href="#" aria-label="LinkedIn"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></a>
                <a href="#" aria-label="Twitter"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg></a>
                <a href="#" aria-label="Instagram"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
              </div>
            </div>
            <div class="card-border-accent"></div>
          </div>
        </div>

        <div class="col-6 col-md-3">
          <div class="team-card">
            <img src="assets/images/team.jpg" alt="Team member">
            <div class="card-overlay">
              <p class="member-name">Sarah Johnson</p>
              <p class="member-role">HR Manager</p>
              <div class="social-icons">
                <a href="#" aria-label="LinkedIn"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></a>
                <a href="#" aria-label="Twitter"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg></a>
                <a href="#" aria-label="Instagram"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
              </div>
            </div>
            <div class="card-border-accent"></div>
          </div>
        </div>

        <div class="col-6 col-md-3">
          <div class="team-card">
            <img src="assets/images/team.jpg" alt="Team member">
            <div class="card-overlay">
              <p class="member-name">Marco Vega</p>
              <p class="member-role">Creative Lead</p>
              <div class="social-icons">
                <a href="#" aria-label="LinkedIn"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></a>
                <a href="#" aria-label="Twitter"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg></a>
                <a href="#" aria-label="Instagram"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
              </div>
            </div>
            <div class="card-border-accent"></div>
          </div>
        </div>

        <div class="col-6 col-md-3">
          <div class="team-card">
            <img src="assets/images/team.jpg" alt="Team member">
            <div class="card-overlay">
              <p class="member-name">Daniel Park</p>
              <p class="member-role">Tech Architect</p>
              <div class="social-icons">
                <a href="#" aria-label="LinkedIn"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></a>
                <a href="#" aria-label="Twitter"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg></a>
                <a href="#" aria-label="Instagram"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
              </div>
            </div>
            <div class="card-border-accent"></div>
          </div>
        </div>

        <div class="col-6 col-md-3">
          <div class="team-card">
            <img src="assets/images/team.jpg" alt="Team member">
            <div class="card-overlay">
              <p class="member-name">Emily Brown</p>
              <p class="member-role">Product Manager</p>
              <div class="social-icons">
                <a href="#" aria-label="LinkedIn"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></a>
                <a href="#" aria-label="Twitter"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg></a>
                <a href="#" aria-label="Instagram"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
              </div>
            </div>
            <div class="card-border-accent"></div>
          </div>
        </div>

        <div class="col-6 col-md-3">
          <div class="team-card">
            <img src="assets/images/team.jpg" alt="Team member">
            <div class="card-overlay">
              <p class="member-name">Alex Turner</p>
              <p class="member-role">Sales Executive</p>
              <div class="social-icons">
                <a href="#" aria-label="LinkedIn"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></a>
                <a href="#" aria-label="Twitter"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg></a>
                <a href="#" aria-label="Instagram"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
              </div>
            </div>
            <div class="card-border-accent"></div>
          </div>
        </div>

      </div><!-- /row -->

      <!-- CTA -->
      <div class="text-center mt-5 pt-2" data-aos="fade-up">
        <a href="javascript:void();" class="btn btn-gold">View All Team Members</a>
      </div>

    </div>
  </section>
 
<?php
    // include_once('elements/faqs.php');
    include_once('elements/footer.php');
?>