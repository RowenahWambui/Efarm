<?php include "side.php"; ?>
    <div class="content">
				<form action = "variety_details.php" method = "POST" >
					<label>Region Id: <span style = "color: #ff0000;">&#42;</span></label><br />
					<input type = "number"  name = "region_id" required = "" autofocus /><br />
					<label>Seedling Id: <span style = "color: #ff0000;">&#42;</span></label><br />
					<input type = "number"  name = "seedling_id" required = "" /><br />
					<label>Variety Name: <span style = "color: #ff0000;">&#42;</span></label><br />
					<input type = "text"  name = "variety_name" required = "" /><br />

						<?php
						require_once "conn.php";
						
						
						?>

					</select>
					<br /><br />

					<input type = "reset" value = "Clear All" />
					<input type = "submit" name = "variety_details" value = "Save" />
				</form>	
    </div>