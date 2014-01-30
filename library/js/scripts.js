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
			return 'http://turkgif.com/page/' + i + '/?inf=1';
		}
	}, function(newElements, data, url) {
		history.pushState(null, null, '/page/' + currentPageNumber + '/');

		if (currentPageNumber > 1) {
			ga('send', 'pageview', '/page/' + currentPageNumber + '/');
		};
		
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
 
 	//social lazy load
 	Socialite.setup({
	    facebook: {
	        lang     : 'tr_TR',
	        appId    : 409586202501141,
	        onlike   : function(url) { /* ... */ },
	        onunlike : function(url) { /* ... */ }
	    },
	    twitter: {
	        lang       : 'tr',
	        onclick    : function(e) { /* ... */ },
	        onfollow   : function(e) { /* ... */ }
	    }
	});

 	$('body').delegate('.like-container, .tweet-container', 'mouseover', function () {
		Socialite.load($(this)[0]);
 	});



}); /* end of as page load scripts */