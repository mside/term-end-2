
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
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100415311-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<!-- NAV PARTIAL -->
	<?php include "partials/header.php"; ?>
<!-- NAV PARTIAL -->
	<div class="row bottom-spacing">
		<div class="content-container large-offset-1 large-11 columns">
			<h2 class="inline-header">Filter By</h2>
			<button class="filter-portfolio">VFX</button>
			<button class="filter-portfolio">Motion Graphics</button>
		</div>
	</div>
	<div class="bottom-spacing row">
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
				$query = "SELECT * FROM portfolio_table";
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

							echo '<div class="bottom-spacing large-6 columns">';
							echo '<div class="content-container portfolio-content-container">';
							echo '<h1 class="portfolio-name">'. $title .'</h1>';
							echo '<div class="video-container"><iframe src="' . $embed . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
							echo '<h3 class="top-spacing-small">' . $category .'</h3>';
							echo '<p>' . $desc .'</p>';
							echo '</div>';
							echo '</div>';
				}
			}
		}
		?>
		</div>
		<?php include "partials/modal.php"; ?>
<!-- FOOTER PARTIAL -->
	<?php include "partials/footer.php"; ?>
<!-- FOOTER PARTIAL -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
