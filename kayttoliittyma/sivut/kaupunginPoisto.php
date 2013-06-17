<?php
	try {
		$yhteys = new PDO("pgsql:dbname=pisapisa");
	} catch(PDOException $e) {
		die("VIRHE: " . $e->getMessage());
	}
	
	try {
		$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$kysely1 = $yhteys->prepare("DELETE FROM stormland WHERE kaupungit = ?");
		$kysely2 = $yhteys->prepare("DELETE FROM rakennukset WHERE kaupunki = ?");
	
		$yhteys->beginTransaction();
		$kysely1->execute(array($_POST["kaupunki"]));
		$kysely2->execute(array($_POST["kaupunki"]));
		$yhteys->commit();
	
		header("Location: /sivut/kaupungit.php");
	} catch (PDOException $e) {
		$yhteys->rollBack();
		echo "Virhe: " . $e->getMessage();
		}

?>
