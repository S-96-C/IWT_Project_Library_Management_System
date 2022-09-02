<?php require_once('common/header.php'); ?>
<?php require_once('common/menu.php'); ?>

<div class="content-body">


<br>
<br>
<table id="table1";
		<form class="cd-form" method="POST" action="#">
		<center>
			<legend>Recive Book</legend>
		</center>
		<br>
		
		<table id="table1"; cellspacing="5px" cellpadding="5%"; align="center">    
		<tr>    
				<td  align="right">Book ID:</td>    
				<td><input type="text" name="Book Title" /></td>    
		</tr>    
		<tr>    
				<td  align="right">Student ID:</td>    
				<td><input type="text" name="ISBN" /></td>    
		</tr>   
	    <tr>    
				<td  align="right">Issue Date :</td>    
				<td><input type="text" name="Author" /></td>    
		</tr>   
	    <tr>    
				<td  align="right">Return Date :</td>    
				<td><input type="text" name="Date" /></td>    
		</tr>   
		</table>
		
				<center>
					<input type="submit" value="submit" name="Submit" />
					<input type="reset" value="reset" name="reset" />
				</center>
			
		</form>

</div> <!-- END .content-body -->


<?php require_once('common/footer.php'); ?>

