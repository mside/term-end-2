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
		<h1>Edit Portfolio</h1>
	</div>
	<div class="content-full-width">
		<div class="row">
			<?php
				if(isset($_GET["id"])){
					if(isset($_SESSION['username'])){
					$host = "localhost";
					$user = "michaels_user";
					$pass = "vanarts";
					$db = "michaels_mauro_db";

					$connection = mysqli_connect($host, $user, $pass, $db);

					if(!$connection) {
						echo "Connection Failed: " . mysqli_connect_error();
					}
					else {
	//get all info
	          $query = "SELECT * FROM portfolio_table WHERE id='$_GET[id]'";
	          $resultQuery = mysqli_query($connection, $query);
	          $num = mysqli_num_rows($resultQuery);
	//if info is present in table do the following
	          if($num > 0){
	              while ($row = mysqli_fetch_assoc($resultQuery)) {
									$id = $row["id"];
									$title = $row["title"];
									$embed = $row["embed"];
									$category = $row["category"];
									$desc = $row["desc"];

										echo '<form action="portfolio-edit-process.php" method="POST">';
											echo "<label class='contact-label'>ID</label><input type='text' name='id' readonly value='" . $id . "'/><br><br>";
											echo "<label class='contact-label'>Title</label><input type='text' name='title' value='" . $title . "'/><br><br>";
											echo "<label class='contact-label'>embed</label><input type='text' name='embed' value='" . $embed . "'/><br><br>";
											echo "<label class='contact-label'>category</label><input type='text' name='category' value='" . $category . "'/><br><br>";
											echo "<label class='contact-label'>Text</label><textarea name='desc'>" . $desc . "</textarea>";
											echo '<input type="submit" name="submit" value="Edit" />';
										echo '</form>';
	              }
	            }
							mysqli_close($connection);
						}
					}
				}
			 ?>
		</div>
	</div>
		</div>
	</div>
<!-- FOOTER PARTIAL -->
	<?php include "partials/footer.php"; ?>
<!-- FOOTER PARTIAL -->
</body>
</html>
