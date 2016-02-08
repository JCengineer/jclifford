<?php
	
	include('php/main.php');
	//if ajax call, return the content, not the full page
	//as it already exists on the page where the request came from
	$fromAjax=isAjax($_SERVER);
	
?>

<?php if (!$fromAjax) startPage(); ?>

<!-- content -->
Hi,
<br>
My name is James!
<br>
I am based in Dublin, Ireland where I work with some fantastic clients to assist them in developing their businesses.
<br><br>
The products and services I help to develop are usually technology based,
largely due to my experience in computer and electronic engineering and building interactive web applications.
<br><br>
<h3>Clients:</h3>
<a href="cases/loveandrobots.php"><img src="media/clients/lar-no-heart.svg" alt="Love and Robots" style="background:#f7f7f7;"></a>
<br><br>
<li class="secondary">Customisation tools for the manipulation of 3D objects within a web browser for 3d printing by Love&Robots.</li>
<li class="secondary">Included continuous improvement of an eCommerce website built in Ruby on Rails. <a href="cases/loveandrobots.php">Read more...</a></li>

<a href="cases/customking.php"><img src="media/clients/customking.svg" alt="CustomKing"></a>
<li class="secondary">T-Shirt designer app with live preview within a web browser.</li>
<li class="secondary">Included a crowd-funding service to allow individual pre-payment of group clothing orders prior to manufacturing by CustomKing. <a href="cases/customking.php">Read more...</a></li>

<a href="cases/gigstarter.php"><img src="media/clients/gigstarter.png" alt="GigStarter"></a>
<li class="secondary">Crowd Funding and event tour prediction app for GigStarter.</li>
<li class="secondary">Included a viral networking tool to empower an audience to earn rewards for each ticket they sold to their network. <a href="cases/gigstarter.php">Read more...</a></li>

<a href="cases/visilit.php"><img src="media/clients/visilit.png" alt="Visilit"></a>
<li class="secondary">3D event planner/designer with live preview to enable event professionals to preview and plan in a virtual venue.</li>
<li class="secondary">Included a collaboration system where an international team could communicate and preview eachother's work in venue together whilst being miles apart. <a href="cases/visilit.php">Read more...</a></li>

<br><br>
My experience with start ups and other businesses gives me insight into how technology can be effectively implemented.
<br class="ifSmall"><br class="ifSmall">
For a lot of my clients, this broad skill set allows me to approach work from an end to end perspective and solve problems from all angles.
<br class="ifSmall"><br class="ifSmall">
Fixing things is a passion of mine.
As an engineer, I have the opportunity to fix complex and challenging problems on a daily basis.
<br><br>
I hope you enjoy this website. Please <a href="contact.php">get in contact</a> if you have something that needs fixing!
<br><br>Thanks,<br>
James
<!-- end content -->

<?php if (!$fromAjax) endPage(); ?>
