<?php
	require_once 'istunto.php';
	require_once '../yhteys.php';

	$kysely = $yhteys->prepare("SELECT * FROM rakennustyypit");
	$kysely->execute();
?>

<html>
 <head>
  <title>Rakennustyypit</title>
 </head>
 <body>
 
	<?php
		require_once 'sivurakenne.php';
	?>

	<h2>Rakennustyypit</h2
	<h3>Rakennushaku</h3>

	<p>
	<?php
		echo "<table border>";
		while ($rivi = $kysely->fetch()) {
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
 </body>
</html>
