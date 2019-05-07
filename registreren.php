<!DOCTYPE html>
<html lang="nl">
	<head>
	<title> Naughty dog</title>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
		<link rel="icon" href="Images/logomobile2.png">
		<link rel="stylesheet" type="text/css" href="Bootstrap.css">
	</head>
	
	<body>
		<?php
		include 'navigatie.php';
		if(isset($_POST["registreren"]))
		{
			try
			{
				if($_POST['wachtwoord1']==$_POST['wachtwoord2'])
				{
					$db = new PDO("mysql:host=localhost;dbname=naughtydogp3", "root", "");
					$ww=password_hash($_POST['wachtwoord1'], PASSWORD_DEFAULT);
					$sQuery = ("INSERT INTO klant(voornaam, achternaam, email, telefoon, adres, postcode, woonplaats, gebdatum, wachtwoord) VALUES (:voornaam, :achternaam, :email, :telefoon, :adres, :postcode, :woonplaats, :gebdatum, :wachtwoord)");
					$query = $db->prepare($sQuery);
					$query->bindValue(':voornaam', $_POST['voornaam']);
					$query->bindValue(':achternaam', $_POST['achternaam']);
					$query->bindValue(':email', $_POST['email']);
					$query->bindValue(':telefoon', $_POST['telefoon']);
					$query->bindValue(':adres', $_POST['adres']);
					$query->bindValue(':postcode', $_POST['postcode']);
					$query->bindValue(':woonplaats', $_POST['woonplaats']);
					$query->bindValue(':gebdatum', $_POST['gebdatum']);
					$query->bindValue(':wachtwoord', $ww);
					$query->execute();
					
					echo "<h1> Bedankt voor het registreren</h1>";
					echo "Uw Klantnummer is: " .$db->lastInsertId();
				}
				else
				{
					echo "Wachtwoorden zijn niet gelijk";
				}
			}
			catch(PDOException $e) 
			{
				die("error: " . $e->getMessage());
			}
		}
		else
		{
			echo "het werkt niet";
		}
		

		?>
	</body>
</html>