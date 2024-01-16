document.addEventListener("DOMContentLoaded", function () {
  var bar = document.querySelector(".reservationBar");

  window.addEventListener("scroll", function () {
    if (window.scrollY >= barOffsetTop) {
      bar.classList.add("sticky");
    } else {
      bar.classList.remove("sticky");
    }
  });
});

// form validation 
const name = document.getElementById('voornaam')
const form = document.getElementById('form')
const errorElement= document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (voornaam.value === '' || voornaam.value == null) {
    messages.push("Name is required")
  }
  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }

})