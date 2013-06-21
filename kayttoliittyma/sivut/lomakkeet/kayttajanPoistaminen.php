<?php
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	$conditions = array();	
	$data = array();

	try {
		if(!empty($_POST['tunnus'])){
		  	$conditions[] = "kayttajatunnus=?";
			$data[] = $_POST['tunnus'];

		}
		if(!empty($_POST['nimi'])){
			$conditions[] = "nimi=?";
			$data[] = $_POST['nimi'];

		} else {
			$sql = "DELETE FROM kayttajat WHERE " . implode(" OR ", $conditions);
			$kysely = $yhteys->prepare($sql);
			$kysely->execute($data);
		}
	} catch (PDOException $e) {
		$yhteys->rollBack();
		echo "Virhe: " . $e->getMessage();
	}
	header("Location: /sivut/lomakkeet/poistaKayttaja.php");
?>
