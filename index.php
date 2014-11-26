<?php
	
	include('php/main.php');
	//if ajax call, return the content, not the full page
	//as it already exists on the page where the request came from
	$fromAjax=isAjax($_SERVER);
	
?>

<?php if (!$fromAjax) startPage(); ?>

<!-- content -->
Welcome to JClifford.ie. Here, I showcase some of my skills and the ways 
in which I can help solve your technology and business problems.
I am based in Dublin, Ireland where I work with some fantastic clients to assist them in developing their businesses.
The products and services I help to develop are usually technology based,
largely due to my degree in Computer and Electronic Engineering from Trinity College Dublin.
<br><br>
Fixing things is a passion of mine.
As an engineer, I have the opportunity to work on complex and challenging problems on a daily basis.
You will see that my interests span to many interesting projects that I can get involved in, from carpentry to lighting design for dance shows.
<br><br>
Though the tech space is ever-changing and generally complex, no one should hesitate to use it to their best advantage.
However, ensuring that the technology doesn't dictate or hinder the growth of business is of primary concern.
Cost-effective solutions to secure new business is the obvious choice.
<br><br>
That's where my experience with start ups and other businesses gives me insight into how technology can be effectively implemented.
For a lot of my clients, this broad skill set allows me to approach work from an end to end perspective and solve problems from a number of angles.
<br><br>
I hope you enjoy this website. Please take a good look around and drop me a message if you want to get in contact about a project.
<br><br>Thanks,<br>
James
<!-- end content -->

<?php if (!$fromAjax) endPage(); ?>
