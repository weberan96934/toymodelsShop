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
		
		<?php include "header.php"; ?>
		
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