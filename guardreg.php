<?php

include_once('connection.php');
$id=$_POST['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$contactno=$_POST['contactno'];
$paddress=$_POST['paddress'];
$password=$_POST['password'];

$sql="insert into guardreg(id, name, gender, contactno, paddress, password)values('$id', '$name', '$gender', $contactno, '$paddress', '$password')";
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