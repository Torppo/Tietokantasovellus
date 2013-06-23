<?php
	require_once 'istunto.php';
	require_once '../yhteys.php';
	require_once 'sisallonHaku/erikoisominaisuusHaku.php';
?>

<html>
 <head>
  	<title>Rakennusten erikoisominaisuudet</title>
	<?php
		require_once 'tyylit/ylavasenKehys.html';
	?>
 </head>
 <body>
	
	<div id="framecontentTop">
	<div class="innertube">
	<?php
		require_once 'sivurakenne.php';
	?>
	</div>
	</div>
	
	<div id="framecontentLeft">
	<div class="innertube">

	<h2>Rakennustyyppien erikoisominaisuudet</h2>

	<!Erikoisominaisuuksien haun lomake. -->
	<h3>Erikoisominaisuushaku</h3>
	<form  action="erikoisominaisuudet.php" method="post">
	<p>Rakennus: <br>
	<input type="text" name="rakennus"></p>
	<input type="submit" value="Hae">
	</form>
	
	</div>
	</div>

	<div id="maincontent">
	<div class="innertube">

	<p>
		<?php
		//Erikoisominaisuuksien taulukon tulostus.
		echo "<table border>
		<tr>
		<th>Rakennus</th>
		<th>Erikoisominaisuus</th>
		</tr>";
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
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lomakkeet/muokkaaErikoisominaisuuksia.php">Muokkaa erikoisominaisuuksia</a>
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lomakkeet/poistaErikoisominaisuus.php">Poista erikoisominaisuus</a>

	</div>
	</div>

	
 </body>
</html>
