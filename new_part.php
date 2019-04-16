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
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Evaluation</title>
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
				<a href="new-add.php"><button class="btn btn-info col-sm-4">Evaluation</button></a>
				<a href="evaluation.php"><button class="btn btn-success col-sm-4">Result</button></a>
				<a href="login.php"><button class="btn btn-warning col-sm-4">Log out</button></a>
			</aside>	

		<div id="content">

		<form action="new_part.php" method="POST">
			<label> Current Event</label>
			<input type="number" name="event_id">
			<input type="submit" class="btn btn-success" name="Submit">
		</form> 
		<?php
		include_once("crud.php");
		$crud = new crud();

		if(isset($_POST['Submit']))
		{
			$event_id = $_POST['event_id'];
			$query = "SELECT event_id FROM event ORDER BY event_id DESC LIMIT 1";
			$result = $crud->getData($query);
		?>
			<form method="POST" action="new_part.php">
			<table border="1">
			<th> Event ID </th>
			<th> Apply </th>
		<?php 
			foreach ($result as $key => $res) 
			{	
				echo "<tr>";
				echo "<td>".$res['event_id']."</td>";
				echo "<td><a href='media.php?event_id=$res[event_id]'>Apply</a></td>";	
			echo "</tr>";
			}	
			echo "</table>";	
		}
		?>
		</form>
		
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