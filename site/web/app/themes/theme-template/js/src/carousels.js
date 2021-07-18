((d, w) => {
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
})(document, window);
