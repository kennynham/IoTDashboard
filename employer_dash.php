<?php
   include('session.php');
   
   /****************    Create Account    *******************************************************************************/
    $createAccountCheck = false;

   if(isset($_POST['createAccountButton']))
		{			
			$firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : ' ';
			$lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : ' ';
			$streetAddress = isset($_POST["streetAddress"]) ? $_POST["streetAddress"] : ' ';
			$city = isset($_POST["city"]) ? $_POST["city"] : ' ';
			$zipCode = isset($_POST["zip"]) ? $_POST["zipCode"] : ' ';
			$state = isset($_POST["state"]) ? $_POST["state"] : ' ';
			$phoneNum = isset($_POST["phoneNum"]) ? $_POST["phoneNum"] : ' ';
			$employeeID = isset($_POST["employeeID"]) ? $_POST["employeeID"] : ' ';
			$password = isset($_POST["password"]) ? $_POST["password"] : ' ';
			
			$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
			if ($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
			}
			$new_employee = "INSERT INTO EMPLOYEE (EmployeeID, FirstName, LastName, StreetAddress, City, Zip, ShortState, PhoneNumber)
									VALUES ('$employeeID', '$firstName', '$lastName', '$streetAddress', '$city', '$zipCode', '$state', '$phoneNum')";
		
			if ($conn->query($new_employee) == true)
			{
				$createAccountCheck = true;
			}
			$conn->close();
		}
		 
		/****************    Delete Account    *******************************************************************************/
		if(isset($_POST['deleteButton']))
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

<?php
	// Displays a message when the submission for creating an account is successful
	if ($createAccountCheck)
	{
		if ($new_employee)
			echo "<script type = 'text/javascript'> alert('Submitted successfully!') </script>";
	}
?>

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
								<li><input type = "button" value = "Delete Account" class = "btn btn-default" data-toggle = "modal" data-target = "#deleteModal"></li>
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
								<!-- City -->
								<div class = "form-group">
									<label for = "city">City</label>
									<input type = "text" class = "form-control" id = "city" name = "city" required/>
								</div>
								<!-- State -->
								<div class = "form-group">
									<label for = "state">State</label>
									<input type = "text" class = "form-control" id = "state" name = "state" required/>
								</div>
								<!-- Zip Code -->
								<div class = "form-group">
									<label for = "zipCode">Zip Code</label>
									<input type = "text" class = "form-control" id = "zipCode" name = "zipCode" required/>
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
										<button type="submit" name = "createAccountButton" class="btn btn-default">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class = "modal-footer">
					<button type = "button"  class = "btn btn-default" data-dismiss = "modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Delete account modal -->
		<div id = "deleteModal" class = "modal fade" role = "dialog">
			<div class = "modal-dialog">
				<div class = "modal-content">
					<div class = "modal-header">
						<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
						<h2 class = "modal-title">Delete Account</h2>
					</div>
					<div class = "modal-body">
						<!-- Submit form -->
						<form class = "form-horizontal" method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role = "form">
							<div style = "padding: 0px 30px 0px 30px;">
								<!-- Search by name -->
								<div class = "form-group">
									<label for = "firstName">Enter Name for Deletion</label>
									<input type = "text" class = "form-control" id = "searchName" name = "searchName" required/>
								</div>
								<br>
								<!-- Submit button -->
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" name = "deleteButton" class="btn btn-default">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class = "modal-footer">
					<button type = "button"  class = "btn btn-default" data-dismiss = "modal">Close</button>
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