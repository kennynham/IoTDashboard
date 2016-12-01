<?php
   include('session.php');

	if(isset($_POST['deletebutton']))
	{
		$id = $_POST['employeeID'];
		$sql = "DELETE FROM Employee WHERE EmployeeID = " . $id;
		$result = mysqli_query($db,$sql);
		
		if ($result)
		{
			echo "Employee deleted successfully.";
		}
		else
		{
			echo "Error deleting record.";
		}
	}
?>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Employer Dashboard </title>
		<link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
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
				<h1>Delete Account</h1>
			</div>
			
			<div id = "content">
				
				<div class="deleteAcc">
					<br>
					<form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">					
						Enter Employee ID to Delete: <input type="text" name="employeeID" required>
						<br><br>
						<input type="submit" name = "deletebutton" value="Submit">
					</form>
				</div>
				
				<div class="clr"></div>
			</div>
			
			<footer id="footer">
				<p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
				<div class="clr"></div>
			</footer>
			
		</div>

	</body>
</html>