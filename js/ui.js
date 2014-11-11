
window.onload = function(){
	document.body.style.backgroundImage="url('media/road-dark-gradient-black.jpg')";
	

	$('a').click(function(e){
		e.preventDefault();

		var id=$(this).attr('id'), href=$(this).attr('href');
		$.post(href,{}).done(function(result){
			console.log(result);
			$('#contentMain').animate({opacity:0},1000,function(){
				$('#contentMain').html(result);
				$('#contentMain').animate({opacity:1},1000);
			});
		}).error(function(){
			alert('oops, missed a link..');
		});
	});
};
