		<?php	
			
			echo "<header> <!-- Kopfzeile des Dokuments -->";
			echo "<a href='Index.php'><img class='logo' src='logo.png' alt='BeispielLogo'></img></a>";
			
			#Gruppenfilter
			echo "<form class='groupForm' name='search' action='Index.php' method='post' style='inline'>";
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
			echo "<a class ='iconSearch' href='Index.php'> <button class='butSearch' type='submit'><img class='iconSearch' src='iconSearch.jpg' alt='iconDelete'></button></a>";
			echo "<a class='mobileDelete' href='Index.php'> <button type='submit'>Suchen</button></a>";
			echo "</form>";
			
			#Kundennummer
			if($_SESSION["kundenNr"] != 0){					
				echo "<form name='logoutIndex' class='noMargin' action='Index.php' method='post'>";
					echo "<label class='cusNr mobileDelete hide'>Kundennummer: <input name='kundenNrOut' class='mobileDelete' type='text' name='Kundennummer' value='' size='7' maxlength='7'></label>";
					echo "<a href='logout.php'> <button class='butSignIn' type='submit'>Abmelden</button></a>";
					echo "<a class ='iconLogIn' href='Index.php'><img class='iconLogIn' src='iconLogIn.jpg' alt='iconLogIn'></a>";
					
				echo "</form>";
			}
			elseif($_SESSION["kundenNr"] == 0){
				echo "<form name='loginIndex' action='Index.php' method='post'>";
				echo "<label class='cusNr mobileDelete'>Kundennummer: <input class='mobileDelete' type='text' name='kundenNr' value='' size='7' maxlength='7'></label>";
					echo "<a class='butSignIn butSignInMobile' href='login.php'> <button class='butSignInMobile' type='submit'>Anmelden</button> </a>";
					echo "<a class ='iconLogIn' href='Anmeldung.php'><img class='iconLogIn' src='iconLogIn.jpg' alt='iconLogIn'></a>";	
				echo "</form>";
			}
		
		echo "<a class='butSignIn' href='Registrierung.php'> <button type='submit'>Registrieren</button> </a>";
		echo "<a class='mobileDelete' href='Warenkorb.php'><button type='submit'>zum Warenkorb</button></a>";
		echo "<a class ='iconCart' href='Warenkorb.php'> <img class='iconCart' src='iconCart.jpg' alt='iconCart'></a>";
		echo "</header>";		
	?>	