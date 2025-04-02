<?php
include_once('connection.php');
$barcode=$_POST['barcode'];
$sql="select * from visitorentryexit where barcode='$barcode'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		  $Barcode=$row["id"];
		  $Visitorname=$row["visitorname"];
		  $Relatedpersonname=$row["relatedpersonname"];
		  $Purpose=$row["purpose"];
		  $Place=$row["place"];
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

$sql="insert into visitorentryexit(id,visitorname,relatedpersonname,purpose,place,entrydate, entrytime, exitdate, exittime)values('$barcode','$Visitorname', '$Relatedpersonnamename','$Purpose','$Place','$Date','$dt','0','0')";
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
    <th>barcode</th>
    <td><?php echo $Barcode ?></td>
  </tr>
  <tr>
    <th>Visitor Name</th>
    <td><?php echo $Visitorname?></td>
  </tr>
  <tr>
    <th>Related Person</th>
    <td><?php echo $Relatedperson?></td>
  </tr>
   <tr>
    <th>Purpose</th>
    <td><?php echo $Purpose?></td>
  </tr>
  <tr>
    <th>Place</th>
    <td><?php echo $Place?></td>
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
