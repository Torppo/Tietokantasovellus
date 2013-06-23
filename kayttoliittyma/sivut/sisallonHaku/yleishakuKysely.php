<?php
//Yleishaun kyselyn toteutus. Testataan onko hakusana numero. Jos se on numero, tehdään kysely kaikkiin paitsi käyttäjät -tauluun ja niihin tauluihin joissa ei ole numeroarvoja ja vain numeroarvoiksi määriteltyyn sisältöön. Jos hakusana ei ollut numero tehdään kysely kaikkiin paitsi käyttäjät -tauluun ja vain merkkijonoiksi määriteltyyn sisältöön.
	if(is_numeric($_POST["hakusana"])) {
		try {
			$stormlandKysely = $yhteys->prepare("SELECT * FROM stormland WHERE asukasluku=? OR rantoja=?");
			$rakennustyypitKysely = $yhteys->prepare("SELECT * FROM rakennustyypit WHERE hintabp=? OR koko=? OR talouslisa=? OR uskollisuuslisa=? OR vakauslisa=? OR levottomuus=? OR puolustus=? OR arvolisa=?");

			$yhteys->beginTransaction();
			$stormlandKysely->execute(array($_POST["hakusana"], $_POST["hakusana"]));
			$rakennustyypitKysely->execute(array($_POST["hakusana"], $_POST["hakusana"], $_POST["hakusana"], $_POST["hakusana"], $_POST["hakusana"], $_POST["hakusana"], $_POST["hakusana"], $_POST["hakusana"]));
			$yhteys->commit();

		} catch(PDOException $e) {
			$yhteys->rollBack();
			echo "Virhe: " . $e->getMessage();
			}
	} else {
		try{
			$stormlandKysely = $yhteys->prepare("SELECT * FROM stormland WHERE kaupungit=?");
			$rakennuksetKysely = $yhteys->prepare("SELECT * FROM rakennukset WHERE nimi=? OR rakennustyyppi=? OR kaupunki=?");
			$erikoisominaisuudetKysely = $yhteys->prepare("SELECT * FROM erikoisominaisuudet WHERE rakennus=?");
			$rakennustyypitKysely = $yhteys->prepare("SELECT * FROM rakennustyypit WHERE rakennus=?");

			$yhteys->beginTransaction();
			$stormlandKysely->execute(array($_POST["hakusana"]));
			$rakennuksetKysely->execute(array($_POST["hakusana"], $_POST["hakusana"], $_POST["hakusana"]));
			$erikoisominaisuudetKysely->execute(array($_POST["hakusana"]));
			$rakennustyypitKysely->execute(array($_POST["hakusana"]));
			$yhteys->commit();

		} catch(PDOException $e) {
			$yhteys->rollBack();
			echo "Virhe: " . $e->getMessage();
			}
	}
?>
