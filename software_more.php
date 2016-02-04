<?php
	
	include('php/main.php');
	$fromAjax=isAjax($_SERVER);
	//$settings = array('fullWidth'=>true, ...); //todojc
?>

<?php if (!$fromAjax) startPage(); ?>

	<!-- content -->
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
	<?php include('cases/visilit.php') ?>
	<?php include('cases/customking.php') ?>
	<?php include('cases/gigstarter.php') ?>
	<?php include('cases/loveandrobots.php') ?>
	
	<br><br>
	Ps. This is a great example of what's happening in the developer hiring scene at the moment. Well worth a read: <a href="http://www.jasonbock.net/jb/News/Item/7c334037d1a9437d9fa6506e2f35eaac" target="_blank">
If Carpenters Were Hired Like Programmers</a>

	<!-- end content -->
	<!--todojc
	<div id="contentSettings" style="display:none;">
		<?php //echo json_encode($settings); ?>
	<div>-->
					
<?php if (!$fromAjax) endPage(); ?>