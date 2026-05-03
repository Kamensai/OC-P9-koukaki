document.addEventListener("DOMContentLoaded", () => {
  const placeSection = document.querySelector(".story #place");
  const placeClouds = document.querySelectorAll(".place__cloud");
  const tabletBreakpoint = window.matchMedia("(max-width: 1024px)");

  if (!placeSection || placeClouds.length === 0) {
    return;
  }

  let ticking = false;

  const updatePlaceParallax = () => {
    if (tabletBreakpoint.matches) {
      placeClouds.forEach((cloud) => {
        cloud.style.transform = "";
      });

      ticking = false;
      return;
    }

    const sectionRect = placeSection.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    const progress =
      (windowHeight - sectionRect.top) / (windowHeight + sectionRect.height);

    const limitedProgress = Math.min(Math.max(progress, 0), 1);

    const moveX = limitedProgress * -300;

    placeClouds.forEach((cloud) => {
      cloud.style.transform = `translate3d(${moveX}px, 0, 0)`;
    });

    ticking = false;
  };

  window.addEventListener(
    "scroll",
    () => {
      if (!ticking) {
        window.requestAnimationFrame(updatePlaceParallax);
        ticking = true;
      }
    },
    { passive: true },
  );

  window.addEventListener("resize", updatePlaceParallax);

  updatePlaceParallax();
});
