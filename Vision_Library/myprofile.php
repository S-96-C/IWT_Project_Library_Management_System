<?php require_once('common/header.php'); ?>
<title>  Vision Library</title> 
<style>
.content {
  max-width: 500px;
  margin: auto;
}
</style>
<link rel="stylesheet" href="css/myprofile.css" />

<?php require_once('common/menu.php'); ?>

<div class="content-body">   
 
<form> 
 
<img src="images/user.svg" width="100px" height="auto" />

<div>  
	<form class="cd-form" method="POST" action="#" align=center>
			<center>
				<h2>My Profile</h2>
			</center>

			
		<table id="table1"; cellspacing="5px" cellpadding="5%"; align="center">  
			<tr>    
					<td  align="right">Member ID :</td>    
					<td><input type="text" name="MemberID" value="<?php echo $_SESSION["userId"]; ?>" disabled /></td>  
			</tr>    

			<tr>    
					<td  align="right">User Name  :</td>    
					<td><input type="text" name="Username" value="<?php echo $_SESSION["currentUser"]; ?>" /></td>   
			</tr> 
		
			<tr>    
					<td  align="right">E-mail Address :</td>    
					<td><input type="text" name="Email" value="<?php echo $_SESSION["email"]; ?>"  /></td>     
			</tr>   
			<tr>    
					<td  align="right">Password :</td>    
					<td><input type="text" name="Password" /></td>  
			</tr>   
			<tr>    
					<td  align="right">Re-Enter Password :</td>    
					<td><input type="text" name="Password" /></td>  
			</tr>   
		</table>
			
			<center>
					<input type="submit" value="submit" name="Update" />
			</center>
				
	</form>


</div> <!-- END .content-body -->


<?php require_once('common/footer.php'); ?>

