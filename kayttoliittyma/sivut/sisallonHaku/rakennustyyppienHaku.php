<?php
$conditions = array();
$data = array();


if(!empty($_POST['rakennus'])){
  	$conditions[] = "rakennus=?";
	$data[] = $_POST['rakennus'];

}
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
if(empty($conditions)) {
	$kysely = $yhteys->prepare("SELECT * FROM rakennustyypit");
	$kysely->execute();
} else {
	$sql = "SELECT * FROM rakennustyypit WHERE " . implode(" AND ", $conditions);
	$kysely = $yhteys->prepare($sql);
	$kysely->execute($data);
}
?>
