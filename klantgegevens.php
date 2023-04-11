<?php
session_start();

require_once('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<head>
    <title>Register new worker</title>
    <style>
    .color {
        color: black;
    }


    </style>
</head>

<body>
<header>
        <div class="navbar">
            <a href="homepage.php"><img src="images/logo.png" class="logo"></a>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="admin_products.php">Add Products</a></li>
                <li><a href="shoppagina.php">Assortment</a></li>
                <li><a href="klantgegevens.php">Klanten</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </div>
    </header>
        <main>
        <div class="container-login">
	<div class="row h-100 mt-5 justify-content-center align-items-center">
		<div class="col-md-5 mt-3 pt-2 pb-5 align-self-center border bg-light">
			<h1 class="mx-auto w-25" >Gegevens wijzigen</h1>
			<?php 
            if (isset($errors) && count($errors) > 0) {
                foreach ($errors as $error_msg) {
                    echo '<div class="error">' . $error_msg . '</div>';
                }
            }
                
            if (isset($success)) {
                echo '<div class="success">' . $success . '</div>';
            }
			?>
			
				
			</form>
		</div>
	</div>

        <div>
            <p>Door het gebrek aan tijd is het niet gelukt het optijd af te maken.. helaas..</p>
    		<table id='id' border="3" cellspacing="4">
    			<thead>
    				<th>voornaam</th>
    				<th>achternaam</th>
                    <th>email</th>
    				<th>adres</th>
    				<th>postcode</th>
    				<th>woonplaats</th>
                    <th>geboortedatum</th>
    				<th>gebruikersnaam</th>


    				<th></th>
    			</thead>
    			<tbody>
    				<?php
    					include('db_connect.php');
    					$query = mysqli_query($conn, "select * from `klanten`");
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
    						<tr>
    							<td><?php echo $row['voornaam'];  ?></td>
    							<td><?php echo $row['achternaam']; ?></td>
                                <td><?php echo $row['email']; ?></td>
    							<td><?php echo $row['adres']; ?></td>
    							<td><?php echo $row['postcode']; ?></td>
                                <td><?php echo $row['woonplaats']; ?></td>
    							<td><?php echo $row['geboortedatum']; ?></td>
                                <td><?php echo $row['gebruikersnaam']; ?></td>



    							<td>
    								<a href="edit.php?id=<?php echo $row['ID']; ?>">Edit</a>
    								<a href="delete.php?id=<?php echo $row['ID']; ?>">Delete</a>
    							</td>
    						</tr>
    						<?php
                    }
    				?>
    			</tbody>
    		</table>
    	</div>
    <div></div>
    </div>

        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="admin.php" style="color:white" class="btn">Terug naar admin</a>
                </div>
                <div class="col">
                    <a href="#" style="color:white" class="btn">Wachtwoord vergeten?</a>
                </div>
            </div>
        </div>

    </div>
    </main>

    <?php include 'components/footer.php'; ?>
    
</body>

</html>
