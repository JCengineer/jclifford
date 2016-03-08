<?php
	
	include('php/main.php');
	$fromAjax=isAjax($_SERVER);
	
?>

<?php if (!$fromAjax) startPage(); ?>
	
	<!-- content -->
	I have qualifications in the electronic engineering space.
	I've been able to use that knowledge to build some of the projects you'll see below.
	However, the insight I've gained into the principles of electronics means
	I am able to adapt quickly to new projects, work on rapid prototyping and product development.
	<br><br>
	<img src="media/gallery/chip.jpg" alt="Electronics hardware" />
	I have used a variety of technologies in electronics development.
	These can be useful for designing, testing and creating electronic and computer hardware products.
	These include:
	<li>ASIC // FPGA Integrated Circuits //  Hardware Description Language (Verilog // vHDL)</li>
	<li>ARM Computer Processors // ARM Assembly Language</li>
	<br>
	Other topics covered in college include:
	<li>Digital Signal // Media Processing (MATLAB)</li>
	<li>Amplifiers // Analogue Circuits</li>
	<li>Biomedical engineering (Mechanical // Electronic)</li>
	<li>Probability // Digital Communication</li>
	<br>
	<!-- end content -->
	
<?php if (!$fromAjax) endPage(); ?>