<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  <title>Lisää erikoisominaisuus</title>
 </head>
 <body>
 
	<?php
		require_once '../sivurakenne.php';
	?>

	<h2>Lisää erikoisominaisuus</h2>
	
	<form action="erikoisominaisuuksienLisays.php" method="post">
	<p>Rakennus: <br>
	<input type="text" name="rakennus"></p>
	<p>Erikoisominaisuus: <br>
	<textarea name="erikoisominaisuus" rows="10" cols="50"></textarea></p>
	<input type="submit" value="Luo">
	</form> 

<a href="http://pisapisa.users.cs.helsinki.fi/sivut/erikoisominaisuudet.php">Rakennustyypien erikoisominaisuudet</a>

 </body>
</html>
