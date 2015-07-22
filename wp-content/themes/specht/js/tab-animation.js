( function( $ ) {

	$(function() {
	  var tabSelected = false;
	  $('.tabs-nav li').click(function(){

	    $(this).addClass('active');
	    var str = $(this).index();
	    if($('.tabs-container > div').eq(str)) {
	      $('.tabs-container > div').hide();
	      $('.tabs-container > div').eq(str).fadeIn(1000);
	    }
	  });
	  var $el, leftPos,
	      $tabsNav = $(".tabs-nav");

	  if(!tabSelected) {
	    tabSelected = $('.tabs-nav li.ui-tabs-active')
	    tabSelected.addClass('selected');
	  }
	  if($('.tabs-nav li#magic-line').length == 0) {
	    $tabsNav.append("<li id='magic-line'></li>");
	  }

	  $(".tabs-nav #magic-line").css({
	    left: tabSelected.position().left,
	    width: tabSelected.width()
	  }).data("origLeft", $("#magic-line").position().left);

	  $("ul.tabs-nav li").hover(function () {
	    $el = $(this);
	    width = $el.width();
	    $("ul.tabs-nav li#magic-line").css("width", width);
	    leftPos = $el.position().left;
	    $("ul.tabs-nav li#magic-line").css("left", leftPos);

	  }, 

	  function () {
	    $("ul.tabs-nav li#magic-line").css({
	      left: $(".selected").position().left,
	      width: $(".selected").width()
	    });
	  });

	  $('ul.tabs-nav li').click(function () {
	    $('ul.tabs-nav li').removeClass('selected');
	    tabSelected = $(this);
	    $(this).addClass('selected');
	  });
	});

	
} )( jQuery );
