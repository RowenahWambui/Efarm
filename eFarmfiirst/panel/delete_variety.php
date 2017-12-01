<?php
require_once "conn.php";
if (isset($_GET["variety_id"])){
$variety_id = $_GET["variety_id"];

$del_art = "DELETE FROM variety WHERE variety_id = '$variety_id' LIMIT 1";
	
	if ($mysqli->query($del_art) === TRUE) {
		// echo "New record created successfully";
		@header("Location: variety_table.php");
		exit();
	}
}
?>