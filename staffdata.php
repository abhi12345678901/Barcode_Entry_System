<?php
include_once('connection.php');
$barcode=$_POST['barcode'];
$sql="select * from staffreg where barcode='$barcode'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     	  $Roll=$row["rollno"];
		  $Barcode=$row["barcode"];
		  $Name=$row["name"];
		  $Fname=$row["fname"];
		  $Gender=$row["gender"];
		  $Branch=$row["branch"];
		  $Year=$row["year"];
		  $CNo=$row["contactno"];
		  $FCNo=$row["fcontactno"];
		 

		 //echo "The time in " . 
		 date_default_timezone_get(); 
		 //" is "
		  $dt=date("H:i:s");

date_default_timezone_set("Asia/Calcutta");
//echo "The time in " . 
date_default_timezone_get() 
//. " is " 
.date("H:i:s");
               date(" H:i:s", time());
		 //echo "$dt";
		 //echo "Today is " . 
		 $Date=date("Y.m.d");
			 
			 //echo "$Date";
			 }
    //echo "</table>";
} else {
    //echo "0 results";
}

//$sql="insert into studententryexit(barcode,rollno,entrydate, entrytime, exitdate, exittime)values('$Barcode', '$Roll','$Date','$dt','0','0')";
//$aVar = mysqli_connect('localhost','root',' ','');
//$result = mysql_query('SELECT studententryexit.id, studententryexit.entrytime
  //                       FROM TABLE studententryexit 
    //                 ORDER BY studententryexit.id DESC 
      //                  LIMIT 1') or die('Invalid query: ' . mysql_error());

//print values to screen
//while ($row = mysql_fetch_assoc($result)) {
  //echo $row['id'];
  //echo $row['entrytime'];
//}

// Free the resources associated with the result set
// This is done automatically at the end of the script
//mysql_free_result($result);


//echo "$sql";
$result=mysqli_query($conn,$sql);

mysqli_close($conn);
?>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Student Entry</h2>

<table>
  <tr>
    <th>Roll No.</th>
    <td><?php echo $Roll ?></td>
  </tr>
  <tr>
    <th>Name</th>
    <td><?php echo $Name?></td>
  </tr>
  <tr>
    <th>Father Name</th>
    <td><?php echo $Fname?></td>
  </tr>
   <tr>
    <th>Gender</th>
    <td><?php echo $Gender?></td>
  </tr>
  <tr>
    <th>Branch</th>
    <td><?php echo $Branch?></td>
  </tr>
  <tr>
    <th>Year</th>
    <td><?php echo $Year?></td>
  </tr>
  <tr>
    <th>Contact No.</th>
    <td><?php echo $CNo?></td>
  </tr>
  <tr>
    <th>Father Contact No.</th>
    <td><?php echo $FCNo?></td>
  </tr>
  
</table><br/>
  <table>
  <tr>
    <th>Date</th>
    <th>Exit Time</th>
    <th>Entry Time</th>
    <th>Place</th>
  </tr>
  <tr>
    <td><?php echo $Date?></td>
    <td><?php echo $Id?></td>
    <td><?php echo $dt?></td>
    <td></td>
	
  </tr>
  </table>

</body>
</html>
