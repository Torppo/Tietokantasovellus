<?php
	require_once 'istunto.php';
?>

<html>
 <head>
  <title>Lisää kaupunki</title>
 </head>
 <body>
 
	<?php
		require_once 'sivurakenne.php';
	?>

	<h2>Lisää kaupunki</h2>
	
	<form action="kaupunginlisays.php" method="post">
	<p>Kaupunki: <br>
	<input type="text" name="kaupunki"></p>
	<p>Asukasluku: <br>
	<input type="text" name="asukasluku"></p>
	<p>Rantoja: <br>
	<input type="text" name="rantoja"></p>
	<input type="submit" value="Luo">
	</form> 

 </body>
</html>
