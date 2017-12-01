<?php
require_once "conn.php";
if (isset($_GET["seedling_id"])){
$seedling_id = $_GET["seedling_id"];

$del_art = "DELETE FROM cropseedlings WHERE seedling_id = '$seedling_id' LIMIT 1";
	
	if ($mysqli->query($del_art) === TRUE) {
		// echo "New record created successfully";
		@header("Location: seed_table.php");
		exit();
	}
}
?>