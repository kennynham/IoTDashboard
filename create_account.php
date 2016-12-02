<?php
	include('session.php');
   			
	// Define variables and set to empty values
	$firstNameErr = $lastNameErr = $streetAddressErr = $cityErr = $zipCodeErr = $stateErr = $phoneNumErr = $employeeIDErr = $passwordErr = "";
	$firstName = $lastName = $streetAddress = $city = $zipCode = $state = $phoneNum = $employeeID = $password = "";
	
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			
			if (empty($_POST["firstName"])) {
				$firstNameErr = "First name is required";
			} 
			else {
				$firstName = $_POST["firstName"];
			}
			
			if (empty($_POST["lastName"])) {
				$lastNameErr = "Last name is required";
			} 
			else {
				$lastName = $_POST["lastName"];
			}
			
			if (empty($_POST["streetAddress"])) {
				$streetAddressErr = "Street address is required";
			}
			else {
				$streetAddress = $_POST["streetAddress"];
			}
			
			if (empty($_POST["city"])) {
				$cityErr = "City is required";
			} 
			else {
				$city = $_POST["city"];
			}
			
			if (empty($_POST["zipCode"])) {
				$zipCodeErr = "Zip code is required";
			} 
			else {
				$zipCode = $_POST["zipCode"];
			}
			
			if (empty($_POST["state"])) {
				$stateErr = "State is required";
			} 
			else {
				$state = $_POST["state"];
			}
			
			if (empty($_POST["phoneNum"])) {
				$phoneNumErr = "Phone number is required";
			} 
			else {
				$phoneNum = $_POST["phoneNum"];
			}
			
			if (empty($_POST["employeeID"])) {
				$employeeIDErr = "Employee ID is required";
			} 
			else {
				$employeeID = $_POST["employeeID"];
			}
			
			if (empty($_POST["password"])) {
				$passwordErr = "Password is required";
			} 
			else {
				$password = $_POST["password"];
			}
			
			$new_employee_sql = "INSERT INTO EMPLOYEE (EmployeeID, FirstName, LastName, StreetAddress, City, Zip, ShortState, PhoneNumber, Password)
									VALUES ('$employeeID', '$firstName', '$lastName', '$streetAddress', '$city', '$zipCode', '$state', '$phoneNum', '$password')";
			$result = mysqli_query($db, $new_employee_sql);
			
			if ($result) {
				echo "New record created successfully.";
			}
		}
?>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Create Account</title>
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
				
				<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">					
					First Name: <input type = "text" name = "firstName" required>
					<br><br>
					Last Name: <input type = "text" name = "lastName" required>
					<br><br>
					Street Address: <input type = "text" name = "streetAddress" required>
					<br><br>
					City: <input type = "text" name = "city" required>
					<br><br>
					Zip Code: <input type = "text" name = "zipCode" required>
					<br><br>
					State: <input type = "text" name = "state" required>
					<br><br>
					Phone Number: <input type = "text" name = "phoneNum" required>
					<br><br>
					Employee ID: <input type = "text" name = "employeeID" required>
					<br><br>
					Password: <input type = "password" name = "password" required>
					<br><br>
					<input type = "submit" value = "Submit">
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