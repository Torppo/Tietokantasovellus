<?php
$conditions = array();
$data = array();


if(!empty($_POST['kaupungit'])){
  	$conditions[] = "kaupungit=?";
	$data[] = $_POST['kaupungit'];

}
if(!empty($_POST['asukasluku'])){
	$conditions[] = "asukasluku=?";
	$data[] = $_POST['asukasluku'];

} 
if(!empty($_POST['rantoja'])){
	$conditions[] = "rantoja=?";
	$data[] = $_POST['rantoja'];

} 

if(empty($conditions)) {
	$kysely = $yhteys->prepare("SELECT * FROM stormland");
	$kysely->execute();
} else {
	$sql = "SELECT * FROM stormland WHERE " . implode(" AND ", $conditions);
	$kysely = $yhteys->prepare($sql);
	$kysely->execute($data);
}
?>
