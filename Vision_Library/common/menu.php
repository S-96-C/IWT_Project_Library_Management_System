<?php  $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  ?>
<div class="header-menu-outer">
    <ul class="header-menu">
    <li><a href="index.php" class="<?php echo $curPageName == 'index.php' ? 'active' : ''?>">Home</a></li>
    <li><a href="booksearch.php" class="<?php echo $curPageName == 'booksearch.php' ? 'active' : ''?>">Book Search</a></li>
    <li><a href="myorder.php" class="<?php echo $curPageName == 'myorder.php' ? 'active' : ''?>">My Order</a></li>
    <li><a href="catergorydisplay.php" class="<?php echo $curPageName == 'catergorydisplay.php' ? 'active' : ''?>">Category</a></li>
    <li><a href="reservebook.php" class="<?php echo $curPageName == 'reservebook.php' ? 'active' : ''?>">Receive Book</a></li>
    <li><a href="returnbook.php" class="<?php echo $curPageName == 'returnbook.php' ? 'active' : ''?>">Return Book</a></li>
    <li><a href="contactus.php" class="<?php echo $curPageName == 'contactus.php' ? 'active' : ''?>">Contact Us</a></li>
    <li><a href="aboutus.php" class="<?php echo $curPageName == 'aboutus.php' ? 'active' : ''?>">About Us</a></li>
    <li ><a href="myprofile.php" class="<?php echo $curPageName == 'myprofile.php' ? 'active' : ''?>" >My Account</a></li>
    </ul>
</div>

