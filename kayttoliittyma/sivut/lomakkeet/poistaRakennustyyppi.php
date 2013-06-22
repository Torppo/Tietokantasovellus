<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  <title>Poista rakennustyyppi</title>
 </head>
 <body>
 
	<?php
		require_once '../sivurakenne.php';
	?>

	<h2>Poista rakennustyyppi</h2>
	
	<form action="rakennustyypinPoisto.php" method="post">
	<p>Rakennus: <br>
	<input type="text" name="rakennus"></p>
	<input type="submit" value="Poista">
	</form> 

<a href="http://pisapisa.users.cs.helsinki.fi/sivut/rakennustyypit.php">Rakennustyypit</a>

 </body>
</html>
