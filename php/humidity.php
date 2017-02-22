<?php
	include('php/session.php');
?>

<html>

	<!-- Import all required files -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>TAASIT - Humidity</title>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "css/stylesheet.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<div id="page">
			<header id="header">
				<div id="logo">
					<h1><a href="#" onclick = "goBack()">TAAS<span>IT</span></a></h1>
				</div>
				<!-- Top-right navigation options -->
				<div id="top-nav">
					<ul>
					<li><a href="#" onclick = "goBack()">Home</a></li>
					<li><a href="php/logout.php">Login</a></li>
					<li><a href="#">Help</a></li>
					</ul>
				</div>
				<div class="clr"></div>
			</header>
			<div id="feature">
				<h1>Weather & Tracking</h1>
			</div>

			<div id = "content">
				<div style = "padding-top: 10px; padding-left: 10%; padding-right: 10%;">
					<table class = "table table-striped">
						<thead>
							<tr>
								<th style = "color: black;">Date/Time</th>
								<th style = "color: black;">Temperature</th>
								<th style = "color: black;">Humidity</th>
								<th style = "color: black;">Logitude</th>
								<th style = "color: black;">Latitude</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql_humidity = mysqli_query($db, "SELECT temperature, humidity, longitude, latitude, time_stamp FROM HUMIDITY ORDER BY time_stamp DESC LIMIT 10 "); // Need time stamp
								while ($row = mysqli_fetch_array($sql_humidity)) {
									echo "<tr>";
									echo "<td>" . $row[4] . "</td>";
									echo "<td>" . $row[0] . "F</td>";
									echo "<td>" . $row[1] . "%</td>";
									echo "<td>" . $row[2] . "N</td>";
									echo "<td>" . $row[3] . "W</td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
			
			<footer id="footer">
				<p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
				<div class="clr"></div>
			</footer>
		</div>
		
		<script>
			function goBack() {
				window.history.back();
			}
		</script>
		
	</body>
	
</html>