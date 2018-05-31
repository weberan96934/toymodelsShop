<?php
//Datei gibt zwischen Header und Produkttabelle auf Index.php eine Meldung für den Nutzer aus.

	//Ausgabe für die Registrierung auf Index.php
	if(isset($_POST["Firma"])){
		echo "<p class='whiteFont'> Sie haben sich erfolgreich registriert. Vielen Dank.</p><br>";
		echo "<p class='whiteFont'> Ihre Kundennummer lautet: " . $newKundenNr . "</p><br>";
	}
	//Ausgabe für die Anmeldung auf Index.php
	elseif(isset($_POST["kundenNr"])){ 
		if(isset($kundenNr[0][0])){
			if($kundenNr[0][0] === $kundenNrUser){
				echo "<p class='whiteFont'>Sehr geehrte/r Herr/Frau " . $nachname[0][0] . ", sie haben sich erfolgreich angemeldet.</p><br>";
			}
			else{
			echo "<p class='whiteFont'>Sie haben eine falsche Kundennummer eingegeben.</p>";
			}
		}
	}	
	//Ausgabe für die Abmeldung auf Index.php
	elseif(isset($_POST["kundenNrOut"]))
		echo "<p class='whiteFont'>Sie haben sich erfolgreich abgemeldet.<br>Wir freuen uns auf Ihren nächsten Besuch.</p>";
?>