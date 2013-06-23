<!Kaupungin poistolomake. -->
<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  	<title>Poista kaupunki</title>
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
	<h2>Poista kaupunki</h2>
	
	<form action="kaupunginPoisto.php" method="post">
	<p>Kaupunki: <br>
	<input type="text" name="kaupunki"></p>
	<input type="submit" value="Poista">
	</form>
 
	</div>
	</div>
 </body>
</html>
