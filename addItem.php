<?php
	//Produkt für Warenkorb speichern
	if(!isset($_SESSION["cart"])){
		$_SESSION["cart"] = array($_POST["item"]);
	}
	else
		$_SESSION["cart"][] = $_POST["item"];
?>