<?php 
	include "connectDb";
		
	$getGroupNames = $pdo->prepare("SELECT GruppenName FROM Warengruppen");
	$getGroupNames->execute();
	
	$groupKeyCounter = 0;
	$result = $getGroupNames->setFetchMode(PDO::FETCH_BOTH);
	
	$value = "Alle Produkte";
	echo "<option name='$value' value='$value'>" . $value . "</option>";
	
	foreach($getGroupNames->fetchAll() as $value) {
		$groupKeyCounter = $groupKeyCounter + 1;
		echo "<option name='$value[0]' value='$value[0]'>" . $value[0] . "</option>";
	}
?>