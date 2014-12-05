<head>
	<meta charset="utf-8">
	<title>James Clifford - Freelance Engineer &amp; Developer</title>
	
	<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
	<style type="text/css">
		/*globals*/
		.clearfix{overflow: hidden;clear:both;}
		.borderR25 {border-top-left-radius: 25px;border-bottom-right-radius: 25px;}
		.borderR10 {border-top-left-radius: 10px;border-bottom-right-radius: 10px;}
		.hidden{display: none;}
		.logo:before{content:'LIVE';color:red;font-weight:bold;}
		.logo:after{content:'ROOM';color:white;font-weight:bold;}
		/*specifics*/
		body {background-color:#432;color:#fff;font-family: 'Exo 2', sans-serif;font-weight: 200;}
		header {text-align: center;color:#ccc;height:300px;
							background: -moz-linear-gradient(left,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.96) 47%, rgba(0,0,0,1) 49%, rgba(0,0,0,0) 100%); /* FF3.6+ */
							background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(0,0,0,0)), color-stop(47%,rgba(0,0,0,0.96)), color-stop(49%,rgba(0,0,0,1)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
							background: -webkit-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.96) 47%,rgba(0,0,0,1) 49%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
							background: -o-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.96) 47%,rgba(0,0,0,1) 49%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
							background: -ms-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.96) 47%,rgba(0,0,0,1) 49%,rgba(0,0,0,0) 100%); /* IE10+ */
							background: linear-gradient(to right,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.96) 47%,rgba(0,0,0,1) 49%,rgba(0,0,0,0) 100%); /* W3C */
							filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */}
		#content {padding:25px;}
		#productionDetails span,button {display:inline-block;margin:0 1%;width:31%;border:none;}
			#productionDetails button {background-color: #000;color:#555;font-size:1.5em;cursor:pointer;}
				#productionDetails button:after {content:'+';position: relative;float: right;}
				#productionDetails button.active:after {content:'-';position: relative;float: right;}
			#productionDetails div {margin:25px;padding:10px;background-color: rgba(0,0,0,.4);}
		.songs .song{position:relative;
								background: -moz-linear-gradient(-45deg,  rgba(0,0,0,1) 0%, rgba(0,0,0,0) 65%, rgba(255,255,255,.2) 100%); /* FF3.6+ */
								background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(0,0,0,1)), color-stop(65%,rgba(0,0,0,0)), color-stop(100%,rgba(255,255,255,.2))); /* Chrome,Safari4+ */
								background: -webkit-linear-gradient(-45deg,  rgba(0,0,0,1) 0%,rgba(0,0,0,0) 65%,rgba(255,255,255,.2) 100%); /* Chrome10+,Safari5.1+ */
								background: -o-linear-gradient(-45deg,  rgba(0,0,0,1) 0%,rgba(0,0,0,0) 65%,rgba(255,255,255,.2) 100%); /* Opera 11.10+ */
								background: -ms-linear-gradient(-45deg,  rgba(0,0,0,1) 0%,rgba(0,0,0,0) 65%,rgba(255,255,255,.2) 100%); /* IE10+ */
								background: linear-gradient(135deg,  rgba(0,0,0,1) 0%,rgba(0,0,0,0) 65%,rgba(255,255,255,.2) 100%); /* W3C */
								filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */}
			.songs .song.collapsed{height:150px;overflow: hidden;}
			.songs .song.collapsed:before { content: '+'; padding: 50px; width: 100%;height: 100%;position: absolute;float: left;z-index: 6;top: 0;left: 0;display: inline-block;color:white;font-size: 3em;}
			.songs .song.collapsed:after { background: linear-gradient(to bottom, rgba(0,0,0,0), black);content: '';/* padding: 75px; */width: 100%;height: 100%;position: absolute;float: left;z-index: 5;top: 0;left: 0;display: inline-block;}
			.songs .song h3{margin:0;padding:15px;}
			.songs .song .songBars{margin:0;padding:0;float:left;position:relative;width:60%;}
				.songBars:hover {z-index:10;}
				.song .songBars .songBar {padding:10px 0 100px 0;}
				.song .songBars .songBar audio {width:100%;}
			.songs .song label{position:relative;top:-25px;left:15px;}
				.songs progress {-webkit-appearance:none;appearance:none;width: 100%;height:30px;cursor:crosshair;}
					.player progress[value]::-webkit-progress-bar {background-color: #555;border-radius: 2px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;}
					.player progress[value]::-webkit-progress-value {background-color: red;border-radius: 2px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;}
					.sound progress[value]::-webkit-progress-bar {background-color: #555;border-radius: 2px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;}
					.sound progress[value]::-webkit-progress-value {background-color: green;border-radius: 2px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;}
					.lighting progress[value]::-webkit-progress-bar {background-color: #555;border-radius: 2px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;}
					.lighting progress[value]::-webkit-progress-value {background-color: orange;border-radius: 2px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;}
				.songBar .tags {position: relative;top:40px;left:-20px;}
					.songBar .tags .tag {-webkit-transform: rotate(30deg);display: inline-block;position: absolute;width:250px;cursor:pointer;}
					.songBar .tags .tag:before{content:'\\ ';}
					.songBar .tags .tag:hover{background-color:black;z-index: 5;}
					.songBar .tags .tag.suggestion {color:darkgrey;}
					.songBar .tags .tag.query {color:red;}
					.songBar .tags .tag.new {color:lightblue;}
					.songBar .tags .tag.suggestion.approved {color:gold;}
			.songs .song .songMeta{margin:0;padding:2%;float:right;top:-25px;position:relative;width:36%;height:65%;background-color: rgba(0,0,0,.7);}
			.songs .song .songMeta .songMessages h4{margin:5px 0;}
				.songs .song .songMessages .band:before{content:'band-';color:red;}
				.songs .song .songMessages .sound:before{content:'sound-';color:green;}
				.songs .song .songMessages .lighting:before{content:'lighting-';color:orange;}
			.songs .song .songMeta .tagEditor button{display:inline-block; margin:5px;}


		footer {background-color: #111;padding: none;margin:none;}
		footer *{display: inline-block;padding:10px 25px;}
	</style>

</head>
<body>
	<header>
		<div>
			<h1>Pre-production: The <span class="logo"></span></h1>
			<h2>Get your shit together</h2>
			<h3>
				This is the place where you can create a better live show.<br>
				It's 2014 and we still can't sort out the disconnect<br>
				between band, sound and lighting.<br>
				Time to change.
			</h3>
			<h4>
				You don't even have to look at eachother<br>
				Don't worry!
			<h4>
		</div>
	</header>

	

	<div id="content">
		<div id="productionDetails">
			<span>EVENT:</span>
			<span>LOCATION:</span>
			<span>TIME:</span>
			<button id="event" class="profile borderR10">The Battle of the Bands</button>
			<button id="location" class="profile borderR10">Andorra,Dublin</button>
			<button id="date" class="profile borderR10">27th November</button>
			<div class="hidden event">This is the event profile:<br><br>yada yada...<br>maybe even a pic? website?</div>
			<div class="hidden location">This is the location profile:<br><br>yada yada...<br>maybe even a map? website?</div>
			<div class="hidden date">This is the date profile:<br><br>yada yada...<br>maybe even a calendar?</div>
			<span>BAND:</span>
			<span>SOUND:</span>
			<span>LIGHTING:</span>
			<button id="band" class="profile borderR10">The JC band</button>
			<button id="sound" class="profile borderR10">JC audio services</button>
			<button id="lighting" class="profile borderR10">JC lighting services</button>
			<div class="hidden band">This is the band profile:<br><br>yada yada...<br>maybe even a website? tech spec? image?</div>
			<div class="hidden sound">This is the sound engineer profile:<br><br>yada yada...<br>maybe even a website? talent portfolio?</div>
			<div class="hidden lighting">This is the lighting designer profile:<br><br>yada yada...<br>maybe even a website? talent portfolio?</div>
		</div>

		

		<div class="songs">
			<h3>Set List:</h3>
			<!--song1-->
			<div class="song borderR25 clearfix">
				<h3>"Love the Police"</h3>
				<div class="songBars">
					<div class="songBar player">
						<audio controls>
						  <source src="media/Come Together.mp3" type="audio/mpeg">
						Your browser does not support the audio element.
						</audio>
						<progress value="30" max="100"></progress>
						<label>band</label>
						<div class="tags">
							<span class="tag borderR10" style="left:1%">build</span>
							<span class="tag borderR10" style="left:11%">verse</span>
							<span class="tag borderR10" style="left:17%">pre-chorus</span>
							<span class="tag borderR10" style="left:26%">chorus</span>
							<span class="tag borderR10" style="left:32%">verse</span>
							<span class="tag borderR10" style="left:40%">chorus</span>
							<span class="tag borderR10" style="left:50%">chorus</span>
							<span class="tag borderR10" style="left:57%">bass drop</span>
							<span class="tag borderR10" style="left:60%">breakdown</span>
							<span class="tag borderR10" style="left:70%">chorus</span>
							<span class="tag borderR10" style="left:80%">chorus</span>
							<span class="tag borderR10" style="left:90%">outro</span>
						</div>
					</div>
					<div class="songBar sound">
						<progress value="30" max="100"></progress>
						<label>sound</label>
						<div class="tags">
							<span class="tag borderR10 suggestion" style="left:1%">echo / thin intro</span>
							<span class="tag borderR10 suggestion" style="left:11%">full sound in verse</span>
							<span class="tag borderR10 suggestion" style="left:60%">drums up</span>
							<span class="tag borderR10 suggestion" style="left:90%">extra reverb/effect</span>
						</div>
					</div>
					<div class="songBar lighting">
						<progress value="30" max="100"></progress>
						<label>lighting</label>
						<div class="tags">
							<span class="tag borderR10 suggestion" style="left:1%">ambient opening</span>
							<span class="tag borderR10 suggestion" style="left:11%">still verse</span>
							<span class="tag borderR10 suggestion" style="left:80%">big moving lights</span>
							<span class="tag borderR10 suggestion" style="left:90%">moody</span>
							<span class="tag borderR10 suggestion" style="left:99%">blackout</span>
						</div>
					</div>
				</div>
				<div class="songMeta borderR25">
					<div class="songMessages">
						<h4><u>Messages:</u></h4>
						<span class="band">Hey guys, this is my song</span><br>
						<span class="band">I've added the tags for when there are changes</span><br>
						<span class="sound">Nice one, I've had a listen. Good sound!</span><br>
						<span class="band">Yeah? thanks!</span><br>
						<span class="band">Do you want me to add suggestions for sound cues? Might help you recreate what has worked for us before.</span><br>
						<span class="sound">Perfect yeah, I'll take that and work from there.</span><br>
						<span class="band">No problem.</span><br>
						<span class="lighting">Hey! Nice song. Have you lighting cues too?</span><br>
						<span class="band">Sure lx.</span><br>	
						<span class="band">Ok done. Suggestions are greyed out but you can "approve" to keep or edit them by clicking on them.</span><br>	
					</div>
					<div class="tagEditor hidden">
						<h4><u>Tag editor:</u></h4>
						<span>name:</span><input type="text" class="nameInput"></input><br>
						<span>suggested: </span><input type="checkbox" class="suggestedInput"></input><br>
						<span>approved: </span><input type="checkbox" class="approvedInput"></input><br>
						<span>query: </span><input type="checkbox" class="queryInput"></input><br>
						<span>new: </span><input type="checkbox" class="newInput"></input><br>
						<br><br>
						<button class="tagConfirm">confirm</button>
						<button class="tagCancel">cancel</button>
					</div>
				</div>
			</div>
			<!--end song1-->
			<!--song 2-->
			<div class="song borderR25 clearfix">
				<h3>"Damn the Devil"</h3>
				<div class="songBars">
					<div class="songBar player">
						<audio controls>
						  <source src="media/Come Together.mp3" type="audio/mpeg">
						Your browser does not support the audio element.
						</audio>
						<progress value="30" max="100"></progress>
						<label>band</label>
						<div class="tags">
							<span class="tag borderR10" style="left:1%">build</span>
							<span class="tag borderR10" style="left:11%">verse</span>
							<span class="tag borderR10" style="left:17%">pre-chorus</span>
							<span class="tag borderR10" style="left:26%">chorus</span>
							<span class="tag borderR10" style="left:32%">verse</span>
							<span class="tag borderR10" style="left:40%">chorus</span>
							<span class="tag borderR10" style="left:50%">chorus</span>
							<span class="tag borderR10" style="left:57%">bass drop</span>
							<span class="tag borderR10" style="left:60%">breakdown</span>
							<span class="tag borderR10" style="left:70%">chorus</span>
							<span class="tag borderR10" style="left:80%">chorus</span>
							<span class="tag borderR10" style="left:90%">outro</span>
						</div>
					</div>
					<div class="songBar sound">
						<progress value="30" max="100"></progress>
						<label>sound</label>
						<div class="tags">
							<span class="tag borderR10 suggestion approved" style="left:1%">echo / thin intro</span>
							<span class="tag borderR10 suggestion approved" style="left:11%">full sound in verse</span>
							<span class="tag borderR10 new" style="left:32%">guitars back down in verse</span>
							<span class="tag borderR10 new" style="left:57%">mute group on vocal mics</span>
							<span class="tag borderR10 new" style="left:60%">no compressor on bass</span>
							<span class="tag borderR10 suggestion approved" style="left:63%">drums up</span>
							<span class="tag borderR10 suggestion approved" style="left:90%">extra reverb/effect</span>
						</div>
					</div>
					<div class="songBar lighting">
						<progress value="30" max="100"></progress>
						<label>lighting</label>
						<div class="tags">
							<span class="tag borderR10 suggestion approved" style="left:1%">ambient opening</span>
							<span class="tag borderR10 suggestion approved" style="left:11%">still verse</span>
							<span class="tag borderR10 suggestion approved" style="left:55%">blackout</span>
							<span class="tag borderR10 new" style="left:58%">strobe</span>
							<span class="tag borderR10 query" style="left:69%">focus on drums and bass</span>
							<span class="tag borderR10 suggestion approved" style="left:80%">big moving lights</span>
							<span class="tag borderR10 suggestion approved" style="left:90%">moody</span>
							<span class="tag borderR10 suggestion approved" style="left:99%">blackout</span>
						</div>
					</div>
				</div>
				<div class="songMeta borderR25">
					<div class="songMessages">
						<h4><u>Messages:</u></h4>
						<span class="band">Hey guys, I know this is the same song...</span><br>
						<span class="band">but I've added the tags again for you to approve</span><br>
						<span class="sound">Nice one, I've had a look.</span><br>
						<span class="lighting">Ok</span><br>
						<span class="sound">Done there now</span><br>
						<span class="sound">and I've added some ("new" blue) ones for myself</span><br>
						<span class="band">Great, that good</span><br>
						<span class="lighting">Approved mine as well</span><br>
						<span class="lighting">but I've have a question for you</span><br>
						<span class="lighting">See where the red "query" tag is?</span><br>
						<span class="lighting">Are you looking for follow spots?</span><br>
						<span class="lighting">They're unfortunately out of action in this venue</span><br>
						<span class="lighting">I can try and focus some moving heads there instead?</span><br>
						<span class="band">We usually use follow spots but yeah,</span><br>	
						<span class="band">movers pointing to the drummer and bassist will do fine</span><br>	
						<span class="lighting">I've also added strobe to the bass drop, for fun</span><br>
						<span class="band">Awesome</span><br>
					</div>
					<div class="tagEditor hidden">
						<h4><u>Tag editor:</u></h4>
						<span>name:</span><input type="text" class="nameInput"></input><br>
						<span>suggested: </span><input type="checkbox" class="suggestedInput"></input><br>
						<span>approved: </span><input type="checkbox" class="approvedInput"></input><br>
						<span>query: </span><input type="checkbox" class="queryInput"></input><br>
						<span>new: </span><input type="checkbox" class="newInput"></input><br>
						<br><br>
						<button class="tagConfirm">confirm</button>
						<button class="tagCancel">cancel</button>
					</div>
				</div>
			</div>
			<!--end song 2-->
			<!--song 3-->
			<div class="song borderR25 clearfix">
				<h3>"Song 3"</h3>
				<div class="songBars">
					<div class="songBar player">
						<audio controls>
						  <source src="media/Come Together.mp3" type="audio/mpeg">
						Your browser does not support the audio element.
						</audio>
						<progress value="30" max="100"></progress>
						<label>band</label>
						<div class="tags">
							<span class="tag borderR10" style="left:1%">build</span>
							<span class="tag borderR10" style="left:11%">verse</span>
							<span class="tag borderR10" style="left:17%">pre-chorus</span>
							<span class="tag borderR10" style="left:26%">chorus</span>
							<span class="tag borderR10" style="left:32%">verse</span>
							<span class="tag borderR10" style="left:40%">chorus</span>
							<span class="tag borderR10" style="left:50%">chorus</span>
							<span class="tag borderR10" style="left:58%">bass drop</span>
							<span class="tag borderR10" style="left:60%">breakdown</span>
							<span class="tag borderR10" style="left:70%">chorus</span>
							<span class="tag borderR10" style="left:80%">chorus</span>
							<span class="tag borderR10" style="left:90%">outro</span>
						</div>
					</div>
					<div class="songBar sound">
						<progress value="30" max="100"></progress>
						<label>sound</label>
						<div class="tags">
							<span class="tag borderR10 suggestion" style="left:1%">echo / thin intro</span>
							<span class="tag borderR10 suggestion" style="left:11%">full sound in verse</span>
							<span class="tag borderR10 suggestion" style="left:60%">drums up</span>
							<span class="tag borderR10 suggestion" style="left:90%">extra reverb/effect</span>
						</div>
					</div>
					<div class="songBar lighting">
						<progress value="30" max="100"></progress>
						<label>lighting</label>
						<div class="tags">
							<span class="tag borderR10 suggestion" style="left:1%">ambient opening</span>
							<span class="tag borderR10 suggestion" style="left:11%">still verse</span>
							<span class="tag borderR10 suggestion" style="left:80%">big moving lights</span>
							<span class="tag borderR10 suggestion" style="left:90%">moody</span>
							<span class="tag borderR10 suggestion" style="left:99%">blackout</span>
						</div>
					</div>
				</div>
				<div class="songMeta borderR25">
					<div class="songMessages">
						<h4><u>Messages:</u></h4>
						<span class="band">Hey guys, this is my song</span><br>
						<span class="band">I've added the tags for when there are changes</span><br>
						<span class="sound">Nice one, I've had a listen. Good sound!</span><br>
						<span class="band">Yeah? thanks!</span><br>
						<span class="band">Do you want me to add suggestions for sound cues? Might help you recreate what has worked for us before.</span><br>
						<span class="sound">Perfect yeah, I'll take that and work from there.</span><br>
						<span class="band">No problem.</span><br>
						<span class="lighting">Hey! Nice song. Have you lighting cues too?</span><br>
						<span class="band">Sure lx.</span><br>	
						<span class="band">Ok done. Suggestions are greyed out but you can "approve" to keep or edit them by clicking on them.</span><br>	
					</div>
					<div class="tagEditor hidden">
						<h4><u>Tag editor:</u></h4>
						<span>name:</span><input type="text" class="nameInput"></input><br>
						<span>suggested: </span><input type="checkbox" class="suggestedInput"></input><br>
						<span>approved: </span><input type="checkbox" class="approvedInput"></input><br>
						<span>query: </span><input type="checkbox" class="queryInput"></input><br>
						<span>new: </span><input type="checkbox" class="newInput"></input><br>
						<br><br>
						<button class="tagConfirm">confirm</button>
						<button class="tagCancel">cancel</button>
					</div>
				</div>
			</div>
			<!--end song 3-->
		</div>
	</div>

	<footer>
		<div class="links">
			<a href="/"><h2>JClifford</h2></a>|
			<a href="tour.php"><h3>Tour</h3></a>|
			<a href="contact.php"><h3>Contact</h3></a>
			<a href="contact.php"><h3>Terms, yada yada...</h3></a>

		</div>

		<!--todo media player here-->

		<div class="buttons">
			<!--<a href="https://twitter.com/jamescaudio" class="twitter-follow-button" data-show-count="false">Follow @jamescaudio</a>
			<br>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			<div class="fb-like" data-href="https://www.facebook.com/Visilit" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
			-->
			<a href="http://ie.linkedin.com/in/jcengineer" target="_blank	">
	        	<img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_myprofile_160x33.png" width="160" height="33" border="0" alt="View James Clifford's profile on LinkedIn">
	    	</a>
		</div>
	</footer>

	<!-- javascript -->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript">
		


		//if the window has been scrolled down a bit, hide the header
		var toggleHeaderHeight = function(){
			var doOnce = false;
			if ( $(window).scrollTop() > 20 && !doOnce) {
				$('header').css('overflow','hidden');
				$('header').finish().animate({height:80},500);
				doOnce = true;
			} /*else {
				$('header').css('overflow','');
				$('header').finish().animate({height:300},500);
			}*/
		};
		//do it per scroll
		$(window).scroll(function(e){ toggleHeaderHeight(); });
		//do on init also
		toggleHeaderHeight();

		//"collapse" all songs except one
		$.each($('.song'),function(i,el){if (i!=0) $(el).addClass('collapsed');});
		$('.songs').on('click','.collapsed',function(){
			$(this).removeClass('collapsed').siblings().addClass('collapsed');
		});

		//expand profiles of productionDetails
		$('#productionDetails button').click(function(){
			if (!$(this).hasClass('active')){
				$(this).addClass('active');
				$('#productionDetails div.'+$(this).attr('id')).removeClass('hidden').siblings('div').addClass('hidden');
			} else {
				$('#productionDetails div').addClass('hidden');
				$(this).removeClass('active');
			}
		});

		//edit tags!
		$(document).on('click','.tag',function(){
			//jQuery object variables
			var $element = $(this),
					$parentSong = $(".song").has($element),
					$matchingMetaArea = $parentSong.find('.songMeta'),
					$songMessages = $matchingMetaArea.find('.songMessages'),
					$tagEditor = $matchingMetaArea.find('.tagEditor');

			$tagEditor.removeClass('hidden').siblings().addClass('hidden');
			$tagEditor.find('.nameInput').val($element.text());
			$tagEditor.find('.suggestedInput').prop('checked',$element.hasClass('suggestion'));
			$tagEditor.find('.approvedInput').prop('checked',$element.hasClass('approved'));
			$tagEditor.find('.queryInput').prop('checked',$element.hasClass('query'));
			$tagEditor.find('.newInput').prop('checked',$element.hasClass('new'));
			//confirm/cancel edit, also close
			$tagEditor.on('click','button',function(e){
				var btn = e.target;
				console.log( 'tag fn:', $(btn).hasClass('tagConfirm'), $(btn).hasClass('tagCancel') );

				if ($(btn).hasClass('tagConfirm')){

					$element.text( $tagEditor.find('.nameInput').val() );
					if ($tagEditor.find('.suggestedInput').prop('checked'))$element.addClass('suggestion');
					else $element.removeClass('suggestion');
					if ($tagEditor.find('.approvedInput').prop('checked'))$element.addClass('approved');
					else $element.removeClass('approved');
					if ($tagEditor.find('.queryInput').prop('checked'))$element.addClass('query');
					else $element.removeClass('query');
					if ($tagEditor.find('.newInput').prop('checked'))$element.addClass('new');
					else $element.removeClass('new');

				} else if ($(btn).hasClass('tagCancel')){
					//cancel logic
					//ie. do nothing :)
				}


				$songMessages.removeClass('hidden').siblings().addClass('hidden');
			});
		});

		//create tags!
		$(document).on('click','progress',function(event,ui){
			//jQuery object variables
			var $progress = $(event.target);
					$barTags = $progress.siblings(".tags").children();
			
			var left=10;
			$barTags.last().after('<span class="tag borderR10" style="left:'+left+'%">tag-to-be-added</span>');

			var $element = $progress.siblings(".tags").children().last(),//new search
					$parentSong = $(".song").has($element),
					$matchingMetaArea = $parentSong.find('.songMeta'),
					$songMessages = $matchingMetaArea.find('.songMessages'),
					$tagEditor = $matchingMetaArea.find('.tagEditor');

			$tagEditor.removeClass('hidden').siblings().addClass('hidden');
			$tagEditor.find('.nameInput').val('');
			$tagEditor.find('.nameInput').attr('placeholder','Describe the tag here!');
			$tagEditor.find('.suggestedInput').prop('checked',false );
			$tagEditor.find('.approvedInput').prop('checked',false );
			$tagEditor.find('.queryInput').prop('checked',false );
			$tagEditor.find('.newInput').prop('checked',true );
			//confirm/cancel edit, also close
			$tagEditor.on('click','button',function(e){
				var btn = e.target;

				if ($(btn).hasClass('tagConfirm')){
					$element.text( $tagEditor.find('.nameInput').val() );
					if ($tagEditor.find('.suggestedInput').prop('checked'))$element.addClass('suggestion');
					if ($tagEditor.find('.approvedInput').prop('checked'))$element.addClass('approved');
					if ($tagEditor.find('.queryInput').prop('checked'))$element.addClass('query');
					if ($tagEditor.find('.newInput').prop('checked'))$element.addClass('new');
				} else if ($(btn).hasClass('tagCancel')){
					//cancel logic => delete it again
					$element.remove();
				}


				$songMessages.removeClass('hidden').siblings().addClass('hidden');
			});
		});

		//audio player
		
	</script>

</body>