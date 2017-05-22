<?php

	// user check

	include_once ($_SERVER["DOCUMENT_ROOT"] . "/mysql.php");

	$dbname = "Infocourse";

	$conn = new MySQL ($dbname);

	if ($_POST["table"] == "Videos")
		$columns = ["ID", "Course", "Link", "Source", "Label", "ExamLink"];
	else if ($_POST["table"] == "Videos")
		$columns = ["ID", "Course", "Link", "Source", "Label", "ExamLink"];

	foreach ($columns as $value)
	{
		$_POST[$value] = addslashes($_POST[$value]);
	}	
	$sql = "DELETE FROM `{$_POST["table"]}` WHERE ";
	foreach ($columns as $value)
	{
		$sql = $sql . "`{$value}`=\"{$_POST[$value]}\" AND ";
	}
	$sql = $sql . "1=1";
	$conn->query($sql);
?>
