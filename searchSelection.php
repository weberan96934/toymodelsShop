<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "toymodelsdb";

	try{
		$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username);
		// set the PDO error mode to exception
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo "Connection failed" . $e->getMessage();
	}
	
	
	//Warengruppennamen als Array speichern, [0] ist alle
	//if [0]:
	$searchInput = $_POST['searchInput'];
	$searchdb = $pdo->query("SELECT * FROM artikel WHERE ArtikelName LIKE '%$searchInput%'");
	$searchResult = $searchdb->fetchAll(PDO::FETCH_BOTH);
	
	//else if nur nach Wg filtern
	//$filterInput = $_POST['filterOption'];
	//$getGroupNames = $pdo->query("SELECT ArtikelNr, ArtikelName, ar.GruppenNr, Massstab, Lieferant, ar.Beschreibung, Bestandsmenge, Einkaufspreis, Listenpreis 
	//	FROM artikel as ar
	//	JOIN warengruppen wg on wg.GruppenNr = ar.GruppenNr
	//	WHERE Gruppenname = '$filterInput'");
	//$searchResult = $getGroupNames->fetchAll(PDO::FETCH_BOTH); //Array mit Gruppennamen
	
	//else zusätzlich nach Warengruppe in db filtern
	//...
	
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