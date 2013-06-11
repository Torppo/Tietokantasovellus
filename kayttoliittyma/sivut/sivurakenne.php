<html>
 <body>
 
	<h1>Kaupunkitietokanta</h1>
	
	<p> <?php echo $_SESSION["kayttaja"]; ?></p>
	<p><a href="/kirjautuminen/ulos.php">Kirjaudu ulos</a></p>
	
	<?php
		require_once 'yleisetLinkit.php';
	?>

	<h3>Yleishaku</h3>
