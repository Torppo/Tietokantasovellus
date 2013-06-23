<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  	<title>Lisää kaupunki</title>
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
	<h2>Lisää kaupunki</h2>
	
	<form action="kaupunginlisays.php" method="post">
	<p>Kaupunki: <br>
	<input type="text" name="kaupunki"></p>
	<p>Asukasluku: <br>
	<input type="integer" name="asukasluku"></p>
	<p>Rantoja: <br>
	<input type="integer" name="rantoja"></p>
	<input type="submit" value="Luo">
	</form> 
	
	</div>
	</div>	

 </body>
</html>
