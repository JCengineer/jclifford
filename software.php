<?php
	
	include('php/main.php');
	$fromAjax=isAjax($_SERVER);
	//$settings = array('fullWidth'=>true, ...); //todojc
?>

<?php if (!$fromAjax) startPage(); ?>

	<!-- content -->
	I build interactive websites and web applications.
	<br><br>
	I am an end-to-end developer, meaning I am involved in all aspects of web development from web-design to servers and databases.
	I specialise in 3D and media processing applications. For an example, see my <a href="/examples/3dhead.html" target="_blank">head in 3D</a>!
	<br>
	<br>
	<h2>Some buzzwords:</h2>
	<span class="secondary">(a glossary of things I have experience using)</span>
	<br>
	<br>


	<b>Javascript</b><br>
	<span class="secondary">client-side logic (how your website makes decisions within your web browser)</span>
	<li>jQuery - a User Interface library for Javascript</li>
	<li>Three.JS - a 3D framework for creating amazing 3D worlds using the Web Graphics Library, WebGL</li>
	<li>Fabric.js - a 2D canvas framework for making art easy using the HTML canvas</li>
	<li>Pusher - a WebSockets framework for real-time communication</li>
	<br>

	<b>HTML5</b><br>
	<span class="secondary">The modern version of the markup language for defining information on a webpage</span>
	<br>
	<b>CSS</b><br>
	<span class="secondary">how the look and feel of the website is defined</span>
	<li>SASS - a clever way to speed up and organise CSS</li>
	<li>Bootstrap - a layout framework for styling</li>
	<br>

	<b>Ruby</b><br>
	<span class="secondary">server-side logic (how your website's information is served and how it can recall things from a database)</span>
	<li>Ruby on Rails - an <span class="hasTitle" title="Model-View-Controller Design Pattern">MVC</span> server framework for Rails</li>
	<br>

	<b>PHP</b><br>
	<span class="secondary">server-side logic (how your website's information is served and how it can recall things from a database)</span>
	<li>Laravel - an <span class="hasTitle" title="Model-View-Controller Design Pattern">MVC</span> server framework for PHP</li>
	<li>FuelPHP - another PHP framework</li>
	<br>

	<b>Web Hosting</b><br>
	<li>VPC by Amazon Web Services (AWS) and Microsoft Azure</li>
	<li>Linux (Ubuntu and CentOS) server administration on dedicated and servers</li>
	<br>
	
	<span class="secondary">with a focus on</span>
	<li>Mobile-ready responsive web design</li>
	<li>Object-Oriented Programming</li>
	<li>Relational databases</li>
	<li>High user engagement</li>
	<li>High performance</li>
	<li>Measurements, tracking and analytics</li>
	<li>Universal Design</li>
	<li>Project management and team-work</li>
	<br>
	<br>
	<a href="software_more.php" class="callToAction secondary">Read more...</a>
	<br>
	<br>
	Ps. This is a great example of what's happening in the developer hiring scene at the moment. Well worth a read: <a href="http://www.jasonbock.net/jb/News/Item/7c334037d1a9437d9fa6506e2f35eaac" target="_blank">
If Carpenters Were Hired Like Programmers</a>

	<!-- end content -->
	<!--todojc
	<div id="contentSettings" style="display:none;">
		<?php //echo json_encode($settings); ?>
	<div>-->
					
<?php if (!$fromAjax) endPage(); ?>