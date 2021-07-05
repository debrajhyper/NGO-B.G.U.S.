/*Hide Inspect Element
document.addEventListener("contextmenu",function(body){body.preventDefault();});
/*Hide Inspect Element*/




// Custome theme code
if ($('.clean-gallery').length > 0) {
   baguetteBox.run('.clean-gallery', { animation: 'slideIn'});
}
if ($('.clean-product').length > 0) {
    $(window).on("load",function() {
        $('.sp-wrap').smoothproducts();
    });
}





//smooth scrolling
(function($) {
  "use strict"; // Start of use strict
  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

/*
  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });*/

})(jQuery); // End of use strict




//about page -> card with hash navbar
$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
