<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  <title>Muokkaa erikoisominaisuuksa</title>
 </head>
 <body>
 
	<?php
		require_once '../sivurakenne.php';
	?>

	<h2>Muokkaa erikoisominaisuuksia</h2>
	
	<form action="erikoisominaisuuksienMuokkaus.php" method="post">
	<p>Rakennus: <br>
	<input type="text" name="rakennus"></p>
	<p>Erikoisominaisuus: <br>
	<textarea name="erikoisominaisuus" rows="10" cols="50"></textarea></p>
	<input type="submit" value="Muuta">
	</form> 

 </body>
</html>
