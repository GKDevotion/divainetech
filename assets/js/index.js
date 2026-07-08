   document.addEventListener("DOMContentLoaded", function () {

        let currentPage = window.location.pathname.split("/").pop();

        // Desktop Menu
        document.querySelectorAll(".nav-menu a").forEach(link => {
            let href = link.getAttribute("href");

            if (href === currentPage) {
                link.classList.add("active");
            }
        });

        // Mobile Menu
        document.querySelectorAll(".mobile-menu a").forEach(link => {
            let href = link.getAttribute("href");

            if (href === currentPage) {
                link.classList.add("active");
            }
        });

    });

        /* ── Hamburger toggle ── */
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('open');
      mobileMenu.classList.toggle('open');
    });

    /* ── Sticky shadow on scroll ── */
    const mainNav = document.getElementById('mainNav');
    const observer = new IntersectionObserver(
      ([e]) => mainNav.classList.toggle('scrolled', !e.isIntersecting),
      { rootMargin: '-68px 0px 0px 0px' }
    ); 