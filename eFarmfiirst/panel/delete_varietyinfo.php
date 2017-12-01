<?php
require_once "conn.php";
if (isset($_GET["var_id"])){
$var_id = $_GET["var_id"];

$del_art = "DELETE FROM variety_info WHERE var_id = '$var_id' LIMIT 1";
	
	if ($mysqli->query($del_art) === TRUE) {
		// echo "New record created successfully";
		@header("Location: varietyinfo_table.php");
		exit();
	}
}
?>