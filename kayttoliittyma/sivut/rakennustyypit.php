<?php
	require_once 'istunto.php';
	require_once '../yhteys.php';
	require_once 'sisallonHaku/rakennustyyppienHaku.php';
?>

<html>
 <head>
  <title>Rakennustyypit</title>
 </head>
 <body>
 
	<?php
		require_once 'sivurakenne.php';
	?>

	<h2>Rakennustyypit</h2
	<h3>Rakennustyyppihaku</h3>

	<form  action="rakennustyypit.php" method="post">
	<p>Rakennus: <br>
	<input type="text" name="rakennus"></p>
	<p>Hinta(BP): <br>
	<input type="integer" name="hintabp"></p>
	<p>Koko: <br>
	<input type="integer" name="koko"></p>
	<p>Talouslisaä: <br>
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
	<input type="submit" value="Hae">
	</form>

	<p>
	<?php
		echo "<table border>";
		while ($rivi = $kysely->fetch()) {
			echo "<tr>";
			echo "<td>" . $rivi["rakennus"] . "</td>";
			echo "<td>" . $rivi["hintabp"] . "</td>";
			echo "<td>" . $rivi["koko"] . "</td>";	
			echo "<td>" . $rivi["talouslisa"] . "</td>";	
			echo "<td>" . $rivi["uskollisuuslisa"] . "</td>";	
			echo "<td>" . $rivi["vakauslisa"] . "</td>";	
			echo "<td>" . $rivi["levottomuus"] . "</td>";	
			echo "<td>" . $rivi["puolustus"] . "</td>";
			echo "<td>" . $rivi["arvolisa"] . "</td>";		
			echo "</tr>";
		}
		echo "</table>";
	?>
	</p>
 </body>
</html>
