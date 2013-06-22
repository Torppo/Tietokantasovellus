<?php
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	try {
	
		$kysely1 = $yhteys->prepare("DELETE FROM stormland WHERE kaupungit = ?");
		$kysely2 = $yhteys->prepare("DELETE FROM rakennukset WHERE kaupunki = ?");
	
		$yhteys->beginTransaction();
		$kysely1->execute(array($_POST["kaupunki"]));
		$kysely2->execute(array($_POST["kaupunki"]));
		$yhteys->commit();
	
	} catch (PDOException $e) {
		$yhteys->rollBack();
		echo "Virhe: " . $e->getMessage();
		}
	header("Location: ../kaupungit.php");
?>
