<html>

	<!-- Import all required files -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>TAASIT - Inventory</title>
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
					<li><a href="php/logout.php">Logout</a></li>
					<li><a href="#">Help</a></li>
					</ul>
				</div>
				<div class="clr"></div>
			</header>
			<div id="feature">
				<h1>Inventory</h1>
			</div>
		
			<div id = "content">
				<div style = "padding-top: 10px; padding-left: 10%; padding-right: 10%;">
					<table class = "table table-striped">
						<thead>
							<tr>
								<th style = "color: black">Item ID</th>
								<th style = "color: black">Item Name</th>
								<th style = "color: black">Unit Price</th>
								<th style = "color: black">Stock Count    </th>
								<th style = "color: black">Inventory Value    </th>
								<th style = "color: black">Reorder Level    </th>
								<th style = "color: black">Reorder Time (in days)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>0001</th>
								<td>Xbox One</td>
								<td>$300.00</td>
								<td>8</td>
								<td>$2,400</td>
								<td>10</td>
								<td>8</td>
							</tr>
							<tr>
								<th>0002</th>
								<td>Fallout 4</td>
								<td>$60.00</td>
								<td>35</td>
								<td>$2,100</td>
								<td>20</td>
								<td>9</td>
							</tr>
							<tr>
								<th>0003</th>
								<td>Sony 32" LCD TV</td>
								<td>$250.00</td>
								<td>7</td>
								<td>$1,750</td>
								<td>5</td>
								<td>15</td>
							</tr>
							<tr>
								<th>0004</th>
								<td>iPhone 7</td>
								<td>$700.00</td>
								<td>15</td>
								<td>$10,500</td>
								<td>7</td>
								<td>10</td>
							</tr>
							<tr>
								<th>0005</th>
								<td>Playstation 4</td>
								<td>$300.00</td>
								<td>9</td>
								<td>$2,700</td>
								<td>10</td>
								<td>7</td>
							</tr>
							<tr>
								<th>0006</th>
								<td>Uncharted 4</td>
								<td>$60.00</td>
								<td>30</td>
								<td>$1,800</td>
								<td>20</td>
								<td>9</td>
							</tr>
							<tr>
								<th>0007</th>
								<td>Sony Headphones</td>
								<td>$15.00</td>
								<td>28</td>
								<td>$420</td>
								<td>25</td>
								<td>6</td>
							</tr>
							<tr>
								<th>0008</th>
								<td>iPhone Rubber Case</td>
								<td>$13.00</td>
								<td>14</td>
								<td>$182</td>
								<td>5</td>
								<td>2</td>
							</tr>
							<tr>
								<th>0009</th>
								<td>Snickers</td>
								<td>$2.00</td>
								<td>73</td>
								<td>$146</td>
								<td>25</td>
								<td>3</td>
							</tr>
							<tr>
								<th>0010</th>
								<td>Coca Cola</td>
								<td>$1.50</td>
								<td>100</td>
								<td>$150</td>
								<td>50</td>
								<td>3</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		
			<footer id="footer">
				<p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
				<div class="clr"></div>
			</footer>
		</div>
	</body>
	
	<script>
		function goBack() {
			window.history.back();
		}
	</script>
	
</html>