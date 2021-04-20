<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="../css/style.css">
	
	<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body>

<header class="header-fixed"  style="font-size: 40px;">

	<div class="header-limiter" style="font-size: 40px;">

		<h1>Teacher <span style="font-size: 40px;">F</span>.com</a></h1>

		<nav>
			<a href="homePageView.php">Home</a>
			<a href="loginTeacherView.php">Log In</a>
			<a href="signupTeacherView.php">Sign Up</a>
			<a href ="adpage.php">Tutors Ad </a>
			<a href="aboutUs.php">About Us</a>
		</nav>

	</div>

</header>

<!-- You need this element to prevent the content of the page from jumping up -->
<div class="header-fixed-placeholder"></div>

<!-- The content of your page would go here. -->





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

	$(document).ready(function(){

		var showHeaderAt = 150;

		var win = $(window),
				body = $('body');

		// Show the fixed header only on larger screen devices

		if(win.width() > 400){

			// When we scroll more than 150px down, we set the
			// "fixed" class on the body element.

			win.on('scroll', function(e){

				if(win.scrollTop() > showHeaderAt) {
					body.addClass('fixed');
				}
				else {
					body.removeClass('fixed');
				}
			});

		}

	});

</script>



</body>

</html>
