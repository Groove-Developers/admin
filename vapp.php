<?php include 'includes/header.php'; ?>
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="main.php">Home</a><span>«</span></li>
									
									<li>Applications</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Application Listing Details</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two"> Full Details</h3>

										 

<div class="text-center" style="float: center;">
										   <?php
										   require 'includes/storedb.php';
  $id =htmlspecialchars($_GET["id"]);

$sql = "SELECT id, username, status, app_url, app_tagline, app_file, app_desc, app_p1, app_p2, app_p3, app_p4, app_p5, app_p6, minimum_pay, maximum_pay, date FROM app WHERE id='".$id."'";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$id = $row['id'];
        ?>
   
   
    <p><b>User Name</b>: <?php echo $row['username']; ?></p>
    <p><b>Project Status</b>: <?php echo $row['status']; ?></p>
    <p><b>Project Url</b>: <?php echo $row['app_url']; ?></p>
    <p><b>Tagline</b>: <?php echo $row['app_tagline']; ?></p>
    <p><b>Project File</b>: <?php echo $row['app_file']; ?></p>
    <p><b>Description</b>: <?php echo $row['app_desc']; ?></p>
    <p><b>What is included in the sales?</b>: <?php echo $row['app_p1']; ?></p>
    <p><b>Average monthly downloads</b>: <?php echo $row['app_p2']; ?></p>
    <p><b>Does it generate revenue?</b>: <?php echo $row['app_p3']; ?></p>
    <p><b>Is your app a reskin?</b>: <?php echo $row['app_p4']; ?></p>
    <p><b>What Platform is it built on?</b>: <?php echo $row['app_p5']; ?></p>
    <p><b>When did your app go live?</b>: <?php echo $row['app_p6']; ?></p>
    <p><b>Minimum Pay</b>: <?php echo $row['minimum_pay']; ?></p>
    <p><b>Maximum Pay</b>: <?php echo $row['maximum_pay']; ?></p>
    <p><b>Post Date</b>: <?php echo $row['date']; ?></p>
    
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