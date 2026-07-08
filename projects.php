 
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
        .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            width: 100%;
            padding-right: 0px;
            padding-left: 0px;
            margin-right: auto;
            margin-left: auto;
        }
</style>

<section class="top-banner-background" style="background-image: url('assets/images/banner-img.png');">
    <div>
        <h1 class="mb-0 text-center" data-aos="fade-up">
            Our Projects
        </h1>
        <p class="text-black text-center mt-2" data-aos="fade-up">
            Explore our portfolio of successfully completed projects.
        </p>
    </div>
</section>

<section class="projects-section">
    <div class="container-fluid ">

        <!-- Heading -->
        <div class="row align-items-start mb-5" style="padding: 0px 35px;">
            <div class="col-lg-5">
                <span class="project-tag" data-aos="fade-up">• OUR PROJECTS</span>
            </div>

            <div class="col-lg-7">
                <h2 class="project-title" data-aos="fade-up">
                    LIST OF <span>MAJOR</span><br>
                    <span>PROJECTS</span> COMPLETED
                </h2>

                <p class="project-desc mt-4" data-aos="fade-up">
                    Our portfolio highlights our trusted reputation across the UAE's
                    residential, commercial, and hospitality sectors. We've delivered
                    standout projects like The Royal Atlantis, Finance House Headquarters,
                    Emirates NBD branches, and corporate spaces for PepsiCo and Emerson.
                </p>
            </div>
        </div>

        <!-- Swiper -->
        <div class="swiper projectSwiper">
            <div class="swiper-wrapper" data-aos="fade-up">

                <!-- Card -->
                <div class="swiper-slide">
                    <div class="project-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1511818966892-d7d671e672a2?q=80&w=1200&auto=format&fit=crop" alt="">
                            <span class="badge-type">COMMERCIAL</span>
                        </div>

                        <div class="project-content">
                            <h4>The Royal Atlantis</h4>
                            <p>Dubai, UAE</p>
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div class="swiper-slide">
                    <div class="project-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1200&auto=format&fit=crop" alt="">
                            <span class="badge-type">COMMERCIAL</span>
                        </div>

                        <div class="project-content">
                            <h4>Finance House Headquarters</h4>
                            <p>Abu Dhabi, UAE</p>
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div class="swiper-slide">
                    <div class="project-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1200&auto=format&fit=crop" alt="">
                            <span class="badge-type">COMMERCIAL</span>
                        </div>

                        <div class="project-content">
                            <h4>PepsiCo International Office</h4>
                            <p>Dubai, UAE</p>
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div class="swiper-slide">
                    <div class="project-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1497366412874-3415097a27e7?q=80&w=1200&auto=format&fit=crop" alt="">
                            <span class="badge-type">COMMERCIAL</span>
                        </div>

                        <div class="project-content">
                            <h4>Weatherford Office</h4>
                            <p>Mussafah, Abu Dhabi</p>
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div class="swiper-slide">
                    <div class="project-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?q=80&w=1200&auto=format&fit=crop" alt="">
                            <span class="badge-type">COMMERCIAL</span>
                        </div>

                        <div class="project-content">
                            <h4>Emirates NBD Headquarters</h4>
                            <p>Dubai, UAE</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Navigation -->
            <div class="swiper-button-next d-none"></div>
            <div class="swiper-button-prev d-none"></div>
        </div>
    </div>
</section>

<style>

    .projects-section {
        overflow: hidden; 
        padding:150px 0 30px;
        background-color: #F6F6F6;

    }

    .project-tag {
        border: 1px solid #d6d6d6;
        padding: 8px 18px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 1px;
        display: inline-block;
        background: #fff;
    }

    .project-title {
        font-size: 64px;
        font-weight: 800;
        line-height: 1;
        color: #111;
    }

    .project-title span {
        color: #c89b56;
    }

    .project-desc {
        max-width: 600px;
        color: #555;
        line-height: 1.8;
        font-size: 1rem;
    }

    .projectSwiper {
        padding-bottom: 40px;
    }

    .project-card {
        transition: .4s ease;
    }

    .project-card:hover {
        transform: translateY(-8px);
    }

    .project-img {
        position: relative;
        overflow: hidden;
        border-radius: 24px;
        height: 520px;
    }

    .project-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .5s ease;
    }

    .project-card:hover img {
        transform: scale(1.08);
    }

    .badge-type {
        position: absolute;
        top: 18px;
        left: 18px;
        border: 1px solid rgba(255,255,255,.7);
        color: #fff;
        padding: 7px 16px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 700;
        backdrop-filter: blur(6px);
        background: rgba(255,255,255,.15);
    }

    .project-content {
        padding-top: 18px;
    }

    .project-content h4 {
        font-size: 25px;
        font-weight: 700;
        margin-bottom: 8px;
        color: #111;
    }

    .project-content p {
        color: #777;
        font-size: 1rem;
        margin: 0;
    }

    .swiper-button-next,
    .swiper-button-prev {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: #c89b56;
        color: #fff;
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 18px;
        font-weight: 700;
    }

    @media (max-width: 991px) {

        .project-title {
            font-size: 42px;
            margin-top: 25px;
        }

        .project-img {
            height: 420px;
        }

        .project-content h4 {
            font-size: 26px;
        }
    }

    @media (max-width: 767px) {

        .project-title {
            font-size: 34px;
        }

        .project-img {
            height: 360px;
        }

        .project-content h4 {
            font-size: 22px;
        }
    }
</style>
 
<?php
    // include_once('elements/faqs.php');
    include_once('elements/footer.php');
?>