<?php
	
	include('php/main.php');
	$fromAjax=isAjax($_SERVER);
	
?>

<?php if (!$fromAjax) startPage(); ?>

<!-- content -->
These projects have been a labour of love in the moments I built them and they're like trophies.
They are showcased here because, well... why not?
<br><br>
New projects, concepts and ideas are the driving force of technology.
Sometimes even an using an old technology (a saw and hammer) is the best way of creating new one!
I get great enjoyment from using the traditional tools to create something new each time.
<br><br>
Just click on the gallery below to browse the images!
<br><br>
Have an idea for a project I could help with?<br>
Want something I've built before?<br>
Have a better idea for a design?<br>
No problem, send me a message and we'll talk.<br>
<span class="note">
	Of course, if you see anything you like to try yourself,<br>
	drop me a message and I'll tell you more.
</span>

<!-- end content -->

<?php if (!$fromAjax) endPage(); ?>