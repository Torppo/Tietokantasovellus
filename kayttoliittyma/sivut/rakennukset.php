<?php
	require_once 'istunto.php';
	require_once '../yhteys.php';
	require_once 'sisallonHaku/rakennusHaku.php';
?>

<html>
 <head>
  <title>Rakennukset</title>
 </head>
 <body>
 
	<?php
		require_once 'sivurakenne.php';
	?>
	
	<h2>Rakennukset</h2>
	<h3>Rakennushaku</h3>
	<form  action="rakennukset.php" method="post">
	<p>Nimi: <br>
	<input type="text" name="nimi"></p>
	<p>Rakennustyyppi: <br>
	<input type="text" name="rakennustyyppi"></p>
	<p>Kaupunki: <br>
	<input type="text" name="kaupunki"></p>
	<input type="submit" value="Hae">
	</form>

	<p>
		<?php
		echo "<table border>";
		while ($rivi = $kysely->fetch()) {
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
	
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lomakkeet/lisaaRakennus.php">Lisää rakennus</a>
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lomakkeet/muokkaaRakennuksia.php">Uudelleennimeä rakennus</a>
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lomakkeet/poistaRakennus.php">Poista rakennus</a>

 </body>
</html>
