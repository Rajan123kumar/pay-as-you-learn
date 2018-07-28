
	<?php
session_start();
if($_SESSION["name"]==true)
{
echo $_SESSION["name"];  
}
else
{
	header('location:signup.php');

}
?>
<a href="logout.php">logout<a>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<form name="checkbox" acting="" method="post"></br>
			java:<input type="radio" name="h" value="100">100</b>
		<br>day 1->core java<input type="radio" name="h" value="40">40</br>
		<br>day2->oops<input type="radio"  name="h" value="40">40</br>
		<br>day->3inheritance<input type="radio" name="h" value="40">40</br>
		php:<input type="radio" name="h">100</b>
		<br>day 1->basic php<input type="radio" name="h" value="40">40</br>
		<br>day 2->00ps<input type="radio" name="h" value="40">40</br>
		<br>day3->inheritance<input type="radio" name="h" value="40">40
		<input type="submit" name="submit"/>
	</form>
	</body>
	</html>

<?php 
	include_once('connection.php');

	if (isset($_POST['submit'])) {
$money=$_POST['money'];
$money=500;
echo $money;
$money=500-$_POST['h'];
echo  $money;
$sql= "INSERT INTO signup(money) VALUES('$money')";
 $result=mysqli_query($db,$sql);

if(isset($_POST['h']))
{
echo "You have selected :".$_POST['h'];
	//if(isset($_POST['submit'])){//to run PHP script on submit
//if(!empty($_POST['h'])){
// Loop to store and display values of individual checked checkbox.
//foreach($_POST['h'] as $selected){
//}
}
}
	?>
