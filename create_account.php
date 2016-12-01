<?php
   include('session.php');
   				
	$firstNameErr = $lastNameErr = $streetAddressErr = $cityErr = $zipCodeErr = $stateErr = $phoneNumErr = $employeeIDErr = $passwordErr = "";
	$firstName = $lastName = $streetAddress = $city = $zipCode= $state = $phoneNum = $employeeID = $password = "";
	
		if ($_SERVER["REQUEST_METHOD"] === "POST")
		{
			//First Name
			if (empty($_POST["firstName"])) 
			{
				$firstNameErr = "Name is required";
			}
			else
			{
				$firstName = $_POST["firstName"];
				//check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/", $firstName))
				{
					$firstNameErr = "Only letters and whitespace allowed";
				}
			}
			
			//Last Name
			if (empty($_POST["lastName"])) 
			{
				$lastNameErr = "Name is required";
			}
			else
			{
				$lastName = $_POST["lastName"];
				//check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/", $lastName))
				{
					$lastNameErr = "Only letters and whitespace allowed";
				}
			}
			//Street Address
			if (empty($_POST["streetAddress"])) 
			{
				$streetAddressErr = "Street address is required";
			}
			else
			{
				$streetAddress = $_POST["streetAddress"];
			}
			
			//City
			if (empty($_POST["city"])) 
			{
				$cityErr = "City is required";
			}
			else
			{
				$city = $_POST["city"];
			}
			
			//Zip code
			if (empty($_POST["zip"])) 
			{
				$zipCodeErr = "Zip code is required";
			}
			else
			{
				$zipCode = $_POST["zip"];
				if (!preg_match("/^[0-9]*$/", $zipCode))
				{
					$zipCodeErr = "Only numbers allowed";
				}
			}
			
			//State
			if (empty($_POST["state"])) 
			{
				$stateErr = "State is required";
			}
			else
			{
				$state = $_POST["state"];
				if (!preg_match("/^[A-Z]*$/", $state))
				{
					$stateErr = "Only letters allowed";
				}
			}
			
			//Phone Number
			if (empty($_POST["phoneNum"])) 
			{
				$phoneNumErr = "Phone number is required";
			}
			else
			{
				$phoneNum = $_POST["phoneNum"];
				if (!preg_match("/^[0-9]*$/", $phoneNum))
				{
					$phoneNumErr = "Only numbers allowed";
				}
			}
			
			//Employee ID
			if (empty($_POST["employeeID"])) 
			{
				$employeeIDErr = "Employee ID is required";
			}
			else
			{
				$employeeID = $_POST["employeeID"];
				if (!preg_match("/^[0-9]*$/", $employeeID))
				{
					$employeeIDErr = "Only numbers allowed";
				}
			}
			
			//Password
			if (empty($_POST["password"])) 
			{
				$passwordErr = "Password is required";
			}
			else
			{
				$password = $_POST["password"];
			}
		}
		

			$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
			if ($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
			}
			$new_employee = "INSERT INTO EMPLOYEE (EmployeeID, FirstName, LastName, StreetAddress, City, Zip, ShortState, PhoneNumber)
									VALUES ('$employeeID', '$firstName', '$lastName', '$streetAddress', '$city', '$zipCode', '$state', '$phoneNum')";
			
			
			if ($conn->query($new_employee) == TRUE){
				echo "New record created successfully";
			}
			
			
			
			$conn->close();
?>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Create Account</title>
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
					First Name: <input type="text" name="firstName" required>
					<br><br>
					Last Name: <input type="text" name="lastName" required>
					<br><br>
					Street Address: <input type="text" name="streetAddress" required>
					<br><br>
					City: <input type="text" name="city" required>
					<br><br>
					Zip Code: <input type="text" name="zip" required>
					<br><br>
					State: <input type="text" name="state" required>
					<br><br>
					Phone Number: <input type="text" name="phoneNum" required>
					<br><br>
					Employee ID: <input type="text" name="employeeID" required>
					<br><br>
					Password <input type = "text" name ="password" required>
					<br><br>
					<input type="submit" value="Submit">
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