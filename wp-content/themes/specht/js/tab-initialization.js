( function( $ ) {

      $(function() {
        $( "#tabs" ).tabs({
    	show: 'fade', hide: 'fade',
          activate: function(event, ui) {
            var pos = $(window).scrollTop();
            window.location.hash = ui.newPanel.attr('id');
            $(window).scrollTop(pos);


          }

        });
      });



} )( jQuery );
