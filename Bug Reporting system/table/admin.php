<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vuln table</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="logo1.jpeg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
	
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<h1 style="padding-left:430px;color:white">  Vulnerabilities</h1>
				<br>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">S.no</th>
								<th class="column2">Vulnerable type</th>
								<th class="column3">Url</th>
								<th class="column4">Proof of Concept</th>
								
							</tr>
						</thead>
						<tbody>
						<?php
                               $connection = mysqli_connect("localhost","root","");
                              $db= mysqli_select_db($connection,"signup");
								$selectquery = "select * from report";

								$query=mysqli_query($connection,$selectquery);

								$nums=mysqli_num_rows($query);
								$i=1;
								while($res=mysqli_fetch_array($query))
								{
									?>
									<tr>
									<td><?php echo $i++ ?></td>
	                                <td><?php echo $res['vultype'] ?></td>
									<td><?php echo $res['url'] ?></td>
									<td><?php echo $res['poc'] ?></td>
									</tr>
								<?php
								
								}

								?>
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>