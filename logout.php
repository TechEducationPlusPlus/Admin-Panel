<?php
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/mysql.php");

	$dbname = "admin";

	$conn = new MySQL ($dbname);

	$conn->query($sql = "DELETE FROM `Sessions` WHERE `ID`=\"{$_COOKIE["session_id"]}\"");
	setcookie('session_id', '' ,time() - 86000, "/");
	setcookie('username', '', time() - 86000, "/");
	echo "<script>window.location.replace('/login.php');</script>";
?>
