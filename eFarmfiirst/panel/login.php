<html>
	<head>
		<title>LOGIN PAGE</title>
                <link rel="stylesheet" type="style/text" href="login.css">
	</head>
	<body>
	<div class="center">
		<form action="log_in.php" method="POST">
		<input type="text" name="username" placeholder="username"><br/>
		<input type="password" name="password" placeholder="password"><br/>
		<button type="submit">LOGIN</button>
		</form>
            		<?php
			if(isset($_SESSION['id'])){
				header("Location: side.php");
			}else{
				echo "You are not logged in";
			}
		?>