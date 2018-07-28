<?php
session_start();
include_once('connection.php');
if(isset($_POST['submit']))
{

 $name=$_POST['name'];
 
 $password=$_POST['password'];
  $sql="select * from signup WHERE name='".$name."' AND password='".$password."'limit 1";
  $result=mysqli_query($db,$sql);
  if(mysqli_num_rows($result)==1)
  {
  	$_SESSION["name"]=$name;
  	header('location:PAL.php');

  }else{
  echo"not login";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>login form</title>
</head>
    <link rel="stylesheet" type="text/css" href="Assets/css/style.css">
<body>
        <div class="loginbox">
            <img src="Assets/img/th79NLAU2B.jpg" class="th79NLAU2B">
            <h1>login here</h1>
            <form name="test" action="" method="post">
            <p>username</p>
                <input type="text" name="name" placeholder="Enter username" >
            <p>password</p>
                <input type="password" name="password" placeholder="Enter password">
                <input type="submit" name="submit" value="submit">
                <a href="#">Lost your password?</a><br>
                <a href="#">Don't have an account?</a><br>
            
            
            </form>
    </div>
</body>
</html>
<?php

 