<!DOCTYPE html>
<html lang="en">
<head>
<script language="javascript" type="text/javascript">
	window.history.forward()
	</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="shortcut icon" type="image/png" href="logo1.jpeg">
    <link rel="stylesheet" href="report.css">
    <link  rel="shortcut icon" type="image/png" href="bug_bounty_program-icon.svg">
    <title>Report</title>
</head>
<body>
    
<div class="container">

<?php

include('script.php');
session_start();
?>
<h2 style="text-align:center;padding:10px;color:orange"><?php echo "Welcome  " .$_SESSION['username']; ?></h2>
    <header class="header">
      <h1 id="title" class="text-center">Vulnerability Reporting Form</h1>
      <p id="description" class="description text-center">
        Thank you for taking the time to make india cyber safe.
      </p>
      
    </header>
   
    <form id="survey-form" method="POST">
      <div class="form-group">
        <p>Vulnerability Type:</p>
        <select id="dropdown" name="vultype" class="form-control" required>
          <option disabled selected value>Select Vulnerability Type</option>
          <option value="XSS">Cross Site Scripting (XSS)</option>
          <option value="Open-Redirect">Open Redirect</option>
          <option value="BAC">Improper Access Control</option>
          <option value="Sensitive-info-Leak">GDPR PII Exposure
            </option>
          <option value="other">Other</option>
        </select>
      </div>

      <div class="form-group">
        <p>URL:</p><textarea
        id="comments"
        class="input-textarea"
        name="url"
        placeholder="Enter Vulnerable Url link"
      ></textarea>
      </div>
  
      <div class="form-group">
        <p>Proof Of Concept</p>
        <textarea
          id="comments"
          class="input-textarea"
          name="poc"
          placeholder="Enter your poc steps here..."
        ></textarea>
      </div>
  
      <div class="form-group">
        <button type="submit" id="submit" class="submit-button" name="submit">
          Submit
        </button>
       
      </div>
    </form>
    <br>

    <a href="index.html"><button  class="submit1" name="submit">Logout</button></a>
  </div>
  
</body>
</html>



<?php
$connection = mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,"signup");



if(isset($_POST['submit']))
{
	$vultype = $_POST['vultype'];
	$url = $_POST['url'];
	$poc = $_POST['poc'];
	


		$query = "INSERT INTO  report VALUES('$vultype','$url','$poc') ";
		$query_run = mysqli_query($connection,$query);
  
		if($query_run)
		{
			echo '<script> swal("Reported sucessfully.... ")</script>';
		}
		else{
			echo '<script type="text/javascript"> alert("Failed to report....Try again") </script>';
		    
		}
	   
	}


?>

