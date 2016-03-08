<?php
	
	include('php/main.php');
	$fromAjax=isAjax($_SERVER);
	
?>

<?php if (!$fromAjax) startPage(); ?>

		<!-- content -->
		I have played many roles in events!
		<li>Sound Engineer</li>
		<img src="media/gallery/audioop.jpg" alt="Technical Equipment" />
		<li>Stage Management</li>
		<li>Event Technician</li>
		<img src="media/gallery/gear.jpg" alt="Technical Equipment" />

		<li>Staff Supervisor</li>
		<li>Logistics Assistant</li>
		<img src="media/gallery/audiosetup.jpg" alt="Technical Equipment" />
		<li>General Crew</li>
		<li>Producer</li>
		<li>Lighting Designer</li>
		<img src="media/gallery/cca.jpg" alt="Lighting" />
		<li>Drummer</li>
		<img src="media/gallery/s15.jpg" alt="Drummer" />
		<br><br>

		<!-- end content -->
					
<?php if (!$fromAjax) endPage(); ?>