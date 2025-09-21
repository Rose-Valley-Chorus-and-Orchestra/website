


const slideshow = document.querySelector('#slideshow');
let currentImage = 0;
const images = ['../patience2023/photos/dragoons.png', '../patience2023/photos/maidens.png', '../patience2023/photos/duke_w_maiden.png'];

setInterval(() => {
  currentImage++;
  if (currentImage >= images.length) currentImage = 0;
  
  slideshow.src = images[currentImage];
}, 3000);     
     
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
     
     

