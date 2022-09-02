<?php require_once('common/header.php'); ?>
<?php require_once('common/menu.php'); ?>

<html>
	<head>
		<title>Return Book</title>
		<link rel="stylesheet" type="text/css" href="../css/global_styles.css">
		<link rel="stylesheet" type="text/css" href="../css/form_styles.css">
		<link rel="stylesheet" type="text/css" href="css/index_style.css">
	</head>
	<body>
		<form class="cd-form" method="POST" action="#">
		
		<center>
			<legend>Return Book</legend>
		</center>
		  <table id="table1"; cellspacing="5px" cellpadding="5%"; align="center">    
       <tr>    
              <td  align="right" class="style1">Book ID:</td>    
              <td class="style1"><input type="text" name="Book Title" /></td>    
       </tr>    
	   <tr>    
              <td  align="right" class="style1">Student ID:</td>    
              <td class="style1"><input type="text" name="ISBN" /></td>    
       </tr>   
	    <tr>    
              <td  align="right" class="style1"> Issue Date :</td>    
              <td class="style1"><input type="text" name="Author" /></td>    
       </tr>   
	    <tr>    
              <td  align="right" class="style1">Return Date :</td>    
              <td class="style1"><input type="text" name="Date" /></td>    
       </tr>   
	   </table>
		
			<center>
					<input type="submit" value="submit" name="Submit" />
					<input type="reset" value="reset" name="reset" />
			</center>
			
			<br /><br /><br /><br />
			
			
		</form>
	</body>
	

	<?php require_once('common/footer.php'); ?>