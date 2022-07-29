class AnimateOnScroll {
  constructor() {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        const square = entry.target.querySelector(".animate");

        if (entry.isIntersecting) {
          square.classList.add("animate--active");
          return; // if we added the class, exit the function
        }

        // We're not intersecting, so remove the class!
        square.classList.remove("animate--active");
      });
    });
    observer.observe(document.querySelector(".animate--wrapper"));
  }
}

export default AnimateOnScroll;
