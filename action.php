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
									<li>Users</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Edit User</h2>

							<!--/forms-->
													
																				
												
											<div class="wthree_general graph-form agile_info_shadow ">
												<h3 class="w3_inner_tittle two">General Form </h3>

											    <div class="grid-1 ">
												<div class="form-body">

													<?php
													require 'includes/usersdb.php';
  
   if (isset($_REQUEST['submit'])){
		
        $account_status = stripslashes($_REQUEST['account_status']);
        $account_status = mysqli_real_escape_string($con,$account_status);

$id =htmlspecialchars($_GET["id"]);



        $query = "UPDATE users_details Set account_status='$account_status' Where id='".$id."'";
        $result = mysqli_query($con,$query);
        //check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}
        if($result){
      
           header('LOCATION:vu.php'); die();
        }
    }else{
$id =htmlspecialchars($_GET["id"]);
    	$sql = "SELECT * FROM users_details WHERE id='".$id."'";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
    	?>
								<form role="form" action="" enctype="multipart/form-data" method="post">
							
								 <div class="form-group">
											<label >Account Status</label>
											
										<select  id="account_type" name="account_status" >
        <option value=<?php echo $row['account_status']; ?> > <?php echo $row['account_status']; ?></option>
        <option value="SUSPENDED">Suspended</option>
        <option value="ACTIVE">Active</option>
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







