<!DOCTYPE HTML>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
		<meta name="author" content="André Weber, Julia Wette, Eva Wittmann">
		<title>Warenkorb - Toy Models GmbH</title>
		<link href="style.css" type="text/css" rel="stylesheet"/>
		<link href="mobile.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
		<?php
			include "connectDb.php";
			session_start();

			//Anmeldung
			if(!isset($_SESSION["kundenNr"])){ //wenn User nicht angemeldet ist erfolgt Anmeldung als Gast
				$_SESSION["kundenNr"] = 0;
			}
			include "lastRequest.php";
		?>
	
		<p class="headline">Toy Models GmbH</p>
		
		<?php include "header.php";?>
		
		<section class="tabCart"> <!-- Anzeige im Warenkorb gelisteter Artikel -->
			<p class="tabHeadline">Artikel</p> <p class="tabHeadline">Art.-Nr.</p> <p class="tabHeadline">Maßstab</p> <p class="tabHeadline">Stückpreis</p> <p class="tabHeadline">Menge</p> <p class="tabHeadline">Preis</p>
			<?php
				include "WarenkorbHandler.php";
			?>
		</section>
	</body>
</html>