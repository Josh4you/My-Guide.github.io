<?php
include'connect.php';
include'function.php';

session_start();
if(loggedin()){
	echo'logged in';
}
else{
 echo 'your not logged in!';
}
?>
<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>My Guide</title>
		<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
	</head>
	<body>	
	<script src="includes/js/modernizr-2.6.2.min.js"></script>
		<script src="https://use.fontawesome.com/f687b929a0.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		
	<div id="googlemaps">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2289400.53816772!2d77.41820785684028!3d10.21892750814359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0812ffd49cf55b%3A0x64bd90fbed387c99!2sKerala!5e0!3m2!1sen!2sin!4v1476540259981" width="1280" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="navbar navbar-fixed-top">
				<div class="container">
					
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
					<a class="nav navbar brand" href="index.html"><i class="fa fa-user fa-3x">  My Guide</i></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav pull-leftwards">
							<li class="active">
								<a href="index.html">Home</a>
							</li>
							
							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown">Services <strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
									<li>
										<a href="Kollamatgalance.html">Kerala at Glance</a>
									</li>
									
									<li>
										<a href="how_to.html">How to </a>
									</li>
									
									<li class="divider"></li>
									
									<li class="dropdown-header">More Services</li>
									
									
								</ul><!-- end dropdown-menu -->
							</li>
							<li>
								<a href="Gallary.html">Gallary &  Videos</a>
							</li>	
							<li>
								<a href="myguide2.php">My Guide</a>
							</li>
							<li>
								<a href="Register.php">Message Board</a>
							</li>
							<li>
								<a href="Travel_Desk.php">Travel Desk</a>
							</li>
							<li>
								<a href="index.html">Log-out</a>
							</li>
							</ul>
						
						<form class="navbar-form pull-right">
							<input type="text" class="form-control" placeholder="Search this site..." id="searchInput">
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
						</form><!-- end navbar-form --><li class="nav nav-collapse pull-top"> 
						
					</div><!-- end nav-collapse -->
					
				</div><!-- end container -->
			</div>
			<div class="row">
			<div class="panel panel-default">
			<div class="panel-heading">
			<h4> Enter the places</h4>
			<div class="panel-body">
			<div class="col-sm-10 col-offset-3">
						<form  action="Search.php" method="get" class="navbar-form navbar-left" name="search" role="search">
								<div class="form-group">
								<input type="text" class="form-control" name="search" placeholder="Enter your location"required><br><br><button type="submit" id="get_location" action="Search.php" class="btn btn-default pull-right" >Submit</button>
								
								</div>
							</form>
					
					</div>
					</div>
				</div>
			</div>
				
			</body>
			</html>
<? 
 session_destroy();
 header('location:index.html');
 ?>
