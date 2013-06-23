<?php
//Lisää rakennustyypin. Rakennus, hintbp ja koko ovat pakollisia arvoja. Jos muita arvoja ei anneta laitetaan niihin 0.
	require_once '../istunto.php';
	require_once '../../yhteys.php';	
	
	$data = array();

	$data[] = $_POST['rakennus'];
	$data[] = $_POST['hintabp'];
	$data[] = $_POST['koko'];


	if(!empty($_POST['talouslisa'])){
		$data[] = $_POST['talouslisa'];

	} else {
		$data[] = 0;
	}
	if(!empty($_POST['uskollisuuslisa'])){
		$data[] = $_POST['uskollisuuslisa'];

	} else {
		$data[] = 0;
	}
	if(!empty($_POST['vakauslisa'])){
		$data[] = $_POST['vakauslisa'];

	} else {
		$data[] = 0;
	}
	if(!empty($_POST['levottomuus'])){
		$data[] = $_POST['levottomuus'];

	} else {
		$data[] = 0;
	}
	if(!empty($_POST['puolustus'])){
		$data[] = $_POST['puolustus'];

	} else {
		$data[] = 0;
	}
	if(!empty($_POST['arvolisa'])){
		$data[] = $_POST['arvolisa'];

	} else {
		$data[] = 0;
	}
		$sql = 'INSERT INTO rakennustyypit (rakennus, hintabp, koko, talouslisa, uskollisuuslisa, vakauslisa, levottomuus, puolustus, arvolisa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$kysely = $yhteys->prepare($sql);
		$kysely->execute($data);
	header("Location: ../rakennustyypit.php");
?>
