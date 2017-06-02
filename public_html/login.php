
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
	<div class="title-tag">
		<h1>Log in</h1>
	</div>
	<div class="content-full-width">
		<div class="row">
		<!-- PASSWORD HASH NOT WORKING WITH SERVER PHP -->
			<!-- <form action="sign_up_process.php" method="POST">
				<h2>Sign Up Page</h2>
				<label class="contact-label"><input type="text" name="username"/>User Name</label><br><br>
			  <label class="contact-label"><input type="text" name="password"/>Password</label><br><br>
				<input type="submit" name="submit" value="Sign Up" />
			</form> -->

			<br/>

			<form action="log_in_process.php" method="POST">
				<label class="contact-label">User Name</label><input type="text" name="usernamelogin"/><br><br>
			  <label class="contact-label">Password</label><input type="text" name="passwordlogin"/><br><br>
				<input type="submit" name="submit" value="Log In" />
			</form>
		</div>
	</div>
<!-- FOOTER PARTIAL -->
	<?php include "partials/footer.php"; ?>
<!-- FOOTER PARTIAL -->
</body>
</html>
