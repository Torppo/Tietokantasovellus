<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  	<title>Muokkaa erikoisominaisuuksa</title>
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
	<h2>Muokkaa erikoisominaisuuksia</h2>
	
	<form action="erikoisominaisuuksienMuokkaus.php" method="post">
	<p>Rakennus: <br>
	<input type="text" name="rakennus"></p>
	<p>Erikoisominaisuus: <br>
	<textarea name="erikoisominaisuus" rows="10" cols="50"></textarea></p>
	<input type="submit" value="Muuta">
	</form> 

	</div>
	</div>

 </body>
</html>
