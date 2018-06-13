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
									<li>Projects</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Add Project</h2>

							<!--/forms-->
													
																				
												
											<div class="wthree_general graph-form agile_info_shadow ">
												<h3 class="w3_inner_tittle two">Project Form </h3>

											    <div class="grid-1 ">
												<div class="form-body">

													<?php
													require 'includes/projectdb.php';
  
   if (isset($_REQUEST['submit'])){
   	$target_dir = "uploads/";
    $project_file = basename( $_FILES['uploaded_file']['name']);
    $target_file = $target_dir . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_file)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$status = stripslashes($_REQUEST['status']);
		$status = mysqli_real_escape_string($con,$status);
		$project_name = stripslashes($_REQUEST['project_name']);
		$project_name = mysqli_real_escape_string($con,$project_name);
        $project_cat = stripslashes($_REQUEST['project_cat']);
        $project_cat = mysqli_real_escape_string($con,$project_cat);
        $project_desc = stripslashes($_REQUEST['project_desc']);
        $project_desc = mysqli_real_escape_string($con,$project_desc);
        $minimum_pay = stripslashes($_REQUEST['minimum_pay']);
        $minimum_pay = mysqli_real_escape_string($con,$minimum_pay);
        $maximum_pay = stripslashes($_REQUEST['maximum_pay']);
        $maximum_pay = mysqli_real_escape_string($con,$maximum_pay);
        
		$start_date = date("Y-m-d H:i:s");
		$due_date = date("Y-m-d H:i:s");



        $query = "INSERT into users_project (username, status, project_name, project_cat, project_desc, project_file, minimum_pay, maximum_pay, start_date, due_date) VALUES ('$username', '$status', '$project_name', '$project_cat', '$project_desc', '$project_file', '$minimum_pay', '$maximum_pay', '$start_date', '$due_date')";
        $result = mysqli_query($con,$query);
        //check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}
        if($result){
            header('LOCATION:vpro.php'); die();
        }
    }else{
    	?>
													<form role="form" action="" enctype="multipart/form-data" method="post">
								<div class="form-group">
									<label>User Name</label>
									<input class="form-control" placeholder="First Name" type="text" name="username">
								</div>
								<div class="form-group">
											<label >Status</label>
											
										<select  id="status" name="status">
        <option>select</option>
        <option value="Pending">Pending</option>
        <option value="Approved">Approved</option>
        <option value="Ongoing">Ongoing</option>
        <option value="Completed">Completed</option>
        <option value="Delivered">Delivered</option>
      </select>
  
</div>
								<div class="form-group">
									<label>Project Name</label>
									<input class="form-control" placeholder="e. Instagram,  Twitter....." type="text" name="project_name">
								</div>
								 <div class="form-group">
											<label >Project Category</label>
											
										<select  id="project_cat" name="project_cat">
        <option>select</option>
        <option value="Graphics">Graphics</option>
        <option value="Website">Website</option>
        <option value="Web Application">Web Application</option>
        <option value="Mobile Application">Mobile Application</option>
        <option value="Templates/ UI design">Templates/ UI design</option>
        <option value="Software">Software</option>
      </select>
  
</div>
								<div class="form-group">
											<label>Project Description</label>
					<textarea name="project_desc" id="project_desc" cols="50" rows="4" class="form-control" ></textarea>
										</div>
										
								 <div class="form-group">
										<label>Project File</label>
										<input type="file" id="uploaded_file" name="uploaded_file" >
										</div>
										

								<div class="form-group">
									<label>Minimum Pay</label>
									<input class="form-control" placeholder="$150" type="text" name="minimum_pay">
								</div>
								<div class="form-group">
									<label>Maximum Pay</label>
									<input class="form-control" placeholder="$100000000000000......" type="text" name="maximum_pay">
								</div>
								<div class="form-group">
									<label>Start Date</label>
									<input class="form-control" placeholder="City" type="date" name="start_date">
								</div>
								<div class="form-group">
									<label>Due Date</label>
									<input class="form-control" placeholder="Country" type="date" name="due_date">
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







