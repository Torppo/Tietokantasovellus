<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  <title>Muokka käyttäjää</title>
 </head>
 <body>
 
	<?php
		require_once '../sivurakenne.php';
	?>

	<h2>Muokka käyttäjää <?php echo $_SESSION["kayttaja"]; ?>.</h2>
	
	<form action="kayttajatietojenMuuttaminen.php" method="post">
	<p>Nimi: <br>
	<input type="text" name="nimi"></p>
	<p>Vanha salasana: <br>
	<input type="password" name="salasana"></p>
	<p>Uuusi salasana: <br>
	<input type="password" name="salasana1"></p>
	<p>Salasana uudestaan: <br>
	<input type="password" name="salasana2"></p>
	<p>Rooli: <br>
	<input type="text" name="rooli"></p>
	<input type="submit" value="Muuta">
	</form> 

	<a href="http://pisapisa.users.cs.helsinki.fi/sivut/kayttajat.php">Käyttäjät</a>

 </body>
</html>
