<?php
include'connect.php';
session_start();
$clean = $_GET["search"];

$sql =("SELECT * FROM places WHERE place_name='$clean'")or die(mysql_error());
$result=$db->query($sql);
if($result->num_rows>0)
{
	while($i=$result->fetch_assoc())
	{	
		echo '<html>
<head>
<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
		
		<script src="https://use.fontawesome.com/f687b929a0.js"></script>
</head>
<body>
<div class="well">
<div class="well-small">
<div><p><h1><a href="'.$i['url'].'"><i class="fa fa-external-link fa-3x" aria-hidden="true"></i>Click <strong>ME</strong> to get details about your place.</a></h1></p></div>
</div>
</div>
</body>
</html>';

	}
}
?>