<?php require_once('common/header.php'); ?>
<style>
	.menu li{
		display: inline;
		padding-right: 50px;
	}
</style>
<link rel="stylesheet" href="css/about.css">
<?php require_once('common/menu.php'); ?>
<div class="content-body">  
	
	<ul class="menu">
	<li>
	         
		<label for="Language">Language:</label>
						
			<select name="Language" id="Language">
				<option value="English">English</option>
				<option value="Hindi">Sinhala</option>
				<option value="Spanish">Spanish</option>
				<option value="Bengali">Hindi</option>
				<option value="French">French</option>
				<option value="Russian">Russian</option>
			</select>
		
	</li>
	<li>
		<label for="Genere">Genere:</label>
			<select name="Genere" id="Genere">
				<option value="Action and Adventure">Action and Adventure</option>
				<option value="Comic Book or Graphic Novel">Comic Book or Graphic Novel</option>
				<option value="Detective ">Detective</option>
				<option value="Fantasy">Fantasy</option>
				<option value="Historical ">Historical</option>
				<option value="Horror">Horror</option>
			</select>
		
	</li>
	<li>
		
		<label for="Year">Year:</label>
			<select name="Year" id="Year">
				<option value="2020">2020</option>
				<option value="2019">2019</option>
				<option value="2018">2018</option>
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
			</select>
		
	</li>
	<li>
		
		<label for="Order By">Order By:</label>
			<select name="Order By" id="Order By">
				<option value="Latest to Oldest">Latest to Oldest</option>
				<option value="Most popular">Most popular</option>
				<option value="Price low to High">Price low to High</option>
				
			</select>
			
	</li>
	
	</ul>

	<div class="content-body">
    <div class="search-warp">
        
        <input type="button" class ="btnBookSearch" value="Search Book">
    </div>

    <div class="book-listings-wrap">

    <?php for($i=0; $i<25; $i++) { ?>
            <div class="book-card"> <!-- START BOOK CARD -->
                <div class="book-title">Sample title of the book</div>
                <img src="images/bookImages/sample.jpg" alt="Avatar" style="width:100%">
                <div class="bottom">
                    <div class="author"><b>Book author name</b></div> 
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span> 
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div> <!-- END BOOK CARD -->
        <?php } ?>

    </div>  <!-- END .book-listings-wrap -->

</div> <!-- END .content-body -->


<?php require_once('common/footer.php'); ?>
