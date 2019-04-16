<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	<title>Home</title>
</head>
<body>
	<div id = "wrapper">
		<header>
			<div id = "headertop">
				<h1><center>Department Project Fair</center></h1>
			</div>
			<div id = "headermenu">
				<a href="home.php" id="home">Home</a>
				<a href="agenda.php" id="agenda">Agenda</a>
				<a href="notice.php" id="notice">Notice</a>
				<a href="about.php" id="about">About</a>
				<a href="contact.php" id="contact">Contact</a>
			</div>
		</header>

		<div id = "containerr">
			<aside>
				<a  href="login.php"><button class="btn btn-success col-sm-4">Log In</button></a>
				<a  href="signup.php"><button class="btn btn-warning col-sm-4">Sign Up</button></a>
			</aside>
			<div id="content">
				<div id="demo" class="carousel slide" data-ride="carousel">

				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="Images/Pic2.jpg" alt="photo1" width="100%" height="450px">
					</div>
					<div class="carousel-item">
						<img src="Images/Pic1.jpg" alt="photo2"  width="100%" height="450px">
					</div>
					<div class="carousel-item">
						<img src="Images/Pic3.jpg" alt="photo3"  width="100%" height="450px">
					</div>
				</div>
  
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>

			</div>
		</div>

		<div id = "footer">
			<center>
				<p>Copyright by Rafika Risha and Adnan Mission.2019</p>		
			</center>
		</div>
	</div>

</body>
</html>

