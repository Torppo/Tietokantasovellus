<!Kayttajien lisäyslomake. -->
<?php
	require_once '../istunto.php';
?>

<html>
 <head>
  	<title>Lisää käyttäjä</title>
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
	<h2>Lisää käyttäjä</h2>
	
	<form action="kayttajanLisays.php" method="post">
	<p>Tunnus: <br>
	<input type="text" name="kayttajatunnus"></p>
	<p>Nimi: <br>
	<input type="text" name="nimi"></p>
	<p>Salasana: <br>
	<input type="password" name="salasana1"></p>
	<p>Salasana uudestaan: <br>
	<input type="password" name="salasana2"></p>
	<p>Rooli: <br>
	<input type="text" name="rooli"></p>
	<input type="submit" value="Luo">
	</form>

	</div>
	</div> 

 </body>
</html>
