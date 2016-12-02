<?php
	include('session.php');
	
	$query_id = $_POST['id'];
	
	if ($query_id == 'clock-in-query') {
		$clock_in_sql = "INSERT INTO TIME_CLOCKS (EmployeeID) VALUES ('$login_session');";
		$result = mysqli_query($db,$clock_in_sql);
	}
	
	else if ($query_id == 'clock-out-query') {
		$clock_out_sql = "UPDATE TIME_CLOCKS SET TimeOut = NOW() WHERE EmployeeID = '$login_session' ORDER BY TimeID DESC limit 1;";
		$result = mysqli_query($db,$clock_out_sql);
	}
?>