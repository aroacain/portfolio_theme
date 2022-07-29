class AnimateOnScroll {
  constructor() {
    this.navbar = document.querySelector(".navbar");
    this.y = window.pageYOffset;
    this.events();
  }

  events() {
    console.log(window.scrollY);
    window.addEventListener("scroll", () => this.changeColor());
  }

  changeColor() {
    console.log("I ran");
    ("use strict");
    if (
      document.body.scrollTop >= 20 ||
      document.documentElement.scrollTop >= 20
    ) {
      this.navbar.classList.add("navbar__sticky");
    } else {
      this.navbar.classList.remove("navbar__sticky");
    }
  }
}

export default AnimateOnScroll;
