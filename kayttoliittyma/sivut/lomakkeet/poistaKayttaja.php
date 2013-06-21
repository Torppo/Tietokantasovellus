<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  <title>Poista käyttäjä</title>
 </head>
 <body>
 
	<?php
		require_once '../sivurakenne.php';
	?>

	<h2>Poista käyttäjä</h2>
	
	<form action="kayttajanPoistaminen.php" method="post">
	<p>Käyttäjätunnus: <br>
	<input type="text" name="tunnus"></p>
	<p>Käyttäjän nimi: <br>
	<input type="text" name="nimi"></p>
	<input type="submit" value="Poista">
	</form> 

 </body>
</html>
