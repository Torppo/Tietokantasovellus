<?php
 session_start();

	$salasanat = array();
	$salasanat["Morinth"] = "kissa";
	$salasanat["DM"] = "koira";

	$tunnus = $_POST["tunnus"];
	$salasana = $_POST["salasana"];

	if (isset($salasanat[$tunnus])) {
		if ($salasanat[$tunnus] == $salasana) {
			$_SESSION["kayttaja"] = $tunnus;
			header("Location: /sivut/etusivu.php");
			die();
		}
	}
?>
<p>Tunnus tai salasana on väärin.</p>
<p><a href="index.php">Takaisin</a></p>
