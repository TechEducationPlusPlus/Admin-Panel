<?php
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/mysql.php");

	$dbname = $_REQUEST["database"];

	$conn = new MySQL ($dbname);

    $result = $conn->query("SELECT * FROM `{$_REQUEST["table"]}`"); 

	echo "[";
	while ($row = $result->fetch_assoc()) {
		echo "[";
		$row = array_values($row);
		for ($i = 0 ; $i < count($row) ; $i ++)
			echo "\"{$row[$i]}\", ";
		echo "],";
    }
    echo "]";
?>
