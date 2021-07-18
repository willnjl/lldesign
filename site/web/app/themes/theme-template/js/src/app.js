((d, w) => {
  const loadingPage = d.getElementById("loading-page");
  const loadingBar = d.getElementById("loading-bar");

  if (loadingPage && loadingBar) {
    w.onload = () => {
      loadingBar.classList.add("loaded");
    };
    setTimeout(() => {
      loadingPage.style.display = "none";
    }, 1000);
  }

  const photoGallery = d.querySelector(".grid-products");

  if (photoGallery) {
    let cards = photoGallery.querySelectorAll(".photo-card");

    cards.forEach((card) => {
      let target = card.querySelector("a");
      card.addEventListener("click", () => {
        target.click();
      });
    });
  }
})(document, window);
