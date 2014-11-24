<?php
	
	include('php/main.php');
	$fromAjax=isAjax($_SERVER);
	
?>

<?php if (!$fromAjax) startPage(); ?>

		<!-- content -->
		events
		<!-- end content -->
					
<?php if (!$fromAjax) endPage(); ?>