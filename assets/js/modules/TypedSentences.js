import Typed from "typed.js";

class TypedSentences {
  constructor() {
    var typed = new Typed(".typing", {
      strings: [
        "PHP.",
        "Wordpress.",
        "CSS.",
        "Wordpress themes.",
        "Wordpress plugins.",
      ],
      typeSpeed: 100,
      backSpeed: 60,
      loop: true,
    });

    var typed2 = new Typed(".typing-2", {
      strings: [
        "PHP",
        "Wordpress",
        "Full Stack",
        "Plugin",
        "Theme",
        "bilingual",
      ],
      typeSpeed: 200,
      backSpeed: 60,
      loop: true,
    });
  }
}

export default TypedSentences;
