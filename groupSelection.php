<?php 
	$servername = "localhost";
	$username = "root";
	$dbname = "toymodelsdb";
	
	try {
		$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username);
		// set the PDO error mode to exception
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$getGroupNames = $pdo->prepare("SELECT GruppenName FROM Warengruppen");
		$getGroupNames->execute();
		
		$groupKeyCounter = 0;
		$result = $getGroupNames->setFetchMode(PDO::FETCH_BOTH);
		
		$value = "Alle Produkte";
		echo "<option value = \"" .$value. "\">" . $value. "</option>";
		
		foreach($getGroupNames->fetchAll() as $value) {
			$groupKeyCounter = $groupKeyCounter + 1;
			echo "<option value = \"" .$value[0]. "\">" . $value[0]. "</option>";
		}
		
		}
	catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
?>