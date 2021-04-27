let Rellax = require("rellax");
((d, w) => {
  let isRellaxed = false;
  let rellax;

  let mediaCheck = () => w.matchMedia("(min-width: 600px)").matches;
  let rellaxInit = () => {
    rellax = new Rellax(".rellax-img", {
      centering: true,
    });
    isRellaxed = true;
  };

  if (d.querySelector(".rellax-img")) {
    w.onload = () => {
      if (mediaCheck()) {
        rellaxInit();
      }
    };

    w.addEventListener("resize", () => {
      if (mediaCheck()) {
        if (isRellaxed && rellax) {
          rellax.refresh();
        } else {
          rellaxInit();
        }
      } else {
        if (isRellaxed && rellax) {
          rellax.destroy();
        }
      }
    });
  }
})(document, window);
