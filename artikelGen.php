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
	
	//Artikel aus der Datenbank lesen
	$sqlArtikel = $pdo->query("SELECT * FROM artikel");
	$artikel = $sqlArtikel->fetchAll(PDO::FETCH_BOTH);
	
	//Headline der Artikelansicht
	echo "<p class='tabHeadline'>Artikel</p> <p class='tabHeadline'>Art.-Nr</p> <p class='tabHeadline'>Beschreibung</p> <p class='tabHeadline'>Preis</p> <p class='tabHeadline'></p>";
	//Artikelansicht generieren
	
	for($i=0; $i < count($artikel); $i++){
		
		if($i % 2 == 0){ //Artikel mit Farbe 1
			echo "<p class='tabRowType1'>".$artikel[$i][1]."</p><p name='artNr' class='tabRowType1'>".$artikel[$i][0]."</p><p class='tabRowType1'>".$artikel[$i][5]."</p><p class='tabRowType1'>".$artikel[$i][8]."</p>";
		}
		else{ //Artikel mit Farbe 2
			echo "<p class='tabRowType2'>".$artikel[$i][1]."</p><p name='artNr' class='tabRowType2'>".$artikel[$i][0]."</p><p class='tabRowType2'>".$artikel[$i][5]."</p><p class='tabRowType2'>".$artikel[$i][8]."</p>";
		}
		//Kaufen Button
		echo "<form name='addItem' action='index.php' method='post' style='inline'>";
		echo "<p><a href='index.php'> <button class='butBuy ghost-button-full-color' type='submit'><p>Kaufen</p></button> </a></p>";
		echo "<input class='hide' name='item' type='text' value='".$artikel[$i][0]."'>";
		echo "</form>";
	}
?>