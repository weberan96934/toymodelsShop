<?php 
	class DbConnector{
		
		// Artikel zurückgeben, deren Name zum Suchwort passt, evtl. auf eine Warengruppe eingeschränkt
		public function sucheTop5ArtikelName($artikelname, $warengruppe)
		{
		  $this->open();

		  // ZUsätzlich zum Artikelname soll die Warengruppe berücksichtigt werden.
		  if($warengruppe !== "all")
		  {
			  $sql =
			  "SELECT
			  A.ArtikelName  
			  FROM Artikel A
			  INNER JOIN WarenGruppen W
			  ON A.GruppenNr = W.GruppenNr
			  WHERE A.ArtikelName LIKE ?
			  AND W.GruppenName = ? 
			  LIMIT 5;";
			  
			  $statement = $this->connection->prepare($sql);
			  $artikelnameWildcarded = "%" . $artikelname . "%";            
			  $statement->bindParam(1, $artikelnameWildcarded);        
			  $statement->bindParam(2, $warengruppe);
			
			  return $this->fetchFromDB($statement);            
		  }
		  else
		  {
			  $sql =
			  "SELECT
			  A.ArtikelName
			  FROM Artikel A
			  INNER JOIN WarenGruppen W
			  ON A.GruppenNr = W.GruppenNr
			  WHERE A.ArtikelName LIKE ?
			  LIMIT 5;";
			  
			  $statement = $this->connection->prepare($sql);
			  $artikelnameWildcarded = "%" . $artikelname . "%"; 
			  $statement->bindParam(1, $artikelnameWildcarded);
			  
			  return $this->fetchFromDB($statement);
		  }
		}
	}	
	
?>