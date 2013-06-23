<?php
//Muokkaa rakennustyyppiä. Alla testataan mitkä arvot on annettu ja luodaan sen pohjalta update -lause.
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	$conditions = array();
	$data = array();

	if(!empty($_POST['hintabp'])){
		$conditions[] = "hintabp=?";
		$data[] = $_POST['hintabp'];

	} 
	if(!empty($_POST['koko'])){
		$conditions[] = "koko=?";
		$data[] = $_POST['koko'];

	} 
	if(!empty($_POST['talouslisa'])){
	  	$conditions[] = "talouslisa=?";
		$data[] = $_POST['talouslisa'];

	}
	if(!empty($_POST['uskollisuuslisa'])){
	  	$conditions[] = "uskollisuuslisa=?";
		$data[] = $_POST['uskollisuuslisa'];

	}
	if(!empty($_POST['vakaulisa'])){
	  	$conditions[] = "vakauslisa=?";
		$data[] = $_POST['rvakauslisa'];

	}
	if(!empty($_POST['levottomuus'])){
	  	$conditions[] = "levottomuus=?";
		$data[] = $_POST['levottomuus'];

	}
	if(!empty($_POST['puolustus'])){
	  	$conditions[] = "puolustus=?";
		$data[] = $_POST['puolustus'];

	}
	if(!empty($_POST['arvolisa'])){
	  	$conditions[] = "arvolisa=?";
		$data[] = $_POST['arvolisa'];

	}
	$data[] = $_POST['rakennus'];
	$sql = "UPDATE rakennustyypit SET " . implode(", ", $conditions) . " WHERE rakennus=?";
	$kysely = $yhteys->prepare($sql);
	$kysely->execute($data);

	header("Location: ../rakennustyypit.php");
?>
