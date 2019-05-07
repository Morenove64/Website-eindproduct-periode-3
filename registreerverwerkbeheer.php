<?php
session_start();
if(isset($_POST["registreerb"])) {
    try {
        if ($_POST['ww'] == $_POST['hww']) {
            $db = new PDO("mysql:host=localhost;dbname=mediamarkt3", "root", "");
            $ww = password_hash($_POST['ww'], PASSWORD_DEFAULT);

            $sQuery = ("INSERT INTO beheerder (voornaam, achternaam, email, wachtwoord, beheerder) 
            values (:voornaam, :achternaam, :email, :wachtwoord, :beheerder)");
            $query = $db->prepare($sQuery);
            $query->bindvalue(':voornaam', $_POST['voornaam']);
            $query->bindvalue(':achternaam', $_POST['achternaam']);
            $query->bindvalue(':email', $_POST['email']);
            $query->bindvalue(':wachtwoord', $ww);
            $query->bindvalue(':beheerder', $beheerder);
            $query->execute();


            echo "Uw nummer is" . $db->LastInsertId();
        } else {
            echo "ongelijk wachtwoord ";
        }
        header('Refresh: 3; url=inlogverwerkbeheer.php');
    } catch (PDOException $e) {
        die ("error!: " . $e->getMessage());
    }
}
else
{
    echo "doet het niet";
}
?>