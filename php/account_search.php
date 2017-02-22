<?php
	include('session.php');
	
	$employeeId = $_POST["employeeId"];
	
	$result = mysqli_query($db, "SELECT EmployeeID, FirstName, LastName, StreetAddress, City, Zip, ShortState, PhoneNumber
								FROM EMPLOYEE WHERE EmployeeID = '$employeeId'");
									
	if ($result) {
		$array = mysqli_fetch_row($result);
		echo json_encode($array);
	}
?>