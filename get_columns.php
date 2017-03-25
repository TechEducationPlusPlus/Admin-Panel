<?php
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/mysql.php");

	$dbname = $_REQUEST["database"];

	$conn = new MySQL ($dbname);

    $result = $conn->query($sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='{$_REQUEST["database"]}' AND TABLE_NAME='{$_REQUEST["table"]}'"); 

	echo "[";
	while ($row = $result->fetch_assoc()) {
		echo "{ title: \"{$row["COLUMN_NAME"]}\" },";
    }
    echo "]";
?>
