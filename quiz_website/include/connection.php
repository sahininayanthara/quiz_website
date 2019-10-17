<?php  
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'quizdb';
$conn = mysqli_connect('localhost', 'root', '', 'quizdb');

if(mysqli_connect_errno()){
	die('Database Connection Failed' . mysqli_connect_error());
}
?>




