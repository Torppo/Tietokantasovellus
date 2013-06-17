<?php
	require_once 'istunto.php';
	require_once '../yhteys.php';
	
	$kysely = $yhteys->prepare("SELECT * FROM stormland");
	$kysely->execute();
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
	
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/lisaaKaupunki.php">Lisää kaupunki</a>
	<a href="muokkaaKaupunkeja">Muokkaa kaupunkeja</a>
	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/poistaKaupunki.php">Poista kaupunkeja</a>
	<a href="kaupunkityypit">Kaupunkityypit</a>
	
 </body>
</html>
