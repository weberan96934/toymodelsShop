<?php
	session_start();
	include "connectDb.php";

	$searchInput = $_GET['suchbegriff'];
	$searchdb = $pdo->prepare("SELECT ArtikelName 
								FROM artikel as ar
								WHERE ArtikelName LIKE '%$searchInput%'
								LIMIT 5");
	$searchdb->execute();
	$arr = $searchdb->fetchAll(PDO::FETCH_BOTH);
	$_SESSION["teilSuche"] = $searchInput;
	$arrJson = json_encode($arr);
	echo $arrJson;
	setcookie ("topFiveCookie", $arrJson, time() + 60 * 60 * 24 * 365);
?>
<script>
	alert("halt");
	var url = "//localhost/Index.php";
	window.location = url;
</script>