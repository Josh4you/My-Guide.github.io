
<?php  
include 'connect.php';
?>
<html>
<head>
<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
</head>
<body>
<div class="container" id="main">
		
			<div class="navbar navbar-fixed-top">
				<div class="container">
					
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
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
									
									<li>
										<a href="#">Message Board</a>
									</li>
									
								</ul><!-- end dropdown-menu -->
							</li>
							<li>
								<a href="Gallary.html">Gallary &  Videos</a>
							</li>	
							<li>
								<a href="myguide2.html">My Guide</a>
							</li>
							</ul>
						
						<form class="navbar-form pull-right">
							<input type="text" class="form-control" placeholder="Search this site..." id="searchInput">
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
						</form><!-- end navbar-form --><li class="nav nav-collapse pull-top"> 
						
					</div><!-- end nav-collapse -->
				
				</div><!-- end container -->
			</div><!-- end navbar -->
			</div>
		<div>
			<div class="well">
					<div class="well-header">
						
					</div>
			</div>
			
		</div>
<div class="well"></br>
<div class="well-small">
<h2>Kasaragod</h2><span><small>Click on the icons to get details of the places</small></span>
<iframe src="https://www.google.com/maps/d/embed?mid=1Oxb5v-euG696HG2uPYxbGMFQ0Lc" width="1200" height="800"frameborder="0" style="border:0" allowfullscreen></iframe>
	<?php 
		$sql= "SELECT * FROM places WHERE place_name='kasaragod'";
		$result= $db->query($sql);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc()){
			?>
</div>		
<div class="well">
<table border="0" cellpadding="10px" cellspacing="0">
	<tr>
		<td><strong>Your AT :</strong></td>
		<td><?=$row['place_name']?></td></tr>
		<tr><td><strong>Parks you can go to:</strong></td>
		<td><?=$row['Parks']?></td></tr>
		<tr><td><strong>Historic places:</strong></td>
		<td><?=$row['Museums']?></td></tr>
		<tr><td><strong>Coffee-shops to chill out:</strong></td>
		<td><?=$row['Coffee_shops']?></td></tr>
		<tr><td><strong>Malls around you:</strong></td>
		<td><?=$row['Malls']?></td></br>
	</tr>
</div>
<div>
	<tr>
	<td><strong> Hotels for Your Stay</strong></td>
	<td><?=$row['Hotels']?></td></tr>
</div>

<?php
			}
		}
?>
</table>
<div>

</div>
</body>
</html>
	