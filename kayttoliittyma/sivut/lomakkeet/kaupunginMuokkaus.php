<?php
//Suorittaa kaupungin muokkauksen.
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	
	$conditions = array();
	$data = array();

	if(!empty($_POST['asukasluku'])){
	  	$conditions[] = "asukasluku=?";
		$data[] = $_POST['asukasluku'];

	}
	if(!empty($_POST['rantoja'])){
	  	$conditions[] = "rantoja=?";
		$data[] = $_POST['rantoja'];

	}
	$data[] = $_POST['kaupunki'];
	$sql = "UPDATE stormland SET " . implode(", ", $conditions) . " WHERE kaupungit=?";
	$kysely = $yhteys->prepare($sql);
	$kysely->execute($data);

	header("Location: ../kaupungit.php");
?>
