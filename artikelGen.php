<?php

	include "connectDb.php";
	
	//Weder Suche noch Filter aktiv
	if(!isset($_POST["filterOption"]) or ($_POST["filterOption"] == "Alle Produkte" AND $_POST["searchInput"] == null)){
		$allArticles = $pdo->prepare("SELECT ArtikelNr, ArtikelName, ar.GruppenNr, Massstab, Lieferant, ar.Beschreibung, Bestandsmenge, Einkaufspreis, Listenpreis, Gruppenname 
		FROM artikel as ar
		JOIN warengruppen wg on wg.GruppenNr = ar.GruppenNr
		");
		$allArticles->execute();
		$artikel = $allArticles->fetchAll(PDO::FETCH_BOTH);
	}
	//Suche und Filter aktiv
	elseif($_POST['filterOption'] != "Alle Produkte" AND $_POST['searchInput'] != null){
		$searchInput = $_POST['searchInput'];
		$filterInput = $_POST['filterOption'];
		$filterSearchdb = $pdo->prepare("SELECT ArtikelNr, ArtikelName, ar.GruppenNr, Massstab, Lieferant, ar.Beschreibung, Bestandsmenge, Einkaufspreis, Listenpreis, Gruppenname 
			FROM artikel as ar
			JOIN warengruppen wg on wg.GruppenNr = ar.GruppenNr
			WHERE Gruppenname = '$filterInput' and ArtikelName LIKE '%$searchInput%'");
		$filterSearchdb->execute();
		$artikel = $filterSearchdb->fetchAll(PDO::FETCH_BOTH);
	}
	//Filter aktiv ohne Suche
	elseif($_POST['filterOption'] != "Alle Produkte"){
		$filterInput = $_POST['filterOption'];
		$groupResult = $pdo->prepare("SELECT ArtikelNr, ArtikelName, ar.GruppenNr, Massstab, Lieferant, ar.Beschreibung, Bestandsmenge, Einkaufspreis, Listenpreis, Gruppenname 
			FROM artikel as ar
			JOIN warengruppen wg on wg.GruppenNr = ar.GruppenNr
			WHERE Gruppenname = '$filterInput'");
		$groupResult->execute();
		$artikel = $groupResult->fetchAll(PDO::FETCH_BOTH); //Array mit Gruppennamen
	}
	//Suche aktiv ohne Filter
	elseif($_POST['searchInput'] != null){
		$searchInput = $_POST['searchInput'];
		$searchdb = $pdo->prepare("SELECT ArtikelNr, ArtikelName, ar.GruppenNr, Massstab, Lieferant, ar.Beschreibung, Bestandsmenge, Einkaufspreis, Listenpreis, Gruppenname 
		FROM artikel as ar
		JOIN warengruppen wg on wg.GruppenNr = ar.GruppenNr
		WHERE ArtikelName LIKE '%$searchInput%'");
		$searchdb->execute();
		$artikel = $searchdb->fetchAll(PDO::FETCH_BOTH);
	}
	
	
	//Suchergebnisansicht generieren
	if($artikel == null){
		echo "<p class='whiteFont'>Ihre Suche ergab leider keine Produkttrefffer!</p>";
	}
	else{
	//Headline der Artikelansicht
	echo "<p class='tabHeadline'>Artikel</p> <p class='tabHeadline'>Art.-Nr</p> <p class='tabHeadline'>Kategorie</p> <p class='tabHeadline'>Beschreibung</p> <p class='tabHeadline'>Preis</p> <p class='tabHeadline'></p>";
		for($i=0; $i < count($artikel); $i++){
			if($i % 2 == 0){ //Artikel mit Farbe 1
				echo "<p class='tabRowType1'>".$artikel[$i][1]."</p><p class='tabRowType1 hideMobile'>".$artikel[$i][0]."</p><p class='tabRowType1 mobileDelete'>".$artikel[$i][9]."</p><p class='tabRowType1 description'>".$artikel[$i][5]."</p><p class='tabRowType1 price'>".$artikel[$i][8]." €</p>";
			}
			else{ //Artikel mit Farbe 2
				echo "<p class='tabRowType2'>".$artikel[$i][1]."</p><p class='tabRowType2 hideMobile'>".$artikel[$i][0]."</p><p class='tabRowType2 mobileDelete'>".$artikel[$i][9]."</p><p class='tabRowType2 description'>".$artikel[$i][5]."</p><p class='tabRowType2 price'>".$artikel[$i][8]." €</p>";
			}
			//Produktmenge Eingabe
			echo "<form name='addItem' action='Index.php' method='post' style='inline'>";
				echo "<label class='whiteFont centerMobile'>Menge:</label>";
				echo "<input class='count' name='menge' type='number' value='1' max='999' min='1'>";
				
				//Kaufen Button
				echo "<p><a href='Index.php'> <button class='butBuy ghost-button-full-color' type='submit'><p>Kaufen</p></button> </a></p>";
				echo "<input class='hide' name='item' type='text' value='".$artikel[$i][0]."'>";
			echo "</form>";
		}
	}
	
		
?>