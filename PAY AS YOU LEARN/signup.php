<?php
include_once('connection.php');
if(isset($_POST['submit']))
{

 $name=$_POST['name'];
 $password=$_POST['password'];
  $email=$_POST['email'];
 $sql= "INSERT INTO signup(name,password,email) VALUES('$name','$password','$email')";
 $result=mysqli_query($db,$sql);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>sign in page</title>
</head>
<body>
<form name="test" action="" method="post">
<br>name:<input type="text" name="name"></br>
<br>password:<input type="password" name="password"></br>
<br>email:<input type="text" name="email"></br>
   <input type="submit" name="submit" value="submit">
</form>
</body>
</html>