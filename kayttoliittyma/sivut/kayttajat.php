<!Kayttajät esittelevä sivu. -->
<?php
	require_once 'istunto.php';
	require_once '../yhteys.php';
	require_once 'sisallonHaku/kayttajaHaku.php';
?>

<html>
 <head>
  	<title>Käyttäjät</title>
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
	
	<h2>Käyttäjät</h2>

	<!Käyttäjähaun lomake. -->
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

	</div>
	</div>

	<div id="maincontent">
	<div class="innertube">

	<p>
		<?php
		//Käyttäjien tulostus.
		echo "<table border=>
		<tr>
		<th>Tunnus</th>
		<th>Nimi</th>
		<th>Rooli</th>
		</tr>";
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

	</div>
	</div>


 </body>
</html>
