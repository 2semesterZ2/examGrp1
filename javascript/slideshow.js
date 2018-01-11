//From w3schools HOW to - Slideshwo https://www.w3schools.com/howto/howto_js_slideshow.asp

function showSlides(n) {
    //counter variable
    var i;
    //Get the slideshow elements
    var slides = document.getElementsByClassName("mySlides");
    //get the dots to work with them
    var dots = document.getElementsByClassName("dot");
    //If the given Slideindex is huger then the actual number of slides, it will change back to one
    if (n > slides.length) {slideIndex = 1;}    
    //If the given number is smaller then one the index will change to the highest possible number
    if (n < 1) {slideIndex = slides.length;}
    //don't display the slides/hide the slides
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
    //show the dots
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
    //display the actual choosen slide and set it's dot to active
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    
    //Only change the image with a timer if the user hasn't clicked on the arrows himself
    if (!clicked) {
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
    
}

var clicked = false;
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
    clicked = true;
}

function currentSlide(n) {
  showSlides(slideIndex = n);
    clicked = true;
}


function showGallerySlides(n) {
  var i;
  var slides = document.getElementsByClassName("gallerySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {gallerySlideIndex = 1;}
  if (n < 1) {gallerySlideIndex = slides.length;}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[gallerySlideIndex-1].style.display = "block";
  dots[gallerySlideIndex-1].className += " active";
  captionText.innerHTML = dots[gallerySlideIndex-1].alt;
}

var gallerySlideIndex = 1;
showGallerySlides(gallerySlideIndex);

function plusGallerySlides(n) {
  showGallerySlides(gallerySlideIndex += n);
}

function currentGallerySlide(n) {
  showGallerySlides(gallerySlideIndex = n);
}