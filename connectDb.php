<?php
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
?>