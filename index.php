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

				<!--content-->
				<div id="contentMain" class="content">
					This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 
					<br>This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 
					<br><br><br>This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 
					<br>This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 
					<br><br><br><br><br>This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 
					<br>This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 
					<br><br><br><br>This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 

<?php } else { ?>
					<!--repeat it because there is either the first page to load, or to dynamically go 'back' to the start-->
					This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 
					<br>This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 
					<br><br><br>This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 
					<br>This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 
					<br><br><br><br><br>This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 
					<br>This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 
					<br><br><br><br>This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. This is a lot of text. 
<?php } ?>
				</div>
			</div>

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