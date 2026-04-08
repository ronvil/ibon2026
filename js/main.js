document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector(".banner");
  if (!header) return;

  let headerHeight = header.offsetHeight;

  function handleScroll() {
    const scrollY = window.scrollY;
    const triggerPoint = headerHeight + (window.innerHeight * 0.1); // +10vh

    if (scrollY > triggerPoint) {
      header.classList.add("banner--scrolled");
    } else {
      header.classList.remove("banner--scrolled");
    }
  }

  // Recalculate on resize (in case layout changes)
  window.addEventListener("resize", () => {
    headerHeight = header.offsetHeight;
    handleScroll();
  });

  window.addEventListener("scroll", handleScroll);
});