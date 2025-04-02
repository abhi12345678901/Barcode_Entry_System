<?php
include_once('connection.php');
$barcode=$_POST['barcode'];
$sql="select * from studentreg where barcode='$barcode'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    echo "<table >
	<tr><th>Roll No</th><th>Name</th><th>Branch</th><th>year</th><th>Mobile No</th><th>Room No</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
     	 echo "<tr><td>" .$Roll= $row["rollno"]. "</td><td>" . $row["name"]. "</td><td> " . $row["branch"]. "</td><td> " . $row["year"]. "</td><td> " . $row["contactno"]. "</td><td> " . $row["roomno"]. "</td></tr>";
         echo "$Roll";
	}
    echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
	<!DOCTYPE html>
	<head>
	 <link rel="stylesheet" type="text/css" href="sda.css">
     <script src="reg.js">
	 </script>
	</head>
	<body>
	<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>

	
<div class="container">
		<div class="tabs">
			<ul>
				<li id="home"><a href="index.html">Home</a></li>
			</ul>
		</div>
		 <form action="studentdaterecord.php" method="post"  onSubmit="return valid(this)">
	     
			<br/>
			<input class="field" type="text" name="date" id="otherfield" placeholder="ENTER DATE "/>
<script>
   function ValueIs(place) {
	  
        if(document.getElementById("place").value== "other")
		{
			            
			            alert("Please fill the place name in input box");
						document.getElementById("other").value=document.getElementById("otherfield").value;
						document.getElementById("btn").disabled = false;
						
		}
    }
</script>	
    <br/>

<!--
<script>
   function ValueIss(otherfield)
   if(document.getElementById("otherfield").value == "")
   {
	        document.getElementById("btn").disabled = true;
   }
	else
	{
	         document.getElementById("btn").disabled = false;
			 	    
	}
	
</script> -->
	
 <input type="submit" id="btn" onclick="checkpass()" value="SUBMIT" style="width: 30%; height: 30%;"/>
						</form>
			
			<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
</div>
</div>
	</body>
	</html>
	