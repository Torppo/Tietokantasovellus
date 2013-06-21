<?php
	if(empty($_POST["rakennus"])) {
		$kysely = $yhteys->prepare("SELECT * FROM erikoisominaisuudet");
		$kysely->execute();
	} else {
		$kysely = $yhteys->prepare("SELECT * FROM erikoisominaisuudet wHERE rakennus=?");
		$kysely->execute(array($_POST["rakennus"]));
	}
?>
