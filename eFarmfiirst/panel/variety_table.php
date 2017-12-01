    <body>
<style type="text/css">
	#header{
    width: 100%;
    height: 50px;
    background-color:#2E8080;
    margin: 0 auto;
}
.logo a{
    font-size: 1.6em;
    color: #fff;
}
a{
text-decoration: none;
}
.logo{
    float: left;
    margin-top: 10px;
    margin-left: 10px;
}
.logo a span{
    font-weight: 200;
}
#container{
    width: 100%;
    margin: 0 auto;
    
}
.side-bar{
    width: 250px;
     background-color:  #053F3F;
     float: left;
     height: 1721px;
}
.content{
    width: auto;
    background-color: #A5B7C5;
    padding: 15px;
    margin-left: 250px;
   
}
#nav{

}
#nav li{
    list-style: none;
}
#nav li a{
    color: #000;
    display: block;
    padding: 10px;
    font-size: 1.0em;
    border-bottom: 1px solid #0A0A0A;
    -webkit-transition: 0.2s;
    -moz-transition: 0.2s;
    -o-transition: 0.2s;
    transition: 0.2s;
}

ul#nav li a:hover{
    background-color: lightblue;
    color: #fff;
    padding-left: 30px;

}
#nav li a.selected{
 background-color: lightblue;
    color: #fff;
}
#adminlogo{
    width: 35px;
    height: 25px;
    float: right;
    border-radius: 50px;
}
#emailpng{
    width: 20px;
    height: 20px;
    float: right;
    padding-left: 40px;
    margin: 5px;

}
</style>
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
								
<?php
require_once "conn.php";?>
<div class="content">
<?php
								$result = mysqli_query($mysqli,"SELECT * FROM variety");
								//$result2 = mysqli_query($con, "SELECT county, COUNT(*) FROM record GROUP BY county");

								
								echo "<table border='1' class='table table-bordered'> 
								<h4>Risk and Symptoms Table:</h4>
						        <thead> 
								<tr> 
								<th>Variety ID</th> 
								<th>Region id</th> 
								<th>Seedling ID</th> 
								<th>Variety Name</th> 
								<th>Delete</th> 
								</tr> 
								</thead>";  
								
								
								

								while($row = mysqli_fetch_array($result))
								{
									
								echo "<tbody>"; 
								echo "<tr>"; 
								echo "<td>" . $row['variety_id'] . "</td>"; 
								echo "<td>" . $row['region_id'] . "</td>"; 
								echo "<td>" . $row['seedling_id'] . "</td>"; 
								echo "<td>" . $row['variety_name'] . "</td>";  
								echo '<td><a href="delete_variety.php?variety_id='.$row["variety_id"].'"onClick="return confirm(\'are you sure you want to delete this entry from the database?\')"><img src="delete.png"></a></td>';
								echo "</tr>";  
								echo "</tbody>";	
									
								
								}
								echo "</table> <br><br>";
						
								//echo "<table border = '1' class='table table-bordered'>
								
								//<h4>TB Contacts:</h4>
								//<thead> 
								//<tr> 
								//<th>County</th> 
								//<th>Number of TB Contacts</th> 
								//</tr> 
								//</thead>";
								
																
								//while($row = mysqli_fetch_array($result2))
								///{
									
								//echo "<tbody>"; 
								//echo "<tr>"; 
								//echo "<td>" . $row['county'] . "</td>"; 
								//echo "<td>" . $row['COUNT(*)'] . "</td>"; 
								//echo "</tr>";  
								//echo "</tbody>";
								
								//}
								
								//echo "</table>";
								

								mysqli_close($mysqli);
							?>
							</div>