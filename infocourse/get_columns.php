<?php
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/mysql.php");

	$dbname = "Infocourse";

	$conn = new MySQL ($dbname);

    $result = $conn->query($sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='{$dbname}' AND TABLE_NAME='{$_REQUEST["table"]}'"); 

	echo "[";
	$row = $result->fetch_assoc();
	echo "{ title: \"{$row["COLUMN_NAME"]}\" }";
	while ($row = $result->fetch_assoc()) {
		echo ",{ title: \"{$row["COLUMN_NAME"]}\" }";
    }
	echo "];";
	//$sql = addslashes($sql);
	//echo "console.log('{$sql}');";
?>
