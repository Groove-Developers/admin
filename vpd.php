<?php include 'includes/header.php'; ?>
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="main.php">Home</a><span>«</span></li>
									
									<li>Products</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Products Details</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two"> Full Details</h3>

										 

<div class="text-center" style="float: center;">
										   <?php
										   require 'includes/storedb.php';
  $id =htmlspecialchars($_GET["id"]);


$sql = "SELECT id, seller_name, product_name, product_cat, product_file, product_desc, product_price, reg_date FROM products WHERE id='".$id."' LIMIT 30 ";
$result = $con->query($sql);
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $conn->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$id = $row['id'];
        ?>
   
   
    <p><b>Seller Name</b>: <?php echo $row['seller_name']; ?></p>
    <p><b>Product Name</b>: <?php echo $row['product_name']; ?></p>
    <p><b>Product Category</b>: <?php echo $row['product_cat']; ?></p>
    <p><b>Product Description</b>: <?php echo $row['product_desc']; ?></p>
    <p><b>Product File</b>: <?php echo $row['product_file']; ?></p>
    <p><b>Product Price</b>: <?php echo $row['product_price']; ?></p>
    <p><b>Post Date</b>: <?php echo $row['reg_date']; ?></p>
    
  <?php  }

$con->close();
?>
											

											
									</div>  
								</div>
								
						</div>
							<!-- //tables -->
					
							
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
<?php include 'includes/footer.php'; ?>
<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
<!-- tables -->

<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
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