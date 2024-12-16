let currentSlide = 0;
let slides;

document.addEventListener('DOMContentLoaded', () => {
  slides = document.querySelectorAll('.banner-slide');
  showSlide(currentSlide);
});

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove('active'); 
    if (i === index) {
      slide.classList.add('active'); 
    }
  });
}

function nextSlide() {
  currentSlide++;
  if (currentSlide >= slides.length) {
    currentSlide = 0;
  }
  showSlide(currentSlide);
}

function prevSlide() {
  currentSlide--;
  if (currentSlide < 0) {
    currentSlide = slides.length - 1;
  }
  showSlide(currentSlide);
}


setInterval(() => {
  nextSlide();
}, 5000);
