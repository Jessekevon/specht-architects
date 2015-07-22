( function( $ ) {

      $(function() {
        $( "#tabs" ).tabs({
    	show: 'fade', hide: 'fade',
          beforeLoad: function( event, ui ) {
            ui.jqXHR.fail(function() {
              ui.panel.html(
                "Couldn't load this tab. We'll try to fix this as soon as possible. " +
                "If this wouldn't be a demo." );
            });
          },
          activate: function(event, ui) {
              window.location.hash = ui.newPanel.attr('id');
          }

        });
      });

} )( jQuery );
