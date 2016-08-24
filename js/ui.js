
window.onload = function(){
	//big concept image
	//document.body.style.backgroundImage="url('media/road-dark-gradient-black.jpg')";
	
	//for each image, load the images from predefined image tags
	$('#galleryscroller div.image').each(function(i,el){
		var $el = $(el);
		$el.attr('style',$el.attr('image'));
	});
	//gallery fullscreen plugin
	$('#galleryscroller').magnificPopup({
		delegate: 'div',
		type: 'image',
		gallery:{enabled:true}
	});
};




/*window.onresize = function(){
	//update the background image on body
};*/

//GALLERY
//scroller + icons appear/not
$('#galleryscroller').on('scroll',function(){
	var w = 0;
	$.each($(this).children() , function(i,c){
		w+=$(c).width();
	});
	if ($(this).scrollLeft() > ( w - $(this).outerWidth()) ){
		//scrolled to max right
		$('#gallery span.gradient.right').hide();
	} else {
		$('#gallery span.gradient.right').show();
	}
	if ($(this).scrollLeft() <= 0 ){
		//scrolled to max left
		$('#gallery span.gradient.left').hide();
	} else {
		$('#gallery span.gradient.left').show();
	}
});
//click more images
$('#gallery span.gradient').click(function(e,ui){
	e.preventDefault();

	if ($(this).hasClass('left') ){//scroll left
		$('#galleryscroller').animate({scrollLeft: $('#galleryscroller').scrollLeft() - 500}, 500 );
	} else {//scroll right
		$('#galleryscroller').animate({scrollLeft: $('#galleryscroller').scrollLeft() + 500 }, 500);
	}
});


window.onSetContent = function(href){
	var time=1000, $contentMain = $('#contentMain');
	$('body').animate({scrollTop:$contentMain.offset().top-50}, time, function(){
		//animate the relevant gallery images into view, nice
		if ($('div[data-forlink="'+href+'"]').length > 0){
			var offsetY = ($('div[data-forlink="'+href+'"]').offset().left - $('#galleryscroller').children().first().offset().left - 100);
			$('#galleryscroller').animate({scrollLeft:offsetY}, time);
		}else $('#galleryscroller').animate({scrollLeft:0}, time);
	});
	$contentMain.append('<div style="text-align:center;margin-top:25px;"><a href="contact.php" class="callToAction addJames">Contact James</a></div>');
};