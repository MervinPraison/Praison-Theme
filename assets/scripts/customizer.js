(function($) {
  // Site title
  wp.customize('blogname', function(value) {
    value.bind(function(to) {
      $('.brand').text(to);
    });
  });
})(jQuery);


// Add SlickNav Mobile Menu
jQuery(function(){
jQuery('#primary-menu').slicknav();
});
