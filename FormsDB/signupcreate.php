
<?php

require("dbsignup.php");


		if (isset($_POST['submit'])){
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$username = $_POST['username'];
			$email = $_POST["email"];
			$password = $_POST["password"];

			$connection = mysqli_connect("localhost", "root", "", "pmdb");

				// if($connection){
				// 	echo "We are connected";
				// }else {
				// 	die("DB connection failed");
				// }

			if (!$connection){
					
					die("DB connection failed");
				}



			// if (!$result){
			// 		die('Query FAILED' .mysqli_error());
			// 	};


				//CREATE insert

				$query = "INSERT INTO author (firstname,lastname,username,email,password) VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";
				$result = mysqli_query($connection, $query);
				//validation
				

		}

?>



<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
    <title>Bootswatch: Lux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <link rel="stylesheet" href="../4/lux/bootstrap.css" media="screen"> -->
    <!-- <link rel="stylesheet" href="../_assets/css/custom.min.css"> -->
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

<form method="post" action="signupcreate.php">
  <fieldset>
    <legend>Signup Update</legend>
    
     <div class="form-group">
      <label>First Name</label>
      <input type="name" name="firstname" class="form-control" placeholder="Firstname">
    </div>		

     <div class="form-group">
      <label>Last Name</label>
      <input type="Name" name="lastname" class="form-control"  placeholder="Lastname">
    </div>

    <div class="form-group">
      <label>Username</label>
      <input type="Name" name="username" class="form-control"  placeholder="Username">
    </div>
   
   
    <div class="form-group">
      <label >Email address</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>

     <div class="form-group">
      <label for="exampleInputPassword1">Confirm Password</label>
      <input type="password" class="form-control" placeholder="Password">
    </div>
   
   
   
    <button type="submit" name="submit" value="create" class="btn btn-primary">Add</button>
  </fieldset>
</form>




	<script src="../_vendor/jquery/dist/jquery.min.js"></script>
    <script src="../_vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="../_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../_assets/js/custom.js"></script>

</body>
</html>