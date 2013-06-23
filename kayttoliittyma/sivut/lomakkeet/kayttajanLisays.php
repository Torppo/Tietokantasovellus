<?php
//Lisää uuden käyttäjän.
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	if($_POST["salasana1"]===$_POST["salasana2"]) {
		$kysely = $yhteys->prepare("INSERT INTO kayttajat (kayttajatunnus, nimi, salasana, rooli) VALUES (?, ?, ?, ?)");
		$kysely->execute(array($_POST["kayttajatunnus"], $_POST["nimi"], $_POST["salasana1"], $_POST["rooli"]));
		echo "<p>Käyttäjän luonti onnistui.</p>";
	} else {
		echo "<p>Salasanat eivät täsmää.</p>";
	}
?>
<p><a href="lisaaKayttaja.php">Takaisin lomakkeeseen</a></p>
<p><a href="../kayttajat.php">Käyttäjiin</a></p>
