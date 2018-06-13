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
    $site_file = basename( $_FILES['uploaded_file']['name']);
    $target_file = $target_dir . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_file)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  

        $username =htmlspecialchars($_POST['username']);
        $site_url =htmlspecialchars( $_POST["site_url"]);
        $site_tagline =htmlspecialchars( $_POST["site_tagline"]);
        $site_desc =htmlspecialchars($_POST["site_desc"]);
        $minimum_pay =htmlspecialchars($_POST["minimum_pay"]);
        $maximum_pay =htmlspecialchars($_POST["maximum_pay"]);
        $site_p1 =htmlspecialchars($_POST["site_p1"]);
        $site_p2 =htmlspecialchars($_POST["site_p2"]);
        $site_p3 =htmlspecialchars($_POST["site_p3"]);
        $site_p4 =htmlspecialchars($_POST["site_p4"]);
        $site_p5 =htmlspecialchars($_POST["site_p5"]);
        $site_p6 =htmlspecialchars($_POST["site_p6"]);
        $site_p7 =htmlspecialchars($_POST["site_p7"]);
        $site_p8 =htmlspecialchars($_POST["site_p8"]);
        $status =htmlspecialchars($_POST["status"]);
        $date = date("Y-m-d H:i:s");
        $id =htmlspecialchars($_GET["id"]);
		


        
        


        $query = "UPDATE website Set status='$status', site_url='$site_url', site_tagline='$site_tagline', site_desc='$site_desc', site_p1='$site_p1', site_p2='$site_p2', site_p3='$site_p3', site_p4='$site_p4', site_p5='$site_p5', site_p6='$site_p6', site_p7='$site_p7', site_p8='$site_p8', minimum_pay='$minimum_pay', maximum_pay='$maximum_pay', username='$username', date='$date' Where id='".$id."'";
        $result = mysqli_query($con,$query);
        //check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}
        if($result){
            header('LOCATION:web.php'); die();
        }
    }else{


    	//view php code


    	$id =htmlspecialchars($_GET["id"]);
    	$sql = "SELECT id, username, status, site_url, site_tagline, site_file, site_desc, site_p1, site_p2, site_p3, site_p4, site_p5, site_p6, site_p7, site_p8, minimum_pay, maximum_pay, date FROM website WHERE id='".$id."'";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	// view php code ends
    	
    	?>
													<form class="form-horizontal" action="" enctype="multipart/form-data" method="post" >
										<div class="form-group">
											<label>username</label>
												<input type="text" class="form-control1" id="username" placeholder="" name="username" required="" value=<?php echo $row['username']; ?>>
										</div>
										<div class="form-group">
											<label>Site url</label>
												<input type="url" class="form-control1" id="site_url" placeholder="https://groovedevelopers.com" name="site_url" required="" value=<?php echo $row['site_url']; ?>>
										</div>
										<div class="form-group">
											<label>Tagline</label>
												<input type="text" class="form-control1" id="site_tagline" placeholder="" name="site_tagline" required="" value=<?php echo $row['site_tagline']; ?>>
										</div>
										<div class="form-group">
											<label>Description</label>
											<textarea name="site_desc" id="site_desc" cols="50" rows="4" class="form-control1" required=""><?php echo $row['site_desc']; ?></textarea>
										</div>
										<div class="form-group">
										<label>Drop the Website credentials here</label>
										<input type="file" id="uploaded_file" name="uploaded_file"  value=<?php echo $row['site_file']; ?>>
										</div> 
										<div class="form-group">
											<label>What is included in the sales?</label>
											<textarea name="site_p1" id="site_p1" cols="50" rows="4" class="form-control1"><?php echo $row['site_p1']; ?></textarea>
										</div>
										<div class="form-group">
											<label>What is required to keep the site operational?</label>
											<textarea name="site_p2" id="site_p2" cols="50" rows="4" class="form-control1"><?php echo $row['site_p2']; ?></textarea>
										</div>

											<div class="form-group">
											<label>Why are you selling the website</label>
											<textarea name="site_p3" id="site_p3" cols="50" rows="4" class="form-control1"><?php echo $row['site_p3']; ?></textarea>
										</div>

										<div class="form-group">
											<label>How does the Website generate revenue?</label>
											<textarea name="site_p4" id="site_p4" cols="50" rows="4" class="form-control1"><?php echo $row['site_p4']; ?></textarea>
										</div>
										<div class="form-group">
											<label>Are there any expenses for the Website? if yes, what are they</label>
											<textarea name="site_p5" id="site_p5" cols="50" rows="4" class="form-control1"><?php echo $row['site_p5']; ?></textarea>
										</div>
										<div class="form-group">
											<label>What marketing initiatives have been used for this website?</label>
											<textarea name="site_p6" id="site_p6" cols="50" rows="4" class="form-control1"><?php echo $row['site_p6']; ?></textarea>
										</div>

										<div class="form-group">
											<label>How can the future owner improve the website</label>
											<textarea name="site_p7" id="site_p7" cols="50" rows="4" class="form-control1"><?php echo $row['site_p7']; ?></textarea>
										</div>

										<div class="form-group">
											<label>What Platform is it built on</label>
											<textarea name="site_p8" id="site_p8" cols="50" rows="4" class="form-control1"><?php echo $row['site_p8']; ?></textarea>										</div>

										<div class="form-group">
											<label>How much would you like to sell it?</label>
												<input type="text" class="form-control1" id="minimum_pay" placeholder="minimum" name="minimum_pay" required="" value=<?php echo $row['minimum_pay']; ?>>
										</div>
										<div class="form-group">
											<label></label>
												<input type="text" class="form-control1" id="maximum_pay" placeholder="maximum" name="maximum_pay" required="" value=<?php echo $row['maximum_pay']; ?>>
										</div>
										<div class="form-group">
											<label>Date</label>
												<input type="date" class="form-control1" id="date" placeholder="" name="date" required="" value=<?php echo $row['date']; ?> >
										</div>

										
										</div>
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







