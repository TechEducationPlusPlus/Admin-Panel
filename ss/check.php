<?php
if (!isset($_COOKIE["session_id"]))
{
	echo "<script>document.onload = function () { document.body.innerHTML = '<center><h1>Please log in first!<br><a href=\'/login.php\'>Log in</a></h1></center>'; }; document.onload ();</script>";
}
else
{
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/mysql.php");

	$dbname = "admin";

	$conn = new MySQL ($dbname);

	$result = $conn->query($sql = "SELECT * FROM `Sessions` WHERE `ID`=\"{$_COOKIE["session_id"]}\" AND `User`=\"{$_COOKIE["username"]}\"");

	//echo $sql;
	//echo "<br>";
	//echo "EndTime: " . $result["EndTime"];
	//var_dump($result);
	if (($result ["EndTime"]) < time())
	{
		$conn->query($sql = "DELETE FROM `Sessions` WHERE `ID`=\"{$_COOKIE["session_id"]}\"");
		//echo $result["EndTime"];
		//echo "<br>EndTime: ";
		//echo strtotime($result["EndTime"]);
		//echo "<br>Time: ";
		//echo time();
		//echo "<br>";
		//echo ($result["EndTime"] < time ()); 
		//echo "<br>";
		echo "<script>document.onload = function () { document.body.innerHTML = '<center><h1>Please log in first!<br><a href=\'/login.php\'>Log in</a></h1></center>'; }; document.onload ();</script>";
	}
	else
	{
		
	}
}
?>
