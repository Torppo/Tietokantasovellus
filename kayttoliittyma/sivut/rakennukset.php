<!Rakennukset esittelevä sivu. -->
<?php
	require_once 'istunto.php';
	require_once '../yhteys.php';
	require_once 'sisallonHaku/rakennusHaku.php';
?>

<html>
 <head>
	<title>Rakennukset</title>
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
	
	<h2>Rakennukset</h2>

	<!Rakennushaun lomake -->
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

	</div>
	</div>

	<div id="maincontent">
	<div class="innertube">

	<p>
		<?php
		//Rakennusten tulostus.
		echo "<table border>
		<tr>
		<th>Tunnus</th>
		<th>Nimi</th>
		<th>Rakennustyyppi</th>
		<th>Kaupunki</th>
		</tr>";
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
	
	</div>
	</div>


 </body>
</html>
