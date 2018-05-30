<?php
//Datei gibt zwischen Header und Produkttabelle auf Index.php eine Meldung für den Nutzer aus.

	//Ausgabe für die Registrierung auf Index.php
	if(isset($_POST["Firma"])){
		echo "Sie haben sich erfolgreich registriert. Vielen Dank.<br>";
		echo "Ihre Kundennummer lautet: " . $newKundenNr . "<br>";
	}
	//Ausgabe für die Anmeldung auf Index.php
	elseif(isset($_POST["kundenNr"])){ 
		if(isset($kundenNr[0][0])){
			if($kundenNr[0][0] === $kundenNrUser){
				echo "Sehr geehrte/r Herr/Frau " . $nachname[0][0] . ", sie haben sich erfolgreich angemeldet.<br>";
			}
			else{
			echo "Sie haben eine falsche Kundennummer eingegeben.";
			}
		}
	}	
?>