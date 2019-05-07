<?php
    session_start();
    require 'loginklantcontrole.php';
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

<body class="vraag1">
        <?php
        include 'navigatielogin.php';
            try {
                $db = new PDO("mysql:host=localhost;dbname=naughtydogp3", "root", "");
                $query = ("SELECT product.naam, aantal, platform, prijs, genre, verkoopdatum FROM product INNER JOIN verkoop ON product.idproduct = verkoop.idproduct WHERE idklant=:idklant");
                $query = $db->prepare($query);
                $query->bindValue(':idklant', $_SESSION['idklant']);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_ASSOC);

                echo '<table class="table table-dark table-striped table-hover table-bordered">';
                echo '<thead>';
                echo '<td>Product naam:</td>';
                echo '<td>Genre:</td>';
                echo '<td>Platform:</td>';
                echo '<td>Prijs:</td>';
                echo '<td>Aantal:</td>';
                echo '<td>Datum:</td>';

                echo '</thead>';

                foreach ($result as $data) {
                    ?>
                    <form method="post" action="bestellingen.php">
                        <tr>
                            <td><?php echo($data['naam']); ?><input type="hidden" name="naam" value="<?php echo($data['naam']); ?>"></td>
                            <td><?php echo($data['genre']); ?><input type="hidden" name="genre" value="<?php echo($data['genre']); ?>"></td>
                            <td><?php echo($data['platform']); ?><input type="hidden" name="platform" value="<?php echo($data['platform']); ?>"></td>
                            <td><?php echo($data['prijs']); ?><input type="hidden" name="prijs" value="<?php echo($data['prijs']); ?>"></td>
                            <td><?php echo($data['aantal']); ?><input type="hidden" name="aantal" value="<?php echo($data['aantal']); ?>"></td>
                            <td><?php echo($data['verkoopdatum']); ?><input type="hidden" name="verkoopdatum" value="<?php echo($data['verkoopdatum']); ?>"></td>

                        </tr>
                    </form>
                    <?php
                }
                ?>
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
</body>
</html>