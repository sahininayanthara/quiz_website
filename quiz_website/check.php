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
				background-image: url(images/3.jpg);
				background-repeat: no-repeat;
				background-size: cover;
			}

		</style>
</head>
<body>
	<div class="container text-center">
		<br><br>
		<h1 class="text-center text-light text-uppercase">Quiz World!</h1>
		<br>
	<table class="table text-center table-bordered table-hover">
					<thead>
						<th class="center bg-dark text-white">#</th>
						<th class="center bg-dark text-white">Question</th>
						<th class="center bg-dark text-white">Your Answer</th>
						<th class="center bg-dark text-white">Correct Answer</th>
						<th class="center bg-dark text-white">Answer Status</th>
					</thead>
					<tbody>
						<?php

							$question_number = 1;

							if (isset($_POST)) {
								foreach ($_POST as $key => $val) {
									$key = str_replace("_", " ", $key);
									?> 
											<tr style ="background:white">
											<td><?php echo $question_number ?></td>
											<td><?php echo $key ?></td>
											<td><?php echo $val ?></td>
											<td>

											<?php

											$query = "SELECT question, answer FROM questions";
											$result_set = mysqli_query($conn,$query);
            								
            								while ($result = mysqli_fetch_assoc($result_set)) {

            									if ($result['question'] == $key) {
            										echo $result['answer'];
            									}
            								}
            								?>
            									

											</td>
											<td>
												<?php
											
											$query = "SELECT question, answer FROM questions WHERE question ='$key' ";
											$result_set = mysqli_query($conn,$query);
            								
											while ( $result = mysqli_fetch_assoc($result_set)) {
												
												if ($result['question'] == $key && $result['answer'] == $val) {
            										echo "Correct Answer<br>";
            									}
            									
            									else {
            										echo "Incorrect Answer<br>";
            									}
											}
											?> 

											</td>
										  	</tr>

										  	<?php

									$question_number += 1;
								}
								
							}
							
							?>	
					</tbody>
				</table>
<a  href="logout.php" class="btn btn-primary">LOGOUT</a>
<br>
<br><br>
	</div>
</body>
</html>