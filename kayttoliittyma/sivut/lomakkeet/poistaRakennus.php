<!Rakennuksen poistolomake. -->
<?php
	require_once '../istunto.php';
?>

<html>
 <head>
 	<title>Poista rakennus</title>
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
	<h2>Poista rakennus</h2>
	
	<form action="rakennuksenPoisto.php" method="post">
	<p>Tunnus: <br>
	<input type="text" name="tunnus"></p>
	<input type="submit" value="Poista">
	</form>
 
	</div>
	</div>

 </body>
</html>
