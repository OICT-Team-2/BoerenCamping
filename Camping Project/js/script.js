// Makes reservation form stick to the top.
document.addEventListener("DOMContentLoaded", function () {
  var bar = document.querySelector(".reservationBar");
  var barOffsetTop = bar.getBoundingClientRect().top + window.scrollY;

  window.addEventListener("scroll", function () {
    if (window.scrollY >= barOffsetTop) {
      bar.classList.add("sticky");
    } else {
      bar.classList.remove("sticky");
    }
  });
});
