<?php
	session_start();
	include "connectDb.php";

	$searchInput = $_GET['suchbegriff'];
	$searchdb = $pdo->prepare("SELECT ArtikelName 
								FROM artikel as ar
								WHERE ArtikelName LIKE '%$searchInput%'
								LIMIT 5");
	$searchdb->execute();
	$arr = $searchdb->fetchAll(PDO::FETCH_COLUMN);
	$_SESSION["teilSuche"] = $searchInput;
	print_r ($arr);
	echo "<br>";
	echo json_encode($arr);
?>
<script>
	alert("stop");
	var url = "//localhost/Index.php";
	window.location = url;
</script>