<?php
	require_once 'istunto.php';
	require_once '../yhteys.php';
	require_once 'sisallonHaku/erikoisominaisuusHaku.php';
?>

<html>
 <head>
  <title>Rakennusten erikoisominaisuudet</title>
 </head>
 <body>
 
	<?php
		require_once 'sivurakenne.php';
	?>
	
	<h2>Rakennustyyppien erikoisominaisuudet</h2>
	<h3>Erikoisominaisuushaku</h3>
	<form  action="erikoisominaisuudet.php" method="post">
	<p>Rakennus: <br>
	<input type="text" name="rakennus"></p>
	<input type="submit" value="Hae">
	</form>

	<p>
		<?php
		echo "<table border>";
		while ($rivi = $kysely->fetch()) {
			echo "<tr>";
			echo "<td>" . $rivi["rakennus"] . "</td>";
			echo "<td>" . $rivi["erikoisominaisuus"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		?>
	</p>
	
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lomakkeet/lisaaErikoisominaisuus.php">Lisää erikoisominaisuus</a>
	<a href="muokkaErikoisominaisuuksia">Muokkaa erikoisominaisuutta</a>
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lomakkeet/poistaErikoisominaisuus.php">Poista erikoisominaisuus</a>
	
 </body>
</html>
