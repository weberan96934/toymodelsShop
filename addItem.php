<?php

	//Produkt für Warenkorb speichern
	if(!isset($_SESSION["cart"])){
		$_SESSION["cart"] = array(array($_POST["item"], $_POST["menge"]));
	}
	else{
		$_SESSION["cart"][] = array($_POST["item"], $_POST["menge"]);
		}
?>