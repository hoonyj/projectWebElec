<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Elegant Subscribe Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->

	<!-- css files -->
	<link rel="stylesheet" href="../css/login.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->

</head>
<body class="background">
	<!--main-->
	<div class="content">
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Sign up to FACET</h2>
				<h3 class="text-dark">Post and follow people on FACET</h3>
			</div>
			<div class="sub-main-w3">
				<form action="controller/registerProcess.php" method="post">
					<input placeholder="Last Name" name="lastName" type="text" required="">
					<input placeholder="First Name" name="firstName" type="text" required="">
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
	<!--//main-->

	<!--footer-->
	<div class="footer">

	</div>
	<!--//footer-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
