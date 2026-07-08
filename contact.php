 
 <?php
  include_once('elements/header.php');
  ?>

  <style>
    
        .footer{ 
            color:#fff;
            padding:80px 0 30px;
            position: relative;
        }

        .footer .brand-logo img{
            width:220px;
            height:auto;
            object-fit:contain;
        } 
  
      /* ── Tag pill ─────────────────────────────── */
      .tag-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        border: 1.5px solid #e2e0db;
        border-radius: 999px;
        padding: 5px 14px;
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: #1a1a1a;
        background: transparent;
      }
      .tag-pill::before {
          content: '';
          display: inline-block;
          width: 10px;
          height: 10px;
          border-radius: 50%;
          background: #aa8038;
      }
  
      /* ── Divider line ─────────────────────────── */
      .section-divider {
        width: 1px;
        background: #e2e0db;
        align-self: stretch;
      }
  
      /* ── Headline ─────────────────────────────── */
      .contact-headline {
        font-size: clamp(1.8rem, 4vw, 2.8rem);
        font-weight: 800;
        line-height: 1.18;
        letter-spacing: -0.02em;
        color: #aa8038;
      }
  
      /* ── Info labels ──────────────────────────── */
      .info-label {
        font-size: 1.1rem;
        /* color: #8a8a8a; */
        font-weight: 600;
        margin-bottom: 6px;
      }
      .info-value {
        font-size: 1rem; 
        color: #1a1a1a;
        line-height: 1.5;
      }
      .info-value a {
        color: #1a1a1a;
        text-decoration: none;
        font-size: 1rem; 
      }
      .info-value a:hover { color: var(--gold); }
  
      /* ── Photo grid ───────────────────────────── */
      .photo-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        border-radius: 12px;
        overflow: hidden;
      }
      .photo-grid img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
      }
      @media (max-width: 575px) {
        .photo-grid { grid-template-columns: 1fr; }
        .photo-grid img { height: 180px; }
      }
  
      /* ── Form inputs ──────────────────────────── */
      .form-label {
        font-size: 0.9rem;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 6px;
      }
      .form-label span { color: var(--gold); }
  
      .form-control {
        background: #fff;
        border: 1.5px solid #e2e0db;
        border-radius: 12px;
        padding: 12px 16px;
        font-size: 0.88rem;
        color: #1a1a1a;
        font-family: 'Manrope', sans-serif;
        transition: border-color .2s, box-shadow .2s;
      }
      .form-control::placeholder { color: #b0aea8; }
      .form-control:focus {
        border-color: var(--gold);
        box-shadow: 0 0 0 3px rgba(184,154,78,.15);
        background: #ffffff;
        outline: none;
      }
  
      textarea.form-control { resize: vertical; min-height: 130px; }
  
      /* ── Send button ──────────────────────────── */
      .btn-send {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #ffffff;
        border: 1.5px solid #e2e0db;
        border-radius: 999px;
        padding: 10px 22px 10px 22px;
        font-family: 'Manrope', sans-serif;
        font-size: 0.88rem;
        font-weight: 700;
        color: #1a1a1a;
        cursor: pointer;
        transition: border-color .2s, transform .15s;
      }
      .btn-send:hover {
        border-color: var(--gold);
        transform: translateY(-1px);
      }
      .btn-send .icon-circle {
        width: 32px; height: 32px;
        border-radius: 50%;
        background: var(--gold);
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
      }
      .btn-send .icon-circle svg { width: 20px; height: 20px; fill: #fff; }
  
      /* ── Section wrapper ──────────────────────── */
      .contact-section {
        padding: 150px 0 80px;
      }
  
      /* ── Top row ──────────────────────────────── */
      .top-row {
        display: flex;
        align-items: flex-start;
        gap: 40px;
        padding-bottom: 36px;
        border-bottom: 1px solid #e2e0db;
        margin-bottom: 48px;
        flex-wrap: wrap;
      }
      .top-row .tag-col { flex: 0 0 auto; }
      .top-row .divider-col {
        width: 1px;
        background: #e2e0db;
        align-self: stretch;
        min-height: 60px;
      }
      .top-row .headline-col { flex: 1 1 0; min-width: 240px; }
  
      @media (max-width: 575px) {
        .top-row { flex-direction: column; gap: 20px; }
        .top-row .divider-col { display: none; }
      }
  
      /* ── Success toast ────────────────────────── */
      .toast-success {
        position: fixed;
        bottom: 30px; right: 30px;
        background: #1a1a1a;
        color: #fff;
        padding: 14px 24px;
        border-radius: 12px;
        font-size: 0.88rem;
        font-weight: 600;
        opacity: 0;
        transform: translateY(10px);
        transition: opacity .3s, transform .3s;
        z-index: 999;
        pointer-events: none;
      }
      .toast-success.show { opacity: 1; transform: translateY(0); }
  </style>

  <section class="top-banner-background" style="background-image: url('assets/images/banner-img.png');">
      <div>
          <h1 class="mb-0 text-center" data-aos="fade-up">
              Contact Us
          </h1>
          <p class="text-black text-center mt-2" data-aos="fade-up">
              Get in touch with our team for inquiries, support, and project consultations.
          </p>
      </div>
  </section>
  
  <section class="contact-section">
    <div class="container">
  
      <!-- ── Top Row: Tag + Divider + Headline ── -->
      <div class="top-row" data-aos="fade-up">
        <div class="tag-col">
          <span class="tag-pill">Get In Touch</span>
        </div>
        <div class="divider-col"></div>
        <div class="headline-col">
          <h2 class="contact-headline">
            Need our expertise or guidance<br class="d-none d-md-block">
            on your next project? We are here to help.
          </h2>
        </div>
      </div>
  
      <!-- ── Info Row ── -->
      <div class="row g-4 mb-5">

        <div class="col-12 col-sm-6 col-lg-4" data-aos="fade-up">
          <p class="info-label">Address:</p>
          <p class="info-value">
            Glass World Industries, 8a Street,<br>Ras Al Khor, Dubai
          </p>
        </div>

        <div class="col-12 col-sm-6 col-lg-4" data-aos="fade-up">
          <p class="info-label">Support</p>
          <p class="info-value">
             +971 4 448 8538<br>
            <a href="mailto:devotiongroup@gmail.com">devotiongroup@gmail.com</a>
          </p>
        </div>
        
      </div>
  
      <!-- ── Main Content: Photo + Form ── -->
      <div class="row g-4 align-items-start">
  
        <!-- Photo Grid -->
        <div class="col-12 col-lg-5" data-aos="fade-up">
          <div class="photo-grid">
            <img
              src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&q=80"
              alt="Glass interior left"
            />
            <img
              src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?w=600&q=80"
              alt="Glass interior right"
            />
          </div>
        </div>
  
        <!-- Contact Form -->
        <div class="col-12 col-lg-7" data-aos="fade-up">
          <form action="send-mail.php" method="POST">
            <div class="row g-3">
              <div class="col-12 col-sm-6">
                <label class="form-label">Full Name <span>*</span></label>
                  <input type="text" class="form-control" placeholder="Your Name *" name="fullName" required>
              </div>
    
              <div class="col-12 col-sm-6">
                <label class="form-label">Phone <span>*</span></label>
                <input type="tel" class="form-control" placeholder="Phone" name="phone" required>
              </div>
    
              <div class="col-12 col-sm-6">
                <label class="form-label">Email Address <span>*</span></label>
                <input type="email" class="form-control" placeholder="Email Address *" name="email" required>
              </div>
    
              <div class="col-12 col-sm-6">
                <label class="form-label">Subject <span>*</span></label>
                <input type="text" class="form-control" placeholder="I Want To" name="subject" required>

              </div>
    
              <div class="col-12">
                <label class="form-label">Your Message <span>*</span></label>
                <textarea class="form-control" placeholder="Your Message.." name="message" required></textarea>
              </div>
    
              <div class="toast-success" id="toast">Message sent successfully! ✓</div>
              <div class="col-12 mt-1">
                <button type="submit" class="btn-send">
                      Send Message
                      <span class="icon-circle">
                          <svg viewBox="0 0 24 24">
                              <path d="M7 17L17 7M17 7H7M17 7V17"
                                    stroke="white"
                                    stroke-width="2"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                          </svg>
                      </span>
                  </button>
              </div>
            </div>
          </form>
        </div>
  
      </div>
    </div>
  </section> 
  <!-- Toast -->
  
 <?php
// include_once('elements/faqs.php');
include_once('elements/footer.php');
?>