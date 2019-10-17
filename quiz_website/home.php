<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header('Location:index.php');
}
require_once('include/connection.php');
mysqli_select_db($conn, 'quizdb');
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
			body{
				background-image: url(images/2.jpg);
				background-repeat: no-repeat;
				background-size: cover;
			}

		</style>
</head>
<body>
<div class="container">
<center><h1 class="text-center text-light bg-dark" style ="width:450px; ">Welcome To Quiz World!</h1></center>
<center><h2 class="text-center text-light bg-dark" style ="width:450px; ">Hi <?php echo $_SESSION['username']; ?>..!</h2></center>
<div class="row">
<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 m-auto d-block">
<div class="card" style="background:lightyellow">
	<h5 class="text-center card-header">You have to select only one out of 4. Best of Luck: </h5>
</div>
<br>
<form action="check.php" method="POST">
<?php  
	$q = "SELECT * FROM questions ORDER BY rand() limit 5"; 
	$query = mysqli_query($conn, $q);
	$questions_num = 1;
	while ($rows = mysqli_fetch_array($query)) {

	?>
	<div class="card"style="background:lightyellow" >
		<h5 class="card-header"><?php echo "$questions_num. " ?><?php echo $rows['question'] ?></h5>
	
	<?php
	$q = "SELECT * FROM answers WHERE ans_id='{$rows['qid']}' order by rand() limit 4"; 
	$query1 = mysqli_query($conn, $q);
	while ($answer = mysqli_fetch_array($query1)) { 
		?>
		<div class="card-body" >
			
			<input type="radio" name="<?php echo $rows['question']; ?>" value="<?php echo $answer['answers']; ?>">
			<?php echo $answer['answers']; ?>
		</div>


	<?php  
}

 $questions_num +=1;
}
 ?>
 </div>
<div>
 <input class="btn btn-success m-auto d-block" type="submit" value="Submit" >
</div>
</form>
 
 </div>
 </div>
 <div class="btn m-auto d-block">
 <a href="logout.php" class="btn btn-primary">LOGOUT</a>
</div>
</div>
</body>
</html>