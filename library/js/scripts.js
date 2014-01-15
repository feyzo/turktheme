/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/
 
// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
	window.getComputedStyle = function(el, pseudo) {
		this.el = el;
		this.getPropertyValue = function(prop) {
			var re = /(\-([a-z]){1})/g;
			if (prop == 'float') prop = 'styleFloat';
			if (re.test(prop)) {
				prop = prop.replace(re, function () {
					return arguments[2].toUpperCase();
				});
			}
			return el.currentStyle[prop] ? el.currentStyle[prop] : null;
		}
		return this;
	}
}

(function($){ 

    /**
     * Copyright 2012, Digital Fusion
     * Licensed under the MIT license.
     * http://teamdf.com/jquery-plugins/license/
     *
     * @author Sam Sehnert
     * @desc A small plugin that checks whether elements are within
     *       the user visible viewport of a web browser.
     *       only accounts for vertical position, not horizontal.
     */
    $.fn.visible = function(partial,hidden,direction){

        var $t              = $(this).eq(0),
            t               = $t.get(0),
            $w              = $(window),
            viewTop         = $w.scrollTop(),
            viewBottom      = viewTop + $w.height(),
            viewLeft        = $w.scrollLeft(),
            viewRight       = viewLeft + $w.width(),
            _top            = $t.offset().top,
            _bottom         = _top + $t.height(),
            _left           = $t.offset().left,
            _right          = _left + $t.width(),
            compareTop      = partial === true ? _bottom : _top,
            compareBottom   = partial === true ? _top : _bottom,
            compareLeft     = partial === true ? _right : _left,
            compareRight    = partial === true ? _left : _right,
            clientSize      = hidden === true ? t.offsetWidth * t.offsetHeight : true,
            direction       = (direction) ? direction : 'both';

        if(direction === 'both')
            return !!clientSize && ((compareBottom <= viewBottom) && (compareTop >= viewTop)) && ((compareRight <= viewRight) && (compareLeft >= viewLeft));
        else if(direction === 'vertical')
            return !!clientSize && ((compareBottom <= viewBottom) && (compareTop >= viewTop));
        else if(direction === 'horizontal')
            return !!clientSize && ((compareRight <= viewRight) && (compareLeft >= viewLeft));
    };

})(jQuery);

var maxPageNumber = parseInt($('a.page-numbers:not(.next):last').html()),
currentPageNumber = parseInt($('.page-numbers.current').html());

// as the page loads, call these scripts
jQuery(document).ready(function($) {

	/*
	Responsive jQuery is a tricky thing.
	There's a bunch of different ways to handle
	it, so be sure to research and find the one
	that works for you best.
	*/
	
	/* getting viewport width */
	var responsive_viewport = $(window).width();
	
	/* if is below 481px */
	if (responsive_viewport < 481) {
	
	} /* end smallest screen */
	
	/* if is larger than 481px */
	if (responsive_viewport > 481) {
	
	} /* end larger than 481px */
	
	/* if is above or equal to 768px */
	if (responsive_viewport >= 768) {

	}
	
	/* off the bat large screen actions */
	if (responsive_viewport > 1030) {
	
	}
	
	setTimeout(function () {
        window.scrollTo(0, 1);
    }, 0);

	// add all your scripts here
	$("#more-tags").on("click", function() {
		$("#more-tags-area").toggleClass("open");
	});

	//infinite scroll
	$('.pagination').hide();

	$('.pagination a').each(function (i, val) {
		var pageLink = $(val);

		pageLink.attr('href', pageLink.attr('href') + '?inf=1');
	});

	$('#main').infinitescroll({
		loading: {
			msgText: "Yeni gifler yükleniyor...",
			finishedMsg: "Başka gifimiz kalmadı.",
			selector: '#main'
		},
		state: {
			currPage: currentPageNumber
		},
		nextSelector: ".next",
		navSelector: ".pagination",
		itemSelector: "article",
		debug: false,
		behavior: "",
		callback: "",
		bufferPx: 600,
		maxPage: maxPageNumber,
		path: function (i) {
			return 'page/' + i + '/';
		}
	}, function(newElements, data, url) {
		currentPageNumber++;
	});
	//infinite scroll

	//menu scroll
	var header = $('.header');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            header.addClass("small");
        } else {
            header.removeClass("small");
        }
    });

    $(".goup").on("click", function() {
		$('html, body').animate({scrollTop: 0}, 500);
	});
      

	//menu scroll
 
}); /* end of as page load scripts */

/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
	var doc = w.document;
	if( !doc.querySelector ){ return; }
	var meta = doc.querySelector( "meta[name=viewport]" ),
		initialContent = meta && meta.getAttribute( "content" ),
		disabledZoom = initialContent + ",maximum-scale=1",
		enabledZoom = initialContent + ",maximum-scale=10",
		enabled = true,
		x, y, z, aig;
	if( !meta ){ return; }
	function restoreZoom(){
		meta.setAttribute( "content", enabledZoom );
		enabled = true; }
	function disableZoom(){
		meta.setAttribute( "content", disabledZoom );
		enabled = false; }
	function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
		if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );