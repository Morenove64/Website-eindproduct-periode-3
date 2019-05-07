<?php
session_start();
require 'beheerderlogincontrole.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vraag 10</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<link rel="stylesheet" type="text/css" href="Bootstrap.css">
</head>

	<body class="vraag10">
		<?php
		include 'navigatiebeheerder.php';
		try
		{
			$db = new PDO("mysql:host=localhost;dbname=naughtydogp3", "root", "");
			$query = $db->prepare("SELECT trailer.naam,platform,views, likes, dislikes, comments FROM trailer");
			$query->execute();
			$result = $query->fetchALL (PDO::FETCH_ASSOC);
			echo '<table class="table table-dark table-striped table-hover table-bordered">';
				echo '<thead>';
					echo '<td>Naam Trailer:</td>';
					echo '<td>Platform:</td>';
					echo '<td>Aanatl Views:</td>';
					echo '<td>Aantal Likes:</td>';
					echo '<td>Aantal Dislikes:</td>';
					echo '<td>Aantal Comments:</td>';
				echo '</thead>';
				foreach($result as $data)
				{
					echo "<tr>";
						echo "<td>" . $data["naam"] . "</td>";
						echo "<td>" . $data["platform"] . "</td>";
						echo "<td>" . $data["views"] . "</td>";
						echo "<td>" . $data["likes"] . "</td>";
						echo "<td>" . $data["dislikes"] . "</td>";
						echo "<td>" . $data["comments"] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
		}
				
			catch(PDOException $e) 
			{
				die("error: " . $e->getMessage());
			}
		?>
	</body>
</html>