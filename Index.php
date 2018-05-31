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
			include "connectDb.php";
			
			//Anmeldung, alternativ include header ab hier
			if(!isset($_SESSION["kundenNr"])){ //wenn User nicht angemeldet ist erfolgt Anmeldung als Gast
				$_SESSION["kundenNr"] = 0;
			}
			
			include "lastRequest.php";
			
			if(isset($_POST["Firma"])) //für die Registrierung
				include "regFinish.php";
			elseif(isset($_POST["kundenNr"])) //für die Anmeldung
				include "login.php";
			elseif(isset($_POST["item"])) //Funktion Kaufen-Buttons
				include "addItem.php";
			elseif(isset($_POST["kundenNrOut"]))
				include "logout.php";
			
			echo "<header class='tabHeader'> <!-- Kopfzeile des Dokuemnts -->";
			echo "<a href='Index.php'><img class='logo' src='logo.png' alt='BeispielLogo'></img></a>";
			
			#Gruppenfilter
			echo "<form name='search' action='Index.php' method='post' style='inline'>";
			echo "<label class='filter'><p class='labFilter'>Kategorie:</p>";
			echo "<select name='filterOption' class='filter'>";
			include "groupSelection.php";
			$selected = $_POST["filterOption"];
				if(isset($_POST["filterOption"])){
					echo "<option name='$selected' value='$selected' selected>" . $selected . "</option>";
				}
			echo "</select></label>";
			
			#Suche
			if(isset($_POST["searchInput"]))
				echo "<input class='search' name='searchInput' type='text' value='$searchInput'>";
			else
				echo "<input class='search' name='searchInput' type='text' value=''> <!-- Suchfeld -->";
			echo "<a class ='iconSearch' href='Index.php'> <img class='iconSearch' src='iconSearch.jpg' alt='iconDelete'>";
			echo "<a class='mobileDelete' href='Index.php'> <button type='submit'>Suchen</button></a>";
			echo "</form>";
				if($_SESSION["kundenNr"] !== 0){					
					echo "<form name='logoutIndex' class='noMargin' action='Index.php' method='post'>";
					echo "<label class='cusNr mobileDelete'>Kundennummer: <input name='kundenNrOut' class='mobileDelete' type='text' name='Kundennummer' value='' size='7' maxlength='7'></label>";
						echo "<a class='butSignIn' href='logout.php'> <button type='submit'>Abmelden</button> </a>";
					echo "</form>";
				}
				elseif($_SESSION["kundenNr"] == 0){
					echo "<form name='loginIndex' action='Index.php' method='post'>";
					echo "<label class='cusNr mobileDelete'>Kundennummer: <input class='mobileDelete' type='text' name='kundenNr' value='' size='7' maxlength='7'></label>";
						echo "<a class='butSignIn' href='login.php'> <button type='submit'>Anmelden</button> </a>";
					echo "</form>";
				}
				else
					echo "FEHLER! Scheinbar keine Anmeldung als User/Gast!";
		?>
		<!-- Bis hier in header -->
		
		<a class="butSignIn" href="Registrierung.php"> <button type="submit">Registrieren</button> </a>
		<a class ="iconLogIn" href="Anmeldung.php"> <img class="iconLogIn" src="iconLogIn.jpg" alt="iconLogIn">			
		<a class="mobileDelete" href="Warenkorb.php"><button type="submit">zum Warenkorb</button></a> <!-- Button zum Warenkorb -->
		<a class ="iconCart" href="Warenkorb.php"> <img class="iconCart" src="iconCart.jpg" alt="iconCart"></a>
		</header>
		
		<?php		
		//provisorische Ausgabe für Warenkorb-Array
		if(isset($_SESSION["cart"]))
			echo "In Ihren Warenkorb: " . implode(" + ", $_SESSION["cart"]);
		
		//Ausgabe für User bei Anmeldung/Abmeldung/Registrierung
		include "infoPrint.php";
		?>
		
		<section class="tabItems">
			<?php 
				//keine Filterung und keine Suche
				if(!isset($_POST["filterOption"]))
					include "artikelGen.php";
				//Filter oder Suche oder Filter + Suche
				elseif($_POST["filterOption"] == "Alle Produkte" AND $_POST["searchInput"] == null)
					include "artikelGen.php";
				else
					include "searchSelection.php";
			?>
		</section>
		<footer><!-- weiterführende Links -->
			<a class="impressum" href="Impressum.php"><p>Wir &uuml;ber uns & Impressum</p></a>
		</footer>
	</body>
</html>