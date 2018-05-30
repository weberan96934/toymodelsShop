<?php
			session_start();
			
			echo "<header class='tabHeader'> <!-- Kopfzeile des Dokuemnts -->";
			echo "<a href='Index.php'><img class='logo' src='logo.png' alt='BeispielLogo'></img></a>";
			echo "<label class='filter'><p class='labFilter'>Kategorie:</p><select class='filter'> <!-- Kategorie-Filter -->";
			include "groupSelection.php";
			echo "</select></label>";
			
			echo "<form name='search' action='index.php' method='post' style='inline'>";
			echo "<input class='search' name='searchInput' type='text' value=''> <!-- Suchfeld -->";
			echo "<a class ='iconSearch' href='Index.php'> <img class='iconSearch' src='iconSearch.jpg' alt='iconDelete'>";
			echo "<a class='mobileDelete' href='Index.php'> <button type='submit'>Suchen</button></a>";
			echo "</form>";
				if(isset($_SESSION["kundenNr"])){
					//if($_SESSION["kundenNr"] != "Gast"){						
						echo "<form name='logoutIndex' class='noMargin' action='logout.php' method='post'>";
						echo "<label class='cusNr mobileDelete'>Kundennummer: <input class='mobileDelete' type='text' name='Kundennummer' value='' size='7' maxlength='7'></label>";
							echo "<a class='butSignIn' href='logout.php'> <button type='submit'>Abmelden</button> </a>";
						echo "</form>";
					//}
				}
				else{
					echo "<form name='loginIndex' action='login.php' method='post'>";
					echo "<label class='cusNr mobileDelete'>Kundennummer: <input class='mobileDelete' type='text' name='Kundennummer' value='' size='7' maxlength='7'></label>";
						echo "<a class='butSignIn' href='login.php'> <button type='submit'>Anmelden</button> </a>";
					echo "</form>";
				}
			?>