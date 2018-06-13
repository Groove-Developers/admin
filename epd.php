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
					  <h2 class="w3_inner_tittle"> Products</h2>

							<!--/forms-->
													
																				
												
											<div class="wthree_general graph-form agile_info_shadow ">
												<h3 class="w3_inner_tittle two">Edit Products Form</h3>

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
        $id =htmlspecialchars($_GET["id"]);
        $product_status = stripslashes($_REQUEST['product_status']);
        $product_status = mysqli_real_escape_string($con,$product_status);
		$reg_date = date("Y-m-d H:i:s");

		 $target_dir = "uploads/";
    $product_img = basename( $_FILES['upload']['name']);
    $target_file = $target_dir . basename( $_FILES['upload']['name']);
    if(move_uploaded_file($_FILES['upload']['tmp_name'], $target_file)) {
      echo "The file ".  basename( $_FILES['upload']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }


       $sql = "UPDATE products SET seller_name='$seller_name', product_name='$product_name', product_cat='$product_cat', product_desc='$product_desc', product_price='$product_price', reg_date='$reg_date', product_file='$product_file', product_status='$product_status', product_img='$product_img' Where id='".$id."'";


  

        if ($con->query($sql) === TRUE) {
    header('LOCATION:vp.php'); die();
} }else {


	//view php code


    	$id =htmlspecialchars($_GET["id"]);
    	$sql = "SELECT id, seller_name, product_name, product_cat, product_desc, product_img, product_price, product_status, product_file, reg_date FROM products WHERE id='".$id."'";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	// view php code ends
    	?>

							<form role="form" action="" enctype="multipart/form-data" method="post">
								<div class="form-group">
									<label>Seller Name</label>
									<input class="form-control" placeholder="Seller Name" type="text" name="seller_name" value=<?php echo $row['seller_name']; ?>>
								</div>
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" placeholder="Product Name" type="text" name="product_name" value=<?php echo $row['product_name']; ?>>
								</div>
								<div class="form-group">
										<label>Product Image</label>
										<input type="file" id="upload" name="upload" value=<?php echo $row['product_img']; ?>>
										</div>

								<div class="form-group">
											<label>Category</label>
										<select  id="product_cat" name="product_cat">
        <option value=<?php echo $row['product_cat']; ?>  > <?php echo $row['product_cat']; ?></option>
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
										<input type="file" id="uploaded_file" name="uploaded_file" value=<?php echo $row['product_file']; ?>>
										</div>

								<div class="form-group">
											<label>Description</label>
											<textarea name="product_desc" id="product_desc" cols="50" rows="4" class="form-control"  ><?php echo $row['product_desc']; ?></textarea></div>
										</div>
								<div class="form-group">
									<label>Product Price</label>
									<input class="form-control" placeholder="Product Price" type="text" name="product_price" value=<?php echo $row['product_price']; ?>>
								</div>
								<div class="form-group">
											<label>Product Status</label>
										<select  id="product_status" name="product_status">
        <option value=<?php echo $row['product_status']; ?>  > <?php echo $row['product_status']; ?></option>
        <option value="In-Store">In-Store</option>
        <option value="Sold">Sold</option>
      </select>
  
</div>

								
									<button type="submit" name="submit" class="btn btn-primary">Add</button>
							</form>
							<?php
 }
}
?>
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