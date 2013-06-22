<?php
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	$kysely = $yhteys->prepare("DELETE FROM rakennukset WHERE id = ?");
	$kysely->execute(array($_POST["tunnus"]));
	
	header("Location: ../rakennukset.php");
?>
