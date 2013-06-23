<!Rakennusten muokkauslomake. -->
<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  	<title>Uudelleen nimeä rakennus</title>
	<?php
		require_once '../tyylit/ylaKehys.html';
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
	<h2>Uudelleen nimeä rakennus</h2>
	
	<form action="rakennustenMuokkaus.php" method="post">
	<p>Tunnus: <br>
	<input type="integer" name="id"></p>
	<p>Nimi: <br>
	<input type="text" name="nimi"></p>
	<input type="submit" value="Muuta">
	</form>

	</div>
	</div> 

 </body>
</html>
