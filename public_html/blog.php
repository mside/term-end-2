
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<!-- NAV PARTIAL -->
	<?php include "partials/header.php"; ?>
<!-- NAV PARTIAL -->
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
//get all info
		$query = "SELECT * FROM blog_table";
		$resultQuery = mysqli_query($connection, $query);
		$num = mysqli_num_rows($resultQuery);
//if info is present in table do the following
		if($num > 0){
				while ($row = mysqli_fetch_assoc($resultQuery)) {
					$id = $row["id"];
					$title = $row["title"];
					$date = $row["date"];
					$image = $row["image"];
					$imagealt = $row["imagealt"];
					$text = $row["text"];

					echo '<div class="blog-title-tag">';
					echo '<h1>' . $title . '</h1>';
					echo '<h5>' . $date . '</h5>';
					echo '</div>';
					echo '<div class="content-full-width blog-container">';
					echo '<div class="moving-background-container bottom-spacing">';
					echo '<div class="centered-div-blog">';
					echo '<img src="img/' . $image . '" alt="' . $imagealt . '">';
					echo '</div>';
					echo '</div>';
					echo '<div class="row">';
					echo '<div class="large-8 large-offset-2 columns bottom-spacing">';
					echo '<p>' . $text . '</p>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
			}
		}
	}
	?>
<?php include "partials/modal.php"; ?>
<!-- FOOTER PARTIAL -->
	<?php include "partials/footer.php"; ?>
<!-- FOOTER PARTIAL -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
