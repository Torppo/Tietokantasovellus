<!Sovelluksen etusivu -->
<?php
	require_once 'istunto.php';
?>

<html>
 	<head>
  	<title>Etusivu</title>
	<?php
		require_once 'tyylit/ylaKehys.html';
	?>
 	</head>
 <body>
 	
	<div id="framecontent">
	<div class="innertube">
	<?php
		require_once 'sivurakenne.php';
	?>
	</div>
	</div>
	
	<div id="maincontent">
	<div class="innertube">
	<h2>Tervetuloa!</h2>

	<?php
	//Sisältää kaikki sivuston linkit.
		require_once 'linkit/kaikkiLinkit.php';
	?>
	</div>
	</div>
 </body>
</html>
