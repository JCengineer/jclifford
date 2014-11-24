<?php
	
	include('php/main.php');
	$fromAjax=isAjax($_SERVER);
	
?>

<?php if (!$fromAjax) startPage(); ?>

<!-- content -->
<!--thought/note-->
<span class="note alignRight">
	It's a rainy day here in Dublin as I struggle to come up with something to say here...<br>
	"This is the part of the website that is a random collection of my previous handywork"<br>
	or something like that..    My coffee is going cold now too. Feck..
</span><br>
These projects have been a labour of love in the moments I built them and they're like trophies to me.
The reason that they are here is because, in my opinion, they should to be shared.
The potential of somebody else using these designs is worth the effort, right?
I hope someone else gets some use out of it, or even betters the design.
Sometimes even an using an old technology (a saw and hammer) is the best way of creating new one!
New projects, concepts and ideas are the driving force of technology.
<br><br>
Have an idea for a project I could help with? Want something I've built before?<br>
No problem, send me a message and we'll talk.<br>
<span class="note">
	Of course, if you see anything you like to try yourself,<br>
	drop me a message and I'll tell you more.
</span>

<!-- end content -->

<?php if (!$fromAjax) endPage(); ?>