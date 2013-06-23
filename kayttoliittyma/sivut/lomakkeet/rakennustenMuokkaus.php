<?php
//Muuttaa rakennuksen nimeä.
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	
	$kysely = $yhteys->prepare("UPDATE rakennukset SET nimi=? WHERE id=?");
	$kysely->execute(array($_POST['nimi'], $_POST['id']));

	header("Location: ../rakennukset.php");
?>
