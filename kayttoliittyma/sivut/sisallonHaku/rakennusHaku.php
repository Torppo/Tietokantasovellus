<?php
$conditions = array();
$data = array();


if(!empty($_POST['nimi'])){
  	$conditions[] = "nimi=?";
	$data[] = $_POST['nimi'];

}
if(!empty($_POST['rakennustyyppi'])){
	$conditions[] = "rakennustyyppi=?";
	$data[] = $_POST['rakennustyyppi'];

} 
if(!empty($_POST['kaupunki'])){
	$conditions[] = "kaupunki=?";
	$data[] = $_POST['kaupunki'];

} 

if(empty($conditions)) {
	$kysely = $yhteys->prepare("SELECT * FROM rakennukset");
	$kysely->execute();
} else {
	$sql = "SELECT * FROM rakennukset WHERE " . implode(" AND ", $conditions);
	$kysely = $yhteys->prepare($sql);
	$kysely->execute($data);
}
?>
