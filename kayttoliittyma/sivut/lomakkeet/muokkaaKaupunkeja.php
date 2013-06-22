<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  <title>Muokka kaupunkeja</title>
 </head>
 <body>
 
	<?php
		require_once '../sivurakenne.php';
	?>

	<h2>Muokkaa kaupunkeja</h2>
	
	<form action="kaupunginMuokkaus.php" method="post">
	<p>Kaupunki: <br>
	<input type="text" name="kaupunki"></p>
	<p>Asukasluku: <br>
	<input type="integer" name="asukasluku"></p>
	<p>Rantoja: <br>
	<input type="integer" name="rantoja"></p>
	<input type="submit" value="Muuta">
	</form> 

 </body>
</html>
