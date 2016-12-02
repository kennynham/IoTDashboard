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
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
				<h1>Welcome, <?php echo $first_name . " (" . $login_session . ")"; ?></h1>
			</div>
			
			<div id = "content">
				<div id = "content-inner">
					<nav id = "sidebar">
						<div class = "widget">
							<h2>Dashboard</h2>
							<ul>
								<li><input type = "button" onclick = 'clock_query("clock-in-query")' value = "Clock-In" class = "btn btn-default" data-toggle = "modal" data-target = "#clockedIn"/></li>
								<li><input type = "button" onclick = 'clock_query("clock-out-query")' value = "Clock-Out" class = "btn btn-default" data-toggle = "modal" data-target = "#clockedOut"/></li>
							</ul>
						</div>
					</nav>
				</div>
				<div class = "clr"></div>
			</div>
			
			<footer id = "footer">
				<p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
				<div class = "clr"></div>
			</footer>
			
		</div>
		
		<!-- Clocked-in modal -->
		<div id = "clockedIn" class = "modal fade" role = "dialog">
		  <div class = "modal-dialog">
			<div class = "modal-content">
			  <div class = "modal-header">
				<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
				<h2 class= "modal-title">Time Clock Confirmation</h2>
			  </div>
			  <div class = "modal-body">
				<h3><p id = "clock-in">Clocked in on </p></h3>
			  </div>
			  <div class = "modal-footer">
				<button type = "button" class = "btn btn-default" data-dismiss = "modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>

		<!-- Clocked-out modal -->
		<div id = "clockedOut" class = "modal fade" role = "dialog">
		  <div class = "modal-dialog">
			<div class = "modal-content">
			  <div class = "modal-header">
				<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
				<h2 class = "modal-title">Time Clock Confirmation</h2>
			  </div>
			  <div class = "modal-body">
				<h3><p id = "clock-out">Clocked out on </p></h3>
			  </div>
			  <div class = "modal-footer">
				<button type = "button" class = "btn btn-default" data-dismiss = "modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<!-- Javascript -->
		<script>
			document.getElementById("clock-in").append(Date());
			document.getElementById("clock-out").append(Date());
			
			function clock_query(query_id) {
				var keyvalue = { id : query_id };
				$.ajax({
					url: "timeclock_queries.php",
					type: "POST",
					data: keyvalue,
					datatype: "json",
					success: function(result) {
						console.log("Test Success");
					},
					failure: function(result) {
						console.log("Test Fail");
					}
				});
			}
		</script>

	</body>
</html>