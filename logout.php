<?php
	session_destroy();
	unset($_SESSION["kundenNr"]);
	setcookie ("kundenNr", "", -100);
	for($i = 1; $i >= 1; $i++){
		if(isset($_COOKIE["item".$i]))
			setcookie ("item".$i , "", -100);
		else
			$i=-1;
	}
?>