<?php
   include('session.php');
?>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Employer Dashboard </title>
		<link rel = "stylesheet" type = "text/css" href = "bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<div id="page">
		
			<header id="header">
				<div id="logo">
					<h1><a href="employer_dash.php">TAAS<span>IT</span></a></h1>
				</div>
				<div id="top-nav">
					<ul>
					<li><a href="employer_dash.php">Home</a></li>
					<li><a href="logout.php">Logout</a></li>
					<li><a href="#">Help</a></li>
					</ul>
				</div>
				<div class="clr"></div>
			</header>
			
			<div id="feature">
				<h1>Welcome, <?php echo $first_name . " (" . $login_session . ")"; ?></h1>
			</div>
			
			<div id = "content">
				<div id = "content-inner">
					<nav id = "sidebar">
						<div class = "widget">
							<h2>Dashboard</h2>
							<ul>
								<li><input type = "button" value = "Video Feed" onclick = "openVideoFeed()" class = "btn btn-default"></li>
								<li><input type = "button" value = "Create Account" class = "btn btn-default" data-toggle = "modal" data-target = "#createModal"/></li>
								<li><input type = "button" value = "Delete Account" class = "btn btn-default"></li>
							</ul>
						</div>
					</nav>
				</div>
				<div class="clr"></div>
			</div>
			
			<footer id="footer">
				<p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
				<div class="clr"></div>
			</footer>
			
		</div>
		
		<!-- Create new account modal -->
		<div id = "createModal" class = "modal fade" role = "dialog">
			<div class = "modal-dialog">
				<div class = "modal-content">
					<div class = "modal-header">
						<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
						<h2 class = "modal-title">Create New Account</h2>
					</div>
					<div class = "modal-body">
						<!-- Submit form -->
						<form class = "form-horizontal" method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role = "form">
							<div style = "padding: 0px 30px 0px 30px;">
								<!-- First name -->
								<div class = "form-group">
									<label for = "firstName">First Name</label>
									<input type = "text" class = "form-control" id = "firstName" name = "firstName" required/>
								</div>
								<!-- Last name -->
								<div class = "form-group">
									<label for = "lastName">Last Name</label>
									<input type = "text" class = "form-control" id = "lastName" name = "lastName" requried/>
								</div>
								<!-- Street address -->
								<div class = "form-group">
									<label for = "streetAddress">Street Address</label>
									<input type = "text" class = "form-control" id = "streetAddress" name = "streetAddress" required/>
								</div>
								<!-- Zip Code -->
								<div class = "form-group">
									<label for = "zipCode">Zip Code</label>
									<input type = "text" class = "form-control" id = "zipCode" name = "zipCode" required/>
								</div>
								<!-- State -->
								<div class = "form-group">
									<label for = "state">State</label>
									<input type = "text" class = "form-control" id = "state" name = "state" required/>
								</div>
								<!-- Phone Number -->
								<div class = "form-group">
									<label for = "phoneNum">Phone Number</label>
									<input type = "text" class = "form-control" id = "phoneNum" name = "phoneNum" requried/>
								</div>
								<!-- Employee ID -->
								<div class = "form-group">
									<label for = "employeeID">Employee ID</label>
									<input type = "text" class = "form-control" id = "employeeID" name = "employeeID" required/>
								</div>
								<!-- Password -->
								<div class = "form-group">
									<label for = "password">Password</label>
									<input type = "password" class = "form-control" id = "password" name = "password" required/>
								</div>
								<br>
								<!-- Submit button -->
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-default">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class = "modal-footer">
					<button type = "button" class = "btn btn-default" data-dismiss = "modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Javascript -->
		<script>
			function openVideoFeed() {
				console.log("test");
				window.open(VIDEO_FEED[0], "newwindow", "width = 640, height = 400, left = 300, top = 300");
			}
		</script>

	</body>
</html>