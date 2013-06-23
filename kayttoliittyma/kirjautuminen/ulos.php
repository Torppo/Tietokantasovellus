<?php
//Tuhoa istunnon ja kirjautuu ulos.
	session_start();
	session_destroy();
	header("Location: ../index.php");
?>
