// Bootstrap Carousel
$(function () {
  "use strict";
  $('.carousel').carousel({
    interval: 6000,
    pause: "hover",
    wrap: true,
    keyboard: false
  });
});

// Bootstrap tooltip
$(function () {
  'use strict';
  $('[data-toggle="tooltip"]').tooltip();
});

// Smooth scroll to anchor with updating url
var $root = $('html, body');
$('.smooth').click(function() {
    var href = $.attr(this, 'href');
    $root.animate({
        scrollTop: $(href).offset().top
    }, 500, function () {
        window.location.hash = href;
    });
    return false;
});
