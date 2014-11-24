<?php
	
	include('php/main.php');
	$fromAjax=isAjax($_SERVER);
	
?>

<?php if (!$fromAjax) startPage(); ?>

<!-- content -->
contact
<!-- end content -->
					
<?php if (!$fromAjax) endPage(); ?>