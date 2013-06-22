<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  <title>Muokkaa rakennustyyppejä</title>
 </head>
 <body>
 
	<?php
		require_once '../sivurakenne.php';
	?>

	<h2>Muokkaa rakennustyyppejä</h2>
	
	<form action="rakennustyyppienMuokkaus.php" method="post">
	<p>Rakennus: <br>
	<input type="text" name="rakennus"></p>
	<p>Hinta(BP): <br>
	<input type="integer" name="hintabp"></p>
	<p>Koko: <br>
	<input type="integer" name="koko"></p>
	<p>Talouslisä: <br>
	<input type="integer" name="talouslisa"></p>
	<p>Uskollisuuslisä: <br>
	<input type="integer" name="uskollisuuslisa"></p>
	<p>Vakauslisä: <br>
	<input type="integer" name="vakauslisa"></p>
	<p>Levottomuus: <br>
	<input type="integer" name="levottomuus"></p>
	<p>Puolustus: <br>
	<input type="integer" name="puolustus"></p>
	<p>Arvolisä: <br>
	<input type="integer" name="arvolisa"></p>
	<input type="submit" value="Muuta">
	</form> 

<a href="http://pisapisa.users.cs.helsinki.fi/sivut/rakennustyypit.php">Rakennustyypit</a>

 </body>
</html>
