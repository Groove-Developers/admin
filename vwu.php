<?php include 'includes/header.php'; ?>
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="main.php">Home</a><span>«</span></li>
									
									<li>Users</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Users Details</h2>
									<!-- tables -->
									
									

										 
<div class="col-sm-7 well">

										   <?php
										   require 'includes/usersdb.php';
  $username =htmlspecialchars($_GET["username"]);

$sql = "SELECT * FROM users_details WHERE username='".$username."'";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $conn->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$id = $row['id'];
        ?>
   
   <div class="col-sm-3 well sidenav" style="float: left;">
 <img src="images/<?php echo $row['profile_img'];?>" height="100%" width="100%" alt="Avatar">
</div>


<div style="float: right;">
    <div><label><h2>User Name:</h2></label>
    <b><span><?php echo $row['username']; ?></span></b></div>

    <div><label><h2>Email:</h2></label>
    <b><span><?php echo $row['email']; ?></span></b></div>

    <div><label><h2>Phone Number:</h2></label>
    <b><span><?php echo $row['phone_num']; ?></span></b></div>

    <div><label><h2>Address:</h2></label>
    <b><span><?php echo $row['address']; ?></span></b></div>

    <div><label><h2>City:</h2></label>
    <b><span><?php echo $row['city']; ?></span></b></div>

    <div><label><h2>Country:</h2></label>
    <b><span><?php echo $row['country']; ?></span></b></div>

    <br>
    <h2>Payment Details</h2>
    <br>

    <div><label><h2>Payment Mode:</h2></label>
    <b><span><?php echo $row['payment_mode']; ?></span></b></div>

    <div><label><h2>Payment Mail:</h2></label>
    <b><span><?php echo $row['payment_mail']; ?></span></b></div>
    
  </div>
    
  <?php  }

$con->close();
?>
											

									
						 </div>		
						
							<!-- //tables -->
					<div class="clearfix"></div>
							
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