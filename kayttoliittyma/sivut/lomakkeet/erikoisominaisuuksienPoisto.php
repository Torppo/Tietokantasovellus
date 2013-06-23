<?php
//Suorittaa erikoisominaisuuden poiston.
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	$kysely = $yhteys->prepare("DELETE FROM erikoisominaisuudet WHERE rakennus = ?");
	$kysely->execute(array($_POST["rakennus"]));
	
	header("Location: ../erikoisominaisuudet.php");
?>
