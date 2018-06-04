<?php
	if($_POST['kundenNr']!=null){
		$kundenNrUser = $_POST['kundenNr'];
		include "connectDb.php";

		$sqlKundenNr = $pdo->prepare("select KundenNr from kunden where KundenNr=$kundenNrUser");
		$sqlKundenNr->execute();
		$kundenNr = $sqlKundenNr->fetchAll(PDO::FETCH_BOTH);
	}

	

	if(isset($kundenNr[0][0])){
		if($kundenNr[0][0] === $kundenNrUser){
		$sqlNachname = $pdo->prepare("select Nachname from kunden where KundenNr=$kundenNrUser");
		$sqlNachname->execute();
		$nachname = $sqlNachname->fetchAll(PDO::FETCH_BOTH);
		
		if(isset($_SESSION["cart"])) //für das Merken der Produkte im Warenkorb bei Login/Logout
			$cart = $_SESSION["cart"];
			
		session_destroy();
		session_start();
		$_SESSION["kundenNr"] = $kundenNrUser;
		
		if(isset($cart)) //nach LogIn Warenkorbprodukte wieder in Session schreiben
			$_SESSION["cart"] = $cart;
		}
	}
?>
