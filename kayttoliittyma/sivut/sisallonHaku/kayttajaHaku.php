<?php
$conditions = array();
$data = array();


if(!empty($_POST['kayttajatunnus'])){
  	$conditions[] = "kayttajatunnus=?";
	$data[] = $_POST['kayttajatunnus'];

}
if(!empty($_POST['nimi'])){
	$conditions[] = "nimi=?";
	$data[] = $_POST['nimi'];

} 
if(!empty($_POST['rooli'])){
	$conditions[] = "rooli=?";
	$data[] = $_POST['rooli'];

} 

if(empty($conditions)) {
	$kysely = $yhteys->prepare("SELECT * FROM kayttajat");
	$kysely->execute();
} else {
	$sql = "SELECT * FROM kayttajat WHERE " . implode(" AND ", $conditions);
	$kysely = $yhteys->prepare($sql);
	$kysely->execute($data);
}
?>
