let Rellax = require("rellax");
((d, w) => {
  if (d.querySelector(".rellax-img")) {
    let rellax = new Rellax(".rellax-img", {
      center: true,
    });

    let removeRellax = (w, rellax) => {
      if (w.matchMedia("(max-width: 600px)")) {
        rellax.destroy();
      }
      return;
    };

    w.onload = removeRellax(w, rellax);

    w.addEventListener("resize", () => removeRellax(w, rellax));
  }
})(document, window);
