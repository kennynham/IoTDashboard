<?php
	include('session.php');
	
	$employeeId = $_POST["employeeId"];
	
	// Must first remove all time clock entries of employee
	$result = mysqli_query($db, "DELETE FROM TIME_CLOCKS WHERE EmployeeID = $employeeId;");
	
	if ($result) {
		// Now we can remove the employee entry from the parent table
		$result = mysqli_query($db, "DELETE FROM EMPLOYEE WHERE EmployeeID = $employeeId;");
		
		if ($result) {
			echo "Employee account and all associated time entries successfully removed!";
		}
		else {
			echo "Something went wrong!";
		}
	}
	else {
		echo "Something went wrong again!";
	}
?>