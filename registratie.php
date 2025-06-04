<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="loginpage">
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
                        <div class="dropdown">
                            <button class="dropbtn"><h2>Inloggen</h2>
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="registratie.php"><h2>Account aanmaken</h2></a>
                                <a href="login.php"><h2>Inloggen</h2></a>
                                <a href="adminlogin.php"><h2>Admin</h2></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hoofdteksten flex">
            <ul class="pijlteruglogin flex position">
                <a href="index.php">
                    <h1>←</h>
                </a>
            </ul>
            <div class="logintekst flex position">
                <h5>Maak een account aan</h5>
            </div>
        </div>
    </header>
    <main>
        <div class="loginachtergrond flex"></div>
        <div class="loginborder flex position"></div>
        <div class="logintekstborder flex">
            <div class="volgordeborder flex">
                <h5>Registreren</h5>
                <div class="verticalpadding"></div>
                <input type="text" id="gebruikersnaam" name="gebruikersnaam" placeholder="Gebruikersnaam" class="noborder">
                <div class="verticalpadding"></div>
                <input type="text" id="password" name="password" placeholder="Password" class="noborder">
                <div class="verticalpadding"></div>
                <input type="text" id="confirmpassword" name="confirmpassword" placeholder="Confirm password" class="noborder">
            </div>
        </div>
        <div class="loginenadminlogin flex">
            <div class="loginknop2">
                <button class="loginknop">Aanmaken</button class="loginknop">
            </div>
        </div>
    </main>

    <footer>

    </footer>
</body>

</html>