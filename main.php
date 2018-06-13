<?php
ob_start();

?>
<?php include 'includes/header.php'; ?>



				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					<!-- /agile_top_w3_grids-->
					   <div class="agile_top_w3_grids">
					          <ul class="ca-menu">
									
											<?php
											require 'includes/usersdb.php';
		$sql="SELECT id,username FROM users_details WHERE account_type='CUSTOMER' ORDER BY username";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>


	
									<li>
										<a href="vu.php">
										  <i class="fa fa-user" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main one"><?php  printf($rowcount);  ?></h4>
												<h3 class="ca-sub one">Users</h3>
											</div>
										</a>
									</li>
											<?php
  // Free result set
  mysqli_free_result($result);
  }


?>


<?php
											require 'includes/usersdb.php';
		$sql="SELECT id,username FROM users_details WHERE account_type='DEVELOPER' ORDER BY username";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>


	
									<li>
										<a href="vd.php">
										  <i class="fa fa-user" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main one"><?php  printf($rowcount);  ?></h4>
												<h3 class="ca-sub one">Developers</h3>
											</div>
										</a>
									</li>
											<?php
  // Free result set
  mysqli_free_result($result);
  }


?>





	<?php
											require 'includes/projectdb.php';
		$sql="SELECT id,username FROM users_project ORDER BY username";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>

									<li>
										<a href="#">
											<i class="fa fa-database" aria-hidden="true"></i>
											<div class="ca-content">
											<h4 class="ca-main two"><?php  printf($rowcount);  ?></h4>
												<h3 class="ca-sub two">Projects</h3>
											</div>
										</a>
									</li>
									<?php
  // Free result set
  mysqli_free_result($result);
  }


?>


<?php
											require 'includes/projectdb.php';
		$sql="SELECT id,username FROM users_project WHERE status='Completed' ORDER BY username";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>

									<li>
										<a href="#">
											<i class="fa fa-database" aria-hidden="true"></i>
											<div class="ca-content">
											<h4 class="ca-main two"><?php  printf($rowcount);  ?></h4>
												<h3 class="ca-sub two">Completed Projects</h3>
											</div>
										</a>
									</li>
									<?php
  // Free result set
  mysqli_free_result($result);
  }


?>




	<?php
											require 'includes/storedb.php';
		$sql="SELECT order_id,username FROM orders ORDER BY username";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>

										<li>
										<a href="#">
											<i class="fa fa-clone" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main four"><?php  printf($rowcount);  ?> </h4>
												<h3 class="ca-sub four">New Orders</h3>
											</div>
										</a>
									</li>
									<?php
  // Free result set
  mysqli_free_result($result);
  }


?>

														<div class="clearfix"></div>
								</ul>
					   </div>
					 <!-- //agile_top_w3_grids-->
						<!-- /agile_top_w3_post_sections-->
							<div class="agile_top_w3_post_sections">
							       <div class="col-md-6 agile_top_w3_post agile_info_shadow">
										   <div class="img_wthee_post">
										         <h3 class="w3_inner_tittle">Latest Report</h3>
												<div class="stats-wrap">
													<?php
											require 'includes/projectdb.php';
		$sql="SELECT id,username FROM users_project  ORDER BY username";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>
													<div class="count_info"><h4 class="count"><?php  printf($rowcount);  ?> </h4><span class="year">Total Projects</span></div>

													<?php
  // Free result set
  mysqli_free_result($result);
  }


?>

													<?php
											require 'includes/storedb.php';
		$sql="SELECT order_id,username FROM orders ORDER BY username";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>
													<div class="year-info"><p class="text-no"><?php  printf($rowcount);  ?></p><span class="year">Orders</span></div>
														<?php
  // Free result set
  mysqli_free_result($result);
  }


?>
													<div class="clearfix"></div>
												</div>

												<div class="stats-wrap">
													<?php
											require 'includes/projectdb.php';
		$sql="SELECT id,username FROM users_project WHERE status='PENDING' ORDER BY username";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>
													<div class="count_info"><h4 class="count"><?php  printf($rowcount);  ?> </h4><span class="year">Pending Projects</span></div>
													<?php
  // Free result set
  mysqli_free_result($result);
  }


?>
<?php
											require 'includes/admindb.php';
		$sql="SELECT id,name FROM messages ORDER BY name";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>
	
													<div class="year-info"><p class="text-no"><?php  printf($rowcount);  ?></p><span class="year">Messages</span></div>
													<?php
  // Free result set
  mysqli_free_result($result);
  }


?>

													<div class="clearfix"></div>
												</div>


												<div class="stats-wrap">
													<?php
											require 'includes/projectdb.php';
		$sql="SELECT id,username FROM users_project WHERE status='Approved' ORDER BY username";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>
													<div class="count_info"><h4 class="count"><?php  printf($rowcount);  ?></h4><span class="year">Approved Projects</span></div>
													<?php
  // Free result set
  mysqli_free_result($result);
  }


?>
<?php
											require 'includes/admindb.php';
		$sql="SELECT id,email FROM newsletter  ORDER BY email";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>
													<div class="year-info"><p class="text-no"><?php  printf($rowcount);  ?></p><span class="year">Email Subscribers</span></div>
													<?php
  // Free result set
  mysqli_free_result($result);
  }


?>
													<div class="clearfix"></div>
												</div>
												<div class="stats-wrap">
													<?php
											require 'includes/projectdb.php';
		$sql="SELECT id,username FROM users_project WHERE status='Ongoing' ORDER BY username";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>
													<div class="count_info"><h4 class="count"><?php  printf($rowcount);  ?></h4><span class="year">Ongoing Projects</span></div>
													<?php
  // Free result set
  mysqli_free_result($result);
  }


?>

<?php
											require 'includes/projectdb.php';
		$sql="SELECT id,username FROM users_project WHERE status='Delivered' ORDER BY username";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>
													<div class="year-info"><p class="text-no"><?php  printf($rowcount);  ?></p><span class="year">Delivered Projects</span></div>

													<?php
  // Free result set
  mysqli_free_result($result);
  }


?>
													<div class="clearfix"></div>
												</div>
											  
											</div>
									   </div>
									    <div class="col-md-6 agile_top_w3_post_info agile_info_shadow">
										    <div class="monthly" id="mycalendar"></div>
							            </div>
								       <div class="clearfix"></div>
							     </div>
								   
						
						<!-- /w3ls_agile_circle_progress-->
						 <!--/prograc-blocks_agileits-->
							<div class="prograc-blocks_agileits">
								
								
								 <div class="col-sm-8 well">
								   <h3 class="w3_inner_tittle two">Todo </h3>
								   	<?php
												require 'includes/admindb.php';

$sql = "SELECT id, note FROM todo ORDER BY id LIMIT 30 ";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$id = $row['id'];
        ?>
										

										
										<?php echo $row['note']; ?>
										<div class="text-right">
										<?php echo '<a  href="dt.php?id='.$id.'">';?> <button class="btn btn-danger">Delete</button></a>
										</div>
										<hr>
										<?php  }

                                    $con->close();
                                      ?>		




	<?php
													require 'includes/admindb.php';
  
   if (isset($_REQUEST['submit'])){
		$note = stripslashes($_REQUEST['note']);
		$note = mysqli_real_escape_string($con,$note);



        $query = "INSERT into todo (note) VALUES ('$note')";
        $result = mysqli_query($con,$query);
        //check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}
        if($result){
            header('LOCATION:main.php'); die();
        }
    }else{
    	?>
    	<form role="form" action="" enctype="multipart/form-data" method="post">
								
								<div class="form-group">
											
					<textarea name="note" id="note" cols="50" rows="4" class="form-control" ></textarea>
										</div>
								
									<button type="submit" name="submit" class="btn btn-primary">Add</button>
							</form>
							<?php
 }?>



										</div>
								</div>
								
							  <!--//prograc-blocks_agileits-->
						<!-- /bottom_agileits_grids-->
						<div class="bottom_agileits_grids">
						<div class="col-md-4 profile-main">
						    <div class="profile_bg_agile">
								<div class="profile-pic wthree">
									<h2>Bason Durel</h2>
									<img src="images/profile.jpg" alt="Image">
									<p>Web Designer</p>
								</div>
								<div class="profile-ser">
										<div class="follow-grids-agileits-w3layouts">
											<div class="profile-ser-grids">
												<h3>Followers</h3>
												<h4>2486</h4>
											</div>
											<div class="profile-ser-grids agileinfo">
												<h3>Following</h3>
												<h4>1582</h4>
											</div>
											<div class="profile-ser-grids no-border">
												<h3>Tweets</h3>
												<h4>1468</h4>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="w3l_social_icons w3l_social_icons1">
											<ul>
												<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="#" class="google_plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											</ul>
										</div>

						        </div>
								</div>
					        </div>


							<div class="col-sm-8 ">
							 <h3 class="w3_inner_tittle two">Send Mail</h3>







							<div class="form-body">
							<form class="form-horizontal"> 
								<div class="form-group"> 
									<label>To</label>  
									<input type="email" class="form-control" id="to" placeholder="Email" name="to"> 
								    </div> 

								    <div class="form-group"> 
									<label>Subject</label>  
									<input type="text" class="form-control" id="email" placeholder="Email" name="subject"> 
								    </div> 

								    <div class="form-group">
											<label>Message</label>
					<textarea name="message" id="message" cols="50" rows="4" class="form-control" ></textarea>
										</div>
								     
								 
								 	<button type="submit" class="btn btn-default" name="submit">Send</button> 
								 </form> 

						
								</div>

							</div>
											
						
							 <div class="clearfix"></div>
						</div>
						<!-- //bottom_agileits_grids-->
												
						
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->

<?php include 'includes/footer.php'; ?>
<!-- js -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
	<!-- /amcharts -->
				<script src="js/amcharts.js"></script>
		       <script src="js/serial.js"></script>
				<script src="js/export.js"></script>	
				<script src="js/light.js"></script>
<!-- Chart code -->
	 <script>
var chart = AmCharts.makeChart("chartdiv", {
    "theme": "light",
    "type": "serial",
    "startDuration": 2,
    "dataProvider": [{
        "country": "USA",
        "visits": 4025,
        "color": "#FF0F00"
    }, {
        "country": "China",
        "visits": 1882,
        "color": "#FF6600"
    }, {
        "country": "Japan",
        "visits": 1809,
        "color": "#FF9E01"
    }, {
        "country": "Germany",
        "visits": 1322,
        "color": "#FCD202"
    }, {
        "country": "UK",
        "visits": 1122,
        "color": "#F8FF01"
    }, {
        "country": "France",
        "visits": 1114,
        "color": "#B0DE09"
    }, {
        "country": "India",
        "visits": 984,
        "color": "#04D215"
    }, {
        "country": "Spain",
        "visits": 711,
        "color": "#0D8ECF"
    }, {
        "country": "Netherlands",
        "visits": 665,
        "color": "#0D52D1"
    }, {
        "country": "Russia",
        "visits": 580,
        "color": "#2A0CD0"
    }, {
        "country": "South Korea",
        "visits": 443,
        "color": "#8A0CCF"
    }, {
        "country": "Canada",
        "visits": 441,
        "color": "#CD0D74"
    }, {
        "country": "Brazil",
        "visits": 395,
        "color": "#754DEB"
    }, {
        "country": "Italy",
        "visits": 386,
        "color": "#DDDDDD"
    }, {
        "country": "Taiwan",
        "visits": 338,
        "color": "#333333"
    }],
    "valueAxes": [{
        "position": "left",
        "axisAlpha":0,
        "gridAlpha":0
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "colorField": "color",
        "fillAlphas": 0.85,
        "lineAlpha": 0.1,
        "type": "column",
        "topRadius":1,
        "valueField": "visits"
    }],
    "depth3D": 40,
	"angle": 30,
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "country",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha":0,
        "gridAlpha":0

    },
    "export": {
    	"enabled": true
     }

}, 0);
</script>
<!-- Chart code -->
<script>
var chart = AmCharts.makeChart("chartdiv1", {
    "type": "serial",
	"theme": "light",
    "legend": {
        "horizontalGap": 10,
        "maxColumns": 1,
        "position": "right",
		"useGraphSettings": true,
		"markerSize": 10
    },
    "dataProvider": [{
        "year": 2017,
        "europe": 2.5,
        "namerica": 2.5,
        "asia": 2.1,
        "lamerica": 0.3,
        "meast": 0.2,
        "africa": 0.1
    }, {
        "year": 2016,
        "europe": 2.6,
        "namerica": 2.7,
        "asia": 2.2,
        "lamerica": 0.3,
        "meast": 0.3,
        "africa": 0.1
    }, {
        "year": 2015,
        "europe": 2.8,
        "namerica": 2.9,
        "asia": 2.4,
        "lamerica": 0.3,
        "meast": 0.3,
        "africa": 0.1
    }],
    "valueAxes": [{
        "stackType": "regular",
        "axisAlpha": 0.5,
        "gridAlpha": 0
    }],
    "graphs": [{
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Europe",
        "type": "column",
		"color": "#000000",
        "valueField": "europe"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "North America",
        "type": "column",
		"color": "#000000",
        "valueField": "namerica"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Asia-Pacific",
        "type": "column",
		"color": "#000000",
        "valueField": "asia"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Latin America",
        "type": "column",
		"color": "#000000",
        "valueField": "lamerica"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Middle-East",
        "type": "column",
		"color": "#000000",
        "valueField": "meast"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Africa",
        "type": "column",
		"color": "#000000",
        "valueField": "africa"
    }],
    "rotate": true,
    "categoryField": "year",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha": 0,
        "gridAlpha": 0,
        "position": "left"
    },
    "export": {
    	"enabled": true
     }
});
</script>

	<!-- //amcharts -->
		<script src="js/chart1.js"></script>
				<script src="js/Chart.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
			<!-- script-for-menu -->

<!-- /circle-->
	 <script type="text/javascript" src="js/circles.js"></script>
					         <script>
								var colors = [
										['#ffffff', '#fd9426'], ['#ffffff', '#fc3158'],['#ffffff', '#53d769'], ['#ffffff', '#147efb']
									];
								for (var i = 1; i <= 7; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 30 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 1,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
	<!-- //circle -->
	<!--skycons-icons-->
<script src="js/skycons.js"></script>
<script>
									 var icons = new Skycons({"color": "#fcb216"}),
										  list  = [
											"partly-cloudy-day"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
								<script>
									 var icons = new Skycons({"color": "#fff"}),
										  list  = [
											"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
<!--//skycons-icons-->
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
		<script src="js/flipclock.js"></script>
	
	<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {
			
			clock = $('.clock').FlipClock({
		        clockFace: 'HourlyCounter'
		    });
		});
	</script>
<script src="js/bars.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>