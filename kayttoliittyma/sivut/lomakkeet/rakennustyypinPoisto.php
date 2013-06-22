<?php
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	$kysely = $yhteys->prepare("DELETE FROM rakennustyypit WHERE rakennus = ?");
	$kysely->execute(array($_POST["rakennus"]));
	
	header("Location: ../rakennustyypit.php");
?>
