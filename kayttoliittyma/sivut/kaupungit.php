<?php
	require_once 'istunto.php';
	require_once '../yhteys.php';
	require_once 'sisallonHaku/kaupunkiHaku.php';
?>

<html>
 <head>
  <title>Kaupungit</title>
 </head>
 <body>
 
	<?php
		require_once 'sivurakenne.php';
	?>
	
	<h2>Kaupungit</h2>
	<h3>Kaupunkihaku</h3>
	<form  action="kaupungit.php" method="post">
	<p>Kaupunki: <br>
	<input type="text" name="kaupungit"></p>
	<p>Asukasluku: <br>
	<input type="integer" name="asukasluku"></p>
	<p>Rantoja: <br>
	<input type="integer" name="rantoja"></p>
	<input type="submit" value="Hae">
	</form>

	<p>
		<?php
		echo "<table border>";
		while ($rivi = $kysely->fetch()) {
			echo "<tr>";
			echo "<td>" . $rivi["kaupungit"] . "</td>";
			echo "<td>" . $rivi["asukasluku"] . "</td>";
			echo "<td>" . $rivi["rantoja"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		?>
	</p>
	
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lomakkeet/lisaaKaupunki.php">Lisää kaupunki</a>
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lomakkeet/muokkaaKaupunkeja.php">Muokkaa kaupunkeja</a>
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lomakkeet/poistaKaupunki.php">Poista kaupunkeja</a>

 </body>
</html>
