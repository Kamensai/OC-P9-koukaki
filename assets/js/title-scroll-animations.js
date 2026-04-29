document.addEventListener("DOMContentLoaded", () => {
  const titles = document.querySelectorAll(".reveal-title");

  titles.forEach((title) => {
    const words = title.textContent.trim().split(" ");

    title.innerHTML = words.map((word) => `<span>${word}</span>`).join(" ");
  });

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.4,
    },
  );

  titles.forEach((title) => observer.observe(title));
});
