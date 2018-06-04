<?php
	if(isset($_SESSION["lastRequest"]) AND isset($_SESSION["cart"])){
		if(time() - $_SESSION["lastRequest"] > 5 * 60){
			unset($_SESSION["cart"]);
			for($i = 0; $i >= 0; $i++){
				if(isset($_COOKIE["item".$i]))
					setcookie ("item".$i , "", -100);
				else
					$i=-100;
			}
		}
	}

	$_SESSION["lastRequest"] = time();
?>