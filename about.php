<?php
  include_once('elements/header.php');
?>
  
    <style>
  
 
        /* ── Section wrapper ── */
        .who-section {
            position: relative;
            overflow: hidden;
            padding: 100px 0 100px;
            /* background-color: #f4f3f0; */
        }

        /* Watermark diamond pattern */
        .who-section::before {
            content: '';
            position: absolute;
            inset: 0;
            /* background-image:
                linear-gradient(45deg, rgba(180, 160, 120, .08) 1px, transparent 1px),
                linear-gradient(-45deg, rgba(180, 160, 120, .08) 1px, transparent 1px); */
            background-size: 60px 60px;
            pointer-events: none;
        }
 
        /* ── Left label ── */
        .who-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: .15em;
            text-transform: uppercase;
            color: #000;
            border: 1px solid #e5e2dc;
            border-radius: 30px;
            padding: 6px 18px;
            background: rgba(255, 255, 255, .6);
            backdrop-filter: blur(4px);
        }

        .who-label span.dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #aa8038;
            display: inline-block;
        }

        /* Left column vertical divider */
        .left-col {
            position: relative;
        }

        .left-col::after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 1px;
            background: linear-gradient(to bottom, transparent, #e5e2dc 30%, #e5e2dc 70%, transparent);
        }

        /* ── Heading ── */
        .section-heading {
            font-family: 'Playfair Display', serif;
            font-size: clamp(1.6rem, 3vw, 2.2rem);
            font-weight: 700;
            line-height: 1.25;
            color: #000;
        }

        .section-heading .highlight {
            color: #aa8038;
        }

        .section-desc {
            font-size: 1rem;
            color: #6b6b6b;
            line-height: 1.75;
            /* max-width: 380px; */
        }

        /* ── Feature cards ── */
        .cards-row {
            margin-top: 60px;
        }

        .feature-card {
            background: #fff;
            border: 1px solid #e5e2dc;
            border-radius: 12px;
            padding: 36px 28px 32px;
            height: 100%;
            position: relative;
            transition: box-shadow .3s ease, transform .3s ease;
        }

        .feature-card:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, .08);
            transform: translateY(-4px);
        }

        /* thin top accent line */
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 24px;
            right: 24px;
            height: 2px;
            background: linear-gradient(to right, transparent, #aa8038, transparent);
            opacity: 0;
            border-radius: 0 0 2px 2px;
            transition: opacity .3s;
        }

        .feature-card:hover::before {
            opacity: 1;
        }

        .card-icon {
            width: 48px;
            height: 48px;
            flex-shrink: 0;
            color: #aa8038;
            opacity: .75;
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.25rem;
            font-weight: 700;
            color: #000;
            margin-bottom: 0;
            line-height: 1.3;
        }

        /* horizontal divider inside card */
        .card-divider {
            border: none;
            border-top: 1px solid #e5e2dc;
            margin: 20px 0;
        }

        .card-desc {
            font-size: 1rem;
            color: #6b6b6b;
            line-height: 1.75;
            margin: 0;
        }

        .card-desc strong {
            color: #000;
            font-weight: 600;
        }

        /* ── Responsive tweaks ── */
        @media (max-width: 767.98px) {
            .left-col::after {
                display: none;
            }

            .section-heading {
                font-size: 1.5rem;
            }

            .cards-row {
                margin-top: 40px;
            }
        }


        /* =========================
        GLOBAL SECTION
        ========================= */

        .vision-mission-section {
            background: #f8f8f8;
            overflow: hidden;
            position: relative;
        }

        /* =========================
        IMAGE BOX
        ========================= */

        .image-box {
            position: relative;
            overflow: hidden;
            border-radius: 28px;
            height: 100%;
            min-height: 500px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
            transition: 0.5s ease;
        }

        .image-box img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            transition: transform 0.7s ease;
            display: block;
        }

        /* Dark overlay */
        .image-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.55),
                    rgba(0, 0, 0, 0.05));
        }

        /* Hover Effects */
        .image-box:hover img {
            transform: scale(1.08);
        }

        .image-box:hover {
            transform: translateY(-8px);
        }

        /* =========================
        CONTENT
        ========================= */

        .content-box {
            padding: 20px 10px 20px 30px;
            animation: fadeUp 1s ease;
        }

        .section-tag {
            display: inline-block;
            font-size: 13px;
            letter-spacing: 2px;
            font-weight: 700;
            color: #c89b3c;
            margin-bottom: 14px;
            position: relative;
        }

        .section-title {
            font-size: 54px;
            font-weight: 800;
            line-height: 1.1;
            color: #111;
            margin-bottom: 18px;
        }

        .title-line {
            width: 90px;
            height: 4px;
            background: linear-gradient(to right, #c89b3c, transparent);
            border-radius: 30px;
            margin-bottom: 28px;
        }

        .content-box p {
            font-size: 1rem;
            line-height: 1.9;
            color: #555;
            margin-bottom: 22px;
        }

        /* =========================
        BUTTON
        ========================= */

        .custom-btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            background: #111;
            color: #fff;
            padding: 14px 28px;
            border-radius: 60px;
            font-weight: 600;
            transition: 0.4s ease;
            margin-top: 10px;
        }

        .custom-btn span {
            transition: 0.4s ease;
        }

        .custom-btn:hover {
            background: #c89b3c;
            color: #fff;
            transform: translateY(-3px);
        }

        .custom-btn:hover span {
            transform: rotate(45deg);
        }

        /* =========================
        ANIMATION
        ========================= */

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* =========================
        RESPONSIVE
        ========================= */

        @media (max-width: 991px) {

            .section-title {
                font-size: 42px;
            }

            .content-box {
                padding: 10px 0;
            }

            .image-box {
                min-height: 400px;
            }
        }

        @media (max-width: 767px) {

            .vision-mission-section {
                padding: 70px 0;
            }

            .section-title {
                font-size: 34px;
            }

            .content-box p {
                font-size: 15px;
                line-height: 1.8;
            }

            .image-box {
                min-height: 320px;
                border-radius: 22px;
            }

            .custom-btn {
                padding: 12px 22px;
                font-size: 14px;
            }
        }

        .director-section {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 4px 32px rgba(0, 0, 0, 0.07);
            padding: 56px 64px;
            margin: 60px auto;
        }
 
        /* ── Left column: two cards stacked ── */
        .persons-col {
        display: flex;
        flex-direction: column;
        gap: 32px;
        }
    
        .person-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        }
    
        .director-photo {
        width: 100%;
        max-width: 200px;
        aspect-ratio: 3 / 3.5;
        border-radius: 10px;
        box-shadow: 0 6px 24px rgba(0,0,0,0.13);
        border: 4px solid #e8ecf0;
        overflow: hidden;
        background: #dde3ea;
        }
    
        .director-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top center;
        display: block;
        }
    
        .director-name {
        font-family: 'Playfair Display', serif;
        font-size: 1.1rem;
        font-weight: 600;
        color: #1a2340;
        margin-top: 14px;
        margin-bottom: 2px;
        text-align: center;
        }
    
        .director-title {
        font-size: 0.87rem;
        color: #6b7280;
        text-align: center;
        line-height: 1.5;
        }
    
        .director-divider {
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, #1a55a0, #38bdf8);
        border-radius: 2px;
        margin: 10px auto 0;
        }
    
        /* ── Right column ── */
        .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        font-weight: 700;
        color: #1a2340;
        margin-bottom: 24px;
        line-height: 1.2;
        }
    
        .message-body p {
        font-size: 1rem;
        line-height: 1.85;
        color: #3d4452;
        margin-bottom: 16px;
        }
    
        .message-body ul {
        padding-left: 20px;
        margin-bottom: 0;
        }
    
        .message-body ul li {
        font-size: 1rem;
        line-height: 1.85;
        color: #3d4452;
        margin-bottom: 8px;
        }
    
        .message-body ul li:last-child {
        margin-bottom: 0;
        }
    
        .top-accent {
        width: 56px;
        height: 4px;
        background: linear-gradient(90deg, #1a55a0, #38bdf8);
        border-radius: 2px;
        margin-bottom: 16px;
        }
    
        @media (max-width: 767px) {
        .director-section {
            padding: 32px 20px;
            margin: 24px 12px;
        }
        .director-photo {
            max-width: 140px;
        }
        .section-title {
            font-size: 1.5rem;
        }
        .persons-col {
            flex-direction: row;
            justify-content: center;
            gap: 20px;
        }
        }
    </style>

    <!-- HERO -->
    <section class="top-banner-background" style="background-image: url('assets/images/banner-img.png');">
        <div>
            <h1 class="mb-0 text-center" data-aos="fade-up">
                About Us
            </h1>
            <p class="text-black text-center mt-2" data-aos="fade-up">
                Devotion Contracting LLC delivers reliable construction solutions with quality, integrity, and excellence at every stage.
            </p>
        </div>
    </section>
  
    <section class="who-section">
 
        <div class="container position-relative z-1">

            <!-- Top info row -->
            <div class="row align-items-start g-5">

                <!-- LEFT: label -->
                <div class="col-12 col-md-4 left-col d-flex align-items-start justify-content-center pt-2" data-aos="fade-up">
                    <div class="who-label">
                        <span class="dot"></span>
                        WHO WE ARE
                    </div>
                </div>

                <!-- RIGHT: heading + desc -->
                <div class="col-12 col-md-8">
                    <h2 class="section-heading mb-4" data-aos="fade-up">
                        Experience <span class="highlight">Glass World Industries</span> Trusted
                        For Over 25 Years To Deliver Exquisite Glass
                        Creations That Elevate Your Space
                    </h2>
                    <p class="section-desc" data-aos="fade-up">
                        With almost two decades of acquired experience and industry know-how,
                        we offer our clients customized solutions on the design, fabrication
                        and installation of glass, aluminum and more.
                    </p>
                </div>

            </div><!-- /top row -->

            <div class="container">
                <div class="director-section">
                    <div class="row g-5 align-items-start">
                
                    <!-- Left: Two Person Cards -->
                    <div class="col-12 col-md-3">
                        <div class="persons-col">
                
                        <!-- Person 1 -->
                        <div class="person-card" data-aos="fade-up">
                            <div class="director-photo" data-aos="fade-up">
                                <img src="assets/images/devotion-managing-partner.png" alt="Mohammed Sageer" />
                            </div>
                            <div class="director-name">Sunil Dhola</div>
                            <div class="director-title">Managing Partner & CEO</div>
                            <div class="director-divider"></div>
                        </div>
                
                        <!-- Person 2 -->
                        <div class="person-card" data-aos="fade-up">
                            <div class="director-photo" data-aos="fade-up">
                                <img src="assets/images/devotion-managing-partner.png" alt="Second Director" />
                            </div>
                            <div class="director-name">Malav Kansara</div>
                            <div class="director-title">Partner</div>
                            <div class="director-divider"></div>
                        </div>
                
                        </div>
                    </div>
                
                    <!-- Right: Message -->
                    <div class="col-12 col-md-9">
                        <h2 class="section-title" data-aos="fade-up">Message from the Management</h2>
                        <div class="top-accent"></div>
                
                        <div class="message-body">
                        <p data-aos="fade-up">
                            Devotion Contracting LLC stands at the forefront of aluminium, façade, glazing, and
                            cladding solutions, delivering excellence across projects of every scale and complexity.
                            We are not just contractors — we are strategic partners committed to elevating the
                            performance, aesthetics, and value of every building we work on.
                        </p>
                
                        <p data-aos="fade-up">
                            Our solutions are engineered with precision and driven by innovation, enabling our clients
                            to achieve superior project outcomes, optimized cost efficiencies, and long-term value
                            creation. With a relentless focus on quality and execution, we consistently transform
                            vision into reality.
                        </p>
                
                        <p data-aos="fade-up">
                            At Devotion, our reputation is built on uncompromising delivery — projects executed with
                            precision, completed on time, and within budget, without ever sacrificing quality. We
                            operate at the cutting edge of the industry, continuously integrating advanced technologies
                            and collaborating with leading specialists across the value chain to deliver best-in-class
                            solutions.
                        </p>
                
                        <p data-aos="fade-up">Our strategic focus is clear and unwavering:</p>
                        <ul data-aos="fade-up">
                            <li><strong>To lead through excellence,</strong> delivering high-impact, value-engineered solutions that set new benchmarks in performance and quality.</li>
                            <li><strong>To outperform industry standards,</strong> maintaining superior technical capabilities and operational efficiency at all times.</li>
                            <li><strong>To invest in top-tier talent,</strong> building a high-performance team that drives innovation and execution excellence.</li>
                            <li><strong>To scale with purpose,</strong> expanding our footprint while maintaining an uncompromising focus on client success.</li>
                            <li><strong>To deliver absolute confidence,</strong> ensuring accountability, reliability, and excellence in every project we undertake. At Devotion Contracting LLC, we don't just meet expectations — we set new standards.</li>
                        </ul>
                        </div>
                    </div>
                
                    </div>
                </div>
            </div>

            <!-- Feature cards row -->
            <div class="row g-4 cards-row">

                <!-- Card 1: Quality Products -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="feature-card">
                        <div class="d-flex align-items-start justify-content-between mb-2">
                            <h3 class="card-title" data-aos="fade-up">Quality<br>Products</h3>
                            <!-- Diamond / glass pane icon -->
                             <i class="fa-solid fa-award" style="font-size: 45px; color: #aa8038;" data-aos="fade-up"></i>
                        </div>
                        <hr class="card-divider" data-aos="fade-up" />
                        <p class="card-desc" data-aos="fade-up">
                            Glass World Industries offers superior <strong>glass products</strong> that are
                            meticulously crafted to meet the highest standards of quality and durability.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Budget Friendly -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="feature-card">
                        <div class="d-flex align-items-start justify-content-between mb-2">
                            <h3 class="card-title" data-aos="fade-up">Budget<br>Friendly</h3>
                            <!-- Quote / value icon -->
                            <i class="fa-solid fa-wallet" style="font-size: 45px; color: #aa8038;" data-aos="fade-up"></i>
                        </div>
                        <hr class="card-divider" data-aos="fade-up"/>
                        <p class="card-desc" data-aos="fade-up">
                            At Glass World Industries, we believe in providing cost-effective solutions
                            without compromising on the quality of our glass products.
                        </p>
                    </div>
                </div>

                <!-- Card 3: High Tech Facility -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="feature-card">
                        <div class="d-flex align-items-start justify-content-between mb-2">
                            <h3 class="card-title" data-aos="fade-up">High Tech<br>Facility</h3>
                            <!-- Grid / facility icon -->
                            <i class="fa-solid fa-microchip" style="font-size: 45px; color: #aa8038;" data-aos="fade-up"></i>
                        </div>
                        <hr class="card-divider" data-aos="fade-up"/>
                        <p class="card-desc" data-aos="fade-up">
                            Our state-of-the-art facility utilizes advanced technology and techniques,
                            ensuring precision and excellence in every glass piece we produce.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Timely Delivery -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="feature-card">
                        <div class="d-flex align-items-start justify-content-between mb-2">
                            <h3 class="card-title" data-aos="fade-up">Timely<br>Delivery</h3>
                            <!-- Layers / stack icon -->
                            <i class="fa-solid fa-truck-fast" style="font-size: 45px; color: #aa8038;" data-aos="fade-up"></i>
                        </div>
                        <hr class="card-divider" data-aos="fade-up" />
                        <p class="card-desc" data-aos="fade-up">
                            We prioritize prompt delivery, ensuring that our customers receive their
                            glass supplies on time, meeting project deadlines and minimizing any disruptions.
                        </p>
                    </div>
                </div>

            </div><!-- /cards row -->

        </div><!-- /container -->
    </section>

    <!-- =========================
        VISION & MISSION SECTION
    ========================= -->

    <section class="vision-mission-section py-5">
        <div class="container">

            <!-- Vision -->
            <div class="row align-items-center g-5 vision-row mb-5">

                <!-- Image -->
                <div class="col-lg-5" data-aos="fade-up">
                    <div class="image-box">
                        <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=1200&q=80"
                            alt="Vision Image">

                        <div class="image-overlay"></div>
                    </div>
                </div>

                <!-- Content -->
                <div class="col-lg-7">
                    <div class="content-box">
                        <span class="section-tag" data-aos="fade-up">OUR FUTURE</span>

                        <h2 class="section-title" data-aos="fade-up">
                            Our Vision
                        </h2>

                        <div class="title-line" data-aos="fade-up"></div>

                        <p data-aos="fade-up">
                            To be the undisputed partner of choice in façade, glazing and cladding solutions –
                            recognized for setting industry benchmarks in design, engineering, excellence and project
                            delivery.

                        </p>

                        <p data-aos="fade-up">
                            We aspire to lead the market by consistently redefining standards of quality, innovation,
                            and reliability, becoming the preferred name for clients

                        </p>

                        <a href="javascript:void();" class="custom-btn" data-aos="fade-up">
                            Learn More
                            <span>↗</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Mission -->
            <div class="row align-items-center g-5 flex-lg-row-reverse">

                <!-- Image -->
                <div class="col-lg-5" data-aos="fade-up">
                    <div class="image-box">
                        <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=1200&q=80"
                            alt="Mission Image">

                        <div class="image-overlay"></div>
                    </div>
                </div>

                <!-- Content -->
                <div class="col-lg-7">
                    <div class="content-box mission-content">

                        <span class="section-tag" data-aos="fade-up">WHAT WE DO</span>

                        <h2 class="section-title" data-aos="fade-up">
                            Our Mission
                        </h2>

                        <div class="title-line" data-aos="fade-up"></div>

                        <p data-aos="fade-up">
                            At Devotion Contracting, our mission is to deliver world-class façade, glazing, and cladding
                            solutions that exceed expectations and create lasting value for our clients.

                        </p>

                        <p data-aos="fade-up">
                            We achieve this by operating at the highest levels of precision, quality, and performance;
                            ensuring every project is executed flawlessly, on time, and within budget. Our commitment
                            extends beyond delivery; we continuously push the boundaries of innovation, adopt advanced
                            technologies, and collaborate with industry-leading specialists to provide cutting-edge
                            solutions.

                        </p>

                        <p data-aos="fade-up">
                            We are equally committed to fostering a high-performance culture by investing in our people
                            - empowering them with opportunities for growth, excellence, and leadership. The health,
                            safety, and well-being of our workforce remain non-negotiable, embedded in every aspect of
                            our operations.

                        </p>

                        <p data-aos="fade-up">Driven by accountability, integrity, and an uncompromising pursuit of excellence, we strive not
                        just to participate in the industry - but to lead it.</p>

                      

                        <a href="javascript:void();" class="custom-btn" data-aos="fade-up">
                            Explore Services
                            <span>↗</span>
                        </a>

                    </div>
                </div>

            </div>

        </div>
    </section>
 
<?php
    // include_once('elements/faqs.php');
    include_once('elements/footer.php');
?>