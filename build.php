<?php

	$fromAjax=false;
	if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
	    AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
		$fromAjax = true;
		//print_r($_SERVER);
	}

?>


<!------------------------------------------------>
<?php if (!$fromAjax) { ?>
<!doctype html>
<html lang="en">

<?php include('head.php'); ?>


<body>

	<!--fb-->
	<div id="fb-root"></div>
	<script>
		//todo
	</script>

	<div class="main">

		<?php include('header.php'); ?>
		
		<div>
			<div class="clearfix">
				<!--menu-->
				<?php @include('menu.php'); ?>
<!------------------------------------------------>
<?php } else { ?>

				<!--content-->
				<h1>This is BUILD!</h1>
<?php } ?>

<!------------------------------------------------>
<?php if (!$fromAjax) { ?>
			</div>
			<!--summary-->
			<div class="horizontalList">
				<h2><u>I build things for :</u></h2>
				<h3>Header 1</h3>
				<p>listitem | listitem | listitem | listitem</p>
				<h3>Header 1</h3>
				<p>listitem | listitem | listitem | listitem</p>
				<h3>Header 1</h3>
				<p>listitem | listitem | listitem | listitem</p>
				<h3>Header 1</h3>
				<p>listitem | listitem | listitem</p>
			</div>
		</div>
	</div>
	
	<?php include('footer.php'); ?>

</body>
</html>

<!------------------------------------------------>
<?php } ?>