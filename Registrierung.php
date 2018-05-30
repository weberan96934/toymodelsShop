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
			include "lastRequest.php";
		?>
	</head>
	<body>
		<header> <!-- Logo mit Ueberschrift -->
			<a href="Index.php"><img src="logo.png" alt="BeispielLogo" height="100"></img></a>
			<h1>Konto erstellen</h1>
		</header>
			<form name="registration" action="index.php" method="post">
				<section class="tabSignIn regist"> <!-- Erstellung Benutzerkonto -->
					<p>Firma: </p><input class="tabSignInInput" type="text" name="Firma" value="">
					<p>Vorname: </p><input class="tabSignInInput" type="text" name="Vorname" value="">
					<p>Nachname: </p><input class="tabSignInInput" type="text" name="Nachname" value="">
					<p>Geburtsdatum: </p><input class="tabSignInInput" type="text" name="Geburtsdatum" value="">
					<p>Mail: </p><input class="tabSignInInput" type="text" name="Mail" value="">
					<p>Passwort: </p><input class="tabSignInInput" type="password" name="Passwort1" value="">
					<p>Passwort wiederholen: </p><input class="tabSignInInput" type="password" name="Passwort2" value="">		
					<a href="Index.php"> <button class="tabSignInInput ghost-button-full-color" type="submit">Schon fertig!</button> </a> <br> <br>
				</section>
			</form>
		<footer> <!-- weiterfuehrende Links -->
			<a class="impressum" href="Anmeldung.php"><p>Sie haben bereits ein Konto? Hier geht es zur Anmeldung.</p></a>
		</footer>
	</body>
</html>