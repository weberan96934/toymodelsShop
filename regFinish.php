<?php
$firma = $_POST['Firma'];
$vorname = $_POST['Vorname'];
$nachname = $_POST['Nachname'];
$geburtsdatum = $_POST['Geburtsdatum'];
$mail = $_POST['Mail'];
$passwort1 = $_POST['Passwort1'];
$passwort2 = $_POST['Passwort2'];

$servername = "localhost";
$username = "root";
$dbname = "toymodelsdb";

try	{
	$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
catch(PDOException $e)
	{
	echo "Connection failed: " . $e->getMassage();
	die("Abbruch ...");
	}

$sqlKundenNr = $pdo->query("SELECT MAX(KundenNr) FROM kunden");
$kundenNrMax = $sqlKundenNr->fetchAll(PDO::FETCH_BOTH);
$newKundenNr = $kundenNrMax[0][0] + 1;
	
$sqlRegUser = $pdo->prepare("INSERT INTO kunden VALUES ('$newKundenNr', '$firma', '$nachname', '$vorname', 'unbekannt', 'unbekannt', 'unbekannt', 'unbekannt', 'unbekannt', '1002', 'NULL')");
$sqlRegUser->execute();

echo "Sie haben sich erfolgreich angemeldet. Vielen Dank.<br>";
echo "Ihre Kundennummer lautet: " . $newKundenNr . "<br>";
?>
<a href="index.php"> <button type="submit">zur Hauptseite</button> </a>
