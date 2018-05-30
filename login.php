<?php
$kundenNrUser = $_POST['Kundennummer'];

include "connectDb.php";

$sqlKundenNr = $pdo->query("select KundenNr from kunden where KundenNr=$kundenNrUser");
$kundenNr = $sqlKundenNr->fetchAll(PDO::FETCH_BOTH);

if(isset($kundenNr[0][0])){
	if($kundenNr[0][0] === $kundenNrUser){
	$sqlNachname = $pdo->query("select Nachname from kunden where KundenNr=$kundenNrUser");
	$nachname = $sqlNachname->fetchAll(PDO::FETCH_BOTH);

	session_start();
	
	if(isset($_SESSION["cart"])) //für das Merken der Produkte im Warenkorb bei Login/Logout
		$cart = $_SESSION["cart"];
		
	session_destroy();
	session_start();
	$_SESSION["kundenNr"] = $kundenNrUser;
	
	if(isset($cart)) //nach LogIn Warenkorbprodukte wieder in Session schreiben
		$_SESSION["cart"] = $cart;
			
	echo "Sehr geehrte/r Herr/Frau " . $nachname[0][0] . ", sie haben sich erfolgreich angemeldet.";
	}
}
else{
	echo "Sie haben eine falsche Kundennummer eingegeben.";
}
?>

<form name="logout" action="logout.php" method="post">
	<a href="logout.php"><p>Abmelden</p> </a>
</form>
<a href="index.php"> <button type="submit">zur Hauptseite</button> </a>
