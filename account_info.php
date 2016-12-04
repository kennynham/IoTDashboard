<!-- PHP -->
<?php
   include('session.php');
?>

<!-- HTML -->
<html>

	<!-- Import all required files -->
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
		<title>Employee Dashboard </title>
		<link rel = "stylesheet" type = "text/css" href = "bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
	</head>
	
	<body>
		<div id = "page">
		
			<header id = "header">
				<div id = "logo">
					<h1><a href = "employee_dash.php">TAAS<span>IT</span></a></h1>
				</div>
				<div id = "top-nav">
					<ul>
					<li><a href = "employee_dash.php">Home</a></li>
					<li><a href = "logout.php">Logout</a></li>
					<li><a href = "#">Help</a></li>
					</ul>
				</div>
				<div class = "clr"></div>
			</header>
			
			<div id = "feature">
				<h1> <?php echo $first_name . " (" . $login_session . ")"; ?></h1>
			</div>
			Employee ID: <?php echo $login_session ?>
			<br>
			Name: <?php echo $first_name . " " . $last_name ?> 
			<br>
			Address: <?php echo $street_address . " " . $city . " " . $state . ", ". $zip; ?>
			<br>
			Phone Number: <?php echo $phone_number ?>

			
			<footer id = "footer">
				<p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
				<div class = "clr"></div>
			</footer>
			
		</div>
		

	</body>
</html>