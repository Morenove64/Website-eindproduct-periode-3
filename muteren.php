<?php
session_start();
require 'beheerderlogincontrole.php'
?>
<!DOCTYPE html>
<div lang="nl">
<head>
    <title>Naughty Dog</title>
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
<body class="body1">
<?php
include 'navigatiebeheerder.php';
    try
    {
        if(isset($_POST["Wijzig"]))
        {
            $db = new PDO("mysql:host=localhost;dbname=naughtydogp3", "root", "");
            $query = $db->prepare("UPDATE product SET naam = :naam, genre = :genre, releasejaar = :releasejaar, platform = :platform, prijs = :prijs WHERE idproduct = :idproduct");
            $query->bindValue(':idproduct', $_POST['idproduct']);
            $query->bindValue(':naam', $_POST['naam']);
            $query->bindValue(':genre', $_POST['genre']);
            $query->bindValue(':releasejaar', $_POST['releasejaar']);
            $query->bindValue(':platform', $_POST['platform']);
            $query->bindValue(':prijs', $_POST['prijs']);
            $query->execute();
        }
    if(isset($_POST["Wis"]))
    {
        $db = new PDO("mysql:host=localhost;dbname=naughtydogp3", "root", "");
        $query = $db->prepare("DELETE FROM product WHERE idproduct = :idproduct");
        $query->bindValue(':idproduct', $_POST['idproduct']);
        $query->execute();
    }
    if(isset($_POST['Nieuw']))
    {
        $db = new PDO("mysql:host=localhost;dbname=naughtydogp3", "root", "");
        $query = $db->prepare("INSERT INTO product (naam, genre, releasejaar, platform, prijs) VALUES (:naam, :genre, :releasejaar, :platform, :prijs)");
        $query->bindValue(':naam', $_POST['naam']);
        $query->bindValue(':genre', $_POST['genre']);
        $query->bindValue(':releasejaar', $_POST['releasejaar']);
        $query->bindValue(':platform', $_POST['platform']);
        $query->bindValue(':prijs', $_POST['prijs']);
        $query->execute();
    }
    $db = new PDO("mysql:host=localhost;dbname=naughtydogp3", "root", "");
    $query = $db->prepare("SELECT * FROM product");
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_ASSOC);
        echo '<table class="table table-dark table-striped table-hover table-bordered">';
        echo '<thead>';
        echo '<td>IdProduct:</td>';
        echo '<td>Naam:</td>';
        echo '<td>Genre:</td>';
        echo '<td>Releasejaar:</td>';
        echo '<td>Platform:</td>';
        echo '<td>Prijs:</td>';
        echo '<td>Wijzigen:</td>';
        echo '<td>Wissen:</td>';
        echo '</thead>';
        foreach($result as $data)
        {
        ?>
           <form method="post" action="muteren.php">
               <tr>
                   <td><?php echo ($data['idproduct']); ?><input type="hidden" name="idproduct" value="<?php
                 echo($data['idproduct']); ?>"></td>
                <td><input type="text" name="naam" value="<?php echo ($data['naam']); ?>"></td>
                <td><input type="text" name="genre" value="<?php echo ($data['genre']); ?>"></td>
                <td><input type="text" name="releasejaar" value="<?php echo ($data['releasejaar']); ?>"></td>
                <td><input type="text" name="platform" value="<?php echo ($data['platform']); ?>"></td>
                <td><input type="text" name="prijs" value="<?php echo ($data['prijs']); ?>"></td>
                <td><input type="submit" name="Wijzig" value="Wijzig"></td>
                <td><input type="submit" name="Wis" value="Wis" onClick="return confirm('<?php echo ($data['naam']);
                ?> wordt verwijderd. Weet u het zeker ?')"</td>
                </tr>
           </form>
        <?php
        }
        ?>

            <form method="post" action="muteren.php">
            <tr>
                <td>nvt</td>
                <td><input type="text" name="naam" placeholder="Naam product:" value="" required></td>
                <td><input type="text" name="genre" placeholder="Genre:" value="" required></td>
                <td><input type="text" name="releasejaar" placeholder="Releasejaar:" value="" required></td>
                <td><input type="text" name="platform" placeholder="Platform:" value="" required></td>
                <td><input type="text" name="prijs" placeholder="Prijs:" value="" required></td>
                <td colspan = "2"><input type="submit" name="Nieuw" value="Nieuw"></td>
            </tr>
            </form>
        </table></div>
        <br>
        <br/>
    <?php

    }
        catch(PDOException $e)
        {
            die("error: " . $e->getMessage());
        }
        ?>
</div>
</div>
</body>
</html>
