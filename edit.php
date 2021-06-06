<?php
include_once "autoload.php";

$user = new User;

	// Isseting Form

	if(isset($_POST["add"])){

		// Get Values
		$name = $_POST["name"];
		$email = $_POST["email"];
		$cell = $_POST["cell"];
		$username = $_POST["username"];

        $id = $_GET["edit_id"];
        // user update
		$user -> userUpdate($id,$name,$email,$cell,$username);
        header('Location:index.php');
	}

	
    // User Edit
    if(isset($_GET["edit_id"])){

        $id = $_GET["edit_id"];

        $data = $user -> userEdit($id);

        $edit_data = $data ->fetch_object();


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
        <div class="col-lg-6 my-5 mx-auto">
            <div class="card">
                <div class="card-body">
                <h2>Edit Your Data</h2>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="name" class="form-control" value="<?php echo $edit_data->name?>" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" value="<?php echo $edit_data->email?>" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">Cell</label>
                            <input name="cell" value="<?php echo $edit_data->cell?>" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">Username</label>
                            <input name="username" value="<?php echo $edit_data->username?>" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <input name="add" class="btn btn-primary" type="submit" value="Update">
                        </div>
                    </form>
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