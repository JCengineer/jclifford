<?php
	
	include('php/main.php');
	$fromAjax=isAjax($_SERVER);
	
?>

<?php if (!$fromAjax) startPage(); ?>
	
	<!-- content -->
	Electronics is something I've been more than interested in since I was a kid.
	I was starting projects ever since breaking the tape player in the kitchen radio with a screwdriver when I was three or four.
	I think that my ability to break things and figure out fixes when I was young guided me to be an engineer.
	<br><br>
	Since then, I've been coming up with ideas and concepts in the hardware technology space.
	I've built some of them, so have a look below to see them.
	<br><br>
	I have qualifications in the electronic engineering space.
	I've been able to use that knowledge to build some of the projects you'll see below.
	However, the insight I've gained into the principles of electronics means
	I am able to adapt to new projects, work on product development and prototyping 
	<!--rephrase-->without the need for a lot of training.
	<br><br>
	I have used a variety of technologies in electronics development.
	These can be useful for designing, testing and creating electronic and computer hardware products.
	These include:
	<li>ASIC/FPGA Integrated Circuits & Hardware Description Language (Verilog | vHDL)</li>
	<li>ARM Computer Processors & ARM Assembly Language</li>
	<br>
	Other topics covered in college include:
	<li>Digital Signal & Media Processing (MATLAB)</li>
	<li>Amplifiers & Analogue Circuits</li>
	<li>Biomedical engineering (Mechanical & Electronic)</li>
	<li>Probability & Digital Communication</li>
	<br>
	<span class="note">
		That same red kitchen radio is still in my folks' kitchen, the radio works but I could never fix the tape player again.. 
		I think they keep it there as a reminder to me to fix things around the house.
	</span>
	<!-- end content -->
	
<?php if (!$fromAjax) endPage(); ?>