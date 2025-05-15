<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<title> First Global Technopark </title>

	<!-- INCLUDES -->
	<link rel = "stylesheet" href = "assets/bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "assets/fontawesome/css/all.css">

	<!-- FONTS -->
	<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Montserrat">
	<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Poppins">
	<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Open+Sans">
	<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Mulish">

	<!-- STYLES -->
	<link rel = "stylesheet" href = "styles/navbar.css">
	<link rel = "stylesheet" href = "styles/footer.css">
	<link rel = "stylesheet" href = "styles/home.css">
	<link rel = "stylesheet" href = "styles/blogs.css">
	<link rel = "stylesheet" href = "styles/contactus.css">
	<link rel = "stylesheet" href = "styles/services.css">
</head>
<body>
	<nav class = "navbar justify-content-center">
		<div class = "header-contactinfo">
			<div class = "row">
				<div class = "col-md-6">
					<div class = "header-email">
						<p> mktg@firstglobaltechnopark.com </p>
					</div>
				</div>

				<div class = "col-md-6">
					<div class = "header-number">
						<p> 0917 166 3487 | 0998 572 3487</p>
					</div>
				</div>
			</div>
		</div>

		<div class = "navbar-logo">
			<img src = "images/logo/fgci.png" alt = "FGCI Logo">
		</div>

		<button class = "hamburger-menu" id = "hamburger-menu"><i class = "fa fa-bars"></i></button>

		<ul class = "main-navbar" id = "main-navbar">
			<li>
				<a href = "index"> HOME </a>
			</li>

			<li class = "dropdown">
				<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"> SERVICES </a>

				<div class = "dropdown-menu">
					<a class = "dropdown-item" href = "#"> Commercial </a>
					<a class = "dropdown-item" href = "#"> Lots for Lease </a>
					<a class = "dropdown-item" href = "#"> Events Place </a>
				</div>
			</li>

			<li>
				<a href = "blogs#blogs-section"> BLOGS </a>
			</li>

			<li>
				<a href = "contactus#contactus-section"> CONTACT US </a>
			</li>
		</ul>
	</nav>
	
	<!-- INCLUDES -->
	<script src = "assets/jquery/jquery.js"></script>
	<script src = "assets/bootstrap/js/bootstrap.min.js"></script>

	<!-- SCRIPTS -->
	<script src = "scripts/navbar.js"></script>
	<script src = "scripts/home.js"></script>

	<!-- OTHER SCRIPT -->
	<script>
		$(function() {
			$(document).scroll(function() {
				var $nav = $(".navbar");
				$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height())
			});
		});
	</script>
</body>
</html>
