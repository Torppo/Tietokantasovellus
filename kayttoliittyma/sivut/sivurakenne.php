<h1>Kaupunkitietokanta</h1>

<p> <?php echo $_SESSION["kayttaja"]; ?></p>
<p><a href="/kirjautuminen/ulos.php">Kirjaudu ulos</a></p>
	
<?php
	require_once 'linkit/yleisetLinkit.php';
?>

<h3>Yleishaku</h3>
<form  action="/sivut/sisallonHaku/yleishaku.php" method="post">
<p>Hakusana: <br>
<input type="text" name="hakusana"></p>
<input type="submit" value="Hae">
</form>

