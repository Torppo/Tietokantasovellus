<?php
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	$kysyKayttajienMaaraa = $yhteys->prepare("SELECT COUNT(*) FROM kayttajat");
	$kysyKayttajienMaaraa->execute();
	
	$maara = $kysyKayttajienMaaraa->fetchObject();
	if ($maara->count < 2) {
		echo "<p>Käyttäjiä on vain yksi jäljellä. Et voi poistaa enempää.</p>";
	} else {
		$kysely = $yhteys->prepare("DELETE FROM kayttajat WHERE kayttajatunnus=?");
		$kysely->execute(array($_POST["tunnus"]));
	}
	header("Location: ../kayttajat.php");
?>
