var tour = (function(){
	
	//private variables
	var imageStepTime = 4000,//time to stay on an image
		descriptionStepTime = 10000,//time to stay on a category description
		parentElement = {},//jQuery element of currentStep
		currStep = {},//jQuery element of currentStep
		pauseTimeLeft = 0,//if paused, time left after continue
		otherPrivateVars;

	//public variables (in return array below)
	var publicVars;

	//private functions
	var stepForward = function(){
		//get next element from the next element to the current, within the parent
		//find it's type
		//if type==image, open image
		//if type==category span, go to category description
	};
	var stepBackwards = function(){

	};

	var start = function(parent){
		//scroll to index description
		//animate the reading
		//
	};

	//public functions (in return array below)
	var start = function(){
		//scroll to first step, the index description
		//animate the reading
		//
		console.log('here');
		alert("This tour isn't quite ready yet, sorry.");
	};
	var playPause = function(play){
		//if pause (play==false)
		//stop current animation
		//save the time left in animation

		//if play start new animation, with timeleft
	};
	var stop = function(){

	};
	var fastForward = function(){

	};
	var rewind = function(){

	};

	return {
		start:start,
		playPause:playPause,
		stop:stop,
		fastForward:fastForward,
		rewind:rewind
	};
})();