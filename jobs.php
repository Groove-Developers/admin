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
									<li>Jobs</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Add Job</h2>

							<!--/forms-->
													
																				
												
											<div class="wthree_general graph-form agile_info_shadow ">
												<h3 class="w3_inner_tittle two">Job Form </h3>

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
		$employer = stripslashes($_REQUEST['employer']); // removes backslashes
		$employer = mysqli_real_escape_string($con,$employer); //escapes special characters in a string
		$project_name = stripslashes($_REQUEST['project_name']);
		$project_name = mysqli_real_escape_string($con,$project_name);
		$project_cat = stripslashes($_REQUEST['project_cat']);
		$project_cat = mysqli_real_escape_string($con,$project_cat);
        $project_desc = stripslashes($_REQUEST['project_desc']);
        $project_desc = mysqli_real_escape_string($con,$project_desc);
        $skills = stripslashes($_REQUEST['skills']);
        $skills = mysqli_real_escape_string($con,$skills);
        $minimum_price = stripslashes($_REQUEST['minimum_price']);
        $minimum_price = mysqli_real_escape_string($con,$minimum_price);
        $maximum_price = stripslashes($_REQUEST['maximum_price']);
        $maximum_price = mysqli_real_escape_string($con,$maximum_price);
		$start_date = date("Y-m-d H:i:s");
		$due_date = date("Y-m-d H:i:s");


       $sql = 'INSERT INTO jobs (employer, project_name, project_cat, project_desc, minimum_price, maximum_price, start_date, due_date, project_file, status, skills)
VALUES ("'.$employer.'", "'.$project_name.'", "'.$project_cat.'", "'.$project_desc.'", "'.$minimum_price.'", "'.$maximum_price.'", "'.$start_date.'", "'.$due_date.'", "'.$product_file.'", "OPEN", "'.$skills.'")';
 $result = mysqli_query($con,$sql);
        //check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}
        if($result){
            header('LOCATION:vjobs.php'); die();
        }
    }else{
    	?>

							<form role="form" action="" enctype="multipart/form-data" method="post">
								<div class="form-group">
									<label>Employer</label>
									<input class="form-control" placeholder="Employer" type="text" name="employer">
								</div>
								<div class="form-group">
									<label>Project Name</label>
									<input class="form-control" placeholder="Project Name" type="text" name="project_name">
								</div>
								<div class="form-group">
											<label>Category</label>
										<select  id="project_cat" name="project_cat">
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
										<label>Project File</label>
										<input type="file" id="uploaded_file" name="uploaded_file" >
										</div>

								<div class="form-group">
									<label>Description</label>
									<textarea class="form-control" name="project_desc"></textarea>
								</div>
								<div class="form-group">
									<label>Skills Required</label>
									<input class="form-control" placeholder="Html, PHP,...." type="text" name="skills">
								</div>
								<div class="form-group">
									<label>Minimum Price</label>
									<input class="form-control" placeholder="Minimum Price" type="text" name="minimum_price">
								</div>
								<div class="form-group">
									<label>Maximum Price</label>
									<input class="form-control" placeholder="Maximum Price" type="text" name="maximum_price">
								</div>

								<div class="form-group">
									<label>Start Date</label>
									<input class="form-control" type="date" name="start_date">
								</div>
								<div class="form-group">
									<label>Due Date</label>
									<input class="form-control" type="date" name="due_date">
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