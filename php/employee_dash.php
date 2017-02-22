<!-- PHP -->
<?php
   include('php/session.php');
?>

<!-- HTML -->
<html>

	<!-- Import all required files -->
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
		<title>Employee Dashboard </title>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "css/stylesheet.css">
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
					<li><a href = "php/logout.php">Logout</a></li>
					<li><a href = "#">Help</a></li>
					</ul>
				</div>
				<div class = "clr"></div>
			</header>
			
			<div id = "feature">
				<h1>Welcome, <?php echo $first_name;?> (<span id = "accountSearchSpan"><?php echo $login_session;?></span>)</h1>
			</div>
			
			<div id = "content">
				<div id = "content-inner">
					<nav id = "sidebar">
						<div class = "widget">
							<h2>Dashboard</h2>
							<ul>
								<li><input type = "button" onclick = 'clock_query("clock-in-query")' value = "Clock-In" class = "btn btn-default" data-toggle = "modal" data-target = "#clockedIn"/></li>
								<li><input type = "button" onclick = 'clock_query("clock-out-query")' value = "Clock-Out" class = "btn btn-default" data-toggle = "modal" data-target = "#clockedOut"/></li>
								<li><input type = "button" id = "accountInfoButton" class = "btn btn-default" value = "Account Info"/></li>
								<li><a href = "inventory.php" class = "btn btn-default">Inventory</a></li>
							</ul>
						</div>
					</nav>
					<div style = "padding-left: 250px; padding-top: 10px;">
						<table class = "table table-striped">
							<thead>
								<tr>
									<th style = "color: black;">Time In</th>
									<th style = "color: black;">Time Out</th>
									<th style = "color: black;">Hours Worked [HH/MM/SS]</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$result = mysqli_query($db, "SELECT TimeIn, TimeOut, TIMEDIFF(TimeOut, TimeIn) FROM TIME_CLOCKS WHERE EmployeeID = '$login_session' AND TimeOut IS NOT NULL ORDER BY TimeID DESC LIMIT 10;");
									while ($row = mysqli_fetch_array($result)) {
										echo "<tr>";
										echo "<td>" . $row[0] . "</td>";
										echo "<td>" . $row[1] . "</td>";
										echo "<td>" . $row[2] . "</td>";
										echo "</tr>";
									}
								?>
								</tbody>
						</table>
					</div>
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
		
		<!-- Account info modal -->
		<div id = "accountInfoModal" class = "modal fade" role = "dialog">
			<div class = "modal-dialog">
				<div class = "modal-content">
					<div class = "modal-header">
						<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
						<h2 class= "modal-title">Account Information</h2>
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
					url: "php/timeclock.php",
					type: "POST",
					data: keyvalue,
					datatype: "JSON",
					success: function(result) {
						console.log("Test Success");
					},
					failure: function(result) {
						console.log("Test Fail");
					}
				});
			}
			
			// Pulls current logged-in employee info into modal
			$("#accountInfoButton").click(function(e) {
				var keyvalue = { "employeeId" : document.getElementById("accountSearchSpan").innerHTML };
				$.ajax({
					type: "POST",
					url: "php/account_search.php",
					data: keyvalue,
					dataType: "JSON",
					success: function(result) {
						console.log("Test Success");
						if ($.isArray(result)) {
							document.getElementById("updateEmployeeId").value = result[0];
							document.getElementById("updateFirstName").value = result[1];
							document.getElementById("updateLastName").value = result[2];
							document.getElementById("updateStreetAddress").value = result[3];
							document.getElementById("updateCity").value = result[4];
							document.getElementById("updateZipCode").value = result[5];
							document.getElementById("updateState").value = result[6];
							document.getElementById("updatePhoneNum").value = result[7];
							$("#accountInfoModal").modal('show');
						}
						else {
							document.getElementById("accountStatusMessage").innerHTML = "Employee account doesn't exist! Please refresh the page.";
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
						$("#accountInfoModal").modal('hide');
						$("#accountStatusModal").modal('show');
					},
					failure: function(result) {
						console.log("Test Failure");
					}
				});
				
				e.preventDefault();
			});
		</script>

	</body>
</html>