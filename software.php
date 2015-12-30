<?php
	
	include('php/main.php');
	$fromAjax=isAjax($_SERVER);
	//$settings = array('fullWidth'=>true, ...); //todojc
?>

<?php if (!$fromAjax) startPage(); ?>

	<!-- content -->
	I build interactive web apps.<br><br>


	In college, I studied computer and electronic engineering.
	We covered a variety of coding languages and coding techniques.
	More importantly though, we were encouraged to think critically about what enables a computer to work.
	The difference and interaction between hardware, firmware and software is important to understand
	before one can really create any individual element safely.
	This knowledge makes the difference between creating something that just looks good and something that works as specified.
	The mathematical and logical background of my training allows for a more structured approach to projects.
	<br><br>
	In saying that, it's always good to be familiar with the individual tools needed to get carry a project to completion.
	So, from my work in college, I used C++, C# and Java coding languages in most of my major projects.
	I studied specific modules within the degree which create some relevance for the languages.
	These included:<br>
	<li>Object-Oriented Coding</li>
	<li>Project Management and Team-work for engineers</li>
	<li>Computer Vision and Augmented Reality (OpenCV)</li>
	<li>Digital Signal and Media Processing (MatLab)</li>
	<li>Universal Design</li>
	<br>
	From my work in VisiLit, I also used PHP, HTML5, CSS3 and Javascript coding languages with MySQL database management for the web development aspect of the project.
	VisiLit is an online 'Virtual Venue' for pre-production of events.
	Built in 3D using WebGL, we were able to create a fully working environment for people to design and plan their events.
	Using WebSockets, we also allowed our users to communicate and work as a team in real time.
	Any time someone made a change to the 3D event, the change happened on all team members' screens instantly.
	<br><br>
	This project entailed complex structures for users, teams, events, 3D graphics and communication in one web page.
	This was carried out by a team of developers over the duration of the project.
	I was responsible for the management and direction of the technical development whilst juggling the business aspects also.
	In the beginning and in the last six months or so of VisiLit's two year development, I was also the lead developer.
	In order to cut down on development time, we used some open source and premium frameworks.
	These included:
	<li>Three.JS - a 3D framework for using the Web Graphics Library</li>
	<li>Pusher - a WebSockets framework for real-time communication</li>
	<li>jQuery - a User Interface library for Javascript</li>
	<li>Laravel - an <span class="hasTitle" title="Model-View-Controller Design Pattern">MVC</span> server framework for PHP.</li>
	<br><br>
	CustomKing hired me to upgrade and maintain the T-Shirt Designer and website at <a href="customking.ie" target="_blank">customking.ie</a>.
	The technology included:
	<li>Raw PHP</li>
	<li>Javascript</li>
	<li>jQuery / FreeTrans</li>
	<li>CSS</li>
	<li>CentOS server administration and support</li>
	<br><br>
	GigStarter hired me to broaden the scope of their crowd funding platform for events and assist in event management at <a href="gigstarter.com" target="_blank">gigstarter.com</a>.
	These included:
	<li>FuelPHP - PHP framework</li>
	<li>HTML5 / JavaScript</li>
	<li>Bootstrap / CSS</li>
	<li>Linux server administration on Amazon Web Services (AWS).</li>
	<br><br>
	Love&Robots hired me to develop their interactive and personalised 3D printed products at <a href="loveandrobots.com" target="_blank">loveandrobots.com</a>.
	These included:
	<li>FuelPHP - PHP framework</li>
	<li>HTML5 / JavaScript</li>
	<li>Bootstrap / CSS</li>
	<li>Linux server administration on Amazon Web Services (AWS).</li>
	<br><br>
	Ps. This is a great example of what's happening in the developer hiring scene at the moment. Well worth a read: <a href="http://www.jasonbock.net/jb/News/Item/7c334037d1a9437d9fa6506e2f35eaac" target="_blank">
If Carpenters Were Hired Like Programmers</a>

	<!-- end content -->
	<!--todojc
	<div id="contentSettings" style="display:none;">
		<?php //echo json_encode($settings); ?>
	<div>-->
					
<?php if (!$fromAjax) endPage(); ?>