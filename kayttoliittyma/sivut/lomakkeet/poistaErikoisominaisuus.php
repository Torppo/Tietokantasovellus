<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  <title>Poista erikoisominaisuus</title>
 </head>
 <body>
 
	<?php
		require_once '../sivurakenne.php';
	?>

	<h2>Poista erikoisominaisuus</h2>
	
	<form action="erikoisominaisuuksienPoisto.php" method="post">
	<p>Rakennus: <br>
	<input type="text" name="rakennus"></p>
	<input type="submit" value="Poista">
	</form> 

<a href="http://pisapisa.users.cs.helsinki.fi/sivut/erikoisominaisuudet.php">Rakennustyyppien erikoisominaisuudet</a>

 </body>
</html>
