
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
	<div class="title-tag">
		<h1>Contact Me</h1>
	</div>
	<div class="content-full-width">
		<div class="content-container row">
			<div class="large-offset-1 large-3 columns">
				<label class="contact-label">Full Name</label>
				<input type="text" name="fullName">
				<label class="contact-label top-spacing">Email Address</label>
				<input type="text" name="email">
			</div>
			<div class="large-6 columns">
				<label class="contact-label">Comments</label>
				<textarea class="contact-text" name="comments"></textarea>
			</div>
			<div class="large-1 columns"></div>
		</div>
		<div class="content-container row">
			<div class="large-offset-1 large-9 columns">
				<label class="inline-label contact-label">Or contact me at mauropinedo@gmail.com</label>
				<div class="social-container">
					<a href="https://www.linkedin.com/in/mauro-pinedo-33942393/">
						<span class="fa-stack fa-lg">
							<i class="fa fa-square-o fa-stack-2x"></i>
							<i class="fa fa-linkedin fa-stack-1x"></i>
						</span>
					</a>
				</div>
				<input class="submit-form" type="submit" name="submit" value="Submit">
			</div>
		</div>
	</div>
	<?php include "partials/modal.php"; ?>
	<!-- FOOTER PARTIAL -->
	<?php include "partials/footer.php"; ?>
	<!-- FOOTER PARTIAL -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
