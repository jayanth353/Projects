const card = document.querySelector(".card");
const btn=document.querySelector(".flip")
const btn1=document.querySelector(".flip1")
const signUp=document.querySelector(".done")
const msg=document.querySelector(".msg")
btn.addEventListener("click", function (e) {
  card.classList.toggle('is-flipped');
});
btn1.addEventListener("click", function (e) {
  card.classList.toggle('is-flipped');
});


