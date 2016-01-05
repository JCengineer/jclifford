<?php

	//find if the server request is ajax or standard get
	function isAjax($server){
		if (isset($server['HTTP_X_REQUESTED_WITH'])
		    AND strtolower($server['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
			return true;
		} else return false;
	};

	//build the page
	function startPage(){
		echo "
			<!doctype html>
			<html lang='en'>
			".file_get_contents('php/head.php')."
			<body>
				<div class='main'>
					".file_get_contents('php/header.php')."
					<div>
						<div class='clearfix'>
							".file_get_contents('php/menu.php')."
							<div id='contentMain' class='content'>";
							// MAKE THIS DIV OVERFLOW-Y AUTO and start scrolling on load content
	};
	function endPage(){
		echo "
							</div>
						</div>
						".file_get_contents('php/summary.php')."
					</div>
				</div>
				".file_get_contents('php/footer.php')."
			</body>
			</html>";
	};

?>