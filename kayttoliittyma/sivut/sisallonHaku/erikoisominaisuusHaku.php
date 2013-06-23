<?php
//Erikoisominaissuuksien hakukysely. Jos rakennus -kenttä lomakkeessa on tyhjä hakee kysely koko taulun sisällön. Jos se ei ole tyhjä hakee kysely rakennusta koskevan erikoisominaisuuden.
	if(empty($_POST["rakennus"])) {
		$kysely = $yhteys->prepare("SELECT * FROM erikoisominaisuudet");
		$kysely->execute();
	} else {
		$kysely = $yhteys->prepare("SELECT * FROM erikoisominaisuudet wHERE rakennus=?");
		$kysely->execute(array($_POST["rakennus"]));
	}
?>
