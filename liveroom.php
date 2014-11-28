<head>
	<meta charset="utf-8">
	<title>James Clifford - Freelance Engineer &amp; Developer</title>
	
	<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body {background-color:#432;color:#fff;font-family: 'Exo 2', sans-serif;font-weight: 200;}
		.clearfix{overflow: hidden;clear:both;}
		.borderR25 {border-top-left-radius: 25px;border-bottom-right-radius: 25px;}
		.borderR10 {border-top-left-radius: 10px;border-bottom-right-radius: 10px;}
		header {text-align: center;color:#fa7;
							background: -moz-linear-gradient(left,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.96) 47%, rgba(0,0,0,1) 49%, rgba(0,0,0,0) 100%); /* FF3.6+ */
							background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(0,0,0,0)), color-stop(47%,rgba(0,0,0,0.96)), color-stop(49%,rgba(0,0,0,1)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
							background: -webkit-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.96) 47%,rgba(0,0,0,1) 49%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
							background: -o-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.96) 47%,rgba(0,0,0,1) 49%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
							background: -ms-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.96) 47%,rgba(0,0,0,1) 49%,rgba(0,0,0,0) 100%); /* IE10+ */
							background: linear-gradient(to right,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.96) 47%,rgba(0,0,0,1) 49%,rgba(0,0,0,0) 100%); /* W3C */
							filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */}
		#content {padding:25px;}
		#productionDetails span,button {display:inline-block;margin:0 1%;width:31%;border:none;}
			#productionDetails button {background-color: #000;color:#555;font-size:1.5em;}
				#productionDetails button:after {content:'+';position: relative;float: right;}
		#songs .song{position:relative;
								background: -moz-linear-gradient(-45deg,  rgba(0,0,0,1) 0%, rgba(0,0,0,0) 65%, rgba(255,255,255,.2) 100%); /* FF3.6+ */
								background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(0,0,0,1)), color-stop(65%,rgba(0,0,0,0)), color-stop(100%,rgba(255,255,255,.2))); /* Chrome,Safari4+ */
								background: -webkit-linear-gradient(-45deg,  rgba(0,0,0,1) 0%,rgba(0,0,0,0) 65%,rgba(255,255,255,.2) 100%); /* Chrome10+,Safari5.1+ */
								background: -o-linear-gradient(-45deg,  rgba(0,0,0,1) 0%,rgba(0,0,0,0) 65%,rgba(255,255,255,.2) 100%); /* Opera 11.10+ */
								background: -ms-linear-gradient(-45deg,  rgba(0,0,0,1) 0%,rgba(0,0,0,0) 65%,rgba(255,255,255,.2) 100%); /* IE10+ */
								background: linear-gradient(135deg,  rgba(0,0,0,1) 0%,rgba(0,0,0,0) 65%,rgba(255,255,255,.2) 100%); /* W3C */
								filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */}
			#songs .song h3{margin:0;padding:15px;}
			#songs .song .songBars{margin:0;padding:0;float:left;position:relative;width:60%;}
				.songBars:hover {z-index:10;}
				.song .songBars .songBar {padding:10px 0 100px 0;}
			#songs .song label{position:relative;top:-25px;left:15px;}
				#songs progress {-webkit-appearance:none;appearance:none;width: 100%;height:30px;cursor:crosshair;}
					.player progress[value]::-webkit-progress-bar {background-color: #555;border-radius: 2px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;}
					.player progress[value]::-webkit-progress-value {background-color: red;border-radius: 2px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;}
					.sound progress[value]::-webkit-progress-bar {background-color: #555;border-radius: 2px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;}
					.sound progress[value]::-webkit-progress-value {background-color: green;border-radius: 2px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;}
					.lighting progress[value]::-webkit-progress-bar {background-color: #555;border-radius: 2px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;}
					.lighting progress[value]::-webkit-progress-value {background-color: orange;border-radius: 2px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;}
				.songBar .tags {position: relative;top:40px;}
					.songBar .tags .tag {-webkit-transform: rotate(30deg);display: inline-block;position: absolute;width:250px;}
					.songBar .tags .tag:before{content:'\\ ';}
					.songBar .tags .tag:hover{background-color:black;z-index: 5;}
					.songBar .tags .tag.suggestion {color:darkgrey;}
			#songs .song .songMeta{margin:0;padding:2%;float:right;position:relative;width:36%;height:65%;background-color: rgba(0,0,0,.7);}
			#songs .song .songMeta .songMessages h4{margin:5px 0;}
				#songs .song .songMessages .band:before{content:'band-';color:red;}
				#songs .song .songMessages .sound:before{content:'sound-';color:green;}
				#songs .song .songMessages .lighting:before{content:'lighting-';color:orange;}

		footer {background-color: #111;padding: none;margin:none;}
		footer *{display: inline-block;padding:10px 25px;}
	</style>

</head>
<body>
	<header>
		<div>
			<h1>Pre-production: The Live room</h1>
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
			<span>BAND:</span>
			<span>SOUND:</span>
			<span>LIGHTING:</span>
			<button id="band" class="profile borderR10">The JC band</button>
			<button id="sound" class="profile borderR10">JC audio services</button>
			<button id="lighting" class="profile borderR10">JC lighting services</button>
		</div>

		<div id="songs">
			<h3>Set List:</h3>
			<div class="song borderR25 clearfix">
				<h3>"Damn hippies"</h3>
				<div class="songBars">
					<div class="songBar player">
						<progress value="30" max="100"></progress>
						<label>band</label>
						<div class="tags">
							<span class="tag" style="left:1%">build</span>
							<span class="tag" style="left:11%">verse</span>
							<span class="tag" style="left:17%">pre-chorus</span>
							<span class="tag" style="left:26%">chorus</span>
							<span class="tag" style="left:32%">verse</span>
							<span class="tag" style="left:40%">chorus</span>
							<span class="tag" style="left:50%">chorus</span>
							<span class="tag" style="left:58%">bass drop</span>
							<span class="tag" style="left:60%">breakdown</span>
							<span class="tag" style="left:70%">chorus</span>
							<span class="tag" style="left:80%">chorus</span>
							<span class="tag" style="left:90%">outro</span>
						</div>
					</div>
					<div class="songBar sound">
						<progress value="30" max="100"></progress>
						<label>sound</label>
						<div class="tags">
							<span class="tag suggestion" style="left:1%">echo / thin intro</span>
							<span class="tag suggestion" style="left:11%">full sound in verse</span>
							<span class="tag suggestion" style="left:60%">drums up</span>
							<span class="tag suggestion" style="left:90%">extra reverb/effect</span>
						</div>
					</div>
					<div class="songBar lighting">
						<progress value="30" max="100"></progress>
						<label>lighting</label>
						<div class="tags">
							<span class="tag suggestion" style="left:1%">ambient opening</span>
							<span class="tag suggestion" style="left:11%">still verse</span>
							<span class="tag suggestion" style="left:80%">big moving lights</span>
							<span class="tag suggestion" style="left:90%">moody</span>
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
						<span class="band">Ok done. The suggestions are greyed out now but you can click them and "approve" to keep them, or edit them.</span><br>	
					</div>
				</div>
			</div>
			<div class="song">
				<h3>"Love the police"</h3>
				<div class="songBar player">
					<progress value="30" max="100"></progress>
				</div>
				<div class="songBar sound">
					<progress value="30" max="100"></progress>
				</div>
				<div class="songBar lighting">
					<progress value="30" max="100"></progress>
				</div>
			</div>
			<div class="song">
				<h3>"Get a job bum"</h3>
				<div class="songBar player">
					<progress value="30" max="100"></progress>
				</div>
				<div class="songBar sound">
					<progress value="30" max="100"></progress>
				</div>
				<div class="songBar lighting">
					<progress value="30" max="100"></progress>
				</div>
			</div>
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
		//make songs overlap by radius amount
		$.each($('#songs .song'),function(i,element){
			$(this).css('top',(25*(-i))+'px');
		});

		$(window).scroll(function(e){
			if ( $(window).scrollTop() > 1) {
				$('header').height('80px');
				$('header').css('overflow','hidden');
			} else {
				$('header').height('');
				$('header').css('overflow','');
			}
		});


	</script>

</body>