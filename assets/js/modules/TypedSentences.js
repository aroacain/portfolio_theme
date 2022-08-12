import Typed from "typed.js";

class TypedSentences {
  constructor() {
    var typed = new Typed(".typing", {
      strings: [
        "Wordpress.",
        "CSS.",
        "Wordpress themes.",
        "PHP.",
        "Wordpress plugins.",
      ],
      typeSpeed: 100,
      backSpeed: 60,
      backDelay: 1000,
      loop: true,
    });

    var typed2 = new Typed(".typing-2", {
      strings: [
        "Wordpress",
        "Full Stack",
        "Plugin",
        "Theme",
        "PHP",
        "bilingual",
      ],
      typeSpeed: 100,
      backSpeed: 60,
      backDelay: 1000,
      loop: true,
    });
  }
}

export default TypedSentences;
