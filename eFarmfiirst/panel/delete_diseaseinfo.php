<?php
require_once "conn.php";
if (isset($_GET["id_count"])){
$id_count = $_GET["id_count"];

$del_art = "DELETE FROM disease_info WHERE id_count = 'id_count' LIMIT 1";
	
	if ($mysqli->query($del_art) === TRUE) {
		// echo "New record created successfully";
		@header("Location: diseaseinfo_table.php");
		exit();
	}
}
?>