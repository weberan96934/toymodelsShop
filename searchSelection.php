<?php

	include "connectDb.php";
	
	$searchInput = $_POST['searchInput'];
	$filterInput = $_POST['filterOption'];
	
	//Suche und Filter aktiv
	if($filterInput != "Alle Produkte" AND $searchInput != null){
		$filterSearchdb = $pdo->query("SELECT ArtikelNr, ArtikelName, ar.GruppenNr, Massstab, Lieferant, ar.Beschreibung, Bestandsmenge, Einkaufspreis, Listenpreis 
			FROM artikel as ar
			JOIN warengruppen wg on wg.GruppenNr = ar.GruppenNr
			WHERE Gruppenname = '$filterInput' and ArtikelName LIKE '%$searchInput%'");
		$searchResult = $filterSearchdb->fetchAll(PDO::FETCH_BOTH);
	}
	//Filter aktiv ohne Suche
	elseif($filterInput != "Alle Produkte"){
		$groupResult = $pdo->query("SELECT ArtikelNr, ArtikelName, ar.GruppenNr, Massstab, Lieferant, ar.Beschreibung, Bestandsmenge, Einkaufspreis, Listenpreis 
			FROM artikel as ar
			JOIN warengruppen wg on wg.GruppenNr = ar.GruppenNr
			WHERE Gruppenname = '$filterInput'");
		$searchResult = $groupResult->fetchAll(PDO::FETCH_BOTH); //Array mit Gruppennamen
	}
	//Suche aktiv ohne Filter
	elseif($searchInput != null){
		$searchdb = $pdo->query("SELECT * FROM artikel WHERE ArtikelName LIKE '%$searchInput%'");
		$searchResult = $searchdb->fetchAll(PDO::FETCH_BOTH);
	}
	
	//Headline der Artikelansicht
	echo "<p class='tabHeadline'>Artikel</p> <p class='tabHeadline'>Art.-Nr</p> <p class='tabHeadline'>Beschreibung</p> <p class='tabHeadline'>Preis</p> <p class='tabHeadline'></p>";
	//Suchergebnisansicht generieren
	for($i=0; $i < count($searchResult); $i++){
		if($i % 2 == 0){ //Artikel mit Farbe 1
			echo "<p class='tabRowType1'>".$searchResult[$i][1]."</p><p class='tabRowType1'>".$searchResult[$i][0]."</p><p class='tabRowType1'>".$searchResult[$i][5]."</p><p class='tabRowType1'>".$searchResult[$i][8]."</p>";
		}
		else{ //Artikel mit Farbe 2
			echo "<p class='tabRowType2'>".$searchResult[$i][1]."</p><p class='tabRowType2'>".$searchResult[$i][0]."</p><p class='tabRowType2'>".$searchResult[$i][5]."</p><p class='tabRowType2'>".$searchResult[$i][8]."</p>";
		}
		//Kaufen Button
		echo "<p><a href='Index.php'> <button class='butBuy ghost-button-full-color' type='submit'><p>Kaufen</p></button> </a></p>";
	}
	
	
		
?>