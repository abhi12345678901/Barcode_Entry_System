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
	 <style>
	 * {
	margin: 0;
	padding: 0;
}
a, em{
	color: white;
}
body {
	height: 100vh;
  width: 100vw;
	background: url('https://jcdickerson.files.wordpress.com/2012/01/underwater.jpg') no-repeat;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	font-family: "Fira Code";
}

.container {
	width: 670px;
  height: 400px;
  margin-top: 3%;
  margin-left: 30%;
	//position: fixed;
	top: 0%;
	left: 50%;
	transform: translate(50%,50%,0% 10%);
	background: rgba(0,0,0,.3);
	display: -webkit-box;
	transition: width .3s ease-in-out;
}
.tabs{
	width: 200px;
  height: 100%;
  font-size: 1em;
  transition: all .3s ease-in-out;
}
.tabs ul{
	height:inherit;
	list-style: none;
	padding: 60px 20px;
  box-sizing: border-box;
  background: rgba(0,0,0,.4);
  border-right: 1px solid rgba(0,0,0,.4);
}
.tabs li{
	width: 100%;
	height: 50px;
	box-sizing: border-box;
	margin-top: 50px;
	background: rgba(51,78,153,.8);
	cursor:pointer;
	transition: background .3s;
}
.tabs li:hover{
	background: rgba(255,99,71,.8);
}
.tabs li a{
	display: block;
	line-height: 50px;
  text-align: center;
}
.forms{
	width: 500px;
	height: 100%;
	transition: width .3s ease-in-out;
}
.forms p{
	color: white;
	font-size: 1.5em;
  text-align: center;
  transition: all .3s ease-in-out;
}
.register, .login, .reset{
	display: none;
	position: absolute;
	width: 600px;
	height: 100%;
	box-sizing: border-box;
  padding: 50px 20px;
}
.register{
	display: block;	
}
.container form{
	padding: 45px 0px;
}
input{
	background: rgba(0,0,0, .2);
	font-size: 1em;
  border: 0;
  outline: none;
  color: white;
	transition: width .2s linear, border-bottom .2s linear;
}
input:active, input:focus{
	border-bottom: 4px solid royalblue;
}
input[type="text"], input[type="password"], input[type="email"], input[type="number"]{
	width: 460px;
	height: 50px;
  padding: 20px;
  margin-bottom:20px;
  box-sizing:border-box;
}
input[type="submit"]{
	padding: 20px;
  width: 200px;
  background: royalblue;
  border: 0px;
  color: white;
	float: right;
	cursor: pointer;
	transition: background .3s;
}
input[type="submit"]:hover{
	background: rgba(51,78,153,.8);
}

@media (max-width: 900px){
	.container{
		width: 525px;
	}
	.tabs{
		width: 150px;
		font-size: .9em;
	}
	.tabs ul{
		padding: 60px 15px;
	}
	.forms{
		width: 375px;
	}
	.forms p{
		font-size: 1.2em;
	}
	.register, .login, .reset{
		width: 375px;
	}
	input[type="text"], input[type="password"], input[type="email"],input[type="number"]{
		width: 335px;
	}
}

@media (max-width: 800px){
	
}
	 </style>
     <script src="reg.js">
	 </script>
	 <meta charset="utf-8">
<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
<script src="reg.js"></script>
	</head>
	<body>
	 <div id="header">
  <img src="logo.png" alt="REC LOGO" height="130" width="130" align="left" >
  <center><p class="head2" style="color:white;">jktdh; bathfu;fjax dkWyst] ckaWnk  </p></center>
<center><p STYLE="color:white; font-size:25px;">&nbsp;&nbsp;&nbsp;&nbsp;Rajkiya Engineering College, Banda <br/>
<p style="color:white;font-size:15px; margin-left:100px;">Atarra,Banda-210201</p></p></center>
<p style="color:white; margin-left:450px;">E-Mail:director@recbanda.ac.in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;URL:www.recbanda.ac.in</p>
<p style="color:white; margin-left:450px;">Tel:+91 5191 254301 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mob:+91 7905607177</p>
  </div>

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
		 <form action="staffbarcode.php" method="post"  onSubmit="return valid(this)">
	     
			<br/>
			<input class="field" type="text" name="barcode" id="otherfield" placeholder="SCANE BARCODE"/>
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
	
 <input type="submit" id="btn" onclick="checkpass()" value="SUBMIT" style="width: 30%; height: 20%;"/>
						</form>
			
			<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
</div>
</div>
	</body>
	</html>
	