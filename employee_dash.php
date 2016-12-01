<?php
   include('session.php');
   if(isset($_POST['clockin']))
   {
	   $clock_in_sql = "INSERT INTO TIME_CLOCKS (EmployeeID) VALUES ('$login_session');";
	   $result = mysqli_query($db,$clock_in_sql);
   }
   if(isset($_POST['clockout']))
   {
	   $clock_out_sql = "UPDATE TIME_CLOCKS SET TimeOut = NOW() WHERE EmployeeID = '$login_session' ORDER BY TimeID DESC limit 1;";
	   $result = mysqli_query($db,$clock_out_sql);
   }
?>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Employee Dashboard </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
	</head>
	
	<body>
		<div id="page">
		
			<header id="header">
				<div id="logo">
					<h1><a href="employee_dash.php">TAAS<span>IT</span></a></h1>
				</div>
				<div id="top-nav">
					<ul>
					<li><a href="employee_dash.php">Home</a></li>
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
								<form id = "clock" action = "" method = "post">
									<li><input type = "submit" name = "clockin" value = "Clock-In" class = "btn btn-info btn-large" data-toggle = "modal" data-target = "#myModal" /><li>
									<li><input type = "submit" name = "clockout" value = "Clock-Out" /></li>
								</form>
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
		
		<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


	</body>
</html>

<script>

</script>