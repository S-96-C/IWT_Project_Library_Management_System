<?php require_once('common/header.php'); ?>

 <link rel="stylesheet" type="text/css" href="css/form_styles.css">
<link rel="stylesheet" type="text/css" href="css/memlogin_style.css">

<?php require_once('config/database.php'); ?>

<?php



 if(isset($_POST['btn_login']) ) {

	$user = $_POST['m_user'];
	$password = $_POST['m_pass'];


	if($user == '' || $password == '') { // empty data
		echo '<p style="color:red; margin:25 auto; display:table;" > Username or Password invalid! </p>';
	} else {

			$database = new Database(); // database instance
			$conn = $database -> connect(); // call connect method
			// QUERY
			$sql = "SELECT * FROM user WHERE userName = '$user' AND userPassword = '$password' ";
		
		//echo $sql;
		if($result = mysqli_query($conn, $sql)){
					

		

			if(mysqli_num_rows($result) > 0 )
			{ 
				echo "user exists";

				while ($row = mysqli_fetch_array($result)) {
					$_SESSION["logged_in"] = true; 
					$_SESSION["userId"] = $row[0];  
					$_SESSION["currentUser"] = $row[1];  
					$_SESSION["fullName"] = $row[3]; 
					$_SESSION["email"] = $row[2]; 
				}


				

				header('Location: index.php');
				exit();

			}
			else
			{
				echo '<p style="color:red; margin:25 auto; display:table;" > Username or Password invalid! </p>';
			}

		} else{
			echo "ERROR:. " . mysqli_error($conn);
		}

		mysqli_close($conn);

	}
	
 }
 ?>

	<body>
		<form class="cd-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		
			<legend>Member Login</legend>
			
			<div class="error-message" id="error-message">
				<p id="error"></p>
			</div>
			
			<div class="icon">
				<input class="m-user" type="text" name="m_user" placeholder="Username" required />
			</div>
			
			<div class="icon">
				<input class="m-pass" type="password" name="m_pass" placeholder="Password" required />
			</div>
			
			<input type="submit" value="Login" name="btn_login" />
			
			<br /><br /><br /><br />
			
			<p align="center">Don't have an account?&nbsp;<a href="signup.php">Sign up</a>
		</form>
	</body>
	
	<?php require_once('common/footer.php'); ?>