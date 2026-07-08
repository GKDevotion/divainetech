<?php
include_once('elements/header.php');
?>

<style>
  
  /* ── Tag pill ── */
  .tag-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1.6px;
    text-transform: uppercase;
    color: #aa8038;
    background: #fff;
    border: 1px solid #aa8038;
    border-radius: 30px;
    padding: 5px 16px;
    margin-bottom: 18px;
  }
  .tag-pill .dot {
    width: 5px;
    height: 5px;
    background: #aa8038;
    border-radius: 50%;
    flex-shrink: 0;
  }

  /* ── Section heading ── */
  .faq-heading {
    font-size: clamp(28px, 4vw, 42px);
    font-weight: 800;
    line-height: 1.18;
    color: #000;
    margin-bottom: 40px;
  }
  .faq-heading .accent {
    color: #aa8038;
  }

  /* ── Accordion ── */
  .faq-accordion .accordion-item {
    background: transparent;
    border: none;
    border-bottom: 1px solid #e0ddd8;
  }
  .faq-accordion .accordion-item:first-of-type {
    border-top: 1px solid #e0ddd8;
  }

  .faq-accordion .accordion-button {
    background: transparent !important;
    color: #000 !important;
    font-size: 15px;
    font-weight: 700;
    padding: 22px 0;
    box-shadow: none !important;
    display: flex;
    align-items: center;
    gap: 16px;
    transition: color 0.2s;
  }
  .faq-accordion .accordion-button::after {
    display: none;
  }
  .faq-accordion .accordion-button:hover {
    color: #aa8038 !important;
  }

  .faq-num {
    font-size: 22px;
    font-weight: 700;
    color: #888;
    min-width: 24px;
    letter-spacing: 0.5px;
    flex-shrink: 0;
  }

  .faq-title {
    flex: 1;
    font-size: 1.2rem;
    text-align: left;
    line-height: 1.45;
  }

  .faq-toggle {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: 1.5px solid #aa8038;
    background: transparent;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: background 0.25s, border-color 0.25s;
    margin-left: auto;
  }
  .faq-toggle svg {
    width: 13px;
    height: 13px;
    stroke: #aa8038;
    transition: stroke 0.25s, transform 0.3s;
  }

  .faq-accordion .accordion-button[aria-expanded="true"] .faq-toggle {
    background: #aa8038;
    border-color: #aa8038;
  }
  .faq-accordion .accordion-button[aria-expanded="true"] .faq-toggle svg {
    stroke: #fff;
    transform: rotate(45deg);
  }

  .faq-accordion .accordion-body {
    padding: 0 0 24px 40px;
    font-size: 1rem;
    color: #555;
    line-height: 1.8;
  }

  /* ── Sidebar ── */
  .faq-sidebar {
    position: sticky;
    top: 100px;
  }

  .sidebar-img-wrap {
    border-radius: 16px;
    overflow: hidden;
    width: 100%;
    aspect-ratio: 4/3;
  }
  .sidebar-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .sidebar-cta-card {
    background: #fff;
    border-radius: 16px;
    padding: 28px 24px 24px;
    margin-top: 16px;
    border: 1px solid #e0ddd8;
  }
  .sidebar-cta-card h5 {
    font-size: 20px;
    font-weight: 800;
    color: #000;
    line-height: 1.3;
    margin-bottom: 12px;
  }
  .sidebar-cta-card p {
    font-size: 1rem;
    color: #777;
    line-height: 1.75;
    margin-bottom: 0;
  }

  .btn-gold {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #aa8038;
    color: #fff !important;
    border: none;
    border-radius: 8px;
    padding: 12px 26px;
    font-size: 13.5px;
    font-weight: 700;
    letter-spacing: 0.2px;
    margin-top: 20px;
    text-decoration: none;
    transition: background 0.2s, transform 0.15s;
  }
  .btn-gold:hover {
    background: #c49a4a;
    transform: translateY(-1px);
    color: #fff;
  }
  .btn-gold svg {
    width: 14px;
    height: 14px;
    stroke: #fff;
    transition: transform 0.2s;
  }
  .btn-gold:hover svg {
    transform: translateX(3px);
  }

  /* ── Divider accent left of heading ── */
  .heading-group {
    border-left: 3.5px solid #aa8038;
    padding-left: 20px;
    margin-bottom: 36px;
  }

  /* ── Responsive tweaks ── */
  @media (max-width: 991px) {
    .faq-sidebar {
      position: static;
      margin-top: 48px;
    }
    .faq-section {
      padding: 56px 0 72px;
    }
  }
  @media (max-width: 575px) {
    .faq-accordion .accordion-button {
      font-size: 13.5px;
      gap: 12px;
    }
    .faq-accordion .accordion-body {
      padding-left: 0;
    }
  }
</style>

<section class="top-banner-background" style="background-image: url('assets/images/banner-img.png');">
    <div>
        <h1 class="mb-0 text-center" data-aos="fade-up">
            Faqs
        </h1>
        <p class="text-black text-center mt-2" data-aos="fade-up">
            Browse frequently asked questions and helpful information.
        </p>
    </div>
</section>

<section class="faq-section">
  <div class="container">
    <div class="row g-5 align-items-start">

      <!-- ── Left: Accordion ── -->
      <div class="col-lg-7 col-xl-8">

        <div class="heading-group" data-aos="fade-up">
          <div class="tag-pill">
            <span class="dot"></span>
            Popular Queries
          </div>
          <h2 class="faq-heading" data-aos="fade-up">
            Quick And Clear <span class="accent">Answers</span><br>
            <span class="accent">To Your Key</span> Questions
          </h2>
        </div>

        <div class="accordion faq-accordion" id="faqAccordion">

          <!-- FAQ 01 -->
          <div class="accordion-item" data-aos="fade-up">
            <h3 class="accordion-header">
              <button class="accordion-button" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq1"
                aria-expanded="true" aria-controls="faq1">
                <span class="faq-num">01</span>
                <span class="faq-title">What makes devotion contracting the best facade installation company in Dubai? </span>
                <span class="faq-toggle">
                  <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <line x1="7" y1="1" x2="7" y2="13" stroke-width="2" stroke-linecap="round"/>
                    <line x1="1" y1="7" x2="13" y2="7" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </span>
              </button>
            </h3>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Devotion Contracting stands out as a facade installation company in Dubai because of its specialized expertise in aluminium, glass, and cladding systems, strong focus on quality and safety, skilled installation teams, and commitment to delivering durable, high-performance facade solutions on time and to the highest industry standards. 

              </div>
            </div>
          </div>

          <!-- FAQ 02 -->
          <div class="accordion-item" data-aos="fade-up">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq2"
                aria-expanded="false" aria-controls="faq2">
                <span class="faq-num">02</span>
                <span class="faq-title">Do you offer free site measurements before quoting?</span>
                <span class="faq-toggle">
                  <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <line x1="7" y1="1" x2="7" y2="13" stroke-width="2" stroke-linecap="round"/>
                    <line x1="1" y1="7" x2="13" y2="7" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </span>
              </button>
            </h3>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes. Our technical team offer complimentary site visits across UAE, to measure, assess and advise before we provide any quotation to ensure complete accuracy from the start. 
              </div>
            </div>
          </div>

          <!-- FAQ 03 -->
          <div class="accordion-item" data-aos="fade-up">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq3"
                aria-expanded="false" aria-controls="faq3">
                <span class="faq-num">03</span>
                <span class="faq-title">How does devotion contracting ensure its quality of installation?</span>
                <span class="faq-toggle">
                  <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <line x1="7" y1="1" x2="7" y2="13" stroke-width="2" stroke-linecap="round"/>
                    <line x1="1" y1="7" x2="13" y2="7" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </span>
              </button>
            </h3>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Every unit installed undergoes rigorous in-house quality checks on site. We adhere to UAE and international standards throughout the process of installation. 
              </div>
            </div>
          </div>

          <!-- FAQ 04 -->
          <div class="accordion-item" data-aos="fade-up">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq4"
                aria-expanded="false" aria-controls="faq4">
                <span class="faq-num">04</span>
                <span class="faq-title">Do you work on both, residential and hospitality projects?</span>
                <span class="faq-toggle">
                  <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <line x1="7" y1="1" x2="7" y2="13" stroke-width="2" stroke-linecap="round"/>
                    <line x1="1" y1="7" x2="13" y2="7" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </span>
              </button>
            </h3>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes — we cater to villas, apartments, luxury hotels, resorts, restaurants, retail spaces, and large commercial buildings, tailoring our solutions to match each project's unique design and performance requirements. 

              </div>
            </div>
          </div>

          <!-- FAQ 05 -->
          <div class="accordion-item" data-aos="fade-up">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq5"
                aria-expanded="false" aria-controls="faq5">
                <span class="faq-num">05</span>
                <span class="faq-title">Can you handle large commercial and high-rise facade projects? </span>
                <span class="faq-toggle">
                  <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <line x1="7" y1="1" x2="7" y2="13" stroke-width="2" stroke-linecap="round"/>
                    <line x1="1" y1="7" x2="13" y2="7" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </span>
              </button>
            </h3>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Absolutely. We have successfully delivered large-scale curtain wall systems and highrise facades for hotels, corporate towers, and government buildings, with full in-house engineering support. 

              </div>
            </div>
          </div>

          <!-- FAQ 06 -->
          <div class="accordion-item" data-aos="fade-up">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq6"
                aria-expanded="false" aria-controls="faq6">
                <span class="faq-num">06</span>
                <span class="faq-title">Which areas of Dubai and UAE do you serve? </span>
                <span class="faq-toggle">
                  <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <line x1="7" y1="1" x2="7" y2="13" stroke-width="2" stroke-linecap="round"/>
                    <line x1="1" y1="7" x2="13" y2="7" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </span>
              </button>
            </h3>
            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We serve all areas of Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain — covering the full UAE with a single, reliable team. 

              </div>
            </div>
          </div>

          <!-- FAQ 07 -->
          <div class="accordion-item" data-aos="fade-up">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq7"
                aria-expanded="false" aria-controls="faq7">
                <span class="faq-num">07</span>
                <span class="faq-title">How do I get started with Devotion Contracting? </span>
                <span class="faq-toggle">
                  <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <line x1="7" y1="1" x2="7" y2="13" stroke-width="2" stroke-linecap="round"/>
                    <line x1="1" y1="7" x2="13" y2="7" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </span>
              </button>
            </h3>
            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
               Simply call us or send a WhatsApp message. Our team will arrange a free consultation, assess your needs, visit the site if required, and provide a transparent, detailed quotation — no obligation. 
              </div>
            </div>
          </div>
 

        </div><!-- /accordion -->
      </div><!-- /col left -->

      <!-- ── Right: Sidebar ── -->
      <div class="col-lg-5 col-xl-4">
        <div class="faq-sidebar">

          <!-- Replace src with your actual image path -->
          <div class="sidebar-img-wrap" data-aos="fade-up">
            <img
              src="assets/images/faq.jpg"
              alt="Glass World Industries team at work"
              loading="lazy"
              onerror="this.closest('.sidebar-img-wrap').style.background='#ddd8ce'; this.style.display='none';"
            >
          </div>

          <div class="sidebar-cta-card" data-aos="fade-up">
            <h5>Still Have Questions<br>Or Want To Talk?</h5>
            <p>Our team is here to help you choose the best quality materials ensuring your project meets the highest standards in durability, design, and performance. From glass types to finishes, we guide you every step of the way.</p>
            <a href="contact.php" class="btn-gold" data-aos="fade-up">
              Contact Us
              <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <line x1="1" y1="7" x2="13" y2="7" stroke-width="2" stroke-linecap="round"/>
                <polyline points="8,2 13,7 8,12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>

        </div>
      </div><!-- /col right -->

    </div>
  </div>
</section>

<!-- Rotate + icon to × when open via CSS transform — no JS needed for icon state -->
<script>
  /* Sync icon rotation on page load for any pre-expanded items */
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.accordion-button[aria-expanded="true"] .faq-toggle svg').forEach(function (svg) {
      svg.style.transform = 'rotate(45deg)';
      svg.style.stroke = '#fff';
      svg.closest('.faq-toggle').style.background = '#aa8038';
    });

    document.getElementById('faqAccordion').addEventListener('show.bs.collapse', function (e) {
      const btn = document.querySelector('[data-bs-target="#' + e.target.id + '"]');
      if (!btn) return;
      const toggle = btn.querySelector('.faq-toggle');
      const svg = toggle.querySelector('svg');
      toggle.style.background = '#aa8038';
      toggle.style.borderColor = '#aa8038';
      svg.style.transform = 'rotate(45deg)';
      svg.style.stroke = '#fff';
    });

    document.getElementById('faqAccordion').addEventListener('hide.bs.collapse', function (e) {
      const btn = document.querySelector('[data-bs-target="#' + e.target.id + '"]');
      if (!btn) return;
      const toggle = btn.querySelector('.faq-toggle');
      const svg = toggle.querySelector('svg');
      toggle.style.background = 'transparent';
      toggle.style.borderColor = '#aa8038';
      svg.style.transform = 'rotate(0deg)';
      svg.style.stroke = '#aa8038';
    });
  });
</script>

<?php include_once('elements/footer.php'); ?>