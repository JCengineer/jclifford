var urlHistory = [];
var hotButton = undefined, hotHistory = undefined;

window.onload = function(){
	//big concept image
	document.body.style.backgroundImage="url('media/road-dark-gradient-black.jpg')";

	//if reload page with hash val, get that content
	if (location.hash.length>0){
		var href = location.hash.substring(1);
		if ( $('a[href="'+href+'"]').length > 0 ){
			$('a[href="'+href+'"]').children().addClass('highlight');
			getContent(href);
		}
	}

	//gallery fullscreen plugin
	$('#galleryscroller').magnificPopup({
		delegate: 'div',
		type: 'image',
		gallery:{enabled:true}
	});

	$('a').click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		//if tour button, start tour
		if (href == "tour.php") return tour.start( $('#gallery') );
		//if already pressed, don't repeat
		if ($(this).children().hasClass('highlight')) return false;
		$('.menu .panel').removeClass('highlight');
		$(this).children().addClass('highlight');

		hotButton = this; 
		getContent(href);
	
	});//a click end

	function getContent(href){

		//there's an option to do the opacity animation here and 
		//have the content loading in parallel to improve performance
		//more awkward if the request is unsuccessful so maybe later..

		//get the content from the server
		$.post(href,{}).done(function(result){
						
			$('#contentMain').animate({opacity:0},1000,function(){
				//set content to new html
				$('#contentMain').html(result);
				$('#contentMain').animate({opacity:1},1000);
				
				//animate the content into view
				//debatable whether people like it or not...
				//$('body').animate({scrollTop:$('#contentMain').offset().top-200}, 1000);
				//animate the relevant gallery images into view, nice
				if ($('span[data-forlink="'+href+'"]').length > 0){
					var offsetY = ($('span[data-forlink="'+href+'"]').offset().left - $('#galleryscroller').children().first().offset().left);
					$('#galleryscroller').animate({scrollLeft:offsetY}, 1000);
				}
				
			});

			//track page urls, for window.onhashchange later
			//except when history calls this itself
			var currHash = location.hash.length>0?location.hash.substring(1):'index.php';
			if (!hotHistory) urlHistory.push( currHash );
			
			console.log(href, "gives",result, "history",urlHistory);
			
			//change page url
			//window.location.href = "#!"+href;
			location.hash = href;

		}).error(function(){
			alert('oops, missed a link..');
		});
	}


	window.onhashchange = function(){
		//don't repeat yourself
		if (hotButton) { hotButton = undefined; hotHistory = undefined;return;}
		
		console.log(location.hash, urlHistory);
		if (location.hash.length > 0 && urlHistory.length > 0) {        

			hotHistory = urlHistory.pop();
        	getContent(hotHistory);
	        
	        $('.menu .panel').removeClass('highlight');
        	$('.menu a[href="'+hotHistory+'"] .panel').addClass('highlight');
	
	    } else {
	        getContent('index.php');
	
	        $('.menu .panel').removeClass('highlight');
	    }
	    
	}

	window.onresize = function(){
		//update the background image on body
	}
};
