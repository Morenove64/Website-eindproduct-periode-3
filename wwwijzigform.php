<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Wachtwoord wijzigen</title>
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

<body class="loginb">
<?php
include 'navigatielogin.php';
?>
<div class="container">
    <h2>Wachtwoord wijzigen</h2>
    <form action="wwverwerk.php" method="post">
        <div class="form-group">
            <label for="wachtwoord">Huidige wachtwoord: *</label></br>
            <input type="password" class="form-control" id="wwhuidig" placeholder="Huidige wachtwoord" name="wwhuidig" required>
        </div>
        <div class="form-group">
            <label for="password">Nieuwe Wachtwoord: *</label></br>
            <input type="password" class="form-control" id="wachtwoord" placeholder="Nieuwe wachtwoord" name="wachtwoord1" required>
        </div>
        <div class="form-group">
            <label for="password">Nieuwe Wachtwoord herhalen: *</label></br>
            <input type="password" class="form-control" id="wachtwoord" placeholder="Nieuwe wachtwoord" name="wachtwoord2" required>
        </div>
        </br><button type="submit"  class="btn btn-outline-primary button" name="wwwijzig">Wijzigen</button>
    </form>
</div>