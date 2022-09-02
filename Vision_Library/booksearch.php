<?php require_once('common/header.php'); ?>
<?php require_once('common/menu.php'); ?>

<div class="content-body">
    <div class="search-warp">
        <input type="text" name="bookSearch" placeholder="Search book">
        <input type="button" class ="btnBookSearch" value="Search Book">
    </div>

	<div class="book-card  img">
    <img src="images/bookImages/sample.jpg" alt="Avatar" style="width:100%">
    </div>
	<div style="width: 100%;
		  margin: 5em auto;
		  font-size: 1.3rem;
		  color: #000000;
		  margin-bottom: 10px;
		  display: block;">
		  
		Book ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="result">         <br><br>
		Book Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="result">            <br><br>
		Book Discription:&nbsp;<input type="text" placeholder="result">            <br><br>
		Author: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="result">                 <br><br>
	</div>

</div> <!-- END .content-body -->


<?php require_once('common/footer.php'); ?>

