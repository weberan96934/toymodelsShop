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
			include "lastRequest.php";
		?>
	
		<p class="headline">Toy Models GmbH</p>
		<header class="tabHeader"> <!-- Kopfzeile des Dokuemnts -->
			<a href="Index.php"><img class="logo" src="logo.png" alt="BeispielLogo"></img></a>
			<label class="filter"><p class="labFilter">Kategorie:</p><select class="filter"> <!-- Kategorie-Filter -->
				<?php include "groupSelection.php" ?>
			</select></label>
			<input class="search" type="text" value=""> <!-- Suchfeld -->
			<a class ="iconSearch" href="Index.php"> <img class="iconSearch" src="iconSearch.jpg" alt="iconDelete">
			<a class="mobileDelete" href="Index.php"> <button type="submit">Suchen</button> </a>
			<label class="cusNr mobileDelete">Kundennummer: <input class="mobileDelete" type="text" name="Kundennummer" value="" size="7" maxlength="7"></label> <!--Anmeldung -->
			<label class="mobileDelete">Passwort: <input class="mobileDelete" type="password" name="search" value="" size="20 maxlength="20"></label>
			<a class="butSignIn" href="Index.php"> <button type="submit">Anmelden</button> </a>
			<a class="butSignIn" href="Registrierung.php"> <button type="submit">Registrieren</button> </a>
			<a class ="iconLogIn" href="Anmeldung.php"> <img class="iconLogIn" src="iconLogIn.jpg" alt="iconLogIn">			
			<a class="mobileDelete" href="Warenkorb.php"><button type="submit">zum Warenkorb</button></a> <!-- Button zum Warenkorb -->
			<a class ="iconCart" href="Warenkorb.php"> <img class="iconCart" src="iconCart.jpg" alt="iconCart"></a>
		</header>
		<section class="tabCart"> <!-- Anzeige im Warenkorb gelisteter Artikel -->
			<p class="tabHeadline">Artikel</p> <p class="tabHeadline">Art.-Nr.</p> <p class="tabHeadline">Beschreibung</p> <p class="tabHeadline">Stückpreis</p> <p class="tabHeadline">Menge</p> <p class="tabHeadline">Preis</p> 
			<p class="tabRowType1 article">Airbus A320</p> <p class="tabRowType1 artNr">1234</p> <p class="tabRowType1 description">Orginalgetreue Nachbildung im Maßstab 1:10.000</p> <p class="tabRowType1 priceSingle">219,00 &euro;</p> <p class="tabRowType1 menge">x 2</p> <p class="tabRowType1 priceSum">438,00 &euro;</p>
			<p class="tabRowType2 article">RMS Titanic</p> <p class="tabRowType2 artNr">2111</p> <p class="tabRowType2 description">Orginalgetreue Nachbildung im Maßstab 1:20.000, incl. Loch</p> <p class="tabRowType2 priceSingle">210,00 &euro;</p> <p class="tabRowType2 menge">x 3</p> <p class="tabRowType2 priceSum">630,00 &euro;</p>
			<p class="tabRowType1 tabCartSubtotalText">Zwischensumme:</p> <p class="tabRowType1 price tabCartSubtotalPrice">1.068,00 &euro;</p>
			<p class="tabRowType2 tabCartDiscountText">Rabatt:</p> <p class="tabRowType2 price tabCartDiscountPrice">100,00 &euro;</p>
			<p class="tabRowType1 tabCartNettoText">Netto:</p> <p class="tabRowType1 price tabCartNettoPrice">968,00 &euro;</p>
			<p class="tabRowType2 tabCartMwstText">MwSt (19%):</p> <p  class="tabRowType2 price tabCartMwstPrice">183,92 &euro;</p>
			<p class="tabRowType1 tabCartShipText">Versandkosten:</p> <p class="tabRowType1 price tabCartShipPrice">0,00 &euro;</p>
			<p class="tabRowType2 tabCartBruttoText">Brutto:</p> <p class="tabRowType2 price tabCartBruttoPrice">1.151,92 &euro;</p>
			<a class="tabCartButton" href="Index.php"> <button class="ghost-button-full-color tabCartButton" type="submit">Bestellung abschlie&szlig;en</button> </a>
		</section>
	</body>
</html>