<?php
	include('session.php');
	
	$employeeId = $_POST["employeeId"];
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$streetAddress = $_POST["streetAddress"];
	$city = $_POST["city"];
	$zipCode = $_POST["zipCode"];
	$state = $_POST["state"];
	$phoneNum = $_POST["phoneNum"];
	
	// Check if account exists in database
	$result = mysqli_query($db, "SELECT * FROM EMPLOYEE WHERE EmployeeID = '$employeeId';");
	
	// If account does exist in database
	if (mysqli_fetch_row($result)) {
		$update_account_sql = "UPDATE EMPLOYEE SET FirstName = '$firstName', LastName = '$lastName', StreetAddress = '$streetAddress',
													City = '$city', Zip = '$zipCode', ShortState = '$state', PhoneNumber = '$phoneNum'
													WHERE EmployeeID = '$employeeId';";
		$result = mysqli_query($db, $update_account_sql);
		
		// Update query was successful
		if ($result) {
			echo "Account updated successfully!";
		}
		// Something went wrong
		else {
			echo "Something went wrong!";
		}
	}
	// Account doesn't exist in database
	else {
		echo "Employee account doesn't exist! Please refresh the page.";
	}
?>