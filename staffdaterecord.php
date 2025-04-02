<?php
include_once('connection.php');
$date=$_POST['date'];

//echo "$date";
$sql="select * from staffentryexit where entrydate='$date'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    echo "<table >
	<tr><th>Roll No</th><th>Barcode</th><th>Exit Date</th><th>Exit Time</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
     	 echo "<tr><td>" .$Roll=$row["rollno"]. "</td><td>" . $Barcode=$row["barcode"]."</td><td>"
		 . $ExitDate=date("Y.m.d") . "</td><td>".$dt=date("H:i:s")."<br>";
  //       echo "$Roll";
		 //echo"$Barcode";
			 
			 //echo "$ExitDate";
			// $dt=date("H:i:s");
			 
date_default_timezone_set("Asia/Calcutta");
date_default_timezone_get() 
//. " is " 
.date("H:i:s");
               date(" H:i:s", time());
//echo $dt;
			 }
    echo "</table>";
} else {
    echo "0 results";
}
//$place=$_POST['place'];
//$sql="insert into studentexit(barcode,rollno,entrydate,entrytime,exitdate,exittime,place)values('$Barcode', '$Roll','0','0','$ExitDate','$dt','$place')";
//echo "$sql";
$result=mysqli_query($conn,$sql);

mysqli_close($conn);
?>