<?php
session_start();
?>


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
        <div class="hoofdtekstpositie flex position indexposition hulpposition">
            <a href="index.php">
                <h1>Home</h1>
            </a>

            <h1>Mijn Reis</h1>
            </a>
            <a href="info.php">
                <h1>Informatie</h1>
            </a>
            <a href="hulp.php">
                <h1>Hulp</h1>
            </a>
        </div>
    </div>
</header>