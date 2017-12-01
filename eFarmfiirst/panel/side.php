<?php
session_start();
?>
<DOCYTPE html>
<html lang="en-US">
    <head>
    <title>eFarm</title>
    <link rel="stylesheet" href="mystyle.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>

        <div id="header"> 
            <a href="logout.php"><img src="bullet_user.png" alt="AdminLogo" id="adminlogo"></a>
            <img src="email.png" id="emailpng">
            <div class="logo"><a href="#">eFarm<span>Admin</span></a></div>
        </div>
       <!-- <a class="menu" href="#">MENU</a>-->
        <div id="container">
            <div class="side-bar">
                <ul id="nav">
                    <li><a class="selected" href="side.php">DashBoard</a></li>
                    <li><a href="seed.php">Add Seeds</a></li>
                    <li><a href="variety.php">Add variety</a></li>
                    <li><a href="disease.php">Add Disease</a></li>
                    <li><a href="diseaseinfo.php">Add Disease Info</a></li>
                    <li><a href="seed_table.php">View Seeds</a></li>
                    <li><a href="variety_table.php">View Variety</a></li>
                    <li><a href="varietyinfo_table.php">View Variety Info</a></li>
                    <li><a href="disease_table.php">View Diseases</a></li>
                    <li><a href="diseaseinfo_table.php">View Disease Info</a></li>
                                   

                
                </ul>
            </div>
			
		</div>	
	</body>
	
<html>