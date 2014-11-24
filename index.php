<?php
	
	include('php/main.php');
	//if ajax call, return the content, not the full page
	//as it already exists on the page where the request came from
	$fromAjax=isAjax($_SERVER);
	
?>

<?php if (!$fromAjax) startPage(); ?>

					<!-- content -->
					Welcome to JClifford.ie. Here, I hope to showcase some of my skills and hopefully spark some interest in you.
					I am based in Dublin, Ireland where I work with some fantastic clients to assist them develop their businesses.
					The products and services I help to develop are usually technology based.
					This is largely due to my degree in Computer and Electronic Engineering from Trinity College Dublin.
					<br><br>
					My background as an engineer has given me the opportunity to work on complex and challenging problems on a daily basis.
					Fixing things is a passion of mine. It always has and hopefully always will.
					As you'll see, my interests span to many interesting projects that I can get involved in, from carpentry to lighting designer for dance shows.
					<br><br>
					For a lot of my clients, this broad skill set allows me to approach work from a variety of angles.
					Though the tech stuff is ever-changing and generally complex, no one should hesitate to use it to their best advantage.
					However, ensuring that the technology doesn't dictate or hinder the growth of business is the primary concern.
					Cost-effective solutions to secure new business is the obvious choice.
					That's where my experience with start ups and other business gives me insight into how technology can be correctly implemented.
					<br><br>I hope you enjoy this website. Please take a good look around and drop me a message if you want to get in contact.
					<br><br>Thanks,<br>
					James
					<!-- end content -->

<?php if (!$fromAjax) endPage(); ?>
