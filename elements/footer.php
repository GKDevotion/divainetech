       <!-- ═══════════════ FOOTER ═══════════════ -->
       <footer class="footer">
         <div class="container">
           <div class="row g-5">
             <div class="col-lg-4">
               <a class="navbar-brand mb-3 d-inline-flex" href="index.php">
                 <div class="brand-logo">
                   <img src="assets/images/Devotion-Contracting.png" alt="Devotion Contracting Industries LLC Logo">
                 </div>
               </a>
               <p style="color:#000; font-size:1.1rem; line-height:1.8; max-width:300px; margin-top:1rem;">
                 Leader in installation services for aluminium and glass facade across UAE and GCC
               </p>
               <div class="social-links">
                 <a href="javascript:void();" aria-label="Facebook">
                   <i class="bi bi-facebook"></i>
                 </a>

                 <a href="javascript:void();" aria-label="Instagram">
                   <i class="bi bi-instagram"></i>
                 </a>

                 <a href="javascript:void();" aria-label="LinkedIn">
                   <i class="bi bi-linkedin"></i>
                 </a>

                 <a href="javascript:void();" aria-label="YouTube">
                   <i class="bi bi-youtube"></i>
                 </a>
               </div>
             </div>
             <div class="col-6 col-md-4 col-lg-2">
               <div class="footer-title">Services</div>
               <ul class="footer-links">
                 <li><a href="javascript:void();">Sliding Doors</a></li>
                 <li><a href="javascript:void();">Glass Facades</a></li>
                 <li><a href="javascript:void();">Partitions</a></li>
                 <li><a href="javascript:void();">Skylights</a></li>
                 <li><a href="javascript:void();">Smart Glass</a></li>
               </ul>
             </div>
             <div class="col-6 col-md-4 col-lg-2">
               <div class="footer-title">Company</div>
               <ul class="footer-links">
                 <li><a href="about.php">About Us</a></li>
                 <li><a href="projects.php">Projects</a></li>
                 <li><a href="overview.php">Overview</a></li> 
                 <li><a href="contact.php">Contact</a></li>
               </ul>
             </div>
             <div class="col-md-4 col-lg-4">
               <div class="footer-title">Contact</div>
               <ul class="footer-links">
                 <li><a href="tel:+91 9173307640;"><i class="bi bi-telephone-fill text-gold me-2" style="font-size: larger;"></i>04 3333 512</a></li>
                 <li><a href="mail:hello@devotioncontracting.ae;"><i class="bi bi-envelope-fill text-gold me-2" style="font-size: larger;"></i>hello@devotioncontracting.ae</a></li>
                 <li><a href="javascript:void();"><i class="bi bi-geo-alt-fill text-gold me-2" style="font-size: larger;"></i>Al Quoz Industrial Area, Dubai, UAE</a></li>
               </ul>
               <div style="margin-top:1.5rem;">
                 <div style="font-size:.75rem;color:rgba(255,255,255,.4);letter-spacing:.1em;text-transform:uppercase;margin-bottom:.5rem;">Newsletter</div>
                 <div class="input-group" style="background:rgba(255,255,255,.06);border:1px solid var(--border);border-radius:4px;overflow:hidden;">
                   <input type="email" class="form-control bg-transparent border-0 text-white" placeholder="Your email" style="font-size:.82rem; border: 1px solid gray !important; " />
                   <button class="btn btn-gold px-3" style="border-radius:0;"><i class="bi bi-send-fill"></i></button>
                 </div>
               </div>
             </div>
           </div>

           <style>
             /* ════════════════════════════
              FOOTER BOTTOM BAR
              ════════════════════════════ */
             .footer-bar {
               border-top: 1px solid #000;
               padding: 14px 0;
               margin-top: 3rem;
             }

             .footer-bar-inner {
               display: flex;
               align-items: center;
               justify-content: space-between;
               flex-wrap: wrap;
               gap: .75rem;
             }

             /* Dark mode toggle */
             .dark-toggle {
               width: 44px;
               height: 24px;
               background: rgba(255, 255, 255, .12);
               border-radius: 50px;
               position: relative;
               cursor: pointer;
               border: none;
               transition: background .25s;
               flex-shrink: 0;
             }

             .dark-toggle.on {
               background: var(--gold);
             }

             .dark-toggle::after {
               content: '';
               position: absolute;
               top: 3px;
               left: 3px;
               width: 18px;
               height: 18px;
               background: #fff;
               border-radius: 50%;
               transition: transform .25s cubic-bezier(.4, 0, .2, 1);
             }

             .dark-toggle.on::after {
               transform: translateX(20px);
             }

             /* Bottom nav */
             .bar-nav {
               display: flex;
               align-items: center;
               gap: 1.4rem;
               flex-wrap: wrap;
               list-style: none;
               margin: 0;
               padding: 0;
             }

             .bar-nav a {
               color: var(--text-muted);
               font-size: 1rem;
               text-decoration: none;
               transition: color .2s;
             }

             .bar-nav a:hover {
               color: #aa8038;
             }

             /* Copyright */
             .bar-copy {
               color: var(--text-muted);
               font-size: 1rem;
             }


             /* Scroll-to-top arrow */
             .scroll-top {
               width: 34px;
               height: 34px;
               background: var(--gold);
               color: #111;
               border: none;
               border-radius: 4px;
               display: grid;
               place-items: center;
               cursor: pointer;
               font-size: .7rem;
               transition: background .22s, transform .22s;
               flex-shrink: 0;
             }

             .scroll-top:hover {
               background: var(--gold-lt);
               transform: translateY(-3px);
             }

             /* ════════════════════════════
                RESPONSIVE
              ════════════════════════════ */
             @media (max-width: 767px) {
               .site-footer {
                 padding: 48px 0 32px;
               }

               .footer-col {
                 margin-bottom: 2rem;
               }

               .footer-bar-inner {
                 flex-direction: column;
                 align-items: flex-start;
                 gap: .6rem;
               }
             }

             @media (max-width: 575px) {
               .bar-nav {
                 gap: .9rem;
               }

               .bar-copy {
                 font-size: .78rem;
               }
             }
           </style>

           <!-- ════ BOTTOM BAR ════ -->
           <div class="footer-bar ">
             <div class="container">
               <div class="footer-bar-inner">
                 <ul class="bar-nav">
                   <li><a href="terms-condition.php">Terms & Condition</a></li>
                   <li><a href="privacy-policy.php">Privacy Policy</a></li>
                   <li><a href="cookie-policy.php">Cookie Policy</a></li>
                   <li><a href="careers.php">Careers</a></li>
                 </ul>

                 <p class="bar-copy mb-0">
                   © 2026 Devotion Contracting LLC. All rights reserved.
                 </p>

               </div>
             </div>
           </div>

         </div>

       </footer>

      <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

      <script>
        AOS.init({
            duration: 1000,
            offset: 100,
            once: true,
            easing: 'ease-in-out'
        });
      </script>

       <!-- Bootstrap 5 JS -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
       <!-- Swiper JS -->
       <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
       <!-- Custom JS -->
       <script src="assets/js/index.js"></script>

       <script>
         // Thumb swiper (must init first)
         const thumbSwiper = new Swiper('.thumb-swiper', {
           spaceBetween: 10,
           slidesPerView: 4,
           freeMode: true,
           watchSlidesProgress: true,
           breakpoints: {
             0: {
               slidesPerView: 3
             },
             576: {
               slidesPerView: 4
             },
           }
         });

         // Main swiper
         const mainSwiper = new Swiper('.main-swiper', {
           loop: true,
           speed: 700,
           autoplay: {
             delay: 4000,
             disableOnInteraction: false,
             pauseOnMouseEnter: true
           },
           effect: 'fade',
           fadeEffect: {
             crossFade: true
           },
           pagination: {
             el: '.swiper-pagination',
             clickable: true,
           },
           navigation: {
             nextEl: '.btn-next',
             prevEl: '.btn-prev',
           },
           thumbs: {
             swiper: thumbSwiper,
           },
           on: {
             slideChange: function() {
               const counter = document.getElementById('counter');
               if (counter) {
                 counter.textContent = (this.realIndex + 1) + ' / ' + this.slides.length;
               }
             }
           }
         });
       </script>

       <script>
         const serviceswiper = new Swiper('.swiper-newsroom', {
           slidesPerView: 1.1,
           spaceBetween: 20,
           grabCursor: true,
           pagination: {
             el: '.swiper-pagination-newsroom',
             clickable: true,
           },
           navigation: {
             nextEl: '#btnNext',
             prevEl: '#btnPrev',
           },
           breakpoints: {
             576: {
               slidesPerView: 1.5,
               spaceBetween: 22
             },
             768: {
               slidesPerView: 2.2,
               spaceBetween: 24
             },
             992: {
               slidesPerView: 3,
               spaceBetween: 28
             },
             1200: {
               slidesPerView: 3,
               spaceBetween: 30
             },
           }
         });
       </script>

       <script>
         // ── Hero Swiper ──
         const heroSwiper = new Swiper('#heroSwiper', {
           loop: true,
           speed: 1100,

           autoplay: {
             delay: 5500,
             disableOnInteraction: false,
           },

           effect: 'fade',
           fadeEffect: {
             crossFade: true,
           },

           navigation: {
             nextEl: '.swiper-button-next',
             prevEl: '.swiper-button-prev',
           },

           pagination: {
             el: '.swiper-pagination',
             clickable: true,
           },

           on: {
             slideChange() {
               const idx = (this.realIndex + 1)
                 .toString()
                 .padStart(2, '0');

               document.getElementById('slideCounter').innerHTML =
                 `<strong>${idx}</strong> / 04`;
             }
           }
         });

         // ── Projects Swiper ──
         new Swiper('.projects-swiper', {
           loop: true,
           speed: 800,
           autoplay: {
             delay: 3800,
             disableOnInteraction: false
           },
           slidesPerView: 1.2,
           spaceBetween: 20,
           centeredSlides: true,
           pagination: {
             el: '.projects-swiper .swiper-pagination',
             clickable: true
           },
           breakpoints: {
             576: {
               slidesPerView: 1.8,
               spaceBetween: 24
             },
             768: {
               slidesPerView: 2.4,
               spaceBetween: 28
             },
             1024: {
               slidesPerView: 3.2,
               spaceBetween: 32
             },
             1280: {
               slidesPerView: 3.6,
               spaceBetween: 36
             },
           }
         });

         // ── Navbar scroll effect ──
         window.addEventListener('scroll', () => {
           document.getElementById('mainNav').classList.toggle('scrolled', window.scrollY > 50);
         });
       </script>

       <script>
         function toggleFaq(card) {
           const isActive = card.classList.contains('active');
           // Close all
           document.querySelectorAll('.faq-card').forEach(c => {
             c.classList.remove('active');
             c.querySelector('.faq-trigger').setAttribute('aria-expanded', 'false');
           });
           // Open clicked if it was closed
           if (!isActive) {
             card.classList.add('active');
             card.querySelector('.faq-trigger').setAttribute('aria-expanded', 'true');
           }
         }

         // Rotate plus to X on active
         document.querySelectorAll('.faq-card').forEach(card => {
           card.querySelector('.faq-trigger').addEventListener('click', function(e) {
             e.stopPropagation();
             toggleFaq(card);
           });
         });
       </script>

       <script>
         var swiper = new Swiper(".projectSwiper", {
           loop: true,
           speed: 1000,
           spaceBetween: 30,
           grabCursor: true,
           roundLengths: true,
           slidesPerGroup: 1,
           watchOverflow: true,

           autoplay: {
             delay: 3500,
             disableOnInteraction: false
           },

           navigation: {
             nextEl: ".swiper-button-next",
             prevEl: ".swiper-button-prev"
           },

           breakpoints: {
             0: {
               slidesPerView: 1,
               centeredSlides: false,
               spaceBetween: 20
             },

             576: {
               slidesPerView: 2,
               centeredSlides: false
             },

             768: {
               slidesPerView: 3,
               centeredSlides: false
             },

             1200: {
               slidesPerView: 4,
               centeredSlides: false
             }
           }
         });
       </script>

       <script>
         const sw = new Swiper('.swiper-clients', {
           slidesPerView: 2,
           spaceBetween: 16,
           loop: true,
           autoplay: {
             delay: 2800,
             disableOnInteraction: false,
             pauseOnMouseEnter: true
           },
           pagination: {
             el: '.swiper-pagination',
             clickable: true,
             dynamicBullets: true
           },
           navigation: {
             nextEl: '.swiper-button-next',
             prevEl: '.swiper-button-prev'
           },
           breakpoints: {
             480: {
               slidesPerView: 3,
               spaceBetween: 16
             },
             768: {
               slidesPerView: 4,
               spaceBetween: 20
             },
             1024: {
               slidesPerView: 5,
               spaceBetween: 24
             },
           }
         });
       </script>
<script>
  const testimonialSwiper = new Swiper(".testimonialSwiper", {
    loop: true,
    speed: 800,
    spaceBetween: 30,
    centeredSlides: false,

    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 25
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
}); 
</script>
       </body>

       </html>