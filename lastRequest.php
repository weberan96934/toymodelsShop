<?php
	if(isset($_SESSION["lastRequest"]) AND isset($_SESSION["cart"]) AND $_SESSION["kundenNr"] == 0){
		if(time() - $_SESSION["lastRequest"] > 5 * 60)
			unset($_SESSION["cart"]);
	}

	$_SESSION["lastRequest"] = time();
?>