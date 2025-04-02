<?php
  $name=$_POST['name'];
  $pass=$_POST[''];
  $year=$_POST['year'];
  $email=$_POST['email'];
  $cno=$_POST['cno'];
  $cc=$_POST['cc'];
  $webdesign=$_POST['webdesign'];
  $database=$_POST['database'];
  $android=$_POST['android'];
  $bigdata=$_POST['bigdata'];
  $python=$_POST['python'];
 
  mysql_connect('localhost','root','');

mysql_select_db("reg");
  
  $sql ="insert into reg(name,pass,year,email,cno,cc,webdesign,database,android,bigdata,python)values('$name','$pass','$year','$email','$cno','$cc','$webdesign','$database','$android','$bigdata','$python');
  
  $result=mysql_query($sql);
	


	if($result)
{


echo "<script language=\"javascript\">" . PHP_EOL;
echo "alert('Your Detail submited success fully!');" .PHP_EOL;
echo "document.location.href = 'showdetails.html';" .PHP_EOL;
echo "</script>";
}
 	 
mysql_close($con);
?>
