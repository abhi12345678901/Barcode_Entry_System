<?php

include_once('connection.php');
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$gender=$_POST['gender'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$contactno=$_POST['contactno'];
$fcontactno=$_POST['fcontactno'];
$email=$_POST['email'];
$hostalname=$_POST['hostalname'];
$roomno=$_POST['roomno'];
$paddress=$_POST['paddress'];
$barcode=$_POST['barcode'];


$sql= "insert into studentreg(rollno, name, fname, gender, branch, year, contactno, fcontactno, email, hostalname, roomno, paddress, barcode)values('$rollno', '$name', '$fname', '$gender', '$branch', '$year', $contactno, $fcontactno, '$email', '$hostalname', '$roomno', '$paddress', '$barcode')";
$result=mysqli_query($conn,$sql);


	if($result)
{

echo "<script language=\"javascript\">" . PHP_EOL;
echo "alert('Your Detail submited success fully!');" .PHP_EOL;
echo "document.location.href = 'index.html';" .PHP_EOL;
echo "</script>";
}
mysqli_close($conn);
//echo "hiii";
?>