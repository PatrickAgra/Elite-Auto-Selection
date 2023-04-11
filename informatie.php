<?php
session_start();
require_once('db_connect.php');
?>
<html>


<head>
    <title>FAQ</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.scss">
    <script src="./js/script.js" defer></script>
    <script src="./js/scroll.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div class="banner">
    <header>
            <div class="navbar">
                <a href="homepage.php"><img src="./images/logo.png" class="logo"></a>
                <div class="navbar-menu">
                    <ul>
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="shoppagina.php">Assortiment</a></li>
                        <li><a href="informatie.php">Informatie</a></li>
                        <?php
                        if (isset($_SESSION["voornaam"])) {
                            ?>
                            <li><a href="profile.php"><?php echo $_SESSION["voornaam"]; ?></a></li>
                            <li><a href="logout.php">Logout</a></li>
                            <?php
                        } else {
                            ?>
                        <li><a href="register.php">Registreer</a></li>
                        <li><a href="login.php">Login</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </header>
        <main>
            <div class="body-container">
                <div class="content">
                    <h1 class="typing-header">Veel Gestelde Vragen</h1>
                    <p>Bekijk hieronder de veelgestelde vragen.<br> Mocht het antwoord op uw vraag er niet tussen zitten
                        stuur ons dan gerust een mailtje op <a href="Elite@EAC.com"
                            style="color: lightblue;">Elite@EAC.com</a> <br>
                    </p>
                    <div>

                        <a class="buybutton" href="#footer" onclick="scrollToFooter()">
                            <button type="button">
                                <span></span>MEER INFO
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="accordion">
              <ul>
                <li tabindex="1">
                  <div>
                    <a href="productpagina.html">
                      <h2>What types of Cars do we sell?</h2>
                      <p>Click here for our occasions</p>
                    </a>
                  </div>
                </li>
                <li tabindex="2">
                  <div>
                    <a href="#">
                      <h2>What financing options do we offer?</h2>
                      <p>We only support Credit Card, Visa & IDEAL.</p>
                    </a>
                  </div>
                </li>
                <li tabindex="3">
                  <div>
                    <a href="#">
                      <h2>Do we offer delivery services?</h2>
                      <p>We deliver your vehicles right to your door on workdays between monday and friday.</p>
                      <p>Only for $99,99 per occasion.</p>
                    </a>
                  </div>
                </li>
                <li tabindex="4">
                  <div>
                    <a href="#">
                      <h2>How long does a purchase take?</h2>
                      <p>A regular purchase takes an estimated 4 working days to delivery.</p>
                    </a>
                  </div>
                </li>
                <li tabindex="5">
                  <div>
                    <a href="#">
                      <h2>Do we provide warranties?</h2>
                      <p>All cars sold in our showroom are sold with guarantee for up to 2 years.</p>
                      <p>All trade-ins DO NOT have a warrantee.</p>
                    </a>
                  </div>
                </li>
                <li tabindex="6">
                  <div>
                    <a href="#">
                      <h2>Do we accept trade ins?</h2>
                      <p>According to our High Quality standards we only accept vehicles with a build date newer than 2000.</p>
                      <p>Damaged vehicles will not be traded.</p>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
    </div>
        </main>
    </div>
    
    <?php include 'components/footer.php'; ?>

</body>

</html>
