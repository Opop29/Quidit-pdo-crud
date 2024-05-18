var slideIndex = 0;
  showSlides();

  function showSlides() {
    var slides = document.getElementsByClassName("slides");
    for (var i = 0; i < slides.length; i++) {
      slides[i].classList.remove("active");
    }
    slideIndex++;
    if (slideIndex >= slides.length) {slideIndex = 0}
    slides[slideIndex].classList.add("active");

    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }