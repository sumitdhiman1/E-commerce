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
         <li><a href="#">Home</a> </li>
         <li><a href="#">All products</a> </li>
         <li><a href="#">My accounts</a> </li>
         <li><a href="#">Sign Up</a> </li>
         <li><a href="#">Shopping Cart</a> </li>
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
global $con;
if(isset($_GET['pro_id'])){
  $product_id = $_GET['pro_id'];
$get_pro = "select * from products where product_id= '$product_id'";

$run_pro = mysqli_query($con, $get_pro);

while($row_pro = mysqli_fetch_array($run_pro)){
$pro_id = $row_pro['product_id'];
$pro_title = $row_pro['product_title'];
$pro_price = $row_pro['product_price'];
$pro_image = $row_pro['product_image'];
$product_desc= $row_pro['product_desc'];

echo "
<div id = 'single_product'>
<h3 style = 'color:black'>$pro_title</h3>
<img src = 'admin_area/product_images/$pro_image' width = '400' height = '300'/>
<p style = 'color:black '><b>$ $pro_price</b></p>
<a href = 'index.php' style = 'float:left'>Go Back</a>
<a href = 'index.php?pro_id= $pro_id'><button style = 'float:right'>Add to Cart</button</a>

</div>

";
}}
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
