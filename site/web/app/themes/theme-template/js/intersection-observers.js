((d, w) => {
  if (!window.IntersectionObserver) {
    console.log("observers not supported");
    const observedContent = d.querySelectorAll("fade");
    observedContent.forEach((elem) => {
      elem.classList.remove("fade");
      if (elem.classList.contains("fade-in")) {
        elem.classList.remove("fade-in");
      }

      if (elem.classList.contains("swipe-left")) {
        elem.classList.remove("swipe-left");
      }

      if (elem.classList.contains("swipe-right")) {
        elem.classList.remove("swipe-right");
      }

      if (elem.classList.contains("swipe-up")) {
        elem.classList.remove("swipe-up");
      }
    });
  }
  if (!!window.IntersectionObserver) {
    const appearOptions = {
      threshold: 0,
      rootMargin: `0px 0px -150px 0px`,
    };

    const appearOnScroll = new IntersectionObserver(
      (entries, appearOnScroll) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) {
            return;
          } else {
            if (entry.target.classList.contains("fade-in")) {
              console.log("go");
              entry.target.classList.add("appear");
            }
            if (entry.target.classList.contains("swipe-left")) {
              entry.target.classList.add("position");
            }
            if (entry.target.classList.contains("swipe-right")) {
              entry.target.classList.add("position");
            }
            if (entry.target.classList.contains("swipe-up")) {
              entry.target.classList.add("position");
            }
            if (entry.target.classList.contains("swipe-down")) {
              entry.target.classList.add("position");
            }
            appearOnScroll.unobserve(entry.target);
          }
        });
      },
      appearOptions
    );
    const faders = d.querySelectorAll(".fade");

    faders.forEach((fader) => {
      appearOnScroll.observe(fader);
    });
  }
})(document, window);
