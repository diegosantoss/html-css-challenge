 function scroll() {
  $('a[href^="#"]').on('click',function(e) {
      e.preventDefault();

      var target = this.hash,
          $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 900, 'swing');
  });
};


function hgScreen(){
  var hgHeight = window.innerHeight;
  hgCenter = ( hgHeight - $('div.text-home').height() - $('div.navbar-lang').innerHeight() ) / 2;
  
  console.log($('div.text-home').innerHeight());
  
  $('#header').css('height', hgHeight);
  $('div.text-home').css({'margin-top': hgCenter + 'px'});

}


$(function(){
  scroll();
  hgScreen();

  $(window).resize(function() {
    hgScreen();
  });

});
