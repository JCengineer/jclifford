var urlHistory = [];
var hotButton = undefined, hotHistory = undefined, loading=true;

$(document).on('click','a',function(e){
	var href = $(this).attr('href');
	var blank = $(this).attr('target') == "_blank";

	if (blank) return true;
	e.preventDefault();
	//if tour button, start tour
	if (href == "tour.php") alert("Sorry, this feature hasn't been completed yet. I've been busy!");//return tour.start( {steps:[{target:'#gallery img:first',type:'image',animationTime:1000}]}, this);
	//if already pressed, don't repeat
	if ($(this).children().hasClass('highlight')) return false;
	$('.menu .panel').removeClass('highlight');
	$(this).children().addClass('highlight');

	hotButton = this; 
	getContent(href);

});//a click end

function getContent(href, time){
	if (!time) time = time;
	var $contentMain = $('#contentMain');
	//there's an option to do the opacity animation here and 
	//have the content loading in parallel to improve performance
	//we'll try now: need these to figure out whether the request or animation finish first
	var resultRecieved=false, animationDone=false, asyncResult="";
	setContent = function(result){

		//set content to new html
		$contentMain.html(result);
		$contentMain.animate({opacity:1},1000);

		
		//animate the content into view
		//debatable whether people like it or not...
		//$('body').animate({scrollTop:$('#contentMain').offset().top-200}, 1000);

		
		if (window.onSetContent) window.onSetContent(href);
		//animate the content into view
		//debatable whether people like it or not...
		
	};

	$contentMain.animate({opacity:0},time,function(){
		//if the result is already done, set content
		if (resultRecieved) setContent(asyncResult);
		//else wait until the result is recieved
		else {
			animationDone = true;
			$contentMain.animate({opacity:1},time);
			$contentMain.html('<div style="text-align:center;margin-top:25px;"><img style="width:70px;" src="media/loading.gif" alt="loading..." /></div>');
		}
	});
	

	//get the content from the server
	$.post(href,{}).done(function(result){

		if (result=="") return false;
		
		//$contentMain.animate({opacity:0},time,function(){
			//set content to new html
			//if the animation is complete, set content
			if (animationDone) setContent(result);
			//else  wait until the animation is done
			else {
				resultRecieved = true;
				asyncResult = result;
			}
			
			
		//});

		//track page urls, for window.onhashchange later
		//except when history calls this itself
		var currHash = location.hash.length>0?location.hash.substring(1):'index.php';
		if (!hotHistory) urlHistory.push( currHash );
		
		//console.log(href, "gives",result, "history",urlHistory);
		
		//change page url
		//window.location.href = "#!"+href;
		location.hash = (href!='index.php'?href:'');

	}).error(function(){
		alert('oops, missed a link..');
	});
};


window.onhashchange = function(){
	//don't repeat yourself
	if (hotButton) { hotButton = undefined; hotHistory = undefined;return;}
	
	//console.log(location.hash, urlHistory);
	if (location.hash.length > 0 && urlHistory.length > 0) {        

		hotHistory = urlHistory.pop();
    	getContent(hotHistory);
        
        $('.menu .panel').removeClass('highlight');
    	$('.menu a[href="'+hotHistory+'"] .panel').addClass('highlight');

    } else {
        getContent('index.php');

        $('.menu .panel').removeClass('highlight');
    }
    
};


//if reload page with hash val, get that content
if (location.hash.length>0){
	var href = location.hash.substring(1);
	if ( $('a[href="'+href+'"]').length > 0 ){
		$('a[href="'+href+'"]').children().addClass('highlight');
	}
	getContent(href);
}