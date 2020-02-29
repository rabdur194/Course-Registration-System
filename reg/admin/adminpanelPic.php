<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>

</head>
<style>
body{
	margin:0px;
	border:0px;
}
#header{
	width: 100%;
	height: 140px;
	background-color: black;
	color: white;
}
#sidebar{
	width: 400px;
	height: 700px;
	background-color: pink;
	float: left;
}
#data
{
	height: 750px;
	background-color: grey;
}
#adminlogo{
	background-color: white;
	border-radius: 80px;
	max-width: 5%;
	height: auto;
	background:grey;
}
ul li{
	padding: 20px;
	border-bottom: 2 px solid grey;

}
a{
		text-decoration: none;
}
ul li:hover{
	background-color: white;
	color: pink;
}
p
{
	font-weight: bold;
	font-style: italic;
	color: purple;
	margin-top: 50px;
}
</style>
<body>
	<div id="header">
		<center><img src="images/adminlogo.png" alt="adminlogo" id="adminlogo">
			<br>Welcome to Admin Panel
		</center>
		
	</div>
	<div id="sidebar">
		<ul>
			<li><a href="add.php" target="" style="color: black">Add student Entry</li>
			<li><a href="delete.php" target="" style="color: black">Delete student entry</li>
			<li><a href="update.php" target="" style="color: black">Update Student Entry</li>
		</ul>
		
	</div>
	<!-- <div id="data"> -->
		<!-- <center>
			<p> Hello Here you can see everyone's time slots and registrations.You can update or add any changes with proper permisssions. </p>
		</center> -->
		
	</div>

</body>
</html>