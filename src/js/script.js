//  function scroll() {
//   $('a[href^="#"]').on('click',function(e) {
//       e.preventDefault();

//       var target = this.hash,
//           $target = $(target);

//       $('html, body').stop().animate({
//           'scrollTop': $target.offset().top
//       }, 900, 'swing');
//   });
// };

function hgScreen(){
  var hgHeight = window.innerHeight;
  hgCenter = ( hgHeight - $('.content-center-home > div > h1').height() ) / 2;

  if(window.innerWidth >= 991){
	  $('.content-center-home').css('height', hgHeight + 'px');
	  $('.content-center-home > div > h1').css({'margin-top': hgCenter + 'px'});  	
  }
}

$(function(){
  hgScreen();

  $(window).resize(function() {
    hgScreen();
  });

});
