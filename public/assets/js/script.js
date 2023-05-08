// NAVBAR

$(document).ready(function () {
  $("#open-button").click(function () {
    $("#my-div").show();
    $("#open-button").hide(); // Hide the open button when the div is shown
  });

  $("#close-button").click(function () {
    $("#my-div").hide();
    $("#open-button").show(); // Show the open button when the div is hidden
  });
});



// popup order now


// POP UP FORM BUTTON


// slick home page



// slick landing page

$(document).on('ready', function () {
  $(".slick-gallery").slick({
    dots: true,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    centerMode: true,
    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          arrows: false,
        },
      }]
  });
});


