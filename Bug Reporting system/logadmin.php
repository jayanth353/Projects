


<!DOCTYPE html>
<html lang="en">
<head>
    <script language="javascript" type="text/javascript">
	window.history.forward()
	</script>
	<meta charset="UTF-8">
	<title>Login</title>
	<link  rel="shortcut icon" type="image/png" href="logo1.jpeg">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
	<link href="login.css" rel="stylesheet">
</head>
<body>

	<div class="contact-form">
		<centre><img alt="" class="avatar" src="unnamed.png"></centre>
		<h2> Admin Login</h2>
		<form action="" method="POST">
			<p>Email</p><input placeholder="Enter Email" type="email" name="email">
			<p>Password</p><input placeholder="Enter Password" type="password" name="password" required> 
            <input type="submit" value="login" name="submit">
			
		</form>
	</div>
</body>
</html>

<?php
 include('script.php');
$connection = mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,"signup");


if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if($email=="admin@gmail.com" && $password=="admin")
	{
		
		header("location:table/admin.php");
		
	}
	else{
		$display='<script> swal("Oops..!!! \n Invalid emali or password") </script>';
		echo $display;
	}
}
?>

