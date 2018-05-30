<!DOCTYPE HTML>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
		<meta name="author" content="André Weber, Julia Wette, Eva Wittmann">
		<title>Impressum - Toy Models GmbH</title>
		<link href="style.css" type="text/css" rel="stylesheet"/>
		<link href="mobile.css" type="text/css" rel="stylesheet"/>
		
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
		?>
	</head>
	<body>
		<header class="tabHeader"> <!-- Kopfzeile des Dokuemnts -->
			<a href="Index.php"><img class="logo" src="logo.png" alt="BeispielLogo"></img></a>
			<label class="filter"><p class="labFilter">Kategorie:</p><select class="filter"> <!-- Kategorie-Filter -->
				<?php include "groupSelection.php" ?> <!-- Hier evtl. noch Funktion einfügen oder nur auf Hauptseite zurückleiten -->
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
		<section class="impress"> <!-- Präsentation der Firma -->
			<h1 style="clear:left">Wir &uuml;ber uns</h1>
			<p>Hier könnte ihr Impressum stehen</p>	 
		</section>
		<footer></footer>
	</body>
</html>