<!DOCTYPE HTML>
<html lang="de">
	<head>
		<meta name="toymodels" content="index">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
		<meta name="author" content="André Weber, Julia Wette, Eva Wittmann">
		<title>Toy Models GmbH</title>
		<link href="style.css" type="text/css" rel="stylesheet"/>
		<link href="mobile.css" type="text/css" rel="stylesheet"/>
		
		<link rel="import" href="testDom.html"/>
		
		<script type="text/javascript" src="index.js"></script>
	</head>
	<body>
	
	
	
		<?php	
			if(isset($_POST ["searchInput"]))
				$searchInput = $_POST ["searchInput"];
			
			session_start();
			
			//Cookie für cart
			if(!isset($_SESSION["kundenNr"])){
				for($i = 0; $i >= 0; $i++){
					if(isset($_COOKIE["item".$i])){
						if(!isset($_SESSION["cart"])){
							$_SESSION["cart"] = array(unserialize($_COOKIE["item".$i]));
						}
						else{
							$_SESSION["cart"][] = unserialize($_COOKIE["item".$i]);
						}
						setcookie("item".$i , "", -100);
					}	
					else
						$i = -100;						
				}
			}
			
			//Cookie für kundenNr				
			if(isset($_COOKIE["kundenNr"])){
				$_SESSION["kundenNr"] = $_COOKIE["kundenNr"];
			}
			
			include "connectDb.php";
			if(isset($_POST["kundenNrOut"]))
				include "logout.php";
			elseif(isset($_POST["kundenNr"])) //für die Anmeldung
				include "login.php";
			
			//Anmeldung
			if(!isset($_SESSION["kundenNr"])){ //wenn User nicht angemeldet ist erfolgt Anmeldung als Gast
				$_SESSION["kundenNr"] = 0;
			}
			
			if(isset($_SESSION["kundenNr"])){
				setcookie("kundenNr", $_SESSION["kundenNr"], time() + (3600*24*365));
			}
			
			include "lastRequest.php";
			
			if(isset($_POST["Firma"])) //für die Registrierung
				include "regFinish.php";
			elseif(isset($_POST["item"])){ //Funktion Kaufen-Buttons
				include "addItem.php";	
			}
			include "header.php";?>
			
			<template id='template1'>
				<div id='div1'>
					<p id='newItem'>testo</p>
				</div>
			</template>
			<?php
			//Ausgabe für User bei Anmeldung/Abmeldung/Registrierung
			include "infoPrint.php";
			
			//Warenkorb zurücksetzen nach erfolgreicher Bestellung
			if(isset($_POST["purchaseConfirmed"]) AND $_POST["purchaseConfirmed"]!=null){
				unset($_SESSION["cart"]);
			}
		?>
		
		<section class="tabItems">
			<?php 
				include "artikelGen.php";
			?>
		</section>
		
		<footer><!-- weiterführende Links -->
			<a class="impressum" href="Impressum.php"><p>Wir &uuml;ber uns & Impressum</p></a>	
		</footer>
		
	</body>
</html>