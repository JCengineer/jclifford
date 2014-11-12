var urlHistory = [];
var hotButton = undefined, hotHistory = undefined;

window.onload = function(){
	document.body.style.backgroundImage="url('media/road-dark-gradient-black.jpg')";

	$('a').click(function(e){
		e.preventDefault();

		//if already pressed, don't repeat
		if ($(this).children().hasClass('highlight')) return false;

		$('.menu .panel').removeClass('highlight');
		$(this).children().addClass('highlight');
		hotButton = this; 
		getContent($(this).attr('href'));
		
	});//a click end

	function getContent(href){

		//there's an option to do the opacity animation here and 
		//have the content loading in parallel to improve performance
		//more awkward if the request is unsuccessful so maybe later..

		//get the content from the server
		$.post(href,{}).done(function(result){
						
			$('#contentMain').animate({opacity:0},1000,function(){
				$('#contentMain').html(result);
				$('#contentMain').animate({opacity:1},1000);
				$('body').animate({scrollTop:$('#contentMain').offset().top-200}, 1000);
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
