<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Required Bootstrap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

	<!-- CSS -->
	<link rel="stylesheet" href="../css/login.css" type="text/css" media="all" />

	<title>FACET - Post For Fun</title>
</head>
<body class="background">
	<div class="content">
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Sign up to FACET</h2>
				<h3 class="text-dark">Post and follow people on FACET</h3>
			</div>
			<div class="sub-main-w3">
				<form action="controller/registerProcess.php" method="post">
					<input placeholder="First Name" name="firstName" type="text" required="">
					<input placeholder="Last Name" name="lastName" type="text" required="">
					<input placeholder="E-mail" name="eMail" type="email" required="">
					<input placeholder="Password" name="password" type="password" required="">
					<input type="hidden" name="userType" value=1>
					<!-- <input type="hidden" name="following" value=0> 
						<input type="hidden" name="follower" value=0> 
					-->
					<input type="submit" name="Submit" value="Register">
					<p><a href="login.php" class="btn btn-link btn-block"><u>Sign in here</u></a></p>
				</form>
			</div>
		</div>
	</div>

	<div class="footer">

	</div>

	<!-- Required Boostrap Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>
