<!DOCTYPE>
<<?php
include("functions/functions.php");


 ?>
<html>
 <head>
   <title>My Online Shop</title>
   <link rel="stylesheet" href="styles/style.css" media="all" />
 </head>

 <body>
   <!-- main container starts here -->
   <div class="main_wrapper">



      <!-- header starts here -->
     <div class="header_wrapper">
       <img id="banner" src="images/ad_banner.gif" />
       <img id="logo" src="images/logo.gif" />
     </div>
      <!-- header ends here -->



 <!-- navigation bar starts here -->
     <div class="menubar">
       <ul id="menu">
         <li><a href="index.php">Home</a> </li>
         <li><a href="all_products.php">All products</a> </li>
         <li><a href="customer/my_account.php">My accounts</a> </li>
         <li><a href="#">Sign Up</a> </li>
         <li><a href="cart.php">Shopping Cart</a> </li>
         <li><a href="#">Contact Us</a> </li>
       </ul>

       <div id="form">
         <form method="get" action="results.php" enctype="multipart/form-data">
           <input type="text" name="user_query" placeholder="Search a product" />
           <input type="submit" name="search" value="search" />
         </form>
       </div>
     </div>
 <!-- navigation bar ends here -->



  <!-- content wrapper starts here -->
     <div class="content_wrapper">
       <div id="sidebar">
         <div id="sidebar_title">Categories</div>
          <ul id="cats">
           <?php getcats(); ?>
          </ul>


        <div id="sidebar_title">Brands</div>
         <ul id="cats">
          <?php getbrands(); ?>
         </ul>
       </div>
       <div id="content_area">
         <div id="shopping_cart">
           <span style="float:right; font-size:18px;padding:5px;line-height:40px;">Welcome Guest!
        <b style="color:yellow">Shopping Cart -</b>Total Items:Total Price:<a href = "cart.php" style="color:yellow">Go to Cart</a>
         </span>

         </div>
	   <div id = "products_box">
	   <?php
     if (isset($_GET['search'])) {
       $search_querry = $_GET['user_query'];

     $get_pro = "select * from products where product_keywords like '%$search_querry%'";

     $run_pro = mysqli_query($con, $get_pro);

     while($row_pro = mysqli_fetch_array($run_pro)){
     $pro_id = $row_pro['product_id'];
     $pro_cat = $row_pro['product_cat'];
     $pro_brand = $row_pro['product_brand'];
     $pro_title = $row_pro['product_title'];
     $pro_price = $row_pro['product_price'];
     $pro_image = $row_pro['product_image'];

     echo "
     <div id = 'single_product'>
     <h3 style = 'color:black'>$pro_title</h3>
     <img src = 'admin_area/product_images/$pro_image' width = '180' height = '180'/>
     <p style = 'color:black '><b>$ $pro_price</b></p>
     <a href = 'details.php?pro_id=$pro_id' style = 'float:left'>Details</a>
     <a href = 'index.php?pro_id=$pro_id'><button style = 'float:right'>Add to Cart</button</a>

     </div>

     ";
     }
   }
      ?>
	   </div>



	   </div>

     </div>

      <!-- content wrapper ends here -->

     <div id="footer">

<h2 style="text-align:center; padding-top:30px;">&copy; 2018 by www.OnlineShopping.com</h2>

     </div>
   </div>

 <!-- main container ends here -->




 </body>
</html>
