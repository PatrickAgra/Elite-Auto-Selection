<?php 
session_start();

require_once('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<head>
    <title>Admin</title>
</head>

<body>
<header>
        <div class="navbar">
            <a href="homepage.php"><img src="./images/logo.png" class="logo"></a>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="admin_products.php">Add Products</a></li>
                <li><a href="shoppagina.php">Assortiment</a></li>
                <li><a href="klantgegevens.php">Klanten</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container-login">
               <h1>Hallo, <?php echo ucfirst($_SESSION['voornaam']);?></h1>
                <br>
                <br>
                <h2>Hier zijn jouw gegevens:</h2>
                <br>
                <h3> Gebruikersnaam: <?php echo $_SESSION['email'];?> <h3>
                <br>
                <h3> Naam: <?php echo $_SESSION['voornaam'];?> <h3>
                <br>
                <br>
                <br>
                <a class="hometext" href="admin_products.php">Artikelen toevoegen<a>
                <br>
                <br>
                <a class="hometext" href="">Artikelen wijzigen<a>
                <br>
                <br>
                <a class="hometext" href="klantgegevens.php">Klanten overzicht bekijken<a>
                <br>
                <br>
                <br>
                <a class="hometext" href="registeradmin.php">Medewerkers toevoegen<a>
                <br>
                <br>
                <a class="hometext" href="">Medewerkers gegevens wijzigen<a>
                <br>
                <br>
        </div>

        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="adminlogout.php?logout=true" style="color:white" class="btn">Uitloggen</a>
                </div>
                <div class="col">
                    <a href="#" style="color:white" class="btn">Wachtwoord veranderen?</a>
                </div>
            </div>
        </div>
        
    </main>

    <?php include 'components/footer.php'; ?>

</body>

</html>
