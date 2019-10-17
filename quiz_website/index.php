<?php require_once('include/connection.php'); ?>
<!DOCTYPE html>
<html>
<head> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<body>
		<style type="text/css">
			body{
				background-image: url(images/1.jpg);
				background-repeat: no-repeat;
				background-size: cover;

			}

		</style>
</head>
<body>

	<div class="container mt-5">
		<center><h1 class="text-center text-light bg-dark" style ="width:250px; ">Quiz World!</h1></center>
		<div class="login-box" style="max-width: 1000px; float:none; margin: 150px auto; ">
			
		<div class="row">
			<div class="col-md-6 login-left">
			<div class="card bg-info">
				<h2 class="text-center text-light card-header">Login Here</h2>
				<form action="validation.php" method="post">
			<div class="card-body">
				
			<div class="form-group">
				<label class="text-light">Username:</label>
				<input type="text" name="username" class="form-control bg-transparent text-light" required>
			</div>
			<div class="form-group">
				<label class="text-light">Password:</label>
				<input type="text" name="password" class="form-control bg-transparent text-light" required>
			</div>
			</div>
			<div class="footer">
				<div class="text-center">
				<button type="submit" class="btn btn-danger btn-ghost btn-ghost-bordered center-block"  style ="width:115px; ">Login
					</button>
				</div>
			</div>
			</form>
			
			</div>
			</div>


			<div class="col-md-6 login-right" >
			<div class="card bg-info">
				<h2 class="text-center text-light card-header">Registration Here</h2>
				<form action="<?php $_PHP_SELF ?>" method="post">
			<div class="card-body">
					
			<div class="form-group">
				<label class="text-light">Username:</label>
				<input type="text" name="username" class="form-control bg-transparent text-light" required>
			</div>
			<div class="form-group">
				<label class="text-light">Password:</label>
				<input type="text" name="password" class="form-control bg-transparent text-light" required>
			</div>
			</div>
			<div class="footer">
				<div class="text-center">
				<button type="submit" class="btn btn-danger btn-ghost btn-ghost-bordered center-block"  style ="width:115px; ">Registration
					</button>
				</div>
				
	<?php 
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		session_start();
		require_once('include/connection.php');
		mysqli_select_db($conn, 'quizdb');

	$name = $_POST['username'];
	$pass = $_POST['password'];
 
	$s = "select * from usertable where username = '$name'";
	$result = mysqli_query($conn, $s);
	$num = mysqli_num_rows($result);

	if($num == 1){
	echo '<script language="javascript">';
	echo 'alert("Username Already Taken")'; 
	echo '</script>';
			

	}else{
	$reg = "insert into usertable(username, password) values ('$name','$pass')";
	mysqli_query($conn, $reg);
	echo '<script language="javascript">';
	echo 'alert("Registration Successfully. Now You Can Login")'; 
	echo '</script>';
	}
}
 ?>	
			
			
			</div>
			</form>

			</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>
<?php mysqli_close($conn); ?>