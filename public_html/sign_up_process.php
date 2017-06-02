<?php

// function prevent($this, $conn) {
// 	stripslashes($this);
// 	mysqli_real_escape_string($conn, $this);
// 	return $this;
// }

echo phpinfo();

if (isset($_POST['username']) AND isset($_POST['password']))
	{
	$host = "localhost";
	$user = "michaels_user";
	$pass = "vanarts";
	$db = "michaels_mauro_db";
	$connection = mysqli_connect($host, $user, $pass, $db);
	if (!$connection)
		{
			echo "Connection Failed: " . mysqli_connect_error();
		}
	  else
		{
		$username = $_POST['username'];
		$password = $_POST['password'];

		// prevent($username, $connection);
		// prevent($password, $connection);
		// password_hash()
		// Creates a password hash using a strong one-way
		// hashing algorithm. The first parameter is the password
		// you want to hash while the second specifies the algorithim.
		// A random salt is added to the hash as well

		$hashSaltPassword = password_hash($password, PASSWORD_DEFAULT);
		$insert = "INSERT INTO login_table (user, password) VALUES ('$username', '$hashSaltPassword')";
		$insertResult = mysqli_query($connection, $insert);

		// header("location: signUpSuccess.php");

		if ($insertResult)
			{
			echo "<h1>Sign Up Successful</h1>";
			}
		  else
			{
			echo "<p>Sign Up FAILED</p>";
			}
		}
	}

?>
