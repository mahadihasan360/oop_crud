<?php
include_once "autoload.php";

$user = new User;

if(isset($_GET["view_id"])){

    $id = $_GET["view_id"];

    $data = $user -> userView($id);

	$view_data = $data -> fetch_object();
}





?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	


<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto mt-5">
				<div class="card">
					<h2 class="text-center"><?php echo $view_data  -> name?></h2>
					<p class="text-center"><?php echo $view_data  -> username?></p>
					<div class="card-body">
						<table class="table">
							<tr>
								<td>Name</td>
								<td><?php echo $view_data  -> name?></td>
							</tr>

							<tr>
								<td>Email</td>
								<td><?php echo $view_data  -> email?></td>
							</tr>

							<tr>
								<td>Cell</td>
								<td><?php echo $view_data  -> cell?></td>
							</tr>

							<tr>
								<td>Username</td>
								<td><?php echo $view_data  -> username?></td>
							</tr>
						</table>
						<a class="btn btn-primary btn-sm" href="index.php">Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>





	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>