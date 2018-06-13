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
									<li>Templates</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Edit Templates Listing</h2>

							<!--/forms-->
													
																				
												
											<div class="wthree_general graph-form agile_info_shadow ">
												<h3 class="w3_inner_tittle two"> </h3>

											    <div class="grid-1 ">
												<div class="form-body">

													<?php
													require 'includes/storedb.php';
  
   if(isset($_POST["submit"])){

   	  $target_dir = "uploads/";
    $template_file = basename( $_FILES['uploaded_file']['name']);
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
		$template_url = stripslashes($_REQUEST['template_url']);
		$template_url = mysqli_real_escape_string($con,$template_url);
        $template_tagline = stripslashes($_REQUEST['template_tagline']);
        $template_tagline = mysqli_real_escape_string($con,$template_tagline);
        $template_desc = stripslashes($_REQUEST['template_desc']);
        $template_desc = mysqli_real_escape_string($con,$template_desc);
        $minimum_pay = stripslashes($_REQUEST['minimum_pay']);
        $minimum_pay = mysqli_real_escape_string($con,$minimum_pay);
        $maximum_pay = stripslashes($_REQUEST['maximum_pay']);
        $maximum_pay = mysqli_real_escape_string($con,$maximum_pay);
        $id =htmlspecialchars($_GET["id"]);
		$reg_date = date("Y-m-d H:i:s");


        
        


        $query = "UPDATE template Set status='$status', template_url='$template_url', template_tagline='$template_tagline', template_desc='$template_desc', minimum_pay='$minimum_pay', maximum_pay='$maximum_pay', username='$username', reg_date='$reg_date' Where id='".$id."'";
        $result = mysqli_query($con,$query);
        //check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}
        if($result){
            header('LOCATION:tmp.php'); die();
        }
    }else{


    	//view php code


    	$id =htmlspecialchars($_GET["id"]);
    	$sql = "SELECT id, username, status, template_url, template_tagline, template_file, template_desc, minimum_pay, maximum_pay, reg_date FROM template WHERE id='".$id."'";
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
											<label>Username</label>
												<input type="text" class="form-control1" id="username" placeholder="" name="username" value=<?php echo $row['username']; ?>>
										</div>
								<div class="form-group">
											<label>Graphic url</label>
												<input type="url" class="form-control1" id="template_url" placeholder="" name="template_url" value=<?php echo $row['template_url']; ?>>
										</div>
										<div class="form-group">
											<label>Tagline</label>
												<input type="text" class="form-control1" id="template_tagline" placeholder="e.g Media Site" name="template_tagline" value=<?php echo $row['template_tagline']; ?>>
										</div>
										<div class="form-group">
											<label >Status</label>
										<select  id="status" name="status" >
        <option value=<?php echo $row['status']; ?> > <?php echo $row['status']; ?></option>
        <option value="Approved">Approved</option>
        <option value="Listed">Listed</option>
        <option value="Pending">Pending</option>
        <option value="Purchased">Purchased</option>
      </select>
  
</div>
										<div class="form-group">
											<label>Description</label>
											<textarea name="template_desc" id="template_desc" cols="50" rows="4" class="form-control"  ><?php echo $row['template_desc']; ?></textarea></div>
										</div>
										
										<div class="form-group">
										<label>Drop the Domain credentials here</label>
										<input type="file" id="uploaded_file" name="uploaded_file" value=<?php echo $row['template_file']; ?>>
										
										</div> 

										<div class="form-group">
											<label>How much would you like to sell it?</label>
												<input type="text" class="form-control1" id="minimum_pay" placeholder="minimum" name="minimum_pay" value=<?php echo $row['minimum_pay']; ?>>
										</div>
										<div class="form-group">
											<label></label>
												<input type="text" class="form-control1" id="maximum_pay" placeholder="maximum" name="maximum_pay" value=<?php echo $row['maximum_pay']; ?>>
										</div>
										<div class="form-group">
											<label>Date Posted</label>
												<input type="date" class="form-control1" id="reg_date" placeholder="" name="reg_date" value=<?php echo $row['reg_date']; ?>>
										</div>
						
										<button class="btn-danger" id="submit" name="submit">submit</button>
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







