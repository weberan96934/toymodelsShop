<?php
	include "connectDb.php";
	
	if(isset($_SESSION['cart']))
	{
	
		$getArticles = $pdo->prepare("SELECT ArtikelName, Massstab, Listenpreis
			FROM artikel
			WHERE ArtikelNr=:artNr");
		$getArticles->bindParam(':artNr', $artNr);
		
		$sum = 0;
		$counter = 1;
		
		foreach($_SESSION['cart'] as $value)
		{
			$artNr = $value[0];
			$menge = $value[1];
			$getArticles->execute();
			$result = $getArticles->setFetchMode();
			$articleInfo = $getArticles->fetch();
			echo '<p class="tabRowType'.$counter.' article">'. $articleInfo[0]. '</p>';
			echo '<p class="tabRowType'.$counter.' artNr">'. $artNr. '</p>';
			echo '<p class="tabRowType'.$counter.' description">'. $articleInfo[1]. '</p>';
			echo '<p class="tabRowType'.$counter.' priceSingle">' . $articleInfo[2]. '&euro;</p>';
			echo '<p class="tabRowType'.$counter.' menge">' .$menge. '</p>';
			echo '<p class="tabRowType'.$counter.' priceSum">'.$menge*$articleInfo[2]. '&euro;</p>';
			$sum = $sum + $menge*$articleInfo[2];
			if($counter==1)
			{
				$counter++;
			}
			else
			{
				$counter--;
			}
		}
		echo "<br>";
		echo '<p class="tabRowType1 tabCartSubtotalText">Zwischensumme:</p><p class="tabRowType1 price tabCartSubtotalPrice">'. $sum . '&euro;</p>';
		echo '<p class="tabRowType1 tabCartShipText">Versandkosten:</p> <p class="tabRowType1 price tabCartShipPrice">5,00 &euro;</p>';
		$sum = $sum + 5;
		echo '<p class="tabRowType2 tabCartBruttoText">Brutto:</p> <p class="tabRowType2 price tabCartBruttoPrice">'.$sum. '&euro;</p>';
		echo '<a class="tabCartButton" href="Index.php"> <button class="ghost-button-full-color tabCartButton" type="submit">Bestellung abschlie&szlig;en</button>';
		
	}
	else
	{
		echo "Warenkorb leer";
	}