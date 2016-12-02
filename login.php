<?php
ini_set('display_errors', 1);
error_reporting(-1);
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      $sql = "SELECT EmployeeID, IsManager FROM EMPLOYEE WHERE EmployeeID = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);
	  $is_manager = $row['IsManager'];
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
		 if ($is_manager) {
			header("location: employer_dash.php");
		 }
		 else {
			 header("location: employee_dash.php");
		 }
      }
	  else {
         $_SESSION['message'] = 'Invalid ID or password.';
      }
   }
?>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Login Page</title>
		<link rel = "stylesheet" type = "text/css" href = "bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src = "functions.js"></script>
	</head>
	
	<body>
		<div id="page">
			<header id="header">
				<div id="logo">
					<h1><a href="index.php">TAAS<span>IT</span></a></h1>
				</div>
				<div id="top-nav">
					<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="#">Help</a></li>
					</ul>
					</div>
				<div class="clr"></div>
			</header>
			<div id="feature">
				<h1>Employee Login</h1>
			</div>
			<br />
			<div class="empLog">
				<form action = "" method = "post">
					Employee ID&nbsp;<input type = "text" name = "username" class = "box"/><br />
					Password&nbsp;<input type = "password" name = "password" class = "box"/><br/>
					
					<!----------------------------------------------------------------------------->
					<?php
						if (isset($_SESSION['message'])) {
							echo $_SESSION['message'];
							unset ($_SESSION['message']);
						}
					?>
					<!----------------------------------------------------------------------------->
					
					<input type = "submit" value = " Submit " class = "btn btn-default"/><br />
				</form>
			</div>
			<footer id="footer">
				<p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
				<div class="clr"></div>
			</footer>
		</div>
	</body>
	
</html>