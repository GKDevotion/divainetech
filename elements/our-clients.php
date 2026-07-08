<style>
      
    /* Section */
    .clients-section{
      /* padding:80px 20px; */
      background:linear-gradient(
        to bottom,
        #ffffff,
        #faf8f3
      );
      text-align:center;
      position:relative;
      overflow:hidden;
    }

    /* Decorative background */
    .clients-section::before{
      content:"";
      position:absolute;
      width:400px;
      height:400px;
      border-radius:50%;
      background:rgba(184,138,68,.05);
      top:-150px;
      left:-150px;
    }

    .clients-badge{
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding:8px 18px;
      border-radius:50px;
      background:#fff;
      border:1px solid rgba(184,138,68,.25);
      color:var(--gold);
      font-size:12px;
      font-weight:600;
      letter-spacing:2px;
      text-transform:uppercase;
      margin-bottom:18px;
    }

    .clients-heading{
      font-size:48px;
      font-weight:700;
      color:#111;
      margin-bottom:10px;
      letter-spacing:-1px;
    }

    .clients-sub{
      font-size:1rem;
      color:#666;
      max-width:700px;
      margin:auto auto 0px;
    }

    .clients-sub span{
      color:var(--gold);
      font-weight:600;
    }

    /* Cards */
    .client-card{
      background:#fff;
      border:1px solid rgba(0,0,0,.08);
      border-radius:20px;
      height:140px;
      margin:50px 0px;
      display:flex;
      align-items:center;
      justify-content:center;
      position:relative;
      overflow:hidden;
      transition:.4s ease;
      box-shadow:
        0 5px 15px rgba(0,0,0,.04);
    }

    .client-card:hover::before{
      transform:scaleX(1);
    }

    .client-card:hover{
      transform:translateY(-8px); 
      border:1px solid #aa8038;
    }

    .logo-stack{
      text-align:center;
    }

    .logo-text{
      color:#111;
      font-size:22px;
      font-weight:700;
      letter-spacing:2px;
    }

    .logo-sub{
      display:block;
      margin-top:4px;
      color:#666;
      font-size:11px;
      letter-spacing:2px;
      text-transform:uppercase;
    }

    .client-logo{
        max-width: 180px;
        max-height: 180px;
        width: auto;
        height: auto;
        object-fit: contain;
        /* transition: all 0.3s ease; */
        filter: grayscale(100%);
        opacity: 0.8;
    }

    .client-card:hover .client-logo{
        filter: grayscale(0%);
        opacity: 1;
        transform: scale(1.08);
    }
    /* Swiper */ 
    
    /* Arrows */
    .swiper-button-prev,
    .swiper-button-next{
      width:48px !important;
      height:48px !important;
      border-radius:50%;
      background:#fff;
      border:1px solid rgba(0,0,0,.08);
      box-shadow:0 8px 20px rgba(0,0,0,.08);
      transition:.3s ease;
    }

    .swiper-button-prev:hover,
    .swiper-button-next:hover{
      background:var(--gold);
      border-color:var(--gold);
    }

    .swiper-button-prev:hover::after,
    .swiper-button-next:hover::after{
      color:#fff !important;
    }

    .swiper-button-prev::after,
    .swiper-button-next::after{
      font-size:14px !important;
      color:#111;
      font-weight:700;
    }
    
    /* Mobile */
    @media(max-width:768px){

      .clients-section{
        padding:60px 15px;
      }

      .clients-heading{
        font-size:34px;
      }

      .client-card{
        height:120px;
      }

      .logo-text{
        font-size:18px;
      }
    }
</style>
 
<div class="clients-section py-5">
    <div class="clients-badge" data-aos="fade-up">Trusted partners</div>
    <h2 class="clients-heading" data-aos="fade-up">Our Clients</h2>
    <p class="clients-sub" data-aos="fade-up">Proud to work with <span>leading developers</span> across the UAE</p>

    <div class="swiper swiper-clients">
        <div class="swiper-wrapper" data-aos="fade-up">

          <div class="swiper-slide">
              <div class="client-card">
                  <img src="assets/images/clients/binghati.png"
                      alt="Binghati"
                      class="client-logo">
              </div>
          </div>

          <div class="swiper-slide">
              <div class="client-card">
                  <img src="assets/images/clients/bnw.png"
                      alt="Bnw"
                      class="client-logo">
              </div>
          </div>

          <div class="swiper-slide">
              <div class="client-card">
                  <img src="assets/images/clients/Meraas.png"
                      alt="Meraas"
                      class="client-logo">
              </div>
          </div>

          <div class="swiper-slide">
              <div class="client-card">
                  <img src="assets/images/clients/damac.png"
                      alt="DAMAC"
                      class="client-logo">
              </div>
          </div>

          <div class="swiper-slide">
                <div class="client-card">
                    <img src="assets/images/clients/danube.png"
                        alt="Danube"
                        class="client-logo">
                </div>
          </div>

          <div class="swiper-slide">
              <div class="client-card">
                  <img src="assets/images/clients/nashama.png"
                      alt="Nashama"
                      class="client-logo">
              </div>
          </div>

          <div class="swiper-slide">
              <div class="client-card">
                  <img src="assets/images/clients/dubai.png"
                      alt="Dubai"
                      class="client-logo">
              </div>
          </div>

        </div> 
    </div> 
</div>
 
 