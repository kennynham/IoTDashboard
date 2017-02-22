<?php
   include('php/session.php');
?>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Employer Dashboard </title>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "css/stylesheet.css">
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
					<li><a href="php/logout.php">Logout</a></li>
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
								<li><input type = "button" value = "Video Feeds" class = "btn btn-default" type = "button" data-toggle = "collapse" data-target = "#videoFeedButtons" aria-expanded = "false" aria-controls = "videoFeedButtons"></li>
								<div class = "collapse" id = "videoFeedButtons">
									<div class = "card card-block">
										<div style = "padding-left: 15px">
										<li><input type = "button" value = "Video Feed #1" onclick = "openVideoFeed(0)" class = "btn btn-primary"></li>
										<li><input type = "button" value = "Video Feed #2" onclick = "openVideoFeed(1)" class = "btn btn-primary"></li>
										</div>
									</div>
								</div>
								<li><input type = "button" value = "Create Account" class = "btn btn-default" data-toggle = "modal" data-target = "#createAccountModal"></li>
								<li><input type = "button" value = "Account Search" class = "btn btn-default" data-toggle = "modal" data-target = "#accountSearchModal"></li>
								<li><a href = "inventory.php" class = "btn btn-default">Inventory</a></li>
								<li><a href = "humidity.php" class = "btn btn-default">Tracking</a></li>
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
		<div id = "createAccountModal" class = "modal fade" role = "dialog">
			<div class = "modal-dialog">
				<div class = "modal-content">
					<div class = "modal-header">
						<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
						<h2 class = "modal-title">Create New Account</h2>
					</div>
					<div class = "modal-body">
						<!-- Submit form -->
						<form id = "createAccountForm" class = "form-horizontal" method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role = "form">
							<div style = "padding: 0px 30px 0px 30px;">
								<!-- First name -->
								<div class = "form-group">
									<label for = "createFirstName">First Name</label>
									<input type = "text" class = "form-control" id = "createFirstName" name = "firstName" required/>
								</div>
								<!-- Last name -->
								<div class = "form-group">
									<label for = "createLastName">Last Name</label>
									<input type = "text" class = "form-control" id = "createLastName" name = "lastName" requried/>
								</div>
								<!-- Street address -->
								<div class = "form-group">
									<label for = "createStreetAddress">Street Address</label>
									<input type = "text" class = "form-control" id = "createStreetAddress" name = "streetAddress" required/>
								</div>
								<!-- City -->
								<div class = "form-group">
									<label for = "createCity">City</label>
									<input type = "text" class = "form-control" id = "createCity" name = "city" required/>
								</div>
								<!-- Zip Code -->
								<div class = "form-group">
									<label for = "createZipCode">Zip Code</label>
									<input type = "text" class = "form-control" id = "createZipCode" name = "zipCode" required/>
								</div>
								<!-- State -->
								<div class = "form-group">
									<label for = "createState">State</label>
									<select class="form-control" id="createState" name="state">
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="DC">District Of Columbia</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NV">Nevada</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NM">New Mexico</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="ND">North Dakota</option>
										<option value="OH">Ohio</option>
										<option value="OK">Oklahoma</option>
										<option value="OR">Oregon</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="SD">South Dakota</option>
										<option value="TN">Tennessee</option>
										<option value="TX">Texas</option>
										<option value="UT">Utah</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WA">Washington</option>
										<option value="WV">West Virginia</option>
										<option value="WI">Wisconsin</option>
										<option value="WY">Wyoming</option>
									</select>
								</div>
								<!-- Phone Number -->
								<div class = "form-group">
									<label for = "createPhoneNum">Phone Number</label>
									<input type = "text" class = "form-control" id = "createPhoneNum" name = "phoneNum" requried/>
								</div>
								<!-- Employee ID -->
								<div class = "form-group">
									<label for = "createEmployeeId">Employee ID</label>
									<input type = "text" class = "form-control" id = "createEmployeeId" name = "employeeId" required/>
								</div>
								<!-- Password -->
								<div class = "form-group">
									<label for = "createPassword">Password</label>
									<input type = "password" class = "form-control" id = "createPassword" name = "password" required/>
								</div>
								<!-- Submit button -->
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" id = "submitAccountButton" class = "hidden"></button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class = "modal-footer">
						<label for = "submitAccountButton" class = "btn btn-default">Submit</label>
						<button type = "button" class = "btn btn-default" data-dismiss = "modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Account search modal -->
		<div id = "accountSearchModal" class = "modal fade" role = "dialog">
			<div class = "modal-dialog">
				<div class = "modal-content">
					<div class = "modal-header">
						<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
						<h2 class = "modal-title">Employee Account Search</h2>
					</div>
					<div class = "modal-body">
						<form id = "accountSearchForm" class="form-horizontal" role="form" method="post">
							<div style = "padding: 0px 30px 0px 30px;">
								<div class="form-group">
									<label for="employeeNames">Employee</label>
									<div class="col-sm-4">
										<select class="form-control" id="employeeNames" name="employeeId">
											<?php
												$select_employees_sql = "SELECT EmployeeID, FirstName FROM EMPLOYEE WHERE 1;";
												$result = mysqli_query($db, $select_employees_sql);
												while ($category = mysqli_fetch_row($result)) {
													$option = '<option value = "' . $category[0] . '">' . $category[1] . ' (' . $category[0] . ')' . '</option>';
													echo $option;
												}
											?>
										</select>
									</div>
								</div>
							</div>
							<button type = "submit" id = "requestAccountButton" class = "hidden"></button>
						</form>
					</div>
					<div class = "modal-footer">
						<label for = "requestAccountButton" class = "btn btn-default">Submit</label>
						<button type = "button" class = "btn btn-default" data-dismiss = "modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Account status modal -->
		<div id = "accountStatusModal" class = "modal fade" role = "dialog">
			<div class = "modal-dialog">
				<div class = "modal-content">
					<div class = "modal-header">
						<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
						<h2 class= "modal-title">Account Status</h2>
					</div>
					<div class = "modal-body">
						<h3><p id = "accountStatusMessage"></p></h3>
					</div>
					<div class = "modal-footer">
						<button type = "button" class = "btn btn-default" data-dismiss = "modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Account result modal -->
		<div id = "accountResultModal" class = "modal fade" role = "dialog">
			<div class = "modal-dialog">
				<div class = "modal-content">
					<div class = "modal-header">
						<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
						<h2 class= "modal-title">Account Search Result for Employee (<span id = "accountSearchSpan"></span>)</h2>
					</div>
					<div class = "modal-body">
						<!-- Submit form -->
						<form id = "updateAccountForm" class = "form-horizontal" method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role = "form">
							<div style = "padding: 0px 30px 0px 30px;">	
								<!-- Employee ID (hidden so it can only be accessed through account search ajax serialize) -->
								<input type = "text" class = "hidden" id = "updateEmployeeId" name = "employeeId" value = " " />
								<!-- First name -->
								<div class = "form-group">
									<label for = "updateFirstName">First Name</label>
									<input type = "text" class = "form-control" id = "updateFirstName" name = "firstName" value = " " required/>
								</div>
								<!-- Last name -->
								<div class = "form-group">
									<label for = "updateLastName">Last Name</label>
									<input type = "text" class = "form-control" id = "updateLastName" name = "lastName" value = " " requried/>
								</div>
								<!-- Street address -->
								<div class = "form-group">
									<label for = "updateStreetAddress">Street Address</label>
									<input type = "text" class = "form-control" id = "updateStreetAddress" name = "streetAddress" value = " " required/>
								</div>
								<!-- City -->
								<div class = "form-group">
									<label for = "updateCity">City</label>
									<input type = "text" class = "form-control" id = "updateCity" name = "city" value = " " required/>
								</div>
								<!-- Zip Code -->
								<div class = "form-group">
									<label for = "updateZipCode">Zip Code</label>
									<input type = "text" class = "form-control" id = "updateZipCode" name = "zipCode" value = " " required/>
								</div>
								<!-- State -->
								<div class = "form-group">
									<label for = "updateState">State</label>
									<select class="form-control" id="updateState" name="state">
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="DC">District Of Columbia</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NV">Nevada</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NM">New Mexico</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="ND">North Dakota</option>
										<option value="OH">Ohio</option>
										<option value="OK">Oklahoma</option>
										<option value="OR">Oregon</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="SD">South Dakota</option>
										<option value="TN">Tennessee</option>
										<option value="TX">Texas</option>
										<option value="UT">Utah</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WA">Washington</option>
										<option value="WV">West Virginia</option>
										<option value="WI">Wisconsin</option>
										<option value="WY">Wyoming</option>
									</select>
								</div>
								<!-- Phone Number -->
								<div class = "form-group">
									<label for = "updatePhoneNum">Phone Number</label>
									<input type = "text" class = "form-control" id = "updatePhoneNum" name = "phoneNum" value = " " requried/>
								</div>
								<!-- Update button -->
								<div class = "form-group">
									<div class="btn-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" id = "updateAccountButton" class = "hidden"></button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class = "modal-footer">
						<label for = "updateAccountButton" class = "btn btn-default">Update</label>
						<button id = "deleteAccountButton" class = "btn btn-default">Delete</button>
						<button type = "button" class = "btn btn-default" data-dismiss = "modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Javascript -->
		<script>
			var VIDEO_FEED = ["http://192.168.1.165:8082",
								"http://192.168.1.165:8083"];
			
			// Delete account submission
			$("#deleteAccountButton").click(function(e) {
				var keyvalue = { "employeeId" : document.getElementById("accountSearchSpan").innerHTML };
				$.ajax({
					type: "POST",
					url: "php/delete_account.php",
					data: keyvalue,
					success: function(result) {
						console.log("Test success");
						document.getElementById("accountStatusMessage").innerHTML = result;
						$("#accountResultModal").modal('hide');
						$("#accountStatusModal").modal('show');
					},
					failure: function(result) {
						console.log("Test Failure");
					}
				});
			});
			
			// Account search form submission
			$("#accountSearchForm").submit(function(e) {
				$.ajax({
					type: "POST",
					url: "php/account_search.php",
					data: $(this).serialize(),
					dataType: "JSON",
					success: function(result) {
						console.log("Test Success");
						if ($.isArray(result)) {
							document.getElementById("accountSearchSpan").innerHTML = result[0];
							document.getElementById("updateEmployeeId").value = result[0];
							document.getElementById("updateFirstName").value = result[1];
							document.getElementById("updateLastName").value = result[2];
							document.getElementById("updateStreetAddress").value = result[3];
							document.getElementById("updateCity").value = result[4];
							document.getElementById("updateZipCode").value = result[5];
							document.getElementById("updateState").value = result[6];
							document.getElementById("updatePhoneNum").value = result[7];
							$("#accountSearchModal").modal('hide');
							$("#accountResultModal").modal('show');
						}
						else {
							document.getElementById("accountStatusMessage").innerHTML = "Employee account doesn't exist! Please refresh the page.";
							$("#accountSearchModal").modal('hide');
							$("#accountStatusModal").modal('show');
						}
					},
					failure: function(result) {
						console.log("Test Failure");
					}
				});
				
				e.preventDefault();
			});
			
			// Account update form submission
			$("#updateAccountForm").submit(function(e) {
				$.ajax({
					type: "POST",
					url: "php/update_account.php",
					data: $(this).serialize(),
					success: function(result) {
						console.log("Test Success");
						document.getElementById("accountStatusMessage").innerHTML = result;
						$("#accountResultModal").modal('hide');
						$("#accountStatusModal").modal('show');
					},
					failure: function(result) {
						console.log("Test Failure");
					}
				});
				
				e.preventDefault();
			});
			
			// Create account form submission
			$("#createAccountForm").submit(function(e) {
				$.ajax({
					type: "POST",
					url: "php/create_account.php",
					data: $(this).serialize(),
					success: function(result) {
						console.log("Test Success");
						document.getElementById("accountStatusMessage").innerHTML = result;
						$("#createAccountModal").modal('hide');
						$("#accountStatusModal").modal('show');
					},
					failure: function(result) {
						console.log("Test Failure");
					}
				});
				
				e.preventDefault();
			});
		
			// Open video feed
			function openVideoFeed(index) {
				console.log("test");
				window.open(VIDEO_FEED[index], "newwindow", "width = 640, height = 400, left = 300, top = 300");
			}
		</script>

	</body>
</html>