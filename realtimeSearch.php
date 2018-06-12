<?php
		$searchInput = $_POST['searchInput'];
				$searchdb = $pdo->prepare("SELECT ArtikelName 
				FROM artikel as ar
				WHERE ArtikelName LIKE '%$searchInput%'");
				$searchdb->execute();
				$artikel = $searchdb->fetchAll(PDO::FETCH_BOTH);
?>