<?php
//Lisää uuden rakennuksen. Jos simeä ei anneta tulee nimeksi 'ei määritelty'.
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	if(!empty($_POST["nimi"])) {
		$kysely = $yhteys->prepare("INSERT INTO rakennukset (nimi, rakennustyyppi, kaupunki) VALUES (?, ?, ?)");
		$kysely->execute(array($_POST["nimi"], $_POST["rakennustyyppi"], $_POST["kaupunki"]));
	} else {
		$kysely = $yhteys->prepare("INSERT INTO rakennukset (nimi ,rakennustyyppi, kaupunki) VALUES ('ei määritelty', ?, ?)");
		$kysely->execute(array($_POST["rakennustyyppi"], $_POST["kaupunki"]));
	}
	header("Location: ../rakennukset.php");
?>
