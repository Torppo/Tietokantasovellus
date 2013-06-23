<!Istuntoa seuraava koodi. Se löytyy jokaiselta sivuston sivulta. -->
<?php
	session_start();
	if(!isset($_SESSION["kayttaja"])) {
		header("Location: ../index.php");
		die();
	}
?>
