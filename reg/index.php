
<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">

</head>
<body>
	<div class="header">
		<h2 >Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
<?php
$con = mysqli_connect('localhost', 'root', '', 'registration');
if(isset($_POST['search']))
{
	$searchkey=$_POST['search'];
	$sql="SELECT * FROM users WHERE username LIKE '%$searchkey%'";
}
else
{
	$sql="SELECT* FROM users";
	$searchkey="";
}
	$result=mysqli_query($con,$sql);
 
 ?>
	<form action="" method="POST">
		<label>Search</label>
		<input type="text" name="search" placeholder="search here" value="<?php echo $searchkey ?>">
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
							<?php while ($row=mysqli_fetch_object($result)) 
							{
								# code...
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

					<br><br>
					




			<?php  if (isset($_SESSION['username'])) : 
			
			?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p>You have successfully registered for the slot</p>


	


			<p> <a href="index.php?logout='1'" style="color: red; text-decoration: none">logout</a> </p>
			<br>
			<a href="admin/adminlogin.php" style="color: purple;font-weight: bold" >Admin Panel</a>
			<br><br>
			<p> <a href="login.php" style="color: purple;text-decoration: none ">Home</a> </p>
		

		<?php endif ?>
	
	
		
</body>
</html>