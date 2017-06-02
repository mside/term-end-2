<?php
	session_start();
 ?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>VANARTS STUDENT MOCK PROJECT</title>
	<meta name="description" content="This is a student exercise website for the Vancouver Institute of Media Arts (www.vanarts.com)">
	<link rel="icon" type="image/png"  href="favicon.png">
<!-- CSS -->
	<link href="css/foundation/foundation.css" rel="stylesheet" type="text/css">
  <link href="css/foundation/normalize.css" rel="stylesheet" type="text/css">
	<script src="https://use.fontawesome.com/347ac4646f.js"></script>
	<link href="css/main.css" media="screen, projector, print" rel="stylesheet" type="text/css">
<!-- modernizr -->
  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
<!-- NAV PARTIAL -->
	<?php include "partials/header.php"; ?>
<!-- NAV PARTIAL -->
	<div class="title-tag title-tag-cms">
		<h1>Edit About</h1>
	</div>
	<div class="content-full-width">
		<div class="row">

			<?php
				$host = "localhost";
				$user = "michaels_user";
				$pass = "vanarts";
				$db = "michaels_mauro_db";

				$connection = mysqli_connect($host, $user, $pass, $db);

				if(!$connection) {
					echo "Connection Failed: " . mysqli_connect_error();
				}
				else {
					if(!isset($_SESSION['username'])){
              echo "<h1>SHOO SHOO internet troll!</h1>";
          }
          else{
//get all info
              $query = "SELECT * FROM about_table";
              $resultQuery = mysqli_query($connection, $query);
              $num = mysqli_num_rows($resultQuery);
//if info is present in table do the following
              if($num > 0){
                  echo "<table>";
                  echo "<tr><td><a href='cmsInsert-about.php'>Create New</a></td><td></td><td>Title</td><td>Text</td></tr>";
// All the results are put into an associative array called $row which we can loop through
// Each pass of this while loop isolates a single row beginning from top to bottom
                  while ($row = mysqli_fetch_assoc($resultQuery)) {
                      $id = $row["id"];
                      $title = $row["title"];
                      $text = $row["text"];

                      echo "<tr>";
                      echo    "<td><a href='cms-edit-about.php?id=$id'>Edit</a></td>";
                      echo    "<td><a href='cmss-delete-about.php?id=$id'>Delete</a></td>";
                      echo    "<td>$title</td>";
                      echo    "<td>$text</td>";
                      echo "</tr>";
                  }
                  echo "</table>";
              }
						mysqli_close($connection);
					}
				}
			 ?>
			<!-- <form action="about_process.php" method="POST">
				<label class="contact-label">Title</label><input type="text" name="title"/><br><br>
			  <label class="contact-label">Text</label><input type="text" name="text"/><br><br>
				<input type="submit" name="submit" value="Log In" />
			</form> -->
		</div>
	</div>
	<div class="title-tag title-tag-cms">
		<h1>Edit Blog</h1>
	</div>
	<div class="content-full-width">
		<div class="row">
			<?php
				$host = "localhost";
				$user = "michaels_user";
				$pass = "vanarts";
				$db = "michaels_mauro_db";

				$connection = mysqli_connect($host, $user, $pass, $db);

				if(!$connection) {
					echo "Connection Failed: " . mysqli_connect_error();
				}
				else {
					if(!isset($_SESSION['username'])){
							echo "<h1>SHOO SHOO internet troll!</h1>";
					}
					else{
//get all info
							$query = "SELECT * FROM blog_table";
							$resultQuery = mysqli_query($connection, $query);
							$num = mysqli_num_rows($resultQuery);
//if info is present in table do the following
							if($num > 0){
									echo "<table>";
									echo "<tr><td><a href='cmsInsert-blog.php'>Create New</a></td><td></td><td>Title</td><td>date</td><td>image</td><td>Text</td></tr>";
// All the results are put into an associative array called $row which we can loop through
// Each pass of this while loop isolates a single row beginning from top to bottom
									while ($row = mysqli_fetch_assoc($resultQuery)) {
											$id = $row["id"];
											$title = $row["title"];
											$date = $row["date"];
											$image = $row["image"];
											$imagealt = $row["imagealt"];
											$text = $row["text"];

											echo "<tr>";
											echo    "<td><a href='cms-edit-blog.php?id=$id'>Edit</a></td>";
											echo    "<td><a href='cms-delete-blog.php?id=$id'>Delete</a></td>";
											echo    "<td>$title</td>";
											echo    "<td>$date</td>";
											echo    "<td><img src='upload/$image' alt='$imagealt'></td>";
											echo    "<td>$text</td>";
											echo "</tr>";
									}
									echo "</table>";
							}
						mysqli_close($connection);
					}
				}
			 ?>
			<!-- <form action="about_process.php" method="POST">
				<label class="contact-label">Title</label><input type="text" name="title"/><br><br>
				<label class="contact-label">Text</label><input type="text" name="text"/><br><br>
				<input type="submit" name="submit" value="Log In" />
			</form> -->
		</div>
	</div>
	<div class="title-tag title-tag-cms">
		<h1>Edit Blog</h1>
	</div>
	<div class="content-full-width">
		<div class="row">
			<?php
				$host = "localhost";
				$user = "michaels_user";
				$pass = "vanarts";
				$db = "michaels_mauro_db";

				$connection = mysqli_connect($host, $user, $pass, $db);

				if(!$connection) {
					echo "Connection Failed: " . mysqli_connect_error();
				}
				else {
					if(!isset($_SESSION['username'])){
							echo "<h1>SHOO SHOO internet troll!</h1>";
					}
					else{
//get all info
							$query = "SELECT * FROM portfolio_table";
							$resultQuery = mysqli_query($connection, $query);
							$num = mysqli_num_rows($resultQuery);
//if info is present in table do the following
							if($num > 0){
									echo "<table>";
									echo "<tr><td><a href='cmsInsert-portfolio.php'>Create New</a></td><td>Title</td><td>Embed</td><td>category</td><td>Text</td></tr>";
// All the results are put into an associative array called $row which we can loop through
// Each pass of this while loop isolates a single row beginning from top to bottom
									while ($row = mysqli_fetch_assoc($resultQuery)) {
											$id = $row["id"];
											$title = $row["title"];
											$embed = $row["embed"];
											$category = $row["category"];
											$desc = $row["desc"];

											echo "<tr>";
											echo    "<td><a href='cms-edit-portfolio.php?id=$id'>Edit</a></td>";
											echo    "<td><a href='cms-delete-portfolio.php?id=$id'>Delete</a></td>";
											echo    "<td>$title</td>";
											echo    "<td><iframe src='$embed' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></td>";
											echo    "<td>$category</td>";
											echo    "<td>$desc</td>";
											echo "</tr>";
									}
									echo "</table>";
							}
						mysqli_close($connection);
					}
				}
			 ?>
		</div>
	</div>
<!-- FOOTER PARTIAL -->
	<?php include "partials/footer.php"; ?>
<!-- FOOTER PARTIAL -->
</body>
</html>
