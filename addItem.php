<?php

	//Produkt für Warenkorb speichern
	if(!isset($_SESSION["cart"])){
		$_SESSION["cart"] = array(array($_POST["item"], $_POST["menge"]));
	}
	else{
		$_SESSION["cart"][] = array($_POST["item"], $_POST["menge"]);
		}
	for($i = 0; $i < count($_SESSION["cart"]); $i++){
		setcookie("item" . $i, serialize($_SESSION["cart"][$i]), time() + (3600*24*365));
	}
?>