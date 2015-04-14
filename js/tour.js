var tour = (function(){
	
	//private variables
	var imageStepTime = 4000,//time to stay on an image
		descriptionStepTime = 10000,//time to stay on a category description
		parentElement = {},//jQuery element of currentStep
		currStep = {},//jQuery element of currentStep
		steps = [],
		pauseTimeLeft = 0,//if paused, time left after continue
		playing = false,//if paused, time left after continue
		playIsRestart = false,
		otherPrivateVars;

	//public variables (in return array below)
	var publicVars;

	//private functions
	var stepForward = function(){
		//get next element relative to the current, within the parent
		var index = steps.indexOf(currentStep) + 1;
		stepTo(steps[index]);
	};
	var stepBackwards = function(){
		//get previous element relative to the current, within the parent

	};
	//main function to carry out animation/click logic
	var stepTo = function( step ){
		//find it's type
		//if type==image, open image
		//if type==category span, go to category description
		if ( step.type == "image" ){
			$('body').animate({scrollTop:$(step.target).offset().top-200}, time, function(){
				$(step.target).click();
			});
		}
	};

	//public functions (in return array below)

	//steps should be an array of objects with properties of:
	//element (string or jQuery object), animationTime, type and optionally: scrollToRead, 
	var setSteps = function(newSteps){
		if ( typeof newSteps == 'array'){
			steps = [];
			for (var i = newSteps.length - 1; i >= 0; i--) {
				steps.push( newSteps[i] );
			};
		}
	};

	var start = function(config, scope){
		if (playing != true && playIsRestart != true){
			console.log(config);
			if (config) {
				if (config.steps) setSteps(config.steps);
			}
			//scroll to first step, the index description
			//animate the reading
			currentStep = {
				target:scope,

			};
			//save current step as first and also the last step to be returned to
			steps.push(currentStep);
			steps.unshift(currentStep);
			stepForward();	
		}
	}

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