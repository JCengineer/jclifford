<?php
	
	include('php/main.php');
	$fromAjax=isAjax($_SERVER);
	
?>

<?php if (!$fromAjax) startPage(); ?>

<!-- content -->
I grew up in a guesthouse owned by my folks.
I was surrounded by work there, and it was a great experience.
It taught me that hard work pays off and that reputation means a lot.
It has also shown me what an integral part technology plays in most businesses these days.
I've seen that happen first hand.<br><br>
The majority of guests that stayed at the house when I was a kid knocked on the door looking for accommodation.
"Organic" by way of their feet, not by "clicks".
These days price comparison sites, booking engines and credit card providers rule the industry.
Now it's a game of SEO (Search Engine Optimisation) and so on...

Self-employed...
VisiLit...
Start-up businesses...
<!-- end content -->
					
<?php if (!$fromAjax) endPage(); ?>