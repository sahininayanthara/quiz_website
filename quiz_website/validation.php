<?php 
session_start();
require_once('include/connection.php');
mysqli_select_db($conn, 'quizdb');

$name = $_POST['username'];
$pass = $_POST['password'];
 
$s = "select * from usertable where username = '$name' && password='$pass'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result); 

if($num == 1){
	$_SESSION['username'] = $name;
	header('Location:home.php');
}else{
	header('Location:index.php');
}



 ?>