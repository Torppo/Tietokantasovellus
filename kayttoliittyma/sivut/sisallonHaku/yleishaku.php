<?php
	require_once '../istunto.php';
	require_once '../../yhteys.php';
	require_once 'yleishakuKysely.php';
?>

<html>
 <head>
  	<title>Hakutulokset</title>
	<?php
		require_once '../tyylit/ylaKehys.html';
	?>
 </head>
 <body>
 	<div id="framecontent">
	<div class="innertube">
	<?php
		require_once '../sivurakenne.php';
	?>
	</div>
	</div>

	<div id="maincontent">
	<div class="innertube">
	<p>
		<?php
		echo "<table border>
		<tr>
		<th>Kaupungit</th>
		<th>Asukasluku</th>
		<th>Rantaruutuja</th>
		</tr>";
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
		echo "<table border>
		<tr>
		<th>Tunnus</th>
		<th>Nimi</th>
		<th>Rakennustyyppi</th>
		<th>Kaupunki</th>
		</tr>";
		while ($rivi = $rakennuksetKysely->fetch()) {
			echo "<tr>";
			echo "<td>" . $rivi["id"] . "</td>";
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
		echo "<table border>
		<tr>
		<th>Rakennus</th>
		<th>Erikoisominaisuus</th>
		</tr>";
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
		echo "<table border>
		<tr>
		<th>Rakennus</th>
		<th>Hinta(BP)</th>
		<th>Koko(ruutuja)</th>
		<th>Talouslisa</th>
		<th>Uskollisuuslisa</th>
		<th>Vakauslisa</th>
		<th>Levottomuus</th>
		<th>Puolustus</th>
		<th>Arvolisa</th>
		</tr>";
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
	</div>
	</div>
 </body>
</html>
