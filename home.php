<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
  
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<!-- I want a water droplet for the icon up in the nav kind of like DDCW page -->
				<h1>Dots Auto Wash</h1>
				<a href="home.php"><i class="fa fa-home"></i>Home</a>
				<a href="plans.php"><i class="fa fa-book" aria-hidden="true"></i>plans</a>
				<a href="testimonials.php"><i class="fa fa-bullhorn" aria-hidden="true"></i>testimonials</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="about.php"><i class="fas fa-user-circle"></i>About</a>
				<a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>

        
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>

        <aside>
        <ul>
          <li><a href="about.php">About Us</a></li>
          <li><a href="products/costumes.html">Costumes</a></li>
          <li><a href="products/special.html">Special Effects</a></li>
          <li><a href="products/masks.html">Masks</a></li>
        </ul>
      </aside>
	</body>
</html>

