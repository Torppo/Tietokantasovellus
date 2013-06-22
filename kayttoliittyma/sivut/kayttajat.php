<?php
	require_once 'istunto.php';
	require_once '../yhteys.php';
	require_once 'sisallonHaku/kayttajaHaku.php';
?>

<html>
 <head>
  <title>Käyttäjät</title>
 </head>
 <body>
 
	<?php
		require_once 'sivurakenne.php';
	?>
	
	<h2>Käyttäjät</h2>
	<h3>Käyttäjähaku</h3>
	<form  action="kayttajat.php" method="post">
	<p>Tunnus: <br>
	<input type="text" name="kayttajatunnus"></p>
	<p>Nimi: <br>
	<input type="text" name="nimi"></p>
	<p>Rooli: <br>
	<input type="text" name="rooli"></p>
	<input type="submit" value="Hae">
	</form>

	<p>
		<?php
		echo "<table border>";
		while ($rivi = $kysely->fetch()) {
			echo "<tr>";
			echo "<td>" . $rivi["kayttajatunnus"] . "</td>";
			echo "<td>" . $rivi["nimi"] . "</td>";
			echo "<td>" . $rivi["rooli"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		?>
	</p>
	
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lomakkeet/lisaaKayttaja.php">Lisää käyttäjä</a>
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lomakkeet/muutaKayttajatietoja.php">Muokkaa käyttäjää</a>
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lomakkeet/poistaKayttaja.php">Poista käyttäjä</a>

 </body>
</html>
