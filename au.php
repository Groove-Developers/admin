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
					  <h2 class="w3_inner_tittle">Add User</h2>

							<!--/forms-->
													
																				
												
											<div class="wthree_general graph-form agile_info_shadow ">
												<h3 class="w3_inner_tittle two">General Form </h3>

											    <div class="grid-1 ">
												<div class="form-body">

													<?php
													require 'includes/usersdb.php';
  
   if (isset($_REQUEST['submit'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
        $account_type = stripslashes($_REQUEST['account_type']);
        $account_type = mysqli_real_escape_string($con,$account_type);
        $phone_num = stripslashes($_REQUEST['phone_num']);
        $phone_num = mysqli_real_escape_string($con,$phone_num);
        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con,$address);
        $city = stripslashes($_REQUEST['city']);
        $city = mysqli_real_escape_string($con,$city);
        $country = stripslashes($_REQUEST['country']);
        $country = mysqli_real_escape_string($con,$country);
		$reg_date = date("Y-m-d H:i:s");



        $query = "INSERT into users_details (username, password, email, account_type, phone_num, address, city, country, reg_date, account_status, profile_img, payment_mail, payment_mode) VALUES ('$username', '".md5($password)."', '$email', '$account_type', '$phone_num', '$address', '$city', '$country', '$reg_date', 'ACTIVE', 'p1.jpg', '$email', 'PAYPAL')";
        $result = mysqli_query($con,$query);
        //check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}
        if($result){
            header('LOCATION:vu.php'); die();
        }
    }else{
    	?>
													<form role="form" action="" enctype="multipart/form-data" method="post">
								<div class="form-group">
									<label>User Name</label>
									<input class="form-control" placeholder="First Name" type="text" name="username" >
								</div>
								
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" placeholder="Email" type="text" name="email">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" placeholder="password">
								</div>
								 <div class="form-group">
											<label >Account Type</label>
											
										<select  id="account_type" name="account_type">
        <option>select</option>
        <option value="Customer">Customer</option>
        <option value="Developer">Developer</option>
      </select>
  
</div>

								<div class="form-group">
									<label>Phone Number</label>
									<input class="form-control" placeholder="Phone Number" type="text" name="phone_num">
								</div>
								<div class="form-group">
									<label>Address</label>
									<input class="form-control" placeholder="Address" type="text" name="address">
								</div>
								<div class="form-group">
									<label>City</label>
									<input class="form-control" placeholder="City" type="text" name="city">
								</div>
								<div class="form-group">
									<label>Country</label>
									<input class="form-control" placeholder="Country" type="text" name="country">
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







