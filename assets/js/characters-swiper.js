document.addEventListener("DOMContentLoaded", function () {
  const charactersSwiper = document.querySelector(".characters-swiper");

  if (!charactersSwiper) {
    return;
  }

  new Swiper(".characters-swiper", {
    effect: "coverflow",
    slidesPerView: 3,
    centeredSlides: false,
    loop: true,
    grabCursor: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },

    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 80,
      modifier: 1,
      slideShadows: false,
    },
  });
});
