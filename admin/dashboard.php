<?php

include('header.php');
include('menu.php');
include('connect.php');
?>
       
        <div class="grid_10">

            <div class="box round first">

                <h2>Add Product</h2>

                    

                <div class="block">
                  <form name="" action="" method="post" enctype="multipart/form-data">
                   <table  align="center" border="10">
				   <tr>
				   <td>Product Name</td>
				   <td><input type="text" name="product_name"></td>
				   </tr>
				   <tr>
				   <td>Product Description</td>
				   <td><textarea cols="15" rows="10" type="text" name="product_desc"></textarea></td>
				   
				   
				   </tr>
				   <tr>
				   <td>Product Price</td>
				   <td><input type="text" name="product_price"></td>
				   </tr>
				   <tr>
				   <td>Product Quantity</td>
				   <td><input type="text" name="product_qty"></td>
				   </tr>
				   <tr>
				   <td>Product Image</td>
				   <td><input type="file" name="product_image"></td>
				   </tr>
				   <tr>
				   <td>Product Category</td>
				   <td>
				   <select name="product_category">
				   
				   <option value="appitizer">Appitizer</option>
				   <option value="basmati">Basmati Ki Bahar</option>
				   <option value="curry">Curry Corner</option>
				   <option value="dal">Dal Ka Kamal</option>
				   <option value="dessert">Dessert</option>
				   <option value="ifc">International Food Court</option>
				   <option value="lassi">Lassi</option>
				   <option value="paratha">Pind Paratha</option>
				   <option value="psc">Pind Special Combos</option>
				   <option value="roti">Roti</option>
				     <option value="rns">Rice Noodles & Sauces</option>
				   
				   <option value="spr">Salad Papad Raita</option>
				   <option value="sqv">Starter Oriental Veg</option>
				   <option value="sqn">Starter Oriental Nonveg</option>
				   
				   <option value="stv">Starter Tandoori Veg</option>
				   <option value="stn">Starter Tandoori Nonveg</option>
				   
				   <option value="non">Nonveg</option>
				   
				   <option value="veg">Veg</option>
				   <option value="st">Starter</option>
				   
				   
				   
				   </select>
				   </td>
				   </tr>
				   <tr>
				   
				   <td colspan="2" align="center"><input type="submit" name="upload" value="upload"></td>
				   
				   </tr>
				   </table>
                  </form>
				  <?php
				  if(isset($_POST['upload'])){
					  
					  $pname=$_POST['product_name'];
					  $pdesc=$_POST['product_desc'];
					  $pprice=$_POST['product_price'];
					  $pqty=$_POST['product_qty'];
					  $pcat=$_POST['product_category'];
					  $v1=rand(10,90);
					  $v2=rand(10,90);
					  $v3=$v1.$v2;
					  $v3=md5($v3);
					 $file= $_FILES['product_image']['name'];
					 $dest="./product-image/".$v3.$file;
					 $dest1="product-image/".$v3.$file;;
					 move_uploaded_file($_FILES['product_image']['tmp_name'],$dest);
					 mysqli_query($con,"insert into product values('','$pname','$pdesc','$pprice','$pqty','$dest1','$pcat')"); 
					  
					  
				  }
				  
				  
				  
				  
				  ?>
                    </div>

                </div>

            </div>

        
<?php include('footer.php');?>
      