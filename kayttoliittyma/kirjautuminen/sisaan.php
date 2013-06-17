<?php
 session_start();

	require_once '../yhteys.php';
	
	$tunnus = $_POST["tunnus"];
	$salasana = $_POST["salasana"];
	
	$kysyTunnusta = $yhteys->prepare("SELECT kayttajatunnus, salasana FROM kayttajat WHERE kayttajatunnus=?");
	
	$kysyTunnusta->execute(array($tunnus));
	$kayttaja = $kysyTunnusta->fetchObject();
	
	if ($kayttaja->kayttajatunnus == false) {
		die;
	}
	else if ($kayttaja->salasana == $salasana) {
			$_SESSION["kayttaja"] = $tunnus;
			header("Location: /sivut/etusivu.php");
			die();
	}
?>
<p>Tunnus tai salasana on väärin.</p>
<p><a href="../index.php">Takaisin</a></p>
