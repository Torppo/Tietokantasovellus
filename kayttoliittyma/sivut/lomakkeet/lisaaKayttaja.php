<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  <title>Lisää käyttäjä</title>
 </head>
 <body>
 
	<?php
		require_once '../sivurakenne.php';
	?>

	<h2>Lisää käyttäjä</h2>
	
	<form action="kayttajanLisays.php" method="post">
	<p>Tunnus: <br>
	<input type="text" name="kayttajatunnus"></p>
	<p>Nimi: <br>
	<input type="text" name="nimi"></p>
	<p>Salasana: <br>
	<input type="password" name="salasana1"></p>
	<p>Salasana uudestaan: <br>
	<input type="password" name="salasana2"></p>
	<p>Rooli: <br>
	<input type="text" name="rooli"></p>
	<input type="submit" value="Luo">
	</form> 

 </body>
</html>
