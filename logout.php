<?php
	session_destroy();
	unset($_SESSION["kundenNr"]);
	setcookie ("kundenNr", "", -100);
	for($i = 0; $i >= 0; $i++){
		if(isset($_COOKIE["item".$i]))
			setcookie ("item".$i , "", -100);
		else
			$i=-100;
	}
?>