<?php require_once('common/header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/contactus.css" />
<?php require_once('common/menu.php'); ?>
<center>
<div class="container">
			<h2>Contact Us</h2>
			<h4>Address : Vision Library, <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rawathawaththa,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Moratuwa.</h4>
			<h4>E-mail: &nbsp;&nbsp;&nbsp;visionlibrary@gmail.com</h4>
			<h4>Tel : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+9411 1234567</h4>
			<h4>Fax : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+9411 1234567</h4>
</div><!-- contact -->
</center>
<br>


<div class="content-body">
<div  class="container">
<div style="text-align:center">
	<h2>Send Us Your Feedback</h2>
    <p>We are here for serve you.. leave us a message:</p>
</div>
	<div class="row">
		<div class="column">
			<form action="/action_page.php">
				<label for="fname">First Name</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name..">
				<label for="lname">Last Name</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name..">
				<label for="country">Country</label>
				<select id="country" name="country">
					<option value="australia">Sr Lanka</option>
					<option value="india">India</option>
					<option value="usa">USA</option>
				</select>
				<label for="subject">Subject</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
				<input type="submit" value="Submit">
			  </form>
		</div>
	</div>
</div>

	

</div> <!-- END .content-body -->


<?php require_once('common/footer.php'); ?>

