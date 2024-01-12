document.addEventListener("DOMContentLoaded", function () {
  var bar = document.querySelector(".reservationBar");

  if (bar) {
    var barOffsetTop = bar.getBoundingClientRect().top + window.scrollY;

    window.addEventListener("scroll", function () {
      if (window.scrollY >= barOffsetTop) {
        bar.classList.add("sticky");
      } else {
        bar.classList.remove("sticky");
      }
    });
  } else {
    console.error("Element with class 'reservationBar' not found.");
  }
});