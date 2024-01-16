const plus = document.querySelector("#plus")
const minus = document.querySelector("#minus")
const total = document.querySelector('#total')

let getal = 0;

plus.addEventListener("click", () => {
  if(getal >= 8 ) return
  getal++
  total.innerHTML = getal
})
minus.addEventListener("click", () => {
  if(getal <= 0 ) return
  getal--
  total.innerHTML = getal
})

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