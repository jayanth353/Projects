
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign_up</title>
	<link  rel="shortcut icon" type="image/png" href="logo1.jpeg">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
	<link href="signup.css" rel="stylesheet">
</head>
<body>
	<div class="contact-form">
		<img alt="" class="avatar" src="unnamed.png">
		<h2>Create an account</h2>
		<form action="" method="POST">
			<p>Email:</p><input placeholder="Enter Email" type="email" name="email" required>
            <p>Username:</p><input placeholder="Enter username" type="text" name="username" required>
			<p>Password:</p><input placeholder="Enter Password" type="password" name="password" required> 
            <p>Confirm Password:</p><input placeholder="Enter Password" type="password" name="conpassword" required>
            <input type="submit" value="Sign up" name="login">
			<a href="login.php" >Login instead?  <span>Login</span></a>
			
		</form>
	</div>
</body>
</html>
>
<?php
include('script.php');
$connection = mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,"signup");


if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$conpassword = $_POST['conpassword'];

	if($password==$conpassword)
	{
		$query = "SELECT * FROM reg WHERE email='$email'";
		$query_run = mysqli_query($connection,$query);
        if(mysqli_num_rows($query_run)>0)
		{
			echo '<script> swal("email id already take!!!..try another one") </script>';
		}
		else
		{
		$query = "INSERT INTO  reg VALUES('$username','$email','$password','$conpassword') ";
		$query_run = mysqli_query($connection,$query);
  
		if($query_run)
		{
			echo '<script> swal("Registered Sucessfully Buddy.....!!") </script>';
			
		}
		else{
			
			echo '<script> swal("Oops...!!! \n Failed to Registerd!!") </script>';
		    
		}
	   }
	}
	  else{
		echo '<script> swal("Oops...Passwords not matched!!!");</script>';
	  }
	}


?>
