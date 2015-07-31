/**
 * fade-in.js
 *
 * Contains code for the mobile version of the page navigation
 *
 */

 ( function( $ ) {

   var mq = window.matchMedia('all and (max-width: 767px)');
   if(mq.matches) {
       // the width of browser is more then 767px
       $(function() {
         var list = $('.js-dropdown-list');
         var link = $('.js-link');
         link.click(function(e) {
           e.preventDefault();
           list.slideToggle(200);
         });
         list.find('li').click(function() {
           var text = $(this).html();
           var icon = '<i class="fa fa-chevron-down"></i>';
           link.html(text+icon);
           list.slideToggle(200);
           if (text === '* Reset') {
             link.html('Select one option'+icon);
           }
         });
       });

   } else {
       // the width of browser is less then 700px
   }

 } )( jQuery );
