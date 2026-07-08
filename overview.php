 
  
   <?php
  include_once('elements/header.php');
  ?>

  <style>
       .footer{ 
            color:#fff;
            padding:150px 0 30px;
            position: relative;
        }

        .footer .brand-logo img{
            width:220px;
            height:auto;
            object-fit:contain;
        }
     
        /* ── Section ── */
        .overview-section {
          padding: 150px 0 90px;
          position: relative;
          overflow: hidden;
          background: #ffffff;
        }
    
        /* diagonal gold accent – bottom right */
        .overview-section::after {
          content: '';
          position: absolute;
          bottom: 0; right: 0;
          width: 220px; height: 220px;
          background: linear-gradient(135deg, transparent 50%, #f5efe0 50%);
          pointer-events: none;
        }
    
        /* ── Badge ── */
        .highlight-badge {
          display: inline-flex;
          align-items: center;
          background: #f5efe0;
          border-left: 3px solid #aa8038;
          padding: 9px 18px;
          border-radius: 0 4px 4px 0;
          font-size: 0.78rem;
          font-weight: 700;
          color: #aa8038;
          letter-spacing: 0.07em;
          text-transform: uppercase;
          margin-bottom: 20px;
        }
    
        /* ── Heading ── */
        .section-title {
          font-family: 'Playfair Display', serif;
          font-size: clamp(1.9rem, 3.5vw, 2.6rem);
          font-weight: 700;
          color: #aa8038;
          line-height: 1.2;
          margin-bottom: 0;
        }
    
        .title-underline {
          width: 56px; height: 3px;
          background: var(--gold-light);
          margin: 12px 0 28px;
          border-radius: 2px;
        }
    
        /* ── Body copy ── */
        .overview-body p {
          font-size: 1rem;
          line-height: 1.88;
          color: var(--text-muted);
          margin-bottom: 1rem;
        }
        .overview-body p strong { 
          color: #1c1c1c; 
          font-weight: 700; 
        }
    
        /* ════════════════════════════════
          SWIPER SLIDER – right column
        ════════════════════════════════ */
        .slider-wrap {
          position: relative;
          border-radius: 8px;
          overflow: visible; /* let nav arrows bleed out */
        }
    
        /* Main Swiper */
        .main-swiper {
          width: 100%;
          border-radius: 8px;
          overflow: hidden;
          box-shadow: 0 18px 50px rgba(0,0,0,0.13);
        }
    
        .main-swiper .swiper-slide {
          position: relative;
          height: 400px;
        }
    
        .main-swiper .swiper-slide img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          display: block;
        }
    
        /* Slide caption overlay */
        .slide-caption {
          position: absolute;
          bottom: 0; left: 0; right: 0;
          padding: 28px 24px 20px;
          background: linear-gradient(to top, rgba(0,0,0,0.62) 0%, transparent 100%);
          color: #fff;
          font-size: 0.85rem;
          font-weight: 600;
          letter-spacing: 0.03em;
          opacity: 0;
          transform: translateY(6px);
          transition: opacity 0.4s ease, transform 0.4s ease;
        }
        .main-swiper .swiper-slide-active .slide-caption {
          opacity: 1;
          transform: translateY(0);
        }
    
        /* Gold progress bar pagination */
        .main-swiper .swiper-pagination {
          bottom: 14px;
        }
        .main-swiper .swiper-pagination-bullet {
          width: 28px; height: 3px;
          border-radius: 2px;
          background: rgba(255,255,255,0.45);
          opacity: 1;
          transition: background 0.3s, width 0.3s;
        }
        .main-swiper .swiper-pagination-bullet-active {
          background: var(--gold-light);
          width: 44px;
        }
    
        /* Custom prev/next arrows */
        .swiper-btn {
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          z-index: 20;
          width: 42px; height: 42px;
          border-radius: 50%;
          background: #ffffff;
          border: 2px solid var(--gold-light);
          color: var(--gold);
          display: flex; align-items: center; justify-content: center;
          cursor: pointer;
          transition: background 0.25s, color 0.25s, box-shadow 0.25s;
          box-shadow: 0 4px 16px rgba(0,0,0,0.12);
        }
        .swiper-btn:hover {
          background: var(--gold);
          color: #ffffff;
          box-shadow: 0 6px 22px rgba(184,145,42,0.35);
        }
        .swiper-btn svg { width: 16px; height: 16px; stroke-width: 2.2; }
        .btn-prev { left: -20px; }
        .btn-next { right: -20px; }
    
        /* ── Thumb Swiper ── */
        .thumb-swiper {
          margin-top: 12px;
          padding: 4px 0;
        }
        .thumb-swiper .swiper-slide {
          height: 78px;
          border-radius: 5px;
          overflow: hidden;
          cursor: pointer;
          border: 2px solid transparent;
          transition: border-color 0.3s, opacity 0.3s;
          opacity: 0.55;
        }
        .thumb-swiper .swiper-slide img {
          width: 100%; height: 100%;
          object-fit: cover; display: block;
        }
        .thumb-swiper .swiper-slide-thumb-active {
          border-color: var(--gold);
          opacity: 1;
        }
    
        /* slide counter badge */
        .slide-counter {
          position: absolute;
          /* top: 14px;  */
          right: 14px;
          z-index: 10;
          background: rgba(0,0,0,0.45);
          color: #fff;
          font-size: 0.72rem;
          font-weight: 700;
          letter-spacing: 0.05em;
          padding: 4px 10px;
          border-radius: 20px;
          backdrop-filter: blur(4px);
        }
    
        /* ── Responsive ── */
        @media (max-width: 767px) {
          .btn-prev { left: 6px; }
          .btn-next { right: 6px; }
          .main-swiper .swiper-slide { height: 260px; }
          .thumb-swiper .swiper-slide { height: 58px; }
        } 
  </style>

  <section class="top-banner-background" style="background-image: url('assets/images/banner-img.png');">
      <div>
          <h1 class="mb-0 text-center" data-aos="fade-up">
              Overview
          </h1>
          <p class="text-black text-center mt-2" data-aos="fade-up">
                Discover who we are, what we do, and what drives our success.
          </p>
      </div>
  </section>
   
  <section class="overview-section">
    <div class="container">
      <div class="row align-items-center g-5">
  
        <!-- ── LEFT: Text ── -->
        <div class="col-lg-6 col-md-12">
          <div class="highlight-badge" data-aos="fade-up">Company Overview</div>
          <h2 class="section-title"  data-aos="fade-up">Devotion Contracting<br>Overview</h2>
          <div class="title-underline" data-aos="fade-up"></div>
  
          <div class="overview-body">
            <p data-aos="fade-up">
              Devotion Contracting LLC, part of the Devotion Group, is a leading provider of high-performance façade and glazing solutions across the UAE, Oman, and India.

            </p>
            <p data-aos="fade-up">
              We specialize in the <strong>design, fabrication, and installation of complex façade systems, alongside doors, windows, skylights, louvers, canopies, shopfronts, automated systems, and architectural cladding solutions.</strong>

            </p>
            <p data-aos="fade-up">
              Backed by strong engineering expertise and strategic partnerships with globally recognized designers and system providers, we deliver <strong> bespoke aluminium and glazing solutions</strong> tailored to projects of any scale or complexity.

            </p>
            <p data-aos="fade-up">
              Our state-of-the-art manufacturing facility, equipped with advanced machinery and precision tooling, ensures consistent quality, efficiency, and excellence in every delivery.

            </p>
          </div>
        </div>
  
        <!-- ── RIGHT: Swiper Slider ── -->
        <div class="col-lg-6 col-md-12">
          <div class="slider-wrap" data-aos="fade-up">
  
            <!-- Prev / Next -->
            <button class="swiper-btn btn-prev" aria-label="Previous">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </button>
            <button class="swiper-btn btn-next" aria-label="Next">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </button>
  
            <!-- Main Swiper -->
            <div class="swiper main-swiper">
              <div class="swiper-wrapper">
  
                <div class="swiper-slide">
                  <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&q=80" alt="Façade manufacturing facility"/> 
                  <div class="slide-counter" id="counter">1 / 5</div>
                </div>
  
                <div class="swiper-slide">
                  <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&q=80" alt="Glass processing machinery"/> 
                  <div class="slide-counter" id="counter">2 / 5</div>
                </div>
  
                <div class="swiper-slide">
                  <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c?w=800&q=80" alt="Precision aluminium fabrication"/> 
                  <div class="slide-counter" id="counter">3 / 5</div>
                </div>
  
                <div class="swiper-slide">
                  <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=800&q=80" alt="Architectural glazing installation"/> 
                  <div class="slide-counter" id="counter">4 / 5</div>
                </div>
  
                <div class="swiper-slide">
                  <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800&q=80" alt="Complex façade systems"/> 
                  <div class="slide-counter" id="counter">5 / 5</div>
                </div>
  
              </div>
              <!-- Pagination dots -->
              <div class="swiper-pagination"></div>
            </div><!-- /main-swiper -->
  
            <!-- Thumb Swiper -->
            <div class="swiper thumb-swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=200&q=70" alt="thumb1"/></div>
                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=200&q=70" alt="thumb2"/></div>
                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c?w=200&q=70" alt="thumb3"/></div>
                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=200&q=70" alt="thumb4"/></div>
                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=200&q=70" alt="thumb5"/></div>
              </div>
            </div><!-- /thumb-swiper -->
  
          </div><!-- /slider-wrap -->
        </div>
  
      </div><!-- /row -->
    </div><!-- /container -->
  </section>
 
  <?php
// include_once('elements/faqs.php');
include_once('elements/footer.php');
?>