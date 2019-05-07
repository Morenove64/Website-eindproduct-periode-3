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



<div class="container">
    <h2>Welkom Registreer U Hieronder!</h2>

    <input type="text" class="form-control" placeholder="beheernummer wordt automatisch gekozen" disabled><br>

    <form action="registreerverwerkbeheer.php" method="post">
          <div class="form-group">
            <label for="vn">Voornaam</label>
            <input type="text" class="form-control" id="vn" placeholder="Uw Voornaam" name="voornaam" required>
        </div>
        <div class="form-group">
            <label for="an">achternaam</label>
            <input type="text" class="form-control" id="an" placeholder="Uw Achternaam" name="achternaam" required>
        </div>
        <div class="form-group">
            <label for="email">email:</label>
            <input type="email" class="form-control" id="email" placeholder="Uw Emailadres" name="email" required>
        </div>
        <div class="form-group">
            <label for="ww">wachtwoord:</label>
            <input type="password" class="form-control" id="ww" placeholder="Uw Wachtwoord" name="ww" required>
        </div>
        <div class="form-group">
            <label for="hww">Herhaal wachtwoord:</label>
            <input type="password" class="form-control" id="hww" placeholder="Herhaal Wachtwoord" name="hww" required>
        </div>
        <button type="submit" class="btn btn-primary" name="registreerb">Maak Uw Account!</button>
    </form>
</div>

</body>
</html>

<?php