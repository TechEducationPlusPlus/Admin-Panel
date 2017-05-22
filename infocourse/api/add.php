<?php

	// user check

	include_once ($_SERVER["DOCUMENT_ROOT"] . "/mysql.php");

	$dbname = "Infocourse";

	$conn = new MySQL ($dbname);

	if ($_POST["table"] == "Videos")
		$columns = ["ID", "Course", "Link", "Source", "Label", "ExamLink"];

	$sql_columns = [];
	$values = [];
	foreach ($columns as $value)
	{
		$sql_columns[] = '`' . $value . '`';
		$values[$value] = "\"" . addslashes($_POST[$value]) . "\"";
	}	
	$sql = "INSERT INTO {$_POST["table"]}(" . join(',', $sql_columns) . ") VALUES (" . join(',', $values) . ")";
	$conn->query($sql); 
?>
