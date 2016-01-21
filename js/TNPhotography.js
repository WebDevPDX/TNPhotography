$('body').append('<div class="lightBoxOverlay"></div>');
$('.lightBoxOverlay').css({
	'height':'100%',
	'width':'100%',
	'position':'fixed',
	'background-color':'rgba(0,0,0,.8)',
	'z-index':'5',
	'top':'50px',
	'display':'none',
});

// ==============================
// Scripts for page-home.php
// ==============================


// ==============================
// Scripts for single.php
// ==============================

$('.single-gallery').ready(function(){
	$('.single-gallery img').not('.avatar').addClass('col-xs-4').addClass('post-picture')
	$('.single-gallery img').not('.avatar').css({
		'padding':'0',
		'height': '200px'
	});
	$('.single-gallery hr').css({'clear':'both'});
	$('div#respond').css({'clear':'both'});

	$('.post-picture').click(function(){
		var imageSrc = ($(this).attr('src'));
		var imageHeight = $(window).innerHeight();
		console.log(imageSrc);
		$('.lightBoxOverlay').append('<div class="overlayImage"><img src="' + imageSrc + '"></div>');
		$('.overlayImage').css({
			'margin':'auto',
			'position':'relative'
		});
		$('.overlayImage img').css({
			'position':'absolute',
			'height' : imageHeight,
  			'left':'50%',
 			'transform': 'translateX(-50%)'
		});
		$('.lightBoxOverlay').fadeIn(800);
	});
	$('.lightBoxOverlay').click(function(){
		$('.lightBoxOverlay').fadeOut(800, function(){
			$('.lightBoxOverlay').empty();
		});

	});

});

// ==============================
// Scripts for index.php
// ==============================
