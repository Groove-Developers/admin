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
									<li>Applications</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Edit Application Listing</h2>

							<!--/forms-->
													
																				
												
											<div class="wthree_general graph-form agile_info_shadow ">
												<h3 class="w3_inner_tittle two"> </h3>

											    <div class="grid-1 ">
												<div class="form-body">

													<?php
													require 'includes/storedb.php';
  
   if(isset($_POST["submit"])){

   	  $target_dir = "uploads/";
    $app_file = basename( $_FILES['uploaded_file']['name']);
    $target_file = $target_dir . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_file)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  

       $username =htmlspecialchars($_POST['username']);
        $app_url =htmlspecialchars( $_POST["app_url"]);
        $app_tagline =htmlspecialchars( $_POST["app_tagline"]);
        $app_desc =htmlspecialchars($_POST["app_desc"]);
        $minimum_pay =htmlspecialchars($_POST["minimum_pay"]);
        $maximum_pay =htmlspecialchars($_POST["maximum_pay"]);
        $app_p1 =htmlspecialchars($_POST["app_p1"]);
        $app_p2 =htmlspecialchars($_POST["app_p2"]);
        $app_p3 =htmlspecialchars($_POST["app_p3"]);
        $app_p4 =htmlspecialchars($_POST["app_p4"]);
        $app_p5 =htmlspecialchars($_POST["app_p5"]);
        $app_p6 =htmlspecialchars($_POST["app_p6"]);
        $status =htmlspecialchars($_POST["status"]);
        $date = date("Y-m-d H:i:s");
        $id =htmlspecialchars($_GET["id"]);


        
        


        $query = "UPDATE website Set status='$status', app_url='$app_url', app_tagline='$app_tagline', app_desc='$app_desc', app_p1='$app_p1', app_p2='$app_p2', app_p3='$app_p3', app_p4='$app_p4', app_p5='$app_p5', app_p6='$app_p6', minimum_pay='$minimum_pay', maximum_pay='$maximum_pay', username='$username', date='$date' Where id='".$id."'";
        $result = mysqli_query($con,$query);
        //check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}
        if($result){
            header('LOCATION:app.php'); die();
        }
    }else{


    	//view php code


    	$id =htmlspecialchars($_GET["id"]);
    	$sql = "SELECT id, username, status, app_url, app_tagline, app_file, app_desc, app_p1, app_p2, app_p3, app_p4, app_p5, app_p6, minimum_pay, maximum_pay, date FROM app WHERE id='".$id."'";
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
											<label>App url</label>
												<input type="url" class="form-control1" id="app_url" placeholder="https://groovedevelopers.com" name="app_url" required="" value=<?php echo $row['app_url']; ?>>
										</div>
										<div class="form-group">
											<label>Tagline</label>
												<input type="text" class="form-control1" id="app_tagline" placeholder="" name="app_tagline" required="" value=<?php echo $row['app_tagline']; ?>>
										</div>
										<div class="form-group">
											<label>Description</label>
											<textarea name="app_desc" id="app_desc" cols="50" rows="4" class="form-control1" required=""><?php echo $row['app_desc']; ?></textarea>
										</div>
										<div class="form-group">
										<label>Drop the Website credentials here</label>
										<input type="file" id="uploaded_file" name="uploaded_file"  value=<?php echo $row['app_file']; ?>>
										</div> 
										<div class="form-group">
											<label>What is included in the sales?</label>
											<textarea name="app_p1" id="app_p1" cols="50" rows="4" class="form-control1"><?php echo $row['app_p1']; ?></textarea>
										</div>
										<div class="form-group">
											<label>Average monthly downloads</label>
											<textarea name="app_p2" id="app_p2" cols="50" rows="4" class="form-control1"><?php echo $row['app_p2']; ?></textarea>
										</div>

											<div class="form-group">
											<label>Does it generate revenue?</label>
											<textarea name="app_p3" id="app_p3" cols="50" rows="4" class="form-control1"><?php echo $row['app_p3']; ?></textarea>
										</div>

										<div class="form-group">
											<label>Is your app a reskin?</label>
											<textarea name="app_p4" id="app_p4" cols="50" rows="4" class="form-control1"><?php echo $row['app_p4']; ?></textarea>
										</div>
										<div class="form-group">
											<label>What Platform is it built on?</label>
											<textarea name="app_p5" id="app_p5" cols="50" rows="4" class="form-control1"><?php echo $row['app_p5']; ?></textarea>
										</div>
										<div class="form-group">
											<label>When did your app go live?</label>
											<textarea name="app_p6" id="app_p6" cols="50" rows="4" class="form-control1"><?php echo $row['app_p6']; ?></textarea>
										</div>

										
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







