<?php
include_once('connection.php');
$barcode=$_POST['barcode'];
$sql="select * from staffreg where barcode='$barcode'";
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
	 <link rel="stylesheet" type="text/css" href="barscan.css">
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
		 <form action="staffexit.php" method="post"  onSubmit="return valid(this)">
	     <input type="submit" onclick="checkpass()" value="Exit" style="width: 30%; height: 25%;">
			<br/>
			<select required name="place" id="place" onchange="ValueIs(this)">
            <option value="">None</option>
            <option value="TEA">TEA</option>
            <option value="ATARRA">ATARRA</option>
            <option value="BANDA">BANDA</option>
            <option value="HOME">HOME</option>
			<option id="other" value="other">OTHER</option>
            </select><br/>
			<input class="field" type="text" name="otherfield" id="otherfield" placeholder="OTHERPLACE"/>
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
	</form><br/>
	<form action="staffentry.php" method="post"  onSubmit="return valid(this)">
 <input type="submit" id="btn" onclick="checkpass()" value="Entry" style="width: 30%; height: 25%; margin-top:170px; margin-right:400px;"/>
						</form>
			
			<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
</div>
</div>
	</body>
	</html>
	