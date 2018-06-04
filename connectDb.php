<?php
$servername = "db-training.informatik.fh-nuernberg.de";
$username = "db18_wittmannev";
$dbname = "db18_wittmannev_tm";
$passwort = "Informatik";

try	{
	$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwort);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
catch(PDOException $e)
	{
	echo "Connection failed: " . $e->getMessage();
	die("Abbruch ...");
	}
?>