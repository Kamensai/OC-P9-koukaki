document.addEventListener("DOMContentLoaded", () => {
  const banner = document.querySelector(".banner");
  const logoWrapper = document.querySelector(".banner__logo-wrapper");
  const video = document.querySelector(".banner__video");

  if (!banner || !logoWrapper || !video) {
    return;
  }

  const updateParallax = () => {
    const scrollY = window.scrollY;
    const bannerHeight = banner.offsetHeight;

    if (scrollY > bannerHeight) {
      return;
    }

    logoWrapper.style.transform = `translate3d(0, ${scrollY * 0.5}px, 0)`;
    video.style.transform = `translate3d(0, ${scrollY * 0.1}px, 0)`;
  };

  window.addEventListener("scroll", updateParallax, { passive: true });

  updateParallax();
});
