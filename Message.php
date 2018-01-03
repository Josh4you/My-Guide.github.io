 <?php
include'connect.php';
if (isset($_SESSION['userSession'])!="") {
 header("Location: home.php");
}

if(isset($_POST['btn-signup'])) {
 
 $uname = strip_tags($_POST['username']);
 $email = strip_tags($_POST['email']);
 $upass = strip_tags($_POST['password']);
 
 $uname = $db->real_escape_string($uname);
 $email = $db->real_escape_string($email);
 $upass = $db->real_escape_string($upass);
 
 
 $check_email = $db->query("SELECT email FROM tbl_users WHERE email='$email'");
 $count=$check_email->num_rows;
 
 if ($count==0) {
  
  $query = "INSERT INTO tbl_users(username,email,password) VALUES('$uname','$email','$upass')";

  if ($db->query($query)) {
   $msg = "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Your Query and suggestions have been successfuly registred we'll get back to you in short..!
     </div>";
  }else {
   $msg = "<div class='alert alert-danger'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
     </div>";
  }
  
 } else { 
  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
    </div>";
   $db->close();
   $db->close();
 }
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<div class="signin-form">

 <div class="container">
     
        
       <form class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">Message Board</h2><hr />
        
        <?php
  if (isset($msg)) {
   echo $msg;
  }
  ?>
          
        <div class="form-text">
        <input type="text" class="form-control" placeholder=" Please Enter Your Username" name="username" required  />
        </div>
		</br>
        
        <div class="form-text">
        <input type="email" class="form-control" placeholder="Give Your Email address" name="email" required  />
        <span id="check-e"></span>
        </div>
		<div class="row">
			<div class="col-6">
			</br>
			<div class="form-group">

        <input type="text" class="form-control" placeholder="Enter your Query Here" name="password" required  />
        </div>
        
      <hr />
        
        <div class="form">
            <button type="submit" class="btn btn-default" name="btn-signup">
      <span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit
   </button> 
    <a href="index.html" class="btn btn-primary" role="button">Home</a>
          
        </div> 
      
      </form>
<?php 
		$sql= "SELECT username, password FROM tbl_users";
		$result= $db->query($sql);
		if($result->num_rows>0)
		{
			$row=$result->fetch_assoc()
			?>
</div>	
</br>
</br>
</br></br>	
<div class="well">
<table border="0" cellpadding="10px" cellspacing="0">
	<tr>
		<td><strong>Username :</strong></td>
		<td><?=$row['username']?></td></tr>
		<tr><td><strong>Queries</td>
		<td><?=$row['password']?></td></tr>
</div>
<div class="well">
<table border="0" cellpadding="10px" cellspacing="0">
	<tr>
		<td><strong>Username :</strong></td>
		<td><?=$row['username']?></td></tr>
		<tr><td><strong>Queries</td>
		<td><?=$row['password']?></td></tr>
</div>
</div>
</div>
<div class="well">
<table border="0" cellpadding="10px" cellspacing="0">
	<tr>
		<td><strong>Username :</strong></td>
		<td><?=$row['username']?></td></tr>
		<tr><td><strong>Queries</td>
		<td><?=$row['password']?></td></tr>
</div>
</div>
<?php
			}
		
?>
</table>
</div>
</div>
</div>
</div>
</body>
</html>