<?php
session_start();
if(!$_SESSION['email'])
{
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
	<!-- <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script> -->
	<title>Teacher</title>
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

		<div id = "container">
			<aside>
				<a href="teacher_tech.php"><button class="btn btn-success col-sm-4">Languages</button></a> 
				<a href="proList_teacher.php"><button class="btn btn-warning col-sm-4">Previous Project List</button></a>
				<a href="new-add.php"><button class="btn btn-success col-sm-4">Evaluation</button></a>
				<a href="evaluation.php"><button class="btn btn-info col-sm-4">Result</button></a>
				<a href="logout.php"><button class="btn btn-warning col-sm-4">Log out</button></a>
			</aside>
		<div id="content">
			
		<?php	
			echo "<h4><center>$_SESSION[name]</center></h4>"; 
			echo "<h4><center>$_SESSION[email]</center></h4>";
			echo "<h4><center>$_SESSION[phone]</center></h4>";
		?>

		</div>

		<div id = "footer">
			<center>
				<p>Copyright by Rafika Risha and Adnan Mission.2019</p>		
			</center>
		</div>
	</div>

</body>
</html>