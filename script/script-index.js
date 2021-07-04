//membuat carousel
let slideIndex = 1;
const slides = document.getElementsByClassName("carouselItem");
const dots = document.getElementsByClassName("dot");
totalSlide = slides.length

showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  if (n > slides.length) {
      slideIndex = 1
    }

  if (n < 1) {
      slideIndex = totalSlide
    }

  for (let i = 0; i < totalSlide; i++) {
      slides[i].style.display = "none";
  }
  for (let i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


//menampilkan hamburger menu
const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click',function(){
  nav.classList.toggle('slide');
})
