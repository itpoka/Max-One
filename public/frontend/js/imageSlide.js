// simple slider JS
const slidesEl = document.querySelector('.slides');
const slides = document.querySelectorAll('.slide');
let idx = 0;
document.querySelector('.next').addEventListener('click', ()=> {
  idx = (idx + 1) % slides.length;
  slidesEl.style.transform = `translateX(-${idx * 100}%)`;
});
document.querySelector('.prev').addEventListener('click', ()=> {
  idx = (idx - 1 + slides.length) % slides.length;
  slidesEl.style.transform = `translateX(-${idx * 100}%)`;
});
