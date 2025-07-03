<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<?php
include('./dbcalls/conn.php')
    ?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="flex">
        <div class="maatschappijinfo flex">
            <img src="assets/img/ETAirways.png" alt="ETplaatje" height="80" width="80">
            <div class="maatschappijtekst">
                <h1>ET Airways</h1>
            </div>
            <div class="taalinloggen flex position">
                <div class="taal flex">
                    <img src="assets/img/nlvlag.png" alt="nl" width="27" height="20">
                    <div class="nltekst">
                        <h2>Netherlands - nl</h2>
                    </div>
                </div>
                <div class="inloggen flex">
                    <div class="inlogplaatje position">
                        <img src="assets/img/inlog.png" alt="inlog" width="32" height="32">
                    </div>
                    <div class="nltekst">
                        <?php
                        if (session_status() === PHP_SESSION_NONE) {
                            session_start();
                        }
                        ?>
                        <div class="dropdown">
                            <?php if (isset($_SESSION['username']) || isset($_SESSION['admin'])): ?>
                                <button class="dropbtn">
                                    <h2>Uitloggen</h2>
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="logout.php">
                                        <h2>Uitloggen</h2>
                                    </a>
                                </div>
                            <?php else: ?>
                                <button class="dropbtn">
                                    <h2>Inloggen</h2>
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="registratie.php">
                                        <h2>Account aanmaken</h2>
                                    </a>
                                    <a href="login.php">
                                        <h2>Inloggen</h2>
                                    </a>
                                    <a href="adminlogin.php">
                                        <h2>Admin</h2>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hoofdteksten flex">
            <div class="hoofdtekstpositie flex position">
                <a href="index.php">
                    <h1>Home</h1>
                </a>
                <a href="reisinfo.php">
                    <h1>Mijn Reis</h1>
                <a href="info.php">
                    <h1>Informatie</h1>
                </a>
                <a href="hulp.php">
                    <h1>Hulp</h1>
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="infoachtergrond flex">
            <div class="reisinformatieborder flex">
                <?php

                include('./dbcalls/read.php');

                foreach ($result as $value) {
                    echo '<div class="dealsitems-box flex">';

                    echo '<div class="container-img-php flex kleinpaddingboven kleinverschuivingrechts">';
                    echo '<br> <img alt=" ' . $value['stad'] . '" src=' . $value['img'] . "></img>";
                    echo '</div>';
                    echo '<div class="container-img-php flex kleinpaddingboven verschuivingrechts">';
                    echo '<br> <h1></h1>' . $value['dealbestemming'];
                    echo '</div>';

                    echo '<div class="container-img-php column flex onderflex kleinmarginterug mediumpaddingonder verschuivingrechts">';
                    echo '<br> <h1></h1>(' . $value['stad'] . ')';
                    echo '</div>';

                    echo '<div class="container-prijs prijsnaareindebox flex">';
                    echo '<div class="blok-prijs">' . 'vanaf EUR ' . $value['prijs'];
                    echo '</div>';
                    echo '</div>';

                    echo '<div class="boekenknop flex">';
                    echo '<h2>Boeken</h2>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </main>

    <footer>

    </footer>
</body>

</html>