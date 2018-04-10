<!DOCTYPE>
<?php
include("includes/db.php");
 ?>
<html>
 <head>
   <title>Inserting product</title>
   <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

 </head>
 <body bgcolor = "skyblue">
   <form action="insert_product.php" method="post" enctype="multipart/form-data">
     <table align="center" width="795" border="2" bgcolor= "#187eae">
       <tr align="center">
         <td colspan="8">
           <h2>insert new post here</h2>
         </td>
       </tr>

       <tr>
         <td align="right"><b>product title:</b></td>
         <td><input type="text" name="product_title" size="60"  required /></td>
       </tr>

       <tr>
         <td align="right"><b>product Category:</b></td>
         <td><select name="product_cat" required>
           <option>
             Select a Categories
           </option>
           <?php
           $get_cats = "select * from categories";

           $run_cats = mysqli_query($con,$get_cats);

           while ($row_cats=mysqli_fetch_array($run_cats)) {

             $cat_id=$row_cats['cat_id'];

             $cat_title=$row_cats['cat_title'];

             echo "<option value='$cat_id'>

             $cat_title

             </option>";
           }

            ?>

         </select></td>
       </tr>

       <tr>
         <td align="right"><b>product brands:</b></td>
         <td>
           <select name="product_brands" required>
             <option>
               Select a Brands
             </option>
             <?php
             $get_brands = "select * from brands";
             $run_brands = mysqli_query($con,$get_brands);
             while ($row_brands =mysqli_fetch_array($run_brands)) {
               $brand_id=$row_brands['brand_id'];
               $brand_title=$row_brands['brand_title'];
               echo "<option value ='$brand_id'>
               $brand_title
               </option>";
             }

              ?>

           </select>
         </td>
       </tr>

       <tr>
         <td align="right"><b>product Image</b></td>
         <td><input type="File" name="product_image" required/></td>
       </tr>

       <tr>
         <td align="right"><b>product price:</b></td>
         <td><input type="text" name="product_price" required/></td>
       </tr>

       <tr>
         <td align="right"><b>product Description:</b></td>
         <td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
       </tr>

       <tr>l
         <td align="right"><b>product Keywords:</b></td>
         <td><input type="text" name="product_keywords" size="50" required/></td>
       </tr>

       <tr align="center">

         <td colspan="8"><input type="submit" name="insert_post" value="Insert Now"/></td>
       </tr>
     </table>
   </form>
 </body>
</html>
<?php
if(isset($_POST['insert_post'])){
  //getting the text data from the fields
  $product_title = $_POST['product_title'];
  $product_cat = $_POST['product_cat'];
  $product_brand = $_POST['product_brands'];
  $product_price = $_POST['product_price'];
  $product_desc = $_POST['product_desc'];
  $product_keywords = $_POST['product_keywords'];
  //getting the image from the fields
  $product_image = $_FILES['product_image']['name'];
  $product_image_tmp = $_FILES['product_image']['tmp_name'];

  move_uploaded_file($product_image_tmp,"product_images/$product_image");

   $insert_product = "insert into products
   ( product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) values
   ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords'
  )";


 $insert_pro = mysqli_query($con , $insert_product);
 if($insert_pro){
   echo "<script>alert('product has been inserted')</script>";
   echo "<script>window.open('insert_product.php','_self')</script>";
 }
 else {
   echo "error";
 }

}
?>
