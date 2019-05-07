<?php
session_start();
?>
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
try
{
    include'navigatielogin.php';

    if(isset($_POST["wwwijzig"]))
    {
        $db = new PDO("mysql:host=localhost;dbname=naughtydogp3", "root", "");
        $query = $db->prepare("SELECT * FROM klant WHERE idklant = :idklant");
        $query->bindValue('idklant',$_SESSION['idklant']);
        $query->execute();
        $rij = $query->fetch(PDO::FETCH_ASSOC);
        if(password_verify($_POST['wwhuidig'],$rij['wachtwoord']))
        {
            if($_POST['wachtwoord1']==$_POST['wachtwoord2'])
            {
                $db = new PDO("mysql:host=localhost;dbname=naughtydogp3", "root", "");
                $ww=password_hash($_POST['wachtwoord1'], PASSWORD_DEFAULT);
                $query2 = $db->prepare("UPDATE klant SET wachtwoord = :wachtwoord WHERE idklant = :idklant");
                $query2->bindValue(':idklant', $_SESSION['idklant']);
                $query2->bindValue(':wachtwoord', $ww);
                $query2->execute();
                echo "Uw wachtwoord is gewijzigd!";
            }
            else{
                header('Refresh: 3; url=wwwijzigform.php');
                echo "Wachtwoorden zijn niet gelijk.";
            }
        }
        else{
        header('Refresh: 3; url=wwwijzigform.php');
        echo "Huidige wachtwoord is niet correct.";
        }
    }
    else {
        header('location:wwwijzigform.php');
        exit();
    }
}
catch(PDOException $e) {
die("error: " . $e->getMessage());
}
?>
</body>
</html>
