<?php

include_once('connection.php');
$barcode=$_POST['barcode'];
echo $barcode;
$sql="select * from studentreg where barcode='$barcode'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    echo "<table>
	<tr><th>Roll No</th><th>Name</th><th>Branch</th><th>year</th><th>Mobile No</th><th>Room No</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["rollno"]. "</td><td>" . $row["name"]. "</td><td> " . $row["branch"]. "</td><td> " . $row["year"]. "</td><td> " . $row["contactno"]. "</td><td> " . $row["barcode"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($conn);
?>