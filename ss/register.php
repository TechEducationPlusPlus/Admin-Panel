<?php
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/mysql.php");

	$dbname = "admin";

	$conn = new MySQL ($dbname);

    $result = $conn->query($sql = "SELECT * FROM `Users` WHERE `Username`=\"{$_REQUEST["username"]}\" OR `Email`=\"{$_REQUEST["email"]}\""); 

	if ($result->num_rows == 0)
	{
		if ($_REQUEST["password"] == $_REQUEST["confirm-password"])
		{
			$_REQUEST["password"] = md5 ($_REQUEST["password"]);
			$conn->query($sql = "INSERT INTO `Users` (`Username`,`Password`,`Email`) VALUES (\"{$_REQUEST["username"]}\",\"{$_REQUEST["password"]}\",\"{$_REQUEST["email"]}\")"); 
			$danger = urlencode('<div class="alert alert-success"> <strong>Successful registration!</strong> Please log in! </div>');
			echo "<script>window.location.replace('/login.php?notify={$danger}');</script>";
		}
		else
		{
			$danger = urlencode('<div class="alert alert-danger"> <strong>Unsuccessful registration!</strong> Password doesn\'t match! </div>');
			echo "<script>window.location.replace('/login.php?notify={$danger}');</script>";
		}
	}
	else
	{
		$danger = urlencode('<div class="alert alert-danger"> <strong>Unsuccessful registration!</strong> This username/email is already registed! </div>');
		echo "<script>window.location.replace('/login.php?notify={$danger}');</script>";
	}
?>
