<?php
require_once "conn.php";
if (isset($_GET["diseaseid"])){
$diseaseid = $_GET["diseaseid"];

$del_art = "DELETE FROM cropseedlings WHERE diseaseid = '$diseaseid' LIMIT 1";
	
	if ($mysqli->query($del_art) === TRUE) {
		// echo "New record created successfully";
		@header("Location: disease_table.php");
		exit();
	}
}
?>