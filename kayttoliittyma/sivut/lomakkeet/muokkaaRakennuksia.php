<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  <title>Uudelleen nimeä rakennus</title>
 </head>
 <body>
 
	<?php
		require_once '../sivurakenne.php';
	?>

	<h2>Uudelleen nimeä rakennus</h2>
	
	<form action="rakennustenMuokkaus.php" method="post">
	<p>Tunnus: <br>
	<input type="integer" name="id"></p>
	<p>Nimi: <br>
	<input type="text" name="nimi"></p>
	<input type="submit" value="Muuta">
	</form> 

 </body>
</html>
