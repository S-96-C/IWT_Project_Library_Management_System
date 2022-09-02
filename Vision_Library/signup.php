<?php require_once('common/header.php'); ?>
<?php require_once('config/database.php'); ?>

<?php

 if(isset($_POST['btn_register']) ) {

	$user = $_POST['m_user'];
	$email = $_POST['m_email'];
	$fullName = $_POST['m_fullName'];
	$password = $_POST['m_pass'];
	$password2 = $_POST['m_pass2'];

	if($user == '' || $email == '' || $fullName == '' || $password == '') {
		echo '<p style="color:red; margin:25 auto; display:table;" > Please fill all data!</p>';
	}else if ($password != $password2 ){
		echo '<p style="color:red; margin:25 auto; display:table;" > Please use same password for confirm password!</p>';
	} else {

		
		// QUERY
		//echo $fullName;
		$sql = "INSERT INTO user (userName, userEmail, userFullName, userPassword) VALUES ('$user','$email','$fullName', '$password')";
		$database = new Database(); // database instance
		$conn = $database -> connect(); // call connect method
		//echo $sql;
		if(mysqli_query($conn, $sql)){
			echo "<div style='color:green; margin:25 auto; display:table;' >". $fullName." - Successfully added!. Please <a href='login.php'> Login here</a></div>";
		} else{
			echo "ERROR:. " . mysqli_error($conn);
		}

		mysqli_close($conn);

	}
	
 }
	

?>

		<title>Register</title>
		<link rel="stylesheet"  href="css/form_styles.css">

		<form class="cd-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<legend>Enter your details</legend>
			
				
				<div class="icon">
					<input class="m-user" type="text" name="m_user" id="m_user" min="1" max="10" placeholder="Username" required />
				</div>

				<div class="icon">
					<input class="m-email" type="email" name="m_email" id="m_email" placeholder="Email" required />
				</div>

				<div class="icon">
					<input class="m-fullName" type="text" name="m_fullName" id="m_fullName" min="1" max="100" placeholder="Full Name" required />
				</div>

				<div class="icon">
					<input class="m-pass" type="password" name="m_pass" placeholder="Password" min="5" max="10" required />
				</div>

				<div class="icon">
					<input class="m-pass" type="password" name="m_pass2" placeholder="Confirm Password" min="5" max="10" required />
				</div>
				
				
				
				<br />
				<a href="registerplan.php">
		        <button class="Register" type="submit" name="btn_register" value="btn_register">Register</button>
		</form>
	
	
	<?php require_once('common/footer.php'); ?>