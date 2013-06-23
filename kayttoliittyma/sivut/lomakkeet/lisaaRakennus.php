<!Rakennuksien lisäyslomake. -->
<?php
	require_once '../istunto.php';
?>

<html>
 <head>
 	<title>Lisää rakennus</title>
	<?php
		require_once 'tyylit/ylaKehys.html';
	?>
 </head>
 <body>
 	<div id="framecontent">
	<div class="innertube">
	<?php
		require_once '../sivurakenne.php';
	?>
	</div>
	</div>

	<div id="maincontent">
	<div class="innertube">
	<h2>Lisää rakennus</h2>
	
	<form action="rakennuksenLisays.php" method="post">
	<p>Nimi: <br>
	<input type="text" name="nimi"></p>
	<p>Rakennustyyppi: <br>
	<input type="integer" name="rakennustyyppi"></p>
	<p>Kaupunki: <br>
	<input type="integer" name="kaupunki"></p>
	<input type="submit" value="Luo">
	</form>

	</div>
	</div> 

 </body>
</html>
