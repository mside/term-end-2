<?php
  session_start();


  // function prevent($this, $conn) {
	// 	stripslashes($this);
	// 	mysqli_real_escape_string($conn, $this);
	// 	return $this;
	// }

	if(isset($_POST['usernamelogin']) AND isset($_POST['passwordlogin'])){

		$host = "localhost";
		$user = "michaels_user";
		$pass = "vanarts";
		$db = "michaels_mauro_db";

		$connection = mysqli_connect($host, $user, $pass, $db);

		if(!$connection) {
      echo "Connection Failed: " . mysqli_connect_error();
		}
		else {
			$username =  $_POST['usernamelogin'];
			$password =  $_POST['passwordlogin'];

			// prevent($username, $connection);
			// prevent($password, $connection);

			$select = "SELECT * FROM login_table WHERE user='$username'
      AND password='$password'";
      // REMOVE WHEN HASHED^^^

			$selectResult = mysqli_query($connection, $select);
			$num = mysqli_num_rows($selectResult);

			if($num > 0) {
				while ($row = mysqli_fetch_assoc($selectResult)) {

          $_SESSION['username'] = $username;
          header("location: cms-index.php");
          //echo "<script> location.replace('cmsMaster.php');</script>";



          // $hashed_db_password = $row["password"];
          //
					// // password_verify()
					// // Verifies that a password matches a hashed password.
					// // This is possible because the password_hash() function returns
					// // the algorithm, cost and salt as part of the returned hash.
					// // Therefore there is no reason to store in the database the salt
					// // or algorithm information
					// //$match = password_verify($password, $hashed_db_password);
          //
					// if($match == 0) {
					// 	echo "No match.<br>";
					// 	echo "<h1>You Are NOT logged in</h1>";
					// }
					// else {
          //   //sessions variable and go to cms
          //   //header("location: signUpSuccess.php");
					// 	echo "There is a match";
					// 	echo "<h1>Log In SUCCESS</h1>";
					// }
				}
			}
      mysqli_close($connection);
		}
	}


?>
