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
			
			//Cookie für kundenNr
			if(isset($_SESSION["kundenNr"])){
				setcookie("kundenNr", $_SESSION["kundenNr"], time() + 13000000);
			}				
			elseif(isset($_COOKIE["kundenNr"])){
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
			
			include "lastRequest.php";
			
			if(isset($_POST["Firma"])) //für die Registrierung
				include "regFinish.php";
			elseif(isset($_POST["item"])) //Funktion Kaufen-Buttons
				include "addItem.php";
				
			//Cookie für cart
			if(isset($_SESSION["cart"]))
			{
				for($i = 1; $i < count($_SESSION["cart"]) /2; $i++){
					setcookie("item" . $i, serialize($_SESSION["cart"][$i]), time() + 13000000);
				}
				print_r($_COOKIE);
			}
			
			include "header.php";
			
			//Ausgabe für User bei Anmeldung/Abmeldung/Registrierung
			include "infoPrint.php";
			
			//Warenkorb zurücksetzen nach erfolgreicher Bestellung
			if(isset($_POST["purchaseConfirmed"])){
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