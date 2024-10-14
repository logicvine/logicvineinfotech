<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".newsSwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
    });
  </script>
  <script>
    window.addEventListener("scroll", function () {
      var scroll = window.scrollY;
      var navbar = document.querySelector("body");
      if (scroll <= 120) {
        navbar.classList.remove("group/nav");
      } else {
        navbar.classList.add("group/nav");
      }
    });
  </script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const swiper = new Swiper('.testimonialSwiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true, // Set loop to false
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            // },
            breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 10 },
            708: { slidesPerView: 3, spaceBetween: 10 },
            868: { slidesPerView: 3, spaceBetween: 10 },
            1024: { slidesPerView: 3, spaceBetween: 10 },
        },
        });

        document.getElementById('prevButton').addEventListener('click', () => {
            swiper.slidePrev();
        });

        document.getElementById('nextButton').addEventListener('click', () => {
            swiper.slideNext();
        });
    });
</script>