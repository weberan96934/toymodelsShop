<?php
	$firma = $_POST['Firma'];
	$nachname = $_POST['Nachname'];
	$vorname = $_POST['Vorname'];
	$telefon = $_POST['Telefon'];
	$strasse = $_POST['Strasse'];
	$ort = $_POST['Ort'];
	$plz = $_POST['PLZ'];
	$land = $_POST['Land'];

	//Nächste ID
	$sqlKundenNr = $pdo->prepare("SELECT MAX(KundenNr)+1 FROM kunden");
	$sqlKundenNr->execute();
	$kundenNrMax = $sqlKundenNr->fetchAll(PDO::FETCH_BOTH);
	$newKundenNr = $kundenNrMax[0][0];
		
	$sqlRegUser = $pdo->prepare("INSERT INTO kunden VALUES ('$newKundenNr', '$firma', '$nachname', '$vorname', '$telefon', '$strasse', '$ort', '$plz', '$land', '1002', 'NULL')");
	$sqlRegUser->execute();
?>
