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