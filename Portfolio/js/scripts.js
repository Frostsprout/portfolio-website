// HUNDREDS OF NAV LINKS 

$('#home-link').hover(function() {
        $('#hover-home').fadeIn();
    }, function() {
        $('#hover-home').hide();
});

$('#about-link').hover(function() {
        $('#hover-about').fadeIn();
    }, function() {
        $('#hover-about').hide();
});

$('#contact-link').hover(function() {
        $('#hover-contact').fadeIn();
    }, function() {
        $('#hover-contact').hide();
});

$('#blog-link').hover(function() {
        $('#hover-blog').fadeIn();
    }, function() {
        $('#hover-blog').hide();
});

$('#tumblr-link').hover(function() {
        $('#hover-tumblr').fadeIn();
    }, function() {
        $('#hover-tumblr').hide();
});

function cycleImages(){
      var $active = $('#cycle-one .active');
      var $next = ($active.next().length > 0) ? $active.next() : $('#cycle-one img:first');
      $next.css('z-index',2);//move the next image up the pile
      $active.fadeOut(1500,function(){//fade out the top image
	  $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
          $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }

$(document).ready(function(){
// run every 7s
setInterval('cycleImages()', 3000);
})








