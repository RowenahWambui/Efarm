<?php include "side.php"; ?>
	<div class="content">
              <table border="1">
                                <form action = "disease_dtails.php" method>
                                     
					<label>Region Id: <span style = "color: #ff0000;">&#42;</span></label><br />
					<input type = "number"  name = "regionid" required = "" autofocus /><br />
					<label>Disease Name: <span style = "color: #ff0000;">&#42;</span></label><br />
					<input type = "text"  name = "disease_name" required = "" /><br />
						<?php
						require_once "conn.php";
						
						
						?>

					</select>
					<br /><br />

					<input type = "reset" value = "Clear All" />
					<input type = "submit" name = "disease_dtails" value = "Save" />
                                      
               </table>
	</div>