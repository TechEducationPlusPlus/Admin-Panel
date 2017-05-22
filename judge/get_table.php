<?php
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/mysql.php");

	$dbname = "judge";

	$conn = new MySQL ($dbname);

    $result = $conn->query("SELECT * FROM `{$_REQUEST["table"]}`"); 

	echo "[";
	for ($tmp = 0 ; $tmp < $result->num_rows ; $tmp ++)
	{
		$row = $result->fetch_assoc();
		echo "[";
		$row = array_values($row);
		for ($i = 0 ; $i < count($row) - 1 ; $i ++)
			echo "\"" . addslashes($row[$i]) . "\", ";
		echo "\"" . addslashes($row[count($row) - 1]) . "\"]";
		if ($tmp != $result->num_rows - 1)
			echo ",";
    }
    echo "]";
?>
