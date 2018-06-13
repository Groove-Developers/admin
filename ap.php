<?php
ob_start();

?>
<?php include 'includes/header.php'; ?>
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="main.php">Home</a><span>«</span></li>
									<li>Store</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Add Products</h2>

							<!--/forms-->
													
																				
												
											<div class="wthree_general graph-form agile_info_shadow ">
												<h3 class="w3_inner_tittle two">Products Form </h3>

											    <div class="grid-1 ">
												<div class="form-body">

													<?php
													require 'includes/storedb.php';
  
  if (isset($_REQUEST['submit'])){
   	 $target_dir = "uploads/";
    $product_file = basename( $_FILES['uploaded_file']['name']);
    $target_file = $target_dir . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_file)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
		$seller_name = stripslashes($_REQUEST['seller_name']); // removes backslashes
		$seller_name = mysqli_real_escape_string($con,$seller_name); //escapes special characters in a string
		$product_name = stripslashes($_REQUEST['product_name']);
		$product_name = mysqli_real_escape_string($con,$product_name);
		$product_cat = stripslashes($_REQUEST['product_cat']);
		$product_cat = mysqli_real_escape_string($con,$product_cat);
        $product_desc = stripslashes($_REQUEST['product_desc']);
        $product_desc = mysqli_real_escape_string($con,$product_desc);
        $product_price = stripslashes($_REQUEST['product_price']);
        $product_price = mysqli_real_escape_string($con,$product_price);
        $product_status = stripslashes($_REQUEST['product_status']);
        $product_status = mysqli_real_escape_string($con,$product_status);
        
		$reg_date = date("Y-m-d H:i:s");


       $sql = 'INSERT INTO products (seller_name, product_name, product_cat, product_desc, product_price, reg_date, product_file, product_status)
VALUES ("'.$seller_name.'", "'.$product_name.'", "'.$product_cat.'", "'.$product_desc.'", "'.$product_price.'", "'.$reg_date.'", "'.$product_file.'", "In-Store")';
 $result = mysqli_query($con,$sql);
        //check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}
        if($result){
            header('LOCATION:vp.php'); die();
        }
    }else{
    	?>

							<form role="form" action="" enctype="multipart/form-data" method="post">
								<div class="form-group">
									<label>Seller Name</label>
									<input class="form-control" placeholder="Seller Name" type="text" name="seller_name">
								</div>
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" placeholder="Product Name" type="text" name="product_name">
								</div>
								<div class="form-group">
											<label>Category</label>
										<select  id="product_cat" name="product_cat">
        <option>select</option>
        <option value="Domain">Domain</option>
        <option value="Websites">Websites</option>
        <option value="Templates">Templates</option>
        <option value="Applications">Applications</option>
        <option value="Graphics">Graphics Design</option>
        <option value="Software">Software</option>
      </select>
  
</div>

<div class="form-group">
										<label>Product File</label>
										<input type="file" id="uploaded_file" name="uploaded_file" >
										</div>

								<div class="form-group">
									<label>Description</label>
									<input class="form-control" placeholder="Product Description" type="text" name="product_desc">
								</div>
								<div class="form-group">
									<label>Product Price</label>
									<input class="form-control" placeholder="Product Price" type="text" name="product_price">
								</div>
								
									<button type="submit" name="submit" class="btn btn-primary">Add</button>
							</form>
							<?php
 }?>
													</div>
												    </div>
													</div>
																			
																			 <!--//set-2-->

																			 
																		</div>
																	<!--//forms-inner-->
																</div> 
														<!--//forms-->											   
					
							
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<?php include 'includes/footer.php'; ?>
<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>

<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>