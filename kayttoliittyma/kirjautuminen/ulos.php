<?php
	session_start();
	unset($_SESSION["kayttaja"]);
	header("Location: htdocs/index.php");
?>
