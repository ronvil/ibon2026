// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function () {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());

// Place any jQuery/helper plugins in here.

// Sidr
(function(sidr) {
  "use strict"

  sidr.new('#menu-toggle', {
    timing: 'ease-in-out',
    speed: 500,
    side: 'right',
    onOpen: function() {
      document.getElementById("menu-toggle").innerHTML = "<i class='fas fa-times'></i>";
    },
    onClose: function() {
      document.getElementById("menu-toggle").innerHTML = "<i class='fas fa-bars'></i>";
    },
  });

  window.onresize = function() {
    sidr.close('sidr');
  };

})(window.sidr);

// Lightbox
const lightbox = GLightbox({
    selector: '.vitalsigns__gallery',
    touchNavigation: true
});


// Swiper
const swiper = new Swiper('.swiper', {

  slidesPerView: 1.25,
  spaceBetween: 1,

  breakpoints: {
    // when window width is >= 320px
    736: {
      slidesPerView: 2.25
    },
    // when window width is >= 480px
    980: {
      slidesPerView: 4.25
    },
    // when window width is >= 640px
    1280: {
      slidesPerView: 5.25
    }
  },
  
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});

//lightbox 
const searchlightbox = GLightbox ({
  selector: '.search-toggle',
  height: 'auto',
  skin: 'lightboxsearch',
});