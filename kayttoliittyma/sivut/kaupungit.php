<!Kaupungit esittelevä sivu. -->
<?php
	require_once 'istunto.php';
	require_once '../yhteys.php';
	require_once 'sisallonHaku/kaupunkiHaku.php';
?>

<html>
 <head>
  	<title>Kaupungit</title>
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

	<h2>Kaupungit</h2>
	
	<!Kaupunkihaun lomake -->
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
	
	</div>
	</div>
	
	<div id="maincontent">
	<div class="innertube">
	<p>
		<?php
		//Kaupunkien tulostus.
		echo "<table border>
		<tr>
		<th>Kaupungit</th>
		<th>Asukasluku</th>
		<th>Rantaruutuja</th>
		</tr>";
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
	
	</div>
	</div>

 </body>
</html>
