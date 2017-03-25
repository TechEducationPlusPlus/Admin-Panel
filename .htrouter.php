<?php
	file_put_contents("php://stdout", "\nRequested: " . $_SERVER['REQUEST_URI'] . "\n");
	$_GET['_uri'] = $_SERVER['REQUEST_URI'];
	return false;
?>
