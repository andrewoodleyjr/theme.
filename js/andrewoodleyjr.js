(function() {
  return window.SIG_EXT = {};
})();

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-82837843-1']);
_gaq.push(['_trawckPageview']);
(function() {
  var ga = document.createElement('script');
  ga.type = 'text/javascript';
  ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/js/ga.js';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(ga, s);
})();

$(document).ready(function() {
  var clicked = false;
  $(".flip").click(function() {
    if (!clicked) {
      $(".panel").slideToggle("slow");
      clicked = true;
    }
  });
});
$(document).on('click', 'a', function(event) {
  // Only prevent event if its a hash link.
  // Allows smooth scroll on page.
  if (event.target.hash) {
    event.preventDefault();

    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
  }
});