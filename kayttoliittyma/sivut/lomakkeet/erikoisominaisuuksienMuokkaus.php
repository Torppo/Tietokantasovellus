<?php
//Suorittaa erikoisominaisuuden muokkauksen.
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	$kysely = $yhteys->prepare("UPDATE erikoisominaisuudet SET erikoisominaisuus=? WHERE rakennus=?");
	$kysely->execute(array($_POST["erikoisominaisuus"], $_POST["rakennus"]));

	header("Location: ../erikoisominaisuudet.php");
?>
