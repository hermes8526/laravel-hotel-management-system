function toggle(id) {
  a = document.getElementById('toggle_' + id);
  b = document.getElementById('display_' + id);
  if (a.style.display == 'block') {
    a.style.display = 'none';
    b.innerHTML = 'Show Discussion';
  }
  else {
    a.style.display = 'block';
    b.innerHTML = '';
  }
}
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("slide-thumbnail");
  var captionText = document.getElementById("caption");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  console.log(slideIndex);

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    // slides[i].style.display = "inline";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  // slides[slideIndex-1].style.display = "inline";
  dots[slideIndex - 1].className += " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}