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
})(document, window);
