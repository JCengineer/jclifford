<?php
	
	include('php/main.php');
	$fromAjax=isAjax($_SERVER);
	
?>

<?php if (!$fromAjax) startPage(); ?>

<!-- content -->
Please fill in the form below to get in touch!
<br><br>
<!-- Do not change the code! -->
<div class="contactForm">
	<a id="foxyform_embed_link_613600" href="http://www.foxyform.com/">foxyform</a>
	<script type="text/javascript">
	(function(d, t){
	   var g = d.createElement(t),
	       s = d.getElementsByTagName(t)[0];
	   g.src = "http://www.foxyform.com/js.php?id=613600&sec_hash=f1c232829cf&width=350px";
	   s.parentNode.insertBefore(g, s);
	}(document, "script"));
	</script>
</div>
<!-- Do not change the code! -->
<br>
Thanks,<br>
James
<!-- end content -->
					
<?php if (!$fromAjax) endPage(); ?>