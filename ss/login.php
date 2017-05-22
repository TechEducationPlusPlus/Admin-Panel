<?php
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/mysql.php");

	$dbname = "admin";

	$conn = new MySQL ($dbname);

    $result = $conn->query($sql = "SELECT * FROM `Users` WHERE `Username`=\"{$_REQUEST["username"]}\""); 

	if ($result->num_rows == 1)
	{
		$row = $result->fetch_assoc ();
		if ($row ["Password"] == md5 ($_REQUEST["password"]))
		{
			setcookie('session_id', $id = uniqid() , $endTime = time()+86000, "/");
			setcookie('username', $_REQUEST["username"], time()+86000, "/");
			$conn->query($sql = "INSERT INTO `Sessions` (`ID`,`User`,`EndTime`) VALUES (\"{$id}\", \"{$_REQUEST["username"]}\",\"{$endTime}\")"); 
			echo $sql;
			//echo "<script>window.location.replace('/index.php');</script>";
		}
	}
	else
	{
		$danger = urlencode('<div class="alert alert-danger"> <strong>Unsuccessful login!</strong> Please try again! </div>');
		echo "<script>window.location.replace('/login.php?notify={$danger}');</script>";
	}
?>
