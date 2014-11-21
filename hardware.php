<?php
	$fromAjax=false;
	if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
	    AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
		$fromAjax = true;
		//print_r($_SERVER);
	}
?>

<?php if (!$fromAjax) { ?>
<!------------------------------------------------>
<!doctype html>
<html lang="en">
<?php include('head.php'); ?>
<body>
	<div class="main">
		<!-- header -->
		<?php include('header.php'); ?>
		<div>
			<div class="clearfix">
				<!--menu-->
				<?php @include('menu.php'); ?>
				<div id="contentMain" class="content">
<!------------------------------------------------>
<?php } ?>
					<!-- content -->
					hardware
					<!-- end content -->
<?php if (!$fromAjax) { ?>
<!------------------------------------------------>
				</div>
			</div>
			<!--summary-->
			<?php include('summary.php'); ?>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>

<!------------------------------------------------>
<?php } ?>