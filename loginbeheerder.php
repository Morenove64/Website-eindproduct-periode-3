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
    <link rel="icon" href="Images/logomobile2.png">
    <link rel="stylesheet" type="text/css" href="Bootstrap.css">
</head>

<body>
<?php
session_start();
include 'navigatie.php';
if(isset($_POST['inloggen']))
{
    try
    {
        $db = new PDO("mysql:host=localhost;dbname=naughtydogp3", "root", "");
        $query = $db->prepare("SELECT * FROM beheerder WHERE idbeheerder = :idbeheerder");
        $query->bindValue(':idbeheerder', $_POST['idbeheerder']);
        $query->execute();
        if($query->rowCount()==1)
        {
            $rij = $query->fetch(PDO::FETCH_ASSOC);
            if(password_verify($_POST['blww'],$rij['wachtwoord']))
            {
                $_SESSION['blogin']= true;
                $_SESSION['idbeheerder']=$rij['idbeheerder'];
                $_SESSION['voornaam']=$rij['voornaam'];
                $_SESSION['achternaam']=$rij['achternaam'];
                header('Refresh: 0; url=bootstrap3.php');
            }
            else
            {
                header('Refresh: 3; url=loginbeheerderform.php');
                echo "Combinatie van beheerderid en wachtwoord is onjuist";
            }
        }
        else
        {
            header('Refresh: 3; url=loginbeheerderform.php');
            echo "Beheerder met dit nummer bestaat niet";
        }
    }
    catch(PDOException $e)
    {
        $sMsg = '<p> 
					Regelnummer: '.$e->getLine().'<br /> 
					Bestand: '.$e->getFile().'<br /> 
					Foutmelding: '.$e->getMessage().' 
				</p>';

        trigger_error($sMsg);
    }
    $db = null;
}
else
{
    header('location:loginbeheerderform.php');
    exit();
}
?>

</body>
</html>