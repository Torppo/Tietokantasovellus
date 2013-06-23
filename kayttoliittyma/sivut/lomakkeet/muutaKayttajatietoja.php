<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  	<title>Muokka käyttäjää</title>
	<?php
		require_once '../tyylit/ylaKehys.html';
	?>
 </head>
 <body>
 	<div id="framecontent">
	<div class="innertube">
	<?php
		require_once '../sivurakenne.php';
	?>
	</div>
	</div>

	<div id="maincontent">
	<div class="innertube">
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

	</div>
	</div>

 </body>
</html>
