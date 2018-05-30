<!DOCTYPE HTML>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
		<meta name="author" content="André Weber, Julia Wette, Eva Wittmann">
		<title>Anmeldung - Toy Models GmbH</title>
		<link href="style.css" type="text/css" rel="stylesheet"/>
		<link href="mobile.css" type="text/css" rel="stylesheet"/>
		
		<?php
			include "connectDb";
		?>
	</head>
	<body>
		<header> <!-- Logo mit Titel -->
			<a href="Index.php"><img src="logo.png" alt="BeispielLogo" height="100"></img></a> <br> <br>
			<h1>Anmeldung</h1> 
		</header>
		<section class="tabSignIn"> <!-- Anmeldung des Benutzers -->	
			<form name="login" action="index.php" method="post">
				<p>Kundennummer: </p><input name="kundenNr" class="tabSignInInput" type="text" name="kundenNr" value="">
				<p>Passwort: </p><input class="tabSignInInput" type="password" name="Passwort" value="">		
				<a href="Index.php"> <button class="tabSignInInput ghost-button-full-color" type="submit">Anmelden</button><br><br> </a>
			</form>
		</section>
		<footer> <!-- weiterfuehrende Links -->
		<a class="impressum" href="Registrierung.php"><p>Sie haben noch kein Konto? <br>Hier geht es zur Registrierung.</p></a>
		</footer>
	</body>
</html>
			
<!-- Keine Header mit nur einer Überschrift! https://wiki.selfhtml.org/wiki/HTML/Seitenstrukturierung/header			