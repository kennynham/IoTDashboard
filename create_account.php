<?php
   include('session.php');
   		
		if(isset($_POST['createAccountButton']))
		{
			$firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : ' ';
			$lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : ' ';
			$streetAddress = isset($_POST["streetAddress"]) ? $_POST["streetAddress"] : ' ';
			$city = isset($_POST["city"]) ? $_POST["city"] : ' ';
			$zipCode = isset($_POST["zip"]) ? $_POST["zip"] : ' ';
			$state = isset($_POST["state"]) ? $_POST["state"] : ' ';
			$phoneNum = isset($_POST["phoneNum"]) ? $_POST["phoneNum"] : ' ';
			$employeeID = isset($_POST["employeeID"]) ? $_POST["employeeID"] : ' ';
			$password = isset($_POST["password"]) ? $_POST["password"] : ' ';
			
			$new_employee = "INSERT INTO EMPLOYEE (EmployeeID, FirstName, LastName, StreetAddress, City, Zip, ShortState, PhoneNumber)
									VALUES ('$employeeID', '$firstName', '$lastName', '$streetAddress', '$city', '$zipCode', '$state', '$phoneNum')";
									
		}
		

?>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Employer Dashboard </title>
		<link rel = "stylesheet" type = "text/css" href = "teamprojectStylesheet.css">
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
				<h1>Create Account <h1>
			</div>
			
			<div id = "content">
			
				<div id = "content-inner">
					<nav id = "sidebar">
						<div class = "widget">
						</div>
					</nav>
				</div>
				<!---------------------------------------------------------------------------------------------------------------------------------------->
				<div class = "createForm">
				
				<form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">					
					First Name: <input type="text" name="firstName">
					<br><br>
					Last Name: <input type="text" name="lastName">
					<br><br>
					Street Address: <input type="text" name="streetAddress">
					<br><br>
					City: <input type="text" name="city">
					<br><br>
					Zip Code: <input type="text" name="zip">
					<br><br>
					State: <input type="text" name="state">
					<br><br>
					Phone Number: <input type="text" name="phoneNum">
					<br><br>
					Employee ID: <input type="text" name="employeeID">
					<br><br>
					Password <input type = "text" name ="password">
					<br>
					<input type="submit" name = "createAccountButton" value="Submit">
				</form>
				<br>				
				</div>
				<!---------------------------------------------------------------------------------------------------------------------------------------->
				<div class="clr"></div>
			</div>
			
			<footer id="footer">
				<p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
				<div class="clr"></div>
			</footer>
			
		</div>

	</body>
</html>