<?php

include_once('connection.php');
$id=$_POST['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$department=$_POST['department'];
$contactno=$_POST['contactno'];
$email=$_POST['email'];
$paddress=$_POST['paddress'];
$barcode=$_POST['barcode'];

$sql="insert into staffreg(id, name, gender, department, contactno, email, paddress, barcode)values('$id', '$name', '$gender', '$department', $contactno, '$email', '$paddress', '$barcode')";
$result=mysqli_query($conn,$sql);


	if($result)
{


echo "<script language=\"javascript\">" . PHP_EOL;
echo "alert('Your Detail submited success fully!');" .PHP_EOL;
echo "document.location.href = 'index.html';" .PHP_EOL;
echo "</script>";
}
mysql_close($conn);
echo "hiii";
?>