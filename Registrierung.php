<!DOCTYPE HTML>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
		<meta name="author" content="André Weber, Julia Wette, Eva Wittmann">
		<title>Registrierung - Toy Models GmbH</title>
		<link href="style.css" type="text/css" rel="stylesheet"/>
		<link href="mobile.css" type="text/css" rel="stylesheet"/>
		
		<?php
			session_start();
			session_destroy();
			include "lastRequest.php";
		?>
	</head>
	<body>	
		<header> <!-- Logo mit Ueberschrift -->
			<a href="Index.php"><img src="logo.png" alt="BeispielLogo" height="100"></img></a>
			<h1>Konto erstellen</h1>
		</header>
			<form name='registration' action='Index.php' method='post'>
				<section class="tabSignIn regist"> <!-- Erstellung Benutzerkonto -->
					<p>Firma: </p><input class="tabSignInInput" type="text" name="Firma" value="" required="required">
					<p>Nachname: </p><input class="tabSignInInput" type="text" name="Nachname" value="" required="required">
					<p>Vorname: </p><input class="tabSignInInput" type="text" name="Vorname" value="" required="required">
					<p>Telefon: </p><input class="tabSignInInput" type="text" name="Telefon" value="" required="required">
					<p>Stra&szlig;e: </p><input class="tabSignInInput" type="text" name="Strasse" value="" required="required">
					<p>Ort: </p><input class="tabSignInInput" type="text" name="Ort" value="" required="required">
					<p>PLZ: </p><input class="tabSignInInput" type="text" name="PLZ" value="" required="required">
					<p>Land: </p><input class="tabSignInInput" type="text" name="Land" value="" required="required">					
					<button class="tabSignInInput ghost-button-full-color" type="submit">Schon fertig!</button> <br> <br>
				</section>
			</form>
		<footer> <!-- weiterfuehrende Links -->
		</footer>
	</body>
</html>