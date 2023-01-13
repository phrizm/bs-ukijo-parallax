document.addEventListener('DOMContentLoaded', function() {
  function wrapParallaxFigures() {
    // Find all figure elements with the parallax class
    const parallaxFigures = document.querySelectorAll('figure.parallax');
    
    // Loop through the parallax figures
    for (const figure of parallaxFigures) {
      // Create a new img element with the same src as the figure
    const img = document.createElement('img');
    img.src = figure.querySelector('img').src;

    // Add the jarallax-img class to the img element
    img.classList.add('ukiyo');

    // Insert the img element before the figure in the DOM tree
    figure.parentNode.insertBefore(img, figure);

    // Remove the figure element from the DOM
    figure.parentNode.removeChild(figure);

    
    }
  }

  wrapParallaxFigures();
  
  new Ukiyo(".ukiyo")

});