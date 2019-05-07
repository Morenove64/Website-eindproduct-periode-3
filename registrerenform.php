<!DOCTYPE html>
<html lang="nl">
<head>
	<title> Registreren</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
		<link rel="icon" href="Images/logomobile2.png">
		<link rel="stylesheet" type="text/css" href="registreren.css">
		<link rel="stylesheet" type="text/css" href="Bootstrap.css">
</head>

	<body class="registrerenb">
<?php
include 'navigatie.php';
?>
	<div class="container registform">
			<h2>Registreren</h2>
		<form action="registreren.php" method="post"">
			<div class="form-group">
			<input type="klantnummer" class="form-control" id="klantnummer" placeholder="Klantnummer wordt automatisch aangemaakt" name="klantnummer" disabled>
				<label for="voornaam">Voornaam: *</label></br>
				<input type="voornaam" class="form-control" id="voornaam" placeholder="Voornaam" name="voornaam" required>
			</div>
			<div class="form-group">
				<label for="achternaam">Achternaam: *</label></br>
				<input type="achternaam" class="form-control" id="achternaam" placeholder="Achternaam" name="achternaam" required>
			</div>
			<div class="form-group">
				<label for="email">Email: *</label></br>
				<input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
			</div>
			<div class="form-group">
				<label for="email">Telefoon:</label></br>
				<input type="telefoon" class="form-control" id="telefoon" placeholder="Telefoon" name="telefoon">
			</div>
			<div class="form-group">
				<label for="achternaam">Adres: *</label></br>
				<input type="adres" class="form-control" id="adres" placeholder="Adres" name="adres" required>
			</div>
			<div class="form-group">
				<label for="achternaam">Postcode: *</label></br>
				<input type="postcode" class="form-control" id="postcode" placeholder="Postcode" name="postcode" required>
			</div>
			<div class="form-group">
				<label for="achternaam">Woonplaats: *</label></br>
				<input type="woonplaats" class="form-control" id="woonplaats" placeholder="Woonplaats" name="woonplaats" required>
			</div>
			<div class="form-group">
				<label for="gebdatum">Geboortedatum: *</label></br>
				<input type="date" class="form-control" id="gebdatum" placeholder="dd-mm-jj" name="gebdatum" required>
			</div>
			<div class="form-group">
				<label for="wachtwoord">Wachtwoord: *</label></br>
				<input type="password" class="form-control" id="wachtwoord1" placeholder="Wachtwoord" name="wachtwoord1" required>
			</div>
			<div class="form-group">
				<label for="wachtwoord">Herhaal wachtwoord: *</label></br>
				<input type="password" class="form-control" id="wachtwoord2" placeholder="Herhaal wachtwoord" name="wachtwoord2" required>
			</div>
			
			</br><button type="submit"  class="btn btn-outline-primary button" name="registreren">Registreren</button>
		</form>
	</div>
	
	</body>
</html>