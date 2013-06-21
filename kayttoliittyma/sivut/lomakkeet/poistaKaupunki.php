<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  <title>Poista kaupunki</title>
 </head>
 <body>
 
	<?php
		require_once '../sivurakenne.php';
	?>

	<h2>Poista kaupunki</h2>
	
	<form action="kaupunginPoisto.php" method="post">
	<p>Kaupunki: <br>
	<input type="text" name="kaupunki"></p>
	<input type="submit" value="Poista">
	</form> 

 </body>
</html>
