<!Erikoisominaisuuden poistolomake. -->
<?php
	require_once '../istunto.php';
?>

<html>
 <head>
 	 <title>Poista erikoisominaisuus</title>
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
	<h2>Poista erikoisominaisuus</h2>
	
	<form action="erikoisominaisuuksienPoisto.php" method="post">
	<p>Rakennus: <br>
	<input type="text" name="rakennus"></p>
	<input type="submit" value="Poista">
	</form> 

	</div>
	</div>

 </body>
</html>
