<?php
		/*$searchInput = $_POST['searchInput'];
				$searchdb = $pdo->prepare("SELECT ArtikelName 
				FROM artikel as ar
				WHERE ArtikelName LIKE '%$searchInput%'");
				$searchdb->execute();
				$artikel = $searchdb->fetchAll(PDO::FETCH_BOTH);*/
				
				
		echo $_GET["suchbegriff"];
?>
<script>
	alert("Halt Stop! Jetzt alerte ich!");
	var url = "//localhost/Index.php";
	window.location = url;
</script>