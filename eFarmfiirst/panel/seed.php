<?php 
include "side.php"; ?>
<div class="content">
				<form action = "record_details.php" method = "POST" >
					<label>Seedling Name: <span style = "color: #ff0000;">&#42;</span></label><br />
					<input type = "text"  name = "seedling_name" required = "" autofocus /><br />
						
						<?php
						require_once "conn.php";
						
						
						?>

					</select>
					<br /><br />

					<input type = "reset" value = "Clear All" />
					<input type = "submit" name = "record_details" value = "Save" />
				</form>	
</div>