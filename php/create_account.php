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
	$password = $_POST["password"];

	$check_account_exists_sql = "SELECT * FROM EMPLOYEE WHERE EmployeeID = '$employeeId';";
	$result = mysqli_query($db, $check_account_exists_sql);
	
	if (mysqli_fetch_row($result)) {
		echo "Employee account already exists!";
	}
	else {
		$insert_employee_sql = "INSERT INTO EMPLOYEE (EmployeeID, FirstName, LastName, StreetAddress, City, Zip, ShortState, PhoneNumber, Password) 
								VALUES ('$employeeId', '$firstName', '$lastName', '$streetAddress', '$city', '$zipCode', '$state', '$phoneNum', '$password');";
		mysqli_query($db, $insert_employee_sql);
		echo "Employee account created successfully!";
	}
?>