<?php include "side.php"; ?>
	<div class="content">
            <table border="1" align="center" >
				<form action = "diseaseinfo_dtails.php" method = "POST" >
					<label>Disease Id: <span style = "color: #ff0000;">&#42;</span></label><br />
					<input type = "text"  name = "diseaseid" required = "" autofocus /><br />
					<label>Disease Info: <span style = "color: #ff0000;" >&#42;</span></label><br />
                                        <textarea name = "textinfo" required = "" cols = "60" rows = "5"></textarea><br />
						<?php
						require_once "conn.php";
						
						
						?>

					</select>
					<br /><br />

					<input type = "reset" value = "Clear All" />
					<input type = "submit" name = "diseaseinfo_dtails" value = "Save" />
				</form>	
            </table>
	</div>