<?php
//Muuttaa kirjautuneena olevan käyttäjän tietoja. Ensin tarkistetaan onko kayttaja varmasti sama henkilö joka kirjautui sovellukseen. Jonka jäkeen määritetään muutettavat tiedot lomakkeen kenttien syötön mukaan. Jos salasanaa vaihdetaan tulee se kirjoittaa kahdesti, jotta se tulisi muutettua oikein.
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	$kysySalasanaa = $yhteys->prepare("SELECT salasana FROM kayttajat WHERE kayttajatunnus=?");
	
	$kysySalasanaa->execute(array($_SESSION["kayttaja"]));
	$salasana = $kysySalasanaa->fetchObject();
	
	if($salasana->salasana==$_POST["salasana"]) {
		$conditions = array();
		$data = array();
			
		if(!empty($_POST['nimi'])) {
			$conditions[] = "nimi=?";
			$data[] = $_POST['nimi'];
		} 
		if(!empty($_POST['salasana1']) && !empty($_POST["salasana2"])) {
			if($_POST["salasana1"]===$_POST["salasana2"]) {
				$conditions[] = "salasana=?";
				$data[] = $_POST["salasana1"];
			} else {
				echo "<p>Salasanat eivät täsmää.</p>";
				die();
			}
		}
		if(!empty($_POST['rooli'])) {
			$conditions[] = "rooli=?";
			$data[] = $_POST['rooli'];
		} 
		$data[] = $_SESSION["kayttaja"];
		$sql = "UPDATE kayttajat SET " . implode(", ", $conditions) . " WHERE kayttajatunnus=?";
		$kysely = $yhteys->prepare($sql);
		$kysely->execute($data);
		
	} else {
		echo "<p>Vanha salasanasi on väärin.</p>";
	}
?>
<p><a href="muutaKayttajatietoja.php">Takaisin</a></p>
