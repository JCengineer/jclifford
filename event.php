<?php
	
	include('php/main.php');
	$fromAjax=isAjax($_SERVER);
	
?>

<?php if (!$fromAjax) startPage(); ?>

		<!-- content -->
		I have played many roles in events!
		<li>Sound Engineer</li>
		<li>Stage Management</li>
		<li>Event Technician</li>
		<li>Staff Supervisor</li>
		<li>Logistics Assistant</li>
		<li>General Crew</li>
		<li>Producer</li>
		<li>Lighting Designer</li>
		<li>Drummer</li>
		<br><br>

		<!-- end content -->
					
<?php if (!$fromAjax) endPage(); ?>