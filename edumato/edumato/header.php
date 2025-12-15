<!DOCTYPE html>
<html>

<head>
	<title>edumato</title>
	<link rel="icon" href="images/e png.png" />
	<link rel="stylesheet" href="css/homepage.css" />
	<link rel="stylesheet" href="css/header.css" />
	<link rel="stylesheet" href="css/login.css" />
	<link rel="stylesheet" href="css/blog.css"/>
	<link rel="stylesheet" href="css/gallery.css"/>
	<link rel="stylesheet" href="css/contact.css"/>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
		integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<script src="js/jquery.js"></script>
</head>

<body>
	
	<!--Image Search Page-->
	<div class="imagecontainer container-fluid ">
		<!-- navbar section strats -->
			 
				<nav id="navbar navbar-example" class="navbar " style="color:white;position:sticky;top:5px;" >
					<div class="container-fluid"  >


				<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="color:white;">
							
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar glyphicon glyphicon-minus"></span>
							<span class="icon-bar glyphicon glyphicon-minus"></span>
							<span class="icon-bar glyphicon glyphicon-minus"></span>
						</button>
						<a class="navbar-brand is-img" href="#"><img src="images/e png.png" class="img-responsive img-circle" alt="brand-logo" height="40px" width="40px"   style="margin-top:-13px; margin-left:50px;">  </a>
					</div>
					<!-- collect the nav links ,forms and other content for toggling -->
					<div class=" collapse navbar-collapse navbar-right"  id="bs-example-navbar-collapse-1"  >
						<ul class="nav navbar-nav" style="color:black;">
							<li class="item active"><a href="home.php" class="nav-item nav-link 
                        <?php if(basename($_SERVER['PHP_SELF'])=='index.php') {  echo 'active'; } else {echo '';}?>"> Home</a></li>
							<li class="item"><a href="about.php" class="nav-item nav-link 
                        <?php if(basename($_SERVER['PHP_SELF'])=='about.php') {  echo 'active'; } else {echo '';}?>">About </a></li>
							<li class="item"><a href="menu.php" class="nav-item nav-link 
                        <?php if(basename($_SERVER['PHP_SELF'])=='menu.php') {  echo 'active'; } else {echo '';}?>">Menu</a></li>
							<li class="item"><a href="gallery.php" class="nav-item nav-link 
                        <?php if(basename($_SERVER['PHP_SELF'])=='gallery.php') {  echo 'active'; } else {echo '';}?>">Gallery</a></li>
							<li class="item"><a href="book.php" class="nav-item nav-link 
                        <?php if(basename($_SERVER['PHP_SELF'])=='book.php') {  echo 'active'; } else {echo '';}?>"> Book Table</a></li>
							<li class="item"><a href="blog.php" class="nav-item nav-link 
                        <?php if(basename($_SERVER['PHP_SELF'])=='blog.php') {  echo 'active'; } else {echo '';}?>"> Blog</a></li>
							<li class="item"><a href="contact.php" class="nav-item nav-link 
                        <?php if(basename($_SERVER['PHP_SELF'])=='contact.php') {  echo 'active'; } else {echo '';}?>"> Contact Us</a></li>
							<li class="item"><a href="login.php" class="nav-item nav-link 
                        <?php if(basename($_SERVER['PHP_SELF'])=='login.php') {  echo 'active'; } else {echo '';}?>"> Login</a></li>
						</ul>
				</div>
				</div>
				</nav>
			
        <!-- end navbar section -->