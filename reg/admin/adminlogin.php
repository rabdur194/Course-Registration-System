<?php
$username="admin";
$pass="admin";
if(isset($_POST["submit"]))
{
    // $form_username=$_username;
    // $form_pass=pass;
    if($username==$_POST['username'] && $pass==$_POST['pass'])
       { 
        header("location:adminpanel.php");
    }
} 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>admin login Page</title>
     <link rel="stylesheet" type="text/css" href="./loginstyle.css">

 </head>
 <body style="font-size: 120%; background: #F8F8FF; text-align: center;">
 <h1 style="font-weight: bold">ADMIN Login Page</h1>
 <div class="container">
     <form method="POST" action="" autocomplete="off">
     <label style="color: #2e856e; font-weight: bold">USERNAME</label>
     <input type="text" name="username">
     <br>
     <label style="color:#2e856e; font-weight:bold;">PASSWORD</label>
     <input type="password" name="pass">
 </div>
 <div>
        <br>

     <input type="submit" name="submit">
 </div>
 </form>
 </body>
 </html>