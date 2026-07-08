

  <style>
    
      /* ═══════════════════════════
        TOP INFO BAR
      ═══════════════════════════ */
      .topbar {
        background: #aa8038;
        height: 44px;
        display: flex;
        align-items: center;
        border-bottom: 1px solid rgba(170,128,56,.25);
        overflow: hidden;
      }

      .topbar-inner {
        width: 100%;
        max-width: 1320px;
        margin: 0 auto;
        padding: 0 1.25rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      /* Social icons – left */
      .topbar-social { 
        display: flex; 
        gap: .45rem; 
      }
      .topbar-social a {
        width: 28px; 
        height: 28px;
        display: grid; 
        place-items: center;
        border: 1.5px solid rgba(255,255,255,.2);
        border-radius: 50%;
        color: #fff;
        font-size: 0.8rem;
        text-decoration: none;
        transition: background .25s, border-color .25s, transform .25s;
        will-change: transform;
      }
      .topbar-social a:hover {
        background: #aa8038;
        border-color: #aa8038;
        color: #111111;
        transform: translateY(-2px) scale(1.08);
      }

      /* Info items – right */
      .topbar-info { display: flex; align-items: center; gap: 1.5rem; }
      .topbar-info span {
        color: rgba(255,255,255,.75);
        font-size: 0.87rem;
        display: flex; align-items: center; gap: .4rem;
        white-space: nowrap;
      }
      .topbar-info span i { color: #fff; font-size: .8rem; }

      /* ═══════════════════════════
        MAIN NAVBAR
      ═══════════════════════════ */
      .main-nav {
        background: #fff;
        position: sticky;
        top: 0;
        padding: 10px;
        z-index: 1030;
        box-shadow: 0 2px 18px rgba(0,0,0,.45);
        transition: background .3s, box-shadow .3s;
      }
      .main-nav.scrolled {
        background: #fff;
        /* box-shadow: 0 4px 28px rgba(0,0,0,.6); */
      }

      .nav-inner {
        max-width: 1320px;
        margin: 0 auto;
        padding: 0 1.25rem;
        height: 68px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
      }

      /* ── Logo ── */
      .nav-logo {
        display: flex; align-items: center; gap: .1rem;
        text-decoration: none;
        flex-shrink: 0;
      }
      .logo-x-wrap {
        width: 36px; height: 36px;
        background: #aa8038;
        display: grid; place-items: center;
        clip-path: polygon(0 0,100% 0,100% 75%,75% 100%,0 100%);
        transition: background .25s, transform .3s;
      }
      .logo-x-wrap:hover { background: #c99a46; transform: scale(1.06); }
      .logo-x-wrap span {
        font-size: 1.4rem; font-weight: 900;
        color: #111111; line-height: 1;
        font-style: italic;
      }
      .logo-text {
        font-size: 1.55rem; font-weight: 700;
        color: #fff; letter-spacing: .5px;
        margin-left: 4px;
      }

      /* ── Nav links ── */
      .nav-menu {
        display: flex; align-items: center;
        list-style: none; margin: 0; padding: 0;
        gap: .15rem;
      }

      .nav-menu > li { position: relative; }

      .nav-menu > li > a {
        display: flex; align-items: center; gap: .35rem;
        color: #000;
        font-size: .88rem; font-weight: 500;
        text-decoration: none;
        padding: .55rem .85rem;
        border-radius: 4px;
        white-space: nowrap;
        transition: color .2s, background .2s;
        position: relative;
      }
      .nav-menu > li > a::after {
        content: '';
        position: absolute; bottom: 4px; left: 50%; right: 50%;
        height: 2px;
        background: #aa8038;
        border-radius: 2px;
        transition: left .25s, right .25s;
      }
      .nav-menu > li > a:hover,
      .nav-menu > li > a.active {
        color: #aa8038;
      }
      .nav-menu > li > a:hover::after,
      .nav-menu > li > a.active::after {
        left: .85rem; right: .85rem;
      }

      /* Active item indicator */
      .nav-menu > li > a.active { color: #aa8038; }

      /* Caret icon for dropdowns */
      .nav-menu > li > a .caret {
        font-size: .6rem;
        transition: transform .25s;
        opacity: .6;
      }
      .nav-menu > li:hover > a .caret { transform: rotate(180deg); opacity: 1; }

      /* ── Dropdown ── */
      .dropdown-menu-custom {
        position: absolute; top: calc(100% + 2px); left: 0;
        min-width: 180px;
        background: #fff;
        border: 1px solid rgba(170,128,56,.2);
        border-radius: 6px;
        list-style: none; margin: 0; padding: .4rem 0;
        box-shadow: 0 8px 28px rgba(0,0,0,.5);

        /* Animation */
        opacity: 0;
        transform: translateY(8px);
        pointer-events: none;
        transition: opacity .22s ease, transform .22s ease;
      }
      .nav-menu > li:hover .dropdown-menu-custom {
        opacity: 1;
        transform: translateY(0);
        pointer-events: all;
      }
      .dropdown-menu-custom li a {
        display: block;
        padding: .48rem 1.1rem;
        color: #000;
        font-size: .84rem;
        text-decoration: none;
        transition: color .18s, padding-left .18s, background .18s;
      }
      .dropdown-menu-custom li a:hover {
        color: #aa8038;
        /* background: rgba(170,128,56,.08); */
        padding-left: 1.4rem;
      }
      /* Triangle tip */
      .dropdown-menu-custom::before {
        content: '';
        position: absolute; top: -6px; left: 18px;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-bottom: 6px solid rgba(170,128,56,.3);
      }

      /* ── CTA button ── */
      .btn-appt {
        display: inline-flex; align-items: center; gap: .45rem;
        padding: .55rem 1.3rem;
        background: #000;
        color: #fff;
        font-size: .85rem; font-weight: 600;
        border-radius: 50px;
        text-decoration: none;
        border: 2px solid transparent;
        white-space: nowrap;
        flex-shrink: 0;
        transition: background .25s, color .25s, border-color .25s, transform .25s, box-shadow .25s;
        box-shadow: 0 2px 8px rgba(0,0,0,.18);
      }
      .btn-appt:hover {
        background: #aa8038;
        color: #111111;
        border-color: #aa8038;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(170,128,56,.35);
      }

      /* ── Hamburger ── */
      .hamburger {
        display: none;
        flex-direction: column; gap: 5px;
        background: none; border: none; cursor: pointer;
        padding: .4rem;
      }
      .hamburger span {
        display: block; width: 24px; height: 2px;
        background: #000;
        border-radius: 2px;
        transition: transform .3s, opacity .3s, width .3s;
        transform-origin: center;
      }
      .hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
      .hamburger.open span:nth-child(2) { opacity: 0; width: 0; }
      .hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

      /* ═══════════════════════════
        MOBILE DRAWER
      ═══════════════════════════ */
      .mobile-menu {
        display: none;
        flex-direction: column;
        background: #fff;
        border-top: 1px solid rgba(170,128,56,.2);
        max-height: 0; overflow: hidden;
        transition: max-height .38s cubic-bezier(.4,0,.2,1), padding .3s;
      }
      .mobile-menu.open {
        max-height: 600px;
        padding: .5rem 0 1rem;
      }
      .mobile-menu a {
        color: #000;
        font-size: 1rem; font-weight: 500;
        padding: .6rem 1.4rem;
        text-decoration: none;
        display: flex; align-items: center; gap: .5rem;
        transition: color .18s, background .18s;
      }
      .mobile-menu a:hover,
      .mobile-menu a.active { 
        color: #aa8038; 
        /* background: rgba(170,128,56,.07);  */
      }
      .mobile-menu .mobile-divider {
        height: 1px; background: #aa8038;
        margin: .4rem 1.4rem;
      }
      .mobile-menu .btn-appt {
        margin: .7rem 1.4rem 0;
        border-radius: 50px;
        background: #aa8038;
        color: #fff;
        justify-content: center;
      }
      .brand-logo img{
          width: 100%;   /* adjust size */
          height: 50px;
          object-fit: contain;
      }
      /* ═══════════════════════════
        RESPONSIVE
      ═══════════════════════════ */
      @media (max-width: 991px) {
        .nav-menu, .btn-appt.desktop { display: none; }
        .hamburger { display: flex; }
        .mobile-menu { display: flex; }
        .topbar-info span:not(:first-child) { display: none; }
      }
      @media (max-width: 575px) {
        .topbar-info { display: none; }
      }

      /* ═══════════════════════════
        DEMO PAGE CONTENT
      ═══════════════════════════ */
      .demo-hero {
        text-align: center;
        padding: 5rem 1rem 3rem;
        color: #555;
      }
      .demo-hero h1 { font-size: 2rem; color: #222; }
      .demo-hero p { max-width: 480px; margin: .75rem auto 0; line-height: 1.6; }
      .mobile-dropdown {
      width: 100%;
      }

      .mobile-dropdown-toggle {
          display: flex !important;
          /* justify-content: space-between; */
          align-items: center;
      }

      .mobile-submenu {
          display: none;
          background: rgba(255,255,255,0.03);
      }

      .mobile-submenu a {
          padding-left: 40px !important;
          font-size: 1rem;
      }

      .mobile-submenu.show {
          display: block;
      }
  </style>

  <!-- ═══ TOP INFO BAR ═══ -->
  <div class="topbar">
    <div class="topbar-inner">
      <div class="topbar-social">
        <a href="javascript:void();" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="javascript:void();" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="javascript:void();" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="javascript:void();" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        <a href="javascript:void();" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      </div>
      <div class="topbar-info">

        <span>
          <i class="fas fa-clock"></i> 
          SAT – THU (10:00 AM – 6:00PM)
        </span>

        <span>
          <a href="mail:hello@devotioncontracting.ae" class="text-white text-decoration-none">
            <i class="fas fa-envelope"></i>
            hello@devotioncontracting.ae
          </a>
        </span>

        <span>
          <a href="tel:+91 9173307640" class="text-white text-decoration-none">
            <i class="fas fa-phone"></i>
             +1123 456 789
          </a>
        </span>
      </div>
    </div>
  </div>

  <!-- ═══ MAIN NAV ═══ -->
  <nav class="main-nav" id="mainNav">
    <div class="nav-inner">

      <!-- Logo --> 
      <a class="navbar-brand" href="index.php">
          <style>
              .brand-logo img{
                  width: 100%;   /* adjust size */
                  height: 50px;
                  object-fit: contain;
              }
          </style>
          <div class="brand-logo">
              <img src="assets/images/Devotion-Contracting.png" alt="Devotion Contracting Industries LLC Logo">
          </div>
      </a>

      <!-- Desktop menu -->
      <ul class="nav-menu" id="navMenu">

        <li>
          <a href="index.php">Home</i></a>
        </li>
        <li>

          <a href="javascript:void(0);">Services <i class="fas fa-chevron-down caret"></i></a>
            <ul class="dropdown-menu-custom">
              <li><a href="javascript:void();">Consulting</a></li>
              <li><a href="javascript:void();">Relocation</a></li>
              <li><a href="javascript:void();">Visa Support</a></li>
            </ul>
        </li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="overview.php">Overview</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="our-team.php">Team</a></li>
        <li><a href="faqs.php">FAQ</a></li> 

        <li><a href="contact.php">Contact Us</a></li>
      </ul>

      <!-- CTA -->
      <a class="btn-appt desktop" href="contact.php">
        <i class="fas fa-calendar-check"></i> Get Appointment
      </a>

      <!-- Hamburger -->
      <button class="hamburger" id="hamburger" aria-label="Toggle menu">
        <span></span><span></span><span></span>
      </button>
    </div>

    <!-- Mobile drawer -->
    <div class="mobile-menu" id="mobileMenu">

        <a href="index.php" class="active">
            <i class="fas fa-house"></i> Home
        </a>

        <!-- Services Dropdown -->
        <div class="mobile-dropdown">
            <a href="javascript:void(0)" class="mobile-dropdown-toggle">
                <i class="fas fa-briefcase"></i> Services
                <i class="fas fa-chevron-down"></i>
            </a>

            <div class="mobile-submenu">
                <a href="consulting.php">Consulting</a>
                <a href="relocation.php">Relocation</a>
                <a href="visa-support.php">Visa Support</a>
            </div>
        </div>

        <a href="projects.php">
            <i class="fas fa-diagram-project"></i> Projects
        </a>

        <a href="about.php">
            <i class="fas fa-circle-info"></i> About Us
        </a>

        <a href="team.php">
            <i class="fas fa-users"></i> Team
        </a>

        <a href="faq.php">
            <i class="fas fa-circle-question"></i> FAQ
        </a>

        <a href="contact.php">
            <i class="fas fa-envelope"></i> Contact Us
        </a>

        <div class="mobile-divider"></div>

        <a class="btn-appt" href="contact.php">
            <i class="fas fa-calendar-check"></i>
            Get Appointment
        </a>

    </div>
  </nav>

<script>
    document.querySelectorAll('.mobile-dropdown-toggle').forEach(item => {
        item.addEventListener('click', function () {
            const submenu = this.nextElementSibling;
            submenu.classList.toggle('show');
        });
    });
</script>