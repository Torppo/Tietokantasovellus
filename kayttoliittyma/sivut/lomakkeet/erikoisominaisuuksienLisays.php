<?php
//Suorittaa erikoisominaisuuden lisäyksen.
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	$kysely = $yhteys->prepare("INSERT INTO erikoisominaisuudet (rakennus, erikoisominaisuus) VALUES (?, ?)");
	$kysely->execute(array($_POST["rakennus"], $_POST["erikoisominaisuus"]));

	header("Location: ../erikoisominaisuudet.php");
?>
