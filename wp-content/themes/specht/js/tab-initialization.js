( function( $ ) {

	// $('.tabgroup > div').hide();
	// $('.tabgroup > div:first-of-type').show();
	// $('.tabs a').click(function(e){
	//   e.preventDefault();
	//     var $this = $(this),
	//         tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
	//         others = $this.closest('li').siblings().children('a'),
	//         target = $this.attr('href');
	//     others.removeClass('active');
	//     $this.addClass('active');
	//     $(tabgroup).children('div').hide();
	//     $(target).show();
	  
	// })


      $(function() {
        $( "#tabs" ).tabs({
          beforeLoad: function( event, ui ) {
            ui.jqXHR.fail(function() {
              ui.panel.html(
                "Couldn't load this tab. We'll try to fix this as soon as possible. " +
                "If this wouldn't be a demo." );
            });
          }
        });
      });
      


      // $('#tabs ul li a').click(function () {
      // 	location.hash = $(this).attr('href');

      // });

} )( jQuery );
