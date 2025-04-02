<?php
include_once('connection/connection.php');
$query="select * from studentreg";
$result=mysql_query($query);	
?>
	<!DOCTYPE html>
	<html>
		<title>
			<head> Fetch Data From Database</head>
		</title>
		<body>
			<table align="center" border="1px" style="width:600px; height:400px;">
				<tr>
					<th><h1> student record<h1></th>
					<th>Roll No</th>
					<th>Name</th>
					<th>Branch</th>
					<th>Room No</th>
					<th>Mobile No</th>
				</tr>
			</table>
		</body>
	</html>