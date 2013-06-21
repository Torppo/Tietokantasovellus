<?php
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	require_once 'yleishakuKysely.php';
?>

<html>
 <head>
  <title>Hakutulokset</title>
 </head>
 <body>
 
	<?php
		require_once '../sivurakenne.php';
	?>

	<p>
		<?php
		echo "<table border>";
		while ($rivi = $stormlandKysely->fetch()) {
			echo "<tr>";
			echo "<td>" . $rivi["kaupungit"] . "</td>";
			echo "<td>" . $rivi["asukasluku"] . "</td>";
			echo "<td>" . $rivi["rantoja"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		?>
	</p>	

	<p>
		<?php
		echo "<table border>";
		while ($rivi = $rakennuksetKysely->fetch()) {
			echo "<tr>";
			echo "<td>" . $rivi["nimi"] . "</td>";
			echo "<td>" . $rivi["rakennustyyppi"] . "</td>";
			echo "<td>" . $rivi["kaupunki"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		?>
	</p>	

	<p>
		<?php
		echo "<table border>";
		while ($rivi = $erikoisominaisuudetKysely->fetch()) {
			echo "<tr>";
			echo "<td>" . $rivi["rakennus"] . "</td>";
			echo "<td>" . $rivi["erikoisominaisuus"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		?>
	</p>	

	<p>
		<?php
		echo "<table border>";
		while ($rivi = $rakennustyypitKysely->fetch()) {
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

	<?php
		require_once '../linkit/kaikkiLinkit.php';
	?>	
 </body>
</html>
