<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  <title>Poista rakennus</title>
 </head>
 <body>
 
	<?php
		require_once '../sivurakenne.php';
	?>

	<h2>Poista rakennus</h2>
	
	<form action="rakennuksenPoisto.php" method="post">
	<p>Tunnus: <br>
	<input type="text" name="tunnus"></p>
	<input type="submit" value="Poista">
	</form> 

 </body>
</html>
