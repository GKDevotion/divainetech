<?php
  include_once('elements/header.php');
  include_once('elements/home-slider.php');
?>
  
<!-- ═══════════════ FEATURES STRIP ═══════════════ -->
<section class="features-strip">
  <div class="container">
  <div class="container-fluid px-lg-5">
    <div class="row g-0">

      <div class="col-6 col-md-3">
        <div class="feature-item">
          <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
          <div>
            <div class="feature-label">Quality</div>
            <div class="feature-value">ISO Certified</div>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="feature-item">
          <div class="feature-icon"><i class="bi bi-tools"></i></div>
          <div>
            <div class="feature-label">Installation</div>
            <div class="feature-value">Expert Team</div>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="feature-item">
          <div class="feature-icon"><i class="bi bi-clock-history"></i></div>
          <div>
            <div class="feature-label">Experience</div>
            <div class="feature-value">25+ Years</div>
          </div>
        </div>
      </div>
      
      <div class="col-6 col-md-3">
        <div class="feature-item">
          <div class="feature-icon"><i class="bi bi-geo-alt"></i></div>
          <div>
            <div class="feature-label">Presence</div>
            <div class="feature-value">UAE & GCC</div>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
</section>

<style>
    .stats-card {
      background: #ffffff;
      border-radius: 12px; 
      box-shadow: 0 2px 16px rgba(0,0,0,0.07);
      padding: 40px 20px;
      margin-top: 50px;
    }

    .stat-item {
      text-align: center;
      padding: 10px 20px;
    }

    /* Divider between stat items except last */
    .stat-item:not(:last-child) {
      border-right: 1px solid #e5e7eb;
    }

    .stat-number {
      font-size: 2.6rem;
      font-weight: 700;
      color: #1a1a2e;
      line-height: 1.1;
      font-family: 'Segoe UI', system-ui, sans-serif;
      letter-spacing: -1px;
    }

    .stat-number .suffix {
      color: #aa8038; /* orange accent */
      font-weight: 800;
    }

    .stat-label {
      font-size: 1rem;
      color: #6b7280;
      margin-top: 8px;
      font-weight: 400;
      letter-spacing: 0.01em;
    }

    /* Responsive: remove side borders on mobile, add top borders */
    @media (max-width: 767px) {
      .stat-item {
        border-right: none !important;
        border-bottom: 1px solid #e5e7eb;
        padding: 20px 10px;
      }
      .stat-item:last-child {
        border-bottom: none;
      }
    }
</style>
 
<!-- ═══════════════ ABOUT ═══════════════ -->
<section class="about-section">
  <div class="container">
    <div class="row align-items-center g-5">

      <div class="col-lg-5" data-aos="fade-right">
        <div class="about-img-wrap mb-5 mb-lg-0">
          <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=900&q=80" alt="About GlassWorld" class="about-img-main"/>
          <div class="about-badge">
            <strong>25+</strong>
            Years of Excellence
          </div>
        </div>
      </div>

      <div class="col-lg-7 ps-lg-5" data-aos="fade-left">
        <div class="eyebrow" data-aos="fade-up">Who We Are</div>
        <h2 class="section-title mb-4" data-aos="fade-up">UAE's Premier Glass & Aluminium Solutions Partner</h2>
        <p style="color:#000; line-height:1.85; font-size:1rem; margin-bottom:1.5rem;" data-aos="fade-up">
          GlassWorld Industries LLC has been at the forefront of architectural glass and aluminium solutions in the UAE for over 25 years. From iconic high-rise curtain walls to bespoke residential sliding doors, we deliver precision-engineered products that redefine spaces.
        </p>
        <p style="color:#000; line-height:1.85; font-size:1rem; margin-bottom:2rem;" data-aos="fade-up">
          Our commitment to quality, innovation, and on-time delivery has earned us the trust of leading developers, contractors, and architects across the GCC region.
        </p>
        <div class="row g-3 mb-3" data-aos="fade-up">
          <div class="col-sm-6">
            <div style="display:flex; align-items:center; gap:.6rem; color:#000; font-size: 1rem;">
              <i class="bi bi-check-circle-fill text-gold"></i> Aluminium Sliding Systems
            </div>
          </div>
          <div class="col-sm-6">
            <div style="display:flex; align-items:center; gap:.6rem; color:#000; font-size:1rem;">
              <i class="bi bi-check-circle-fill text-gold"></i> Curtain Wall & Facades
            </div>
          </div>
          <div class="col-sm-6">
            <div style="display:flex; align-items:center; gap:.6rem; color:#000; font-size:1rem;">
              <i class="bi bi-check-circle-fill text-gold"></i> Glass Partitions
            </div>
          </div>
          <div class="col-sm-6">
            <div style="display:flex; align-items:center; gap:.6rem; color:#000; font-size:1rem;">
              <i class="bi bi-check-circle-fill text-gold"></i> Smart Glass & Film
            </div>
          </div>
        </div>
        <a href="#" class="btn-gold mt-2">Our Story <i class="bi bi-arrow-right ms-1"></i></a>
      </div>
    </div>
  </div>
</section>

<section class="about-section">
  <div class="container">

    <!-- TOP ROW -->
    <div class="row align-items-start mb-5">

      <div class="col-12 col-md-3 mb-4 mb-md-0">
        <div class="eyebrow" data-aos="fade-up">About Us</div>
        <p class="about-left-desc" data-aos="fade-up">Duis aute irure dolor in reprehenderit in voluptate.</p>
      </div>

      <div class="col-12 col-md-9">
        <h2 class="about-heading" data-aos="fade-up">
          Delivering <span class="highlight">Superior Construction Solutions</span><br>
          for Every Project Type and Scale
        </h2>
        <div class="row align-items-end">
          <div class="col-12 col-lg-8">
            <p class="about-body" data-aos="fade-up">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
              dolor in reprehenderit in voluptate.
            </p>
          </div>
          <div class="col-12 col-lg-4 d-flex justify-content-lg-end" data-aos="fade-up">
            <a href="#" class="btn-learn-more">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

    </div>

    <!-- BOTTOM ROW -->
    <div class="row g-4 align-items-stretch">

      <!-- Image with badges -->
      <div class="col-12 col-md-7">
        <div class="image-wrapper" data-aos="fade-up">
          <img
            src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=900&q=80"
            alt="Construction worker on site"
          />
          <div class="img-badge badge-bottom-left" data-aos="fade-up">
            <i class="bi bi-award"></i> Certified Construction Team
          </div>
          <div class="img-badge badge-center-right" data-aos="fade-up">
            <i class="bi bi-cloud-check"></i> On-site Quality Inspection
          </div>
        </div>
      </div>

      <!-- Vision + Mission -->
      <div class="col-12 col-md-5 d-flex flex-column gap-4">

        <div class="info-card vision" data-aos="fade-up">
          <div class="card-title-row">
            <div class="card-icon"><i class="bi bi-eye"></i></div>
            <h3 class="card-heading">Our Vision</h3>
          </div>
          <p class="card-body-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.
          </p>
        </div>

        <div class="info-card mission" data-aos="fade-up">
          <div class="card-title-row">
            <div class="card-icon"><i class="bi bi-bullseye"></i></div>
            <h3 class="card-heading">Our Mission</h3>
          </div>
          <p class="card-body-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.
          </p>
        </div>

      </div>
    </div>
  </div>
</section>

<style>

  .about-section { 
    padding: 60px 0 70px; 
    background: #fff; 
  }

  /* Eyebrow */
  .about-eyebrow {
    display: flex; 
    align-items: center; 
    gap: 10px;
    color: #aa8038; 
    font-size: 1rem; 
    font-weight: 700;
    letter-spacing: 0.12em; 
    text-transform: uppercase; 
    margin-bottom: 18px;
  }

  .about-eyebrow::before {
    content: ''; 
    display: inline-block; 
    width: 28px; 
    height: 2px;
    background: #aa8038; 
    flex-shrink: 0;
  }

  .about-left-desc { 
    font-size: 1rem; 
    color: #6b7280; 
    line-height: 1.65; 
    margin-top: 10px; 
  }

  .about-heading {
    font-size: clamp(1.75rem, 3vw, 2.5rem); 
    font-weight: 800;
    color: #0f1b2d; 
    line-height: 1.2; 
    letter-spacing: -0.5px;
  }

  .about-heading .highlight { 
    color: #aa8038;
  }

  .about-body { 
    font-size: 1rem; 
    color: #6b7280; 
    line-height: 1.75; 
    margin-top: 16px; 
  }

  .btn-learn-more {
    display: inline-flex; 
    align-items: center; 
    gap: 8px;
    margin-top: 24px; 
    padding: 12px 28px;
    border: 2px solid #aa8038; 
    border-radius: 8px;
    background: transparent; 
    color: #0f1b2d;
    font-size: 0.88rem; 
    font-weight: 600; 
    text-decoration: none;
    transition: background 0.2s, color 0.2s;
  }

  .btn-learn-more:hover { 
    background: #aa8038; 
    color: #fff; 
  }

  /* Image block */
  .image-wrapper {
    position: relative; 
    border-radius: 14px; 
    overflow: hidden; 
    height: 420px;
  }

  .image-wrapper img { 
    width: 100%; 
    height: 100%; 
    object-fit: cover; 
    display: block; 
  }

  .img-badge {
    position: absolute; 
    display: flex; 
    align-items: center; 
    gap: 10px;
    padding: 12px 20px; 
    border-radius: 8px;
    font-weight: 700; 
    font-size: 0.88rem; 
    white-space: nowrap;
  }

  .badge-bottom-left {
    bottom: 22px; 
    left: 22px;
    background: rgba(15, 27, 45, 0.88); 
    color: #fff; 
    backdrop-filter: blur(4px);
  }

  .badge-center-right {
    bottom: 110px; right: 0;
    background: #aa8038; color: #fff;
    border-radius: 8px 0 0 8px;
  }

  /* Vision / Mission Cards */
  .info-card { 
    border-radius: 14px; 
    padding: 32px 28px; 
    color: #fff; 
  }

  .info-card.vision  { 
    background: #aa8038; 
  }

  .info-card.mission { 
    background: #0f1b2d; 
  }

  .card-title-row { 
    display: flex; 
    align-items: center; 
    gap: 12px; 
    margin-bottom: 16px; 
  }

  .card-icon {
    width: 40px; 
    height: 40px; 
    border-radius: 50%;
    background: rgba(255,255,255,0.15);
    display: flex; 
    align-items: center; 
    justify-content: center;
    font-size: 1.1rem; 
    flex-shrink: 0;
  }

  .card-heading { 
    font-size: 1.15rem; 
    font-weight: 700; 
    color: #fff; 
    margin: 0; 
  }
  
  .card-body-text { 
    font-size: 1rem; 
    color: rgba(255,255,255,0.82); 
    line-height: 1.75; 
    margin: 0; 
  }

  @media (max-width: 767px) {
    .image-wrapper { 
      height: 280px; 
    }
    .badge-center-right { 
      right: 0; 
      bottom: 80px; 
    }
  }
</style>

<section class="stats-section mt-5">
  <div class="container ">
 
    <div class="stats-card ">
      
      <div class="row align-items-center  g-0">

        <div class="col-12 col-md-3 stat-item" data-aos="fade-up">
          <div class="stat-number">
            <span class="counter" data-target="25">0</span><span class="suffix">+</span>
          </div>
          <div class="stat-label">Years Industry Experience</div>
        </div>

        <div class="col-12 col-md-3 stat-item" data-aos="fade-up">
          <div class="stat-number">
            <span class="counter" data-target="500">0</span><span class="suffix">+</span>
          </div>
          <div class="stat-label">Completed Projects</div>
        </div>

        <div class="col-12 col-md-3 stat-item" data-aos="fade-up">
          <div class="stat-number">
            <span class="counter" data-target="150">0</span><span class="suffix">+</span>
          </div>
          <div class="stat-label">Expert Team Members</div>
        </div>

        <div class="col-12 col-md-3 stat-item" data-aos="fade-up">
          <div class="stat-number">
            <span class="counter" data-target="98">0</span><span class="suffix">%</span>
          </div>
          <div class="stat-label">Client Satisfaction Rating</div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ═══════════════ SERVICES ═══════════════ -->
 <section class="section-services">
  <div class="container">

    <!-- Top row: eyebrow + heading left, nav right -->
    <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-2">

      <div>
          <div class="col-lg-5">
              <span class="project-tag" data-aos="fade-up">• OUR SERVICES</span>
          </div>

          <h2 class="section-heading mb-0" data-aos="fade-up">
            Our Core Services
          </h2> 
      </div>

      <!-- Custom nav buttons -->
      <div class="swiper-nav mb-3" data-aos="fade-up">
        <button class="swiper-btn" id="btnPrev" aria-label="Previous">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"/>
          </svg>
        </button>
        <button class="swiper-btn" id="btnNext" aria-label="Next">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 18 15 12 9 6"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Swiper -->
    <div class="swiper swiper-newsroom">
      <div class="swiper-wrapper" data-aos="fade-up">

        <!-- Card 1 -->
        <div class="swiper-slide">
          <div class="article-card">
            <div class="card-img-wrap">
              <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80" alt="Fluted Glass Dubai"/>
              <span class="card-tag">Fluted Glass Dubai</span>
            </div>
            <div class="card-body-inner">
              <p class="card-author">By <a href="#">Glass World Industries</a></p>
              <a href="#" class="card-title-link">
                <h3>Fluted Glass Dubai: The Perfect Blend Of Privacy, Style &amp; Sophistication</h3>
              </a>
              <p class="card-excerpt">Modern interior design is all about creating spaces that feel open, elegant, and functional. One material that has become increasingly popular among homeowners and designers alike is fluted glass.</p>
              <a href="#" class="card-read-more">
                Read More
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="swiper-slide">
          <div class="article-card">
            <div class="card-img-wrap">
              <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=600&q=80" alt="Laminated Glass"/>
              <span class="card-tag">Laminated Glass</span>
            </div>
            <div class="card-body-inner">
              <p class="card-author">By <a href="#">Glass World Industries</a></p>
              <a href="#" class="card-title-link">
                <h3>Laminated Vs Toughened Glass: Which Is Safer For Your Project?</h3>
              </a>
              <p class="card-excerpt">If you're planning a glass installation in Dubai, whether it's a shower enclosure, a glass partition wall, a balustrade, or a commercial fit-out, there's a question that comes up every time.</p>
              <a href="#" class="card-read-more">
                Read More
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="swiper-slide">
          <div class="article-card">
            <div class="card-img-wrap">
              <img src="https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?w=600&q=80" alt="Shower Enclosure"/>
              <span class="card-tag">Shower Enclosure</span>
            </div>
            <div class="card-body-inner">
              <p class="card-author">By <a href="#">Glass World Industries</a></p>
              <a href="#" class="card-title-link">
                <h3>Frameless Shower Enclosures Ultimate Dubai Guide</h3>
              </a>
              <p class="card-excerpt">There's a moment in almost every bathroom renovation conversation we have at Glass World Industries when a client sees a photo of a frameless shower enclosure for the first time and says — "that's exactly what I want."</p>
              <a href="#" class="card-read-more">
                Read More
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="swiper-slide">
          <div class="article-card">
            <div class="card-img-wrap">
              <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&q=80" alt="Glass Partitions"/>
              <span class="card-tag">Glass Partitions</span>
            </div>
            <div class="card-body-inner">
              <p class="card-author">By <a href="#">Glass World Industries</a></p>
              <a href="#" class="card-title-link">
                <h3>Glass Partitions: Transform Open Spaces Without Losing Light</h3>
              </a>
              <p class="card-excerpt">Office and residential open-plan layouts thrive on natural light. Glass partition systems let you define zones, control acoustics, and maintain the airy feel that makes contemporary spaces feel alive.</p>
              <a href="#" class="card-read-more">
                Read More
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="swiper-slide">
          <div class="article-card">
            <div class="card-img-wrap">
              <img src="https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?w=600&q=80" alt="Smart Glass"/>
              <span class="card-tag">Smart Glass</span>
            </div>
            <div class="card-body-inner">
              <p class="card-author">By <a href="#">Glass World Industries</a></p>
              <a href="#" class="card-title-link">
                <h3>Smart Switchable Glass: Privacy At The Flick Of A Switch</h3>
              </a>
              <p class="card-excerpt">Switchable glass, also known as smart glass, transitions from transparent to opaque in seconds. Discover how Dubai's leading architects and homeowners are using this technology to redefine living spaces.</p>
              <a href="#" class="card-read-more">
                Read More
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                </svg>
              </a>
            </div>
          </div>
        </div>

      </div><!-- /swiper-wrapper -->

      <!-- Pagination -->
      <div class="swiper-pagination swiper-pagination-newsroom" data-aos="fade-up"></div>
    </div><!-- /swiper -->

  </div>
</section>
  
<!-- ═══════════════ STATS ═══════════════ -->
<!-- <section class="stats-section">
  <div class="container">
    <div class="row align-items-center text-center justify-content-center g-4">
      <div class="col-6 col-md-auto px-md-5">
        <div class="stat-item">
          <div class="stat-number">2500+</div>
          <div class="stat-label">Projects Completed</div>
        </div>
      </div>
      <div class="col-auto d-none d-md-block"><div class="stat-divider"></div></div>
      <div class="col-6 col-md-auto px-md-5">
        <div class="stat-item">
          <div class="stat-number">25+</div>
          <div class="stat-label">Years Experience</div>
        </div>
      </div>
      <div class="col-auto d-none d-md-block"><div class="stat-divider"></div></div>
      <div class="col-6 col-md-auto px-md-5">
        <div class="stat-item">
          <div class="stat-number">98%</div>
          <div class="stat-label">Client Satisfaction</div>
        </div>
      </div>
      <div class="col-auto d-none d-md-block"><div class="stat-divider"></div></div>
      <div class="col-6 col-md-auto px-md-5">
        <div class="stat-item">
          <div class="stat-number">150+</div>
          <div class="stat-label">Expert Team Members</div>
        </div>
      </div>
    </div>
  </div>
</section>  -->

<style> 

    /* ── Section wrapper ── */
    .why-section {
      padding: 80px 0;
    } 
    /* ── Headline ── */
    .why-headline { 
      font-size: 1.5rem;
      font-weight: 800;
      line-height: 1.2;
      color: var(--dark); 
    }

    /* ── Stats list ── */
    .stat-row {
      border-bottom: 1px solid #e0ddd8;
      padding: 20px 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
    }

    .stat-row:first-child {
      border-top: 1px solid #e0ddd8;
    }

    .stat-label {
      font-size: 1rem;
      color: var(--muted);
      font-weight: 500;
    }

    .stat-value { 
      font-size: 2.5rem;
      font-weight: 800;
      color: var(--dark);
      line-height: 1;
      white-space: nowrap;
    }

    /* ── Quote + video card ── */
    .card-panel {
      background: #f5f4f1;
      border-radius: 15px;
      overflow: hidden;
    }

    .quote-block {
      padding: 32px 36px 28px;
    }

    .quote-text {
      font-size: 1rem;
      line-height: 1.72;
      color: #3a3a3a;
      margin-bottom: 24px;
    }

    .quote-author {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .author-bar {
      width: 4px;
      height: 45px;
      background: var(--gold);
      border-radius: 2px;
      flex-shrink: 0;
    }

    .author-name {
      font-weight: 700;
      font-size: 1.5rem;
      color: var(--dark);
      margin: 0;
    }

    .author-title {
      font-size: 1rem;
      color: var(--muted);
      margin: 0;
    }

    /* ── Video thumbnail ── */
    .video-thumb {
      position: relative;
      width: 100%;
      aspect-ratio: 16 / 9;
      overflow: hidden;
      background: #2b2b2b;
      cursor: pointer;
    }

    .video-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.72;
      transition: opacity 0.3s ease;
    }

    .video-thumb:hover img {
      opacity: 0.85;
    }

    .play-btn {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .play-btn span {
      width: 52px;
      height: 52px;
      background: rgba(255,255,255,0.18);
      border: 2px solid rgba(255,255,255,0.7);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.35rem;
      color: #fff;
      backdrop-filter: blur(4px);
      transition: background 0.2s;
    }

    .video-thumb:hover .play-btn span {
      background: rgba(170,128,56,0.55);
      border-color: var(--gold-light);
    }

    /* ── Responsive tweaks ── */
    @media (max-width: 767.98px) {
      .why-section {
        padding: 56px 0;
      }

      .why-headline {
        max-width: 100%;
        margin-bottom: 36px;
      }

      .stats-col {
        margin-bottom: 36px;
      }

      .quote-block {
        padding: 24px 22px 20px;
      }
    }
</style>

<section class="why-section">
  <div class="container">

    <!-- Top row: eyebrow + headline -->
    <div class="row align-items-start mb-4 mb-md-5">
      <div class="col-md-4 col-lg-3">
        <div class="eyebrow" data-aos="fade-up">Why Choose Us</div>
      </div>
      <div class="col-md-8 col-lg-9">
        <h2 class="why-headline" data-aos="fade-up">
          We uphold core values of integrity, quality, and innovation, delivering construction solutions that ensure safety, efficiency.
        </h2>
      </div>
    </div>

    <!-- Bottom row: stats | quote + video -->
    <div class="row g-4 g-lg-5 align-items-stretch">

      <!-- Stats column -->
      <div class="col-md-4 col-lg-3 stats-col" data-aos="fade-right">
        <div class="stat-row">
          <span class="stat-label">Awards Won</span>
          <span class="stat-value">32</span>
        </div>
        <div class="stat-row">
          <span class="stat-label">Handed-Over Projects</span>
          <span class="stat-value">500<sup>+</sup></span>
        </div>
        <div class="stat-row">
          <span class="stat-label">Satisfied Clients</span>
          <span class="stat-value">99<sup>%</sup></span>
        </div>
      </div>

      <!-- Quote + Video card -->
      <div class="col-md-8 col-lg-9" data-aos="fade-left">
        <div class="card-panel h-100">
          <div class="row g-0 h-100">

            <!-- Quote -->
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
              <div class="quote-block">
                <p class="quote-text">
                  "At Heritage, we don't just build structures — we build trust, value, and enduring legacies. We are forward-looking, shape modern, sustainable spaces that embody excellence &amp; stand the test of time."
                </p>
                <div class="quote-author">
                  <div class="author-bar"></div>
                  <div>
                    <p class="author-name">Benedict Hawthorne</p>
                    <p class="author-title">CEO / Founder of Heritage</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Video thumbnail -->
            <div class="col-12 col-lg-6">
              <div class="video-thumb h-100" style="min-height:220px;" role="button" aria-label="Play company video">
                <img
                  src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&q=80"
                  alt="Construction worker on site at golden hour"
                />
                <div class="play-btn">
                  <span><i class="bi bi-play-fill" style="margin-left:3px;"></i></span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</section>

<style> 
 
    /* ── Card ── */
    .value-card {
      border: 1px solid #e4e4e4;
      border-radius: 8px;
      padding: 32px 28px 28px;
      background: #ffffff;
      height: 100%;
      display: flex;
      flex-direction: column;
      gap: 24px;
      transition: border-color 0.25s ease, box-shadow 0.25s ease;
    }

    .value-card:hover {
      border-color: var(--gold);
      box-shadow: 0 6px 28px rgba(170,128,56,0.10);
    }

    /* ── Card top: title + icon ── */
    .card-top {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 12px;
    }

    .card-title {
      font-family: 'Manrope', sans-serif;
      font-size: 0.88rem;
      font-weight: 800;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      color: var(--dark);
      margin: 0;
      line-height: 1.35;
    }

    /* active card accent on title */
    .value-card.active .card-title {
      color: var(--gold);
    }

    /* ── Icon circle ── */
    .icon-wrap {
      width: 72px;
      height: 72px;
      border-radius: 50%;
      background: #efefef;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: background 0.25s;
    }
 

    .icon-wrap svg {
      width: 32px;
      height: 32px;
    }

    .icon-wrap:not(.dark) svg {
      stroke: #555;
      fill: none;
    }

    .icon-wrap.dark svg {
      stroke: #fff;
      fill: none;
    }

    /* hover: light icons go gold-tinted */
    .value-card:hover .icon-wrap:not(.dark) {
      background: #f0e8d8;
    }

    .value-card:hover .icon-wrap:not(.dark) svg {
      stroke: var(--gold);
    }

    /* ── Description box ── */
    .card-desc {
      background: #f5f5f5;
      border-radius: 6px;
      padding: 18px 16px;
      font-size: 0.875rem;
      line-height: 1.72;
      color: var(--muted);
      flex: 1;
    }

    /* ── Mobile ── */
    @media (max-width: 575.98px) {
      .values-section {
        padding: 48px 0;
      }
      .value-card {
        padding: 24px 20px 20px;
      }
    } 
</style>

<section class="values-section">
  <div class="container">
    <div class="row g-3 g-lg-4">

      <!-- Card 1 – Integrity & Responsibility -->
      <div class="col-12 col-sm-6 col-xl-3" data-aos="fade-up">
        <div class="value-card">
          <div class="card-top">
            <h3 class="card-title">Integrity &amp;<br>Responsibility</h3>
            <div class="icon-wrap">
              <!-- Shield check icon -->
              <svg viewBox="0 0 24 24" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2l7 3v5c0 5.25-3.5 9.74-7 11C5.5 19.74 5 15.25 5 10V5l7-3z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"/>
              </svg>
            </div>
          </div>
          <p class="card-desc">
            We act with honesty and accountability in every decision, taking full responsibility for our work, commitments, and the trust our clients place in us.
          </p>
        </div>
      </div>

      <!-- Card 2 – Quality & Safety First (active / dark icon) -->
      <div class="col-12 col-sm-6 col-xl-3" data-aos="fade-up">
        <div class="value-card">
          <div class="card-top">
            <h3 class="card-title">Quality &amp;<br>Safety First</h3>
            <div class="icon-wrap">
              <!-- Hard hat + cross icon -->
              <svg viewBox="0 0 24 24" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3C8.5 3 5.5 5.5 5 9H4a1 1 0 000 2h16a1 1 0 000-2h-1c-.5-3.5-3.5-6-7-6z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 11v2a7 7 0 0014 0v-2"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v3M10.5 6.5h3"/>
              </svg>
            </div>
          </div>
          <p class="card-desc">
            We prioritize quality and on-site safety above all, ensuring every project meets the highest standards while protecting people, assets &amp; environments.
          </p>
        </div>
      </div>

      <!-- Card 3 – Professional Execution -->
      <div class="col-12 col-sm-6 col-xl-3" data-aos="fade-up">
        <div class="value-card">
          <div class="card-top">
            <h3 class="card-title">Professional<br>Execution</h3>
            <div class="icon-wrap">
              <!-- Rocket icon -->
              <svg viewBox="0 0 24 24" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 3.5C10 3.5 7 6 5.5 9.5L3 12l3 1 1 3 2.5-2.5C13 15 16.5 13 17.5 10c1-3-1-6.5-4-6.5z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.5 14.5l-2 4.5 4.5-2"/>
                <circle cx="14" cy="9" r="1" stroke-width="1.5"/>
              </svg>
            </div>
          </div>
          <p class="card-desc">
            We follow clear processes, precise planning, and disciplined execution, and consistently aligned with client expectations and technical requirements.
          </p>
        </div>
      </div>

      <!-- Card 4 – Long-Term Trust -->
      <div class="col-12 col-sm-6 col-xl-3" data-aos="fade-up">
        <div class="value-card">
          <div class="card-top">
            <h3 class="card-title">Long-Term<br>Trust</h3>
            <div class="icon-wrap">
              <!-- Chess king icon -->
              <svg viewBox="0 0 24 24" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2v3M10.5 3.5h3"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5.5c0 2.5 1 4 3 5 2-1 3-2.5 3-5"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M7 19h10l-1.5-8h-7L7 19z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 21h14"/>
              </svg>
            </div>
          </div>
          <p class="card-desc">
            We cultivate strong partnerships by listening closely, aligning goals, and delivering dependable results that clients and partners can rely on.
          </p>
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</section>

<style>
  .testimonialSwiper {
    padding-bottom: 70px;
  }

  .testimonial-section{
    margin-top: 100px;
  }
  
  .testimonial-card{
      background:#fff;
      border:1px solid #d9d9d9;
      border-radius:12px;
      padding:45px 40px;
      margin-top: 20px;
      position:relative;
      min-height:355px;
      transition:.4s;
  }

  .testimonial-card:hover{
      transform:translateY(-8px); 
      border: 2px solid #000;
  }
 
  .quote-icon{
      position:absolute;
      top:-22px;
      right:20px;
      width:74px;
      height:74px;
      background:#fff;
      border-radius:10px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:70px;
      color:#111;
  }

  .testimonial-content{
      font-size:1rem;
      line-height:1.8;
      color:#222;
      margin-top:35px; 
  }

  .testimonial-user{
      display:flex;
      align-items:center;
      gap:15px;
      position:absolute;
      bottom:35px;
  }

  .testimonial-user img{
      width:70px;
      height:70px;
      border-radius:8px;
      object-fit:cover;
  }

  .testimonial-user h5{
      margin:0;
      font-size:22px;
      font-weight:700;
  }

  .testimonial-user span{
      color:#777;
      font-size:16px;
  }

  .testimonial-dots span{
      width:10px;
      height:10px;
      border-radius:50%;
      background:#d4d4d4;
      display:inline-block;
      margin:0 5px;
  }

  .testimonial-dots span.active{
      background:var(--gold);
      width:12px;
      height:12px;
  }

  /* Tablet */
  @media(max-width:991px){
 
      .testimonial-card{
          min-height:auto;
          padding:35px 30px 120px;
      }

      .testimonial-content{
          font-size:19px;
      }
  }

  /* Mobile */
  @media(max-width:767px){

      .testimonial-section{
          padding:60px 0;
      } 
 
      .testimonial-card{
          padding:30px 25px 110px;
      }

      .quote-icon{
          width:60px;
          height:60px;
          font-size:55px;
      }

      .testimonial-content{
          font-size:17px;
          line-height:1.8;
          margin-bottom:40px;
      }

      .testimonial-user img{
          width:55px;
          height:55px;
      }

      .testimonial-user h5{
          font-size:18px;
      }

      .testimonial-user span{
          font-size:14px;
      }
  }
</style>

<section class="testimonial-section py-5">
    <div class="container">

        <!-- Section Header -->
        <div class="row mb-5">
            <div class="col-lg-7">
                <div class="eyebrow" data-aos="fade-up">TESTIMONIALS </div>

                <h2 class="section-title mt-3" data-aos="fade-up">
                    What Clients Saying About Us
                </h2>

                <p class="section-desc" data-aos="fade-up">
                    Your trust drives every project we design and build. We're
                    ready for the next chapter of collaboration and innovation.
                </p>
            </div>
        </div>

        <!-- Testimonial Cards -->
        <div class="row g-4">

          <div class="swiper testimonialSwiper">

            <div class="swiper-wrapper" data-aos="fade-up">

                <!-- Card 1 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>

                        <div class="testimonial-content">
                            I'm consistently impressed with Heritage's ability to
                            understand our vision and translate it into reality with
                            cutting-edge solutions.
                        </div>

                        <div class="testimonial-user">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300" alt="">
                            <div>
                                <h5>Emily Johnson</h5>
                                <span>COO - Gortex Retail Group</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>

                        <div class="testimonial-content">
                            I am extremely satisfied with the way Heritage’s experts
                            always listen and analyze our needs.
                        </div>

                        <div class="testimonial-user">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300" alt="">
                            <div>
                                <h5>Eleanor Sinclair</h5>
                                <span>CEO / Founder - Vertex ISD</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>

                        <div class="testimonial-content">
                            Working with the Heritage team has been inspiring.
                            They understand our vision and deliver innovative solutions.
                        </div>

                        <div class="testimonial-user">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=300" alt="">
                            <div>
                                <h5>Sebastian Vettel</h5>
                                <span>CEO - Ragos Galactic Co., Ltd</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>

                        <div class="testimonial-content">
                            Working with the Heritage team has been inspiring.
                            They understand our vision and deliver innovative solutions.
                        </div>

                        <div class="testimonial-user">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=300" alt="">
                            <div>
                                <h5>Sebastian Vettel</h5>
                                <span>CEO - Ragos Galactic Co., Ltd</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination -->
            <div class="swiper-pagination" data-aos="fade-up"></div>

          </div>

        </div>
 
    </div>
</section> 
 
<?php include_once('elements/our-clients.php'); ?>
 
<section class="faq-section">
  <div class="container">

    <!-- Header -->
    <div class="text-center mb-2">
      <div class="eyebrow" data-aos="fade-up"><span>Frequently Asked Questions</span></div>
      <h2 class="faq-title" data-aos="fade-up">Everything You Need To Know</h2>
      <p class="faq-subtitle-italic" data-aos="fade-up">Before You Choose A Glass Company In Dubai</p>
      <p class="faq-lead" data-aos="fade-up">
        Clear answers to the most common questions from clients across the UAE,<br>
        so you can move forward with total confidence.
      </p>
    </div>

    <hr class="faq-divider"/>

    <!-- FAQ Grid: two independent columns so cards don't stretch each other -->
    <div class="faq-grid" data-aos="fade-up">

      <!-- LEFT COLUMN -->
      <div class="faq-col">

        <!-- Q1 – open by default -->
        <div class="faq-card active" onclick="toggleFaq(this)">
          <button class="faq-trigger" aria-expanded="true">
            <span class="faq-question">What makes devotion contracting the best facade installation company in Dubai?</span>
            <span class="faq-icon">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="7" y1="1" x2="7" y2="13" stroke="#b8952a" stroke-width="2" stroke-linecap="round"/>
                <line x1="1" y1="7" x2="13" y2="7" stroke="#b8952a" stroke-width="2" stroke-linecap="round" class="h-line"/>
              </svg>
            </span>
          </button>
          <div class="faq-body"> 
            <p class="faq-answer">
              Devotion Contracting stands out as a facade installation company in Dubai because of its specialized expertise in aluminium, glass, and cladding systems, strong focus on quality and safety, skilled installation teams, and commitment to delivering durable, high-performance façade solutions on time and to the highest industry standards. 
            </p>
          </div>
        </div>

        <!-- Q3 -->
        <div class="faq-card" onclick="toggleFaq(this)">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-question">Do you offer free site measurements before quoting?</span>
            <span class="faq-icon">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="7" y1="1" x2="7" y2="13" stroke="#b8952a" stroke-width="2" stroke-linecap="round"/>
                <line x1="1" y1="7" x2="13" y2="7" stroke="#b8952a" stroke-width="2" stroke-linecap="round" class="h-line"/>
              </svg>
            </span>
          </button>
          <div class="faq-body"> 
            <p class="faq-answer">
              Yes. Our technical team oƯers complimentary site visits across UAE, to measure, assess and advise before we provide any quotation to ensure complete accuracy from the start. 
            </p>
          </div>
        </div>

        <!-- Q5 -->
        <div class="faq-card" onclick="toggleFaq(this)">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-question">How does devotion contracting ensure its quality of installation? </span>
            <span class="faq-icon">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="7" y1="1" x2="7" y2="13" stroke="#b8952a" stroke-width="2" stroke-linecap="round"/>
                <line x1="1" y1="7" x2="13" y2="7" stroke="#b8952a" stroke-width="2" stroke-linecap="round" class="h-line"/>
              </svg>
            </span>
          </button>
          <div class="faq-body"> 
            <p class="faq-answer">
              Every unit installed undergoes rigorous in-house quality checks on site. We adhere to UAE and international standards throughout the process of installation.
            </p>
          </div>
        </div>

        <!-- Q7 -->
        <div class="faq-card" onclick="toggleFaq(this)">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-question">Do you work on both, residential and hospitality projects?</span>
            <span class="faq-icon">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="7" y1="1" x2="7" y2="13" stroke="#b8952a" stroke-width="2" stroke-linecap="round"/>
                <line x1="1" y1="7" x2="13" y2="7" stroke="#b8952a" stroke-width="2" stroke-linecap="round" class="h-line"/>
              </svg>
            </span>
          </button>
          <div class="faq-body"> 
            <p class="faq-answer">
              Yes — we cater to villas, apartments, luxury hotels, resorts, restaurants, retail spaces, and large commercial buildings, tailoring our solutions to match each project's unique design and performance requirements. 

            </p>
          </div>
        </div>

      </div><!-- /faq-col LEFT -->

      <!-- RIGHT COLUMN -->
      <div class="faq-col">

        <!-- Q2 -->
        <div class="faq-card" onclick="toggleFaq(this)">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-question">Can you handle large commercial and high-rise façade projects?</span>
            <span class="faq-icon">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="7" y1="1" x2="7" y2="13" stroke="#b8952a" stroke-width="2" stroke-linecap="round"/>
                <line x1="1" y1="7" x2="13" y2="7" stroke="#b8952a" stroke-width="2" stroke-linecap="round" class="h-line"/>
              </svg>
            </span>
          </button>
          <div class="faq-body"> 
            <p class="faq-answer">
              Absolutely. We have successfully delivered large-scale curtain wall systems and highrise façades for hotels, corporate towers, and government buildings, with full in-house engineering support. 

            </p>
          </div>
        </div>

        <!-- Q4 -->
        <div class="faq-card" onclick="toggleFaq(this)">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-question">Which areas of Dubai and UAE do you serve? </span>
            <span class="faq-icon">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="7" y1="1" x2="7" y2="13" stroke="#b8952a" stroke-width="2" stroke-linecap="round"/>
                <line x1="1" y1="7" x2="13" y2="7" stroke="#b8952a" stroke-width="2" stroke-linecap="round" class="h-line"/>
              </svg>
            </span>
          </button>
          <div class="faq-body"> 
            <p class="faq-answer">
              We serve all areas of Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain — covering the full UAE with a single, reliable team. 

            </p>
          </div>
        </div>

        <!-- Q6 -->
        <div class="faq-card" onclick="toggleFaq(this)">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-question">Which areas of Dubai and the UAE do you serve?</span>
            <span class="faq-icon">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="7" y1="1" x2="7" y2="13" stroke="#b8952a" stroke-width="2" stroke-linecap="round"/>
                <line x1="1" y1="7" x2="13" y2="7" stroke="#b8952a" stroke-width="2" stroke-linecap="round" class="h-line"/>
              </svg>
            </span>
          </button>
          <div class="faq-body"> 
            <p class="faq-answer">
              We serve all areas of Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain — covering the full UAE with a single, reliable team.
            </p>
          </div>
        </div>

        <!-- Q8 -->
        <div class="faq-card" onclick="toggleFaq(this)">
          <button class="faq-trigger" aria-expanded="false">
            <span class="faq-question">How do I get started with Devotion Contracting? </span>
            <span class="faq-icon">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="7" y1="1" x2="7" y2="13" stroke="#b8952a" stroke-width="2" stroke-linecap="round"/>
                <line x1="1" y1="7" x2="13" y2="7" stroke="#b8952a" stroke-width="2" stroke-linecap="round" class="h-line"/>
              </svg>
            </span>
          </button>
          <div class="faq-body"> 
            <p class="faq-answer">
              Simply call us or send a WhatsApp message. Our team will arrange a free consultation, assess your needs, visit the site if required, and provide a transparent, detailed quotation — no obligation.
            </p>
          </div>
        </div>

      </div><!-- /faq-col RIGHT -->

    </div><!-- /faq-grid -->

    <!-- Footer CTA -->
    <div class="faq-footer d-none">
      <p>Still have questions about our glass solutions?</p>
      <p>Our expert team is available 6 days a week across the UAE.</p>
      <div class="cta-btns">
        <a href="tel:+971000000000" class="btn-call">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.59 1.19h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9a16 16 0 0 0 6.29 6.29l1.17-1.17a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Call Now — +971 0000000000
        </a>
        <a href="https://wa.me/971000000000" class="btn-whatsapp" target="_blank">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
          WhatsApp Us
        </a>
      </div>
    </div>

  </div>
</section>

<section class="contact-section position-relative">

  <!-- Background Image -->
  <div class="contact-bg"></div>

  <div class="container">
      <div class="contact-box">

          <div class="row align-items-center g-5">

              <!-- Left Content -->
              <div class="col-lg-6" data-aos="fade-right">
                  <div class="eyebrow">
                      <span></span> GET IN TOUCH
                  </div>

                  <h2 class="contact-title">
                      Let's Connect To Launch
                      Your Next Projects.
                  </h2>

                  <p class="contact-desc">
                      Connect with us for expert guidance and construction
                      solutions shaped around your project goals.
                  </p>

                  <!-- Contact Card -->
                  <div class="contact-info-card">

                      <div class="contact-icon">
                          <i class="bi bi-buildings"></i>
                      </div>

                      <div class="contact-details">
                          <p>
                              Call us:
                              <strong>+971 215459875 / 678 33</strong>
                          </p>

                          <p>
                              Mail us:
                              <strong>devotioncontracting@gmail.com</strong>
                          </p>
                      </div>

                  </div>

              </div>

              <!-- Right Form -->
              <div class="col-lg-6" data-aos="fade-left">

                  <form>
                      <div class="mb-3">
                          <input type="text"
                              class="form-control custom-input"
                              placeholder="Your Name*">
                      </div>

                      <div class="mb-3">
                          <input type="email"
                              class="form-control custom-input"
                              placeholder="Your Email*">
                      </div>

                      <div class="mb-3">
                          <input type="tel"
                              class="form-control custom-input"
                              placeholder="Your Phone Number*">
                      </div>

                      <div class="mb-4">
                          <select class="form-select custom-input">
                              <option selected>
                                  What Do You Need?
                              </option>
                              <option>Consulting</option>
                              <option>Relocation</option>
                              <option>Visa Support</option> 
                          </select>
                      </div>

                      <button class="callback-btn w-100">
                          <i class="bi bi-telephone-fill me-2"></i>
                          REQUEST A CALLBACK
                      </button>

                  </form>

              </div>

          </div>

      </div>
  </div>

</section>

<style>
  
  /* Section */
  .contact-section{
      position:relative;
      padding:120px 0;
      overflow:hidden;
  }

  /* Background */
  .contact-bg{
      position:absolute;
      inset:0;
      background:url('assets/images/banner-img.png') center center/cover no-repeat;
      z-index:1;
  }

  .contact-section::before{
      content:'';
      position:absolute;
      inset:0;
      background:rgba(0,0,0,.15);
      z-index:2;
  }

  .container{
      position:relative;
      z-index:3;
  }

  /* Main Box */
  .contact-box{
      background:#f5f2ef;
      border-radius:12px;
      padding:70px;
      box-shadow:0 20px 60px rgba(0,0,0,.08);
  } 

  /* Title */
  .contact-title{
      font-size:62px;
      font-weight:700;
      line-height:1.1;
      margin:20px 0;
      color:#111;
  }

  .contact-desc{
      color:#6b6b6b;
      font-size:20px;
      line-height:1.8;
      max-width:550px;
  }

  /* Contact Card */
  .contact-info-card{
      margin-top:60px;
      background:#fff;
      border:1px solid #ddd;
      border-radius:10px;
      padding:25px;
      display:flex;
      align-items:center;
      gap:25px;
  }

  .contact-icon{
      width:90px;
      height:90px;
      background:#111;
      border-radius:12px;
      color:var(--gold);
      font-size:42px;
      display:flex;
      align-items:center;
      justify-content:center;
      flex-shrink:0;
  }

  .contact-details p{
      margin-bottom:8px;
      font-size:18px;
      color:#444;
  }

  /* Inputs */
  .custom-input{
      height:62px;
      border:none;
      border-radius:8px;
      background:#fff;
      font-size:17px;
      padding:0 20px;
      box-shadow:none !important;
  }

  .custom-input:focus{
      border:1px solid var(--gold);
  }

  /* Button */
  .callback-btn{
      height:70px;
      border:none;
      border-radius:8px;
      background:#111;
      color:var(--gold);
      font-weight:700;
      letter-spacing:.5px;
      transition:.4s;
  }

  .callback-btn:hover{
      background:var(--gold);
      color:#fff;
  }

  /* Tablet */
  @media(max-width:991px){

      .contact-box{
          padding:50px 35px;
      }

      .contact-title{
          font-size:46px;
      }

      .contact-desc{
          font-size:17px;
      }
  }

  /* Mobile */
  @media(max-width:767px){

      .contact-section{
          padding:70px 0;
      }

      .contact-box{
          padding:30px 20px;
          border-radius:8px;
      }

      .contact-title{
          font-size:34px;
          margin:15px 0;
      }

      .contact-desc{
          font-size:15px;
      }

      .contact-info-card{
          flex-direction:column;
          text-align:center;
          gap:15px;
          margin-top:30px;
      }

      .contact-icon{
          width:70px;
          height:70px;
          font-size:32px;
      }

      .contact-details p{
          font-size:15px;
      }

      .custom-input{
          height:55px;
          font-size:15px;
      }

      .callback-btn{
          height:60px;
          font-size:14px;
      }
  }
</style>

<!-- ═══════════════ CTA ═══════════════ -->
<section class="cta-section d-none">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <div class="section-tag">Get in Touch</div>
        <h2 class="section-title mb-3">Ready to Transform Your Space?</h2>
        <p style="color:#000; font-size:.95rem;line-height:1.8; max-width:500px;">
          Our team of expert consultants is ready to discuss your project requirements and deliver a solution that exceeds your expectations.
        </p>
      </div>
      <div class="col-lg-5 d-flex flex-wrap gap-3 justify-content-lg-end">
        <a href="tel:043333512" class="btn-gold"><i class="bi bi-telephone-fill"></i> Call Now</a>
        <a href="mailto:sales@gwi.ae" class="btn-outline-white"><i class="bi bi-envelope-fill"></i> Email Us</a>
      </div>
    </div>
  </div>
</section>  

  <script>
    // Animate counters when element enters viewport
    function animateCounter(el) {
      const target = parseInt(el.getAttribute('data-target'));
      const duration = 1800; // ms
      const start = performance.now();

      function update(now) {
        const elapsed = now - start;
        const progress = Math.min(elapsed / duration, 1);
        // Ease out cubic
        const eased = 1 - Math.pow(1 - progress, 3);
        el.textContent = Math.floor(eased * target);
        if (progress < 1) requestAnimationFrame(update);
        else el.textContent = target;
      }

      requestAnimationFrame(update);
    }

    // IntersectionObserver to trigger on scroll into view
    const counters = document.querySelectorAll('.counter');

    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.4
    });

    counters.forEach(c => counterObserver.observe(c));
</script> 

<?php
  // include_once('elements/faqs.php'); 
  include_once('elements/footer.php');
?>