<?php
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	$kysely = $yhteys->prepare("INSERT INTO stormland (kaupungit, asukasluku, rantoja) VALUES (?, ?, ?)");
	$kysely->execute(array($_POST["kaupunki"], $_POST["asukasluku"], $_POST["rantoja"]));
	
	header("Location: ../kaupungit.php");
?>
