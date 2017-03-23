(function($) {
  // click on item to replace the hero section with what you click on
  $('.product-click-area').each(function() {
    var $self = $(this);
    // Get the html for the item you have clicked on
    $self.on('click', function(e) {
      var $thisImg    = $self.find('img').attr('src').replace('sm.jpg', 'md.jpg');
      var $thisTitle  = $self.find('.prod-desc').text();
      var $thisPrice  = $self.find('.prod-price').text();
      var $thisBullet = $self.find('.hidden-bullets').html();
      var $thisSale  = $self.find('.hidden-price').html();

      // Swap out the hero html for the html we want
      $('.hero-img').find('img').attr('src', $thisImg);
      $('.hero-desc p').text($thisTitle);
      $('.hero-desc ul').html($thisBullet);
      $('.hero-price p').text($thisPrice);
      $('.sale-price-holder').html($thisSale);

      if(e.target.className !== 'close-reveal-modal') {
        $('html, body').animate({ scrollTop: '0px' }, 200);
      }
    });
  });

})(jQuery);
