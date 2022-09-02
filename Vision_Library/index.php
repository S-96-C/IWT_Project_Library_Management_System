<?php require_once('common/header.php'); ?>
<?php require_once('common/menu.php'); ?>

<div class="content-body">
    <div class="search-warp">
        <input type="text" name="bookSearch" placeholder="Search book">
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

