<?php require_once('common/header.php'); ?>

<link rel="stylesheet" type="text/css" href="css/form_styles.css">
<link rel="stylesheet" type="text/css" href="css/memlogin_style.css">


<?php
  session_destroy();

     header('Location: login.php');
     exit();

    
?>

	
	<?php require_once('common/footer.php'); ?>