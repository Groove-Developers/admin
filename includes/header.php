<?php $current_url = htmlspecialchars($_SERVER['PHP_SELF']); // current page ?>
<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:index.php'); die();
    }
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Groove Developers | Home </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/export.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/circles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- calendar -->
	<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>

<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
			  		 <!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
								<li><a href="main.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
								<li>
									<a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Users <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="vu.php"><i class="fa fa-caret-right" aria-hidden="true"></i> View Customers</a></li>
										<li class="mini_list_agile"><a href="vd.php"><i class="fa fa-caret-right" aria-hidden="true"></i> View Developers</a></li>
										<li class="mini_list_w3"><a href="au.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Add Users</a></li>
									</ul>
								</li>
								<li>
									<a href="#"> <i class="fa fa-suitcase" aria-hidden="true"></i>Projects/ Jobs <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="vpro.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> View Projects</a></li>
										<li class="mini_list_w3"><a href="apro.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Add Projects</a></li>
										<li class="mini_list_agile"><a href="vjobs.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> View Jobs</a></li>
										<li class="mini_list_w3"><a href="jobs.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Add Jobs</a></li>
										<li class="mini_list_w3"><a href="#"> <i class="fa fa-caret-right" aria-hidden="true"></i> Add Contest</a></li>
										<li class="mini_list_w3"><a href="#"> <i class="fa fa-caret-right" aria-hidden="true"></i> View Contest</a></li>
									</ul>
								</li>
								<li><a href="#"><i class="fa fa-list" aria-hidden="true"></i>Products <i class="fa fa-angle-down" aria-hidden="true"> </i></a> 
								     	<ul class="gn-submenu">


										<li class=""><a href="grp.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Graphics</a></li>

										<li class="mini_list_agile"><a href="dm.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Domains</a></li>

										<li class="mini_list_w3"><a href="tmp.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Templates</a></li>

										<li class=""><a href="web.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Websites</a></li>

										<li class="mini_list_agile error"><a href="app.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Applications</a></li>
										<li class="mini_list"><a href="icons.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Softwares</a></li>
										
									</ul>
								</li>
								
								<li class="page">
									<a href="#"><i class="fa fa-files-o" aria-hidden="true"></i> Store <i class="fa fa-angle-down" aria-hidden="true"></i></a>
										 <ul class="gn-submenu">
						
									  <li class="mini_list_agile"> <a href="vp.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> View Products</a></li>
									   <li class="mini_list_w3"><a href="ap.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Add Products</a></li>
									</ul>
								</li>
								
								<li>
									<a href="#"> <i class="fa fa-suitcase" aria-hidden="true"></i>Forum <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="vf.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> View Forums</a></li>
										<li class="mini_list_w3"><a href="af.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Add Forums</a></li>
									</ul>
								</li>

								<li><a href="#"><i class="fa fa-list" aria-hidden="true"></i>Customer Services<i class="fa fa-angle-down" aria-hidden="true"> </i></a> 
								     	<ul class="gn-submenu">

										<li class=""><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Issues</a></li>

										<li class=""><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Feedbacks</a></li>

									</ul>
								</li>

								<li><a href="#"><i class="fa fa-list" aria-hidden="true"></i>Marketing<i class="fa fa-angle-down" aria-hidden="true"> </i></a> 
								     	<ul class="gn-submenu">


										<li class=""><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Newsletter</a></li>

										<li class="mini_list_agile"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Analytics</a></li>

										<li class="mini_list_agile"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Affliates</a></li>

									</ul>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
				<li class="second logo"><h1><a href="main.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>GD </a></h1></li>
					<li class="second full-screen">
					<h3><a href="index.php">Logout</a></h3>
				</li>
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>



			
			
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		<!-- /inner_content-->