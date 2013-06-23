<?php
//Ottaa yhteyden tietokantaan.
	try {
		$yhteys = new PDO("pgsql:dbname=pisapisa");
	} catch(PDOException $e) {
		die("VIRHE: " . $e->getMessage());
	}
	$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
