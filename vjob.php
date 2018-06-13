<?php include 'includes/header.php'; ?>
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="main.php">Home</a><span>«</span></li>
									
									<li>Jobs</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Full Details</h2>
									<!-- tables -->
									
									

										 
<div class="col-sm-7 well">

										   <?php
										   require 'includes/projectdb.php';
  $id =htmlspecialchars($_GET["id"]);

$sql = "SELECT * FROM jobs WHERE id='".$id."'";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$id = $row['id'];
        ?>
  


<div style="float: center;">
    <div><label><h2>Employer:</h2></label>
    <b><span><?php echo $row['employer']; ?></span></b></div>

    <div><label><h2>Project Name:</h2></label>
    <b><span><?php echo $row['project_name']; ?></span></b></div>

    <div><label><h2>Project Category:</h2></label>
    <b><span><?php echo $row['project_cat']; ?></span></b></div>

    <div><label><h2>Status:</h2></label>
    <b><span><?php echo $row['status']; ?></span></b></div>

    <div><label><h2>Skills:</h2></label>
    <b><span><?php echo $row['skills']; ?></span></b></div>

    <div><label><h2>Project File:</h2></label>
    <b><span><?php echo $row['project_file']; ?></span></b></div>

    <div><label><h2>Minimum Price:</h2></label>
    <b><span><?php echo $row['minimum_price']; ?></span></b></div>

    <div><label><h2>Maximum Price:</h2></label>
    <b><span><?php echo $row['maximum_price']; ?></span></b></div>

    <div><label><h2>Start Date:</h2></label>
    <b><span><?php echo $row['start_date']; ?></span></b></div>

    <div><label><h2>Due Date:</h2></label>
    <b><span><?php echo $row['due_date']; ?></span></b></div>

    <div><label><h2>Project Description:</h2></label>
    <div class="col-sm-8"><b><span><?php echo $row['project_desc']; ?></span></b></div></div>
    
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