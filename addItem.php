<?php
if(isset($_POST["item"])){
	//Produkt für Warenkorb speichern
	if(!isset($_SESSION["cart"])){
		$_SESSION["cart"] = array($_POST["item"]);
		echo "Neuerstellung";
	}
	else
		$_SESSION["cart"][] = $_POST["item"];
}

?>