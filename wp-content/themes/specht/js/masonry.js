/**
 * masonry.js
 *
 * Contains code for masonry initialization
 *
 */
 (function ($) {
     'use strict';

 	$(window).load(function(){

 		$('.masonry').masonry({
 			columnWidth: '.grid-sizer',
 			gutter: '.gutter-sizer',
 			itemSelector: '.item'
 		});

 	});
     
 }(jQuery));

