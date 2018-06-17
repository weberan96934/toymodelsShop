<?php
header("Content-Type:application/json");
require "DbConnector.php";

loadResultFromServer();

function loadResultFromServer()
{
	if(!empty($_GET['suchbegriff']))
	{
		$suchbegriff = $_GET['suchbegriff'];
	}
	if(!empty($_GET['warengruppe']))
	{
		$warengruppe = $_GET['warengruppe'];
	}
	$databaseConnector = new DbConnector();
	$result = array($databaseConnector->sucheTop5ArtikelName($suchbegriff, $warengruppe));
	echo json_encode($result);
}
?>