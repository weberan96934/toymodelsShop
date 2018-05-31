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
	</head>
	<body>
		<?php
			if(isset($_POST ["searchInput"]))
				$searchInput = $_POST ["searchInput"];
		
			session_start();
			include "connectDb.php";
			if(isset($_POST["kundenNrOut"]))
				include "logout.php";
			elseif(isset($_POST["kundenNr"])) //für die Anmeldung
				include "login.php";
			
			//Anmeldung
			if(!isset($_SESSION["kundenNr"])){ //wenn User nicht angemeldet ist erfolgt Anmeldung als Gast
				$_SESSION["kundenNr"] = 0;
			}
			
			include "lastRequest.php";
			
			if(isset($_POST["Firma"])) //für die Registrierung
				include "regFinish.php";
			elseif(isset($_POST["item"])) //Funktion Kaufen-Buttons
				include "addItem.php";
			
			include "header.php";
		
			//provisorische Ausgabe für Warenkorb-Array
			if(isset($_SESSION["cart"]))
				print_r($_SESSION["cart"]);
			
			//Ausgabe für User bei Anmeldung/Abmeldung/Registrierung
			include "infoPrint.php";
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