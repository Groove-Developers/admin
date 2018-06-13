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
					  <h2 class="w3_inner_tittle">Products In store</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two"></h3>

										 
											<table id="table">
											<thead>
								<tr>
  	<th>Id</th>
    <th>Seller Name</th>
    <th>Product Name</th>
    <th>Product Status</th>
    <th>Category</th>
    <th>Price</th>
    <th>File</th>
    <th>Post Date</th>
    <th>Action</th>
  </tr>
											</thead>

											<tbody>
												<?php
												require 'includes/storedb.php';

$sql = "SELECT * FROM products LIMIT 30 ";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$id = $row['id'];
        ?>
   <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['seller_name']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['product_status']; ?></td>
    <td><?php echo $row['product_cat']; ?></td>
    <td><?php echo $row['product_price']; ?></td>
    <td><?php echo $row['product_file']; ?></td>
    <td><?php echo $row['reg_date']; ?></td>
    
    <td>
    	<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      View&nbsp;<span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><?php echo '<a href="epd.php?id='.$id.'">';?>Edit Product</a></li>
      <li><?php echo '<a href="vpd.php?id='.$id.'">';?>View Product</a></li>
      <li><?php echo '<a href="dpd.php?id='.$id.'">';?>Delete Product</a></li>
    </ul>
  </div>

    </td>
  </tr>
  <?php  }

$con->close();
?>
											</tbody>
										  </table>
									
									  
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