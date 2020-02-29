<?php include('server.php')
	
 ?>
 	
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
		<?php
		$array=array();
		$sqlslot="SELECT COUNT(id) as total, slot FROM users GROUP BY slot";
		$result=mysqli_query($db, $sqlslot);
		while ($row=mysqli_fetch_assoc($result)) {
		 	# code...
		 	$array[]=$row['total'];
		 } 

		 ?>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
		<ul class="lines" style="margin-left: 20px;">
			<li>Please enter <a>all</a> information and select your desired day.Please eneter a correct 'SID' number!</li>
			<li>Please check the number of available seats before submitting.</li>
			<li>Register only to one slot</li>
			<li >Any problems?write a message to <a style="text-decoration: none;" 
				href="https://piazza.com/class/k0kczubp5se619?cid=50"> www.piazza.com/class</a></li>
			<br>
		</ul>

	

			<label>Name</label>
			<input type="text" name="username" value="<?php echo $username; ?>">

			<label>Firstname</label>
			<input type="text" name="firstName" value="<?php echo $firstName; ?>">
		
			<label>SID</label>
			<input type="number" name="SID" value="<?php echo $SID; ?>">

			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		
			<label>Password</label>
			<input type="password" name="password_1">
		
		
			<label>Confirm password</label>
			<input type="password" name="password_2">
			<br>
			<br>
			
				Select the practical Slot : 
				<select id="slot"  name="slot">
					<option>Select One</option>
					<option>Select One</option>
					<option value="1 ">Monday 15:00-17:00 <?php echo (8-$array[0])." "; ?>seats left</option>
					<option value="2">Tuesday 14:00-16:00 <?php echo (8-$array[1])." "; ?>seats left</option>
					<option value="3">Thursday 11:00-13:00 <?php echo (8-$array[2])." "; ?>seats left</option>
					<option value="4">Friday 15:00-17:00 <?php echo (8-$array[3])." "; ?>seats left</option>
				</select>
			

			<br>
			<br>

		
			<button type="submit" class="btn" name="reg_user">Register</button>
			
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>

	</form>
	<?php include('errors.php'); ?> 
	<br>
	<a href="admin/adminlogin.php" style="color: purple;font-weight: bold;text-decoration: none;margin-left: 200px" >Admin Panel</a>
			<br><br>
</body>
</html>