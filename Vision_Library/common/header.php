<?php session_start(); ?>
<html>
	<head>
		<title>VISION Library</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
	
	<header class="header">
		<div class="header-logo"> 
		<img src="images/books.svg" alt="Logo"><span> VISION LIBRARY </span>
		</div>
		<div class="header-logins">

			<?php 
				if(isset($_SESSION["currentUser"])) {
			?>
				<a href="myprofile.php"> Welcome, <?php echo $_SESSION["currentUser"]; ?></a> | 
				<a href="logout.php"> Log Out </a> 
			<?php
				} else {
			?>
				<a href="signup.php">
				Sign Up</a> | 
				<a href="login.php">
				Log In
				</a> 

		<?php } ?>
		</div>
	
	</header>