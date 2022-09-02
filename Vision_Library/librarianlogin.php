<?php require_once('common/header.php'); ?>

<html>
	<head>
		<title>Member Login</title>
		<link rel="stylesheet" type="text/css" href="css/form_styles.css">
		<link rel="stylesheet" type="text/css" href="css/memlogin_style.css">
	</head>
	<body>
		<form class="cd-form" method="POST" action="#">
		
			<legend>Librarian Login</legend>
			
			<div class="error-message" id="error-message">
				<p id="error"></p>
			</div>
			
			<div class="icon">
				<input class="m-user" type="text" name="m_user" placeholder="Username" required />
			</div>
			
			<div class="icon">
				<input class="m-pass" type="password" name="m_pass" placeholder="Password" required />
			</div>
			
			<input type="submit" value="Login" name="m_login" />
			
			<br /><br /><br /><br />
			
		</form>
	</body>
	
<?php require_once('common/footer.php'); ?>