$(document).ready(function() {
    const slider = $('.slider');
    const cardWidth = $('.cards').outerWidth(true); // Get the card width with margins

    // Move the slider left
    function slideLeft() {
      slider.animate({ 'left': '+=' + cardWidth }, 300);
    }

    // Move the slider right
    function slideRight() {
      slider.animate({ 'left': '-=' + cardWidth }, 300);
    }

    // Previous button click event
    $('.prev-button').click(function() {
      slideLeft();
    });

    // Next button click event
    $('.next-button').click(function() {
      slideRight();
    });
  });