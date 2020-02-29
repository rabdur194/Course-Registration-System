<?php include('server.php') 

?>

<?php
if(isset($_POST['search']))
{
	$searchkey=$_POST['search'];
	$sql="SELECT * FROM users WHERE username LIKE'%$searchkey%'";
	$sqlSID="SELECT * FROM users WHERE SID LIKE'%$searchkey%'";
	$sqlEmail="SELECT * FROM users WHERE email LIKE'%$searchkey%'";
	$result=mysqli_query($db,$sql);
$resultSID=mysqli_query($db,$sqlSID);
$resultEmail=mysqli_query($db,$sqlEmail);
}
else
{
	$sql="SELECT * FROM users";
	$searchkey="";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel Dashboard</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
	<h1>Welcome to Admin Dashboard</h1>
	<form method="POST" action="">
		
		<input type="text" name="search" placeholder="Search Here" value="<?php echo $searchkey ?>">
		<button class="btn">Search</button>
		
	</form>
	<br>
	<br>
	<table>
		<tr>
			<th>  UserName  </th>
			<th>  firstName  </th>
			<th>  SID  </th>
			<th>  email  </th>
			<th>  Slot  </th>
		</tr>
		<?php while($row=mysqli_fetch_object($result))
		{ 
			?>
			<tr>
				<td> <?php echo $row->username?> </td>
				<td> <?php echo $row->firstName?> </td>
				<td> <?php echo $row->SID?> </td>
				<td> <?php echo $row->email?> </td>
				<td> <?php echo $row->slot?> </td>
			</tr>
			<?php

		}
		?>
		<?php while($row=mysqli_fetch_object($resultSID))
		{ 
			?>
			<tr>
				<td> <?php echo $row->username?> </td>
				<td> <?php echo $row->firstName?> </td>
				<td> <?php echo $row->SID?> </td>
				<td> <?php echo $row->email?> </td>
				<td> <?php echo $row->slot?> </td>
			</tr>
			<?php

		}
		?>
		<?php while($row=mysqli_fetch_object($resultEmail))
		{ 
			?>
			<tr>
				<td> <?php echo $row->username?> </td>
				<td> <?php echo $row->firstName?> </td>
				<td> <?php echo $row->SID?> </td>
				<td> <?php echo $row->email?> </td>
				<td> <?php echo $row->slot?> </td>
			</tr>
			<?php

		}
		?>

	</table>




	<br>
	<br>

	<br><br>
			<p> <a href="..\login.php" style="color: purple;text-decoration: none;font-weight: bold ">Home</a> </p>


</body>
</html>